<?php
	namespace MVC\Command;
	class SellingDomainTableTicketT2SExe extends Command{
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------						
			$Session = \MVC\Base\SessionRegistry::instance();
									
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------			
			$IdTable = $request->getProperty("IdTable");
						
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mTable = new \MVC\Mapper\Table();
			$mTicket = new \MVC\Mapper\Ticket();
			$mSD = new \MVC\Mapper\SessionDetail();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$Table = $mTable->find($IdTable);
			$Session = $Table->getSessionActive();
			$SDAll = $Session->getDetails();
			$TicketAll = $Table->getTickets();
			
			while ($TicketAll->valid()){
				$Ticket = $TicketAll->current();
				
				$SDAll->rewind();
				$flag = false;				
				while ( $SDAll->valid() && $flag==false ){
					$SD = $SDAll->current();
					if ( $SD->getIdCourse() == $Ticket->getIdCourse() ){
						$Count  = $SD->getCount() + $Ticket->getCount();
						$SD->setCount($Count);
						$mSD->update($SD);
						$flag = true;
					}
					$SDAll->next();
				}
				if ($flag == false){
					$SD = new \MVC\Domain\SessionDetail(
						null,
						$Session->getId(), 
						$Ticket->getIdCourse(), 
						$Ticket->getCount(),
						$Ticket->getCourse()->getPrice1()
					);				
					$mSD->insert($SD);
				}				
				$TicketAll->next();
			}
			$mTicket->deleteBy(array($IdTable));
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
							
			return self::statuses('CMD_OK');
		}
	}
?>