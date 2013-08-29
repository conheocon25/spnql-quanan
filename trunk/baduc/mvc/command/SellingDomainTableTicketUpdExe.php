<?php
	namespace MVC\Command;
	class SellingDomainTableTicketUpdExe extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------						
			$Session = \MVC\Base\SessionRegistry::instance();
									
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------			
			$IdTicket = $request->getProperty("IdTicket");
			$Count = $request->getProperty("Count");
			$Note = $request->getProperty("Note");
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mTicket = new \MVC\Mapper\Ticket();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------			
			$Ticket = $mTicket->find( $IdTicket );
			$Ticket->setCount($Count);
			$Ticket->setNote($Note);
			$mTicket->update($Ticket);
						
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			return self::statuses('CMD_OK');
		}
	}
?>