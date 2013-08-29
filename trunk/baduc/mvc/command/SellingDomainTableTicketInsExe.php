<?php
	namespace MVC\Command;
	class SellingDomainTableTicketInsExe extends Command{
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------						
			$Session_Sys = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$IdTable = $request->getProperty("IdTable");
			$IdCourse = $request->getProperty("IdCourse");
			$Count = $request->getProperty("Count");			
			$Delta = $request->getProperty("Delta");
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			$mTable = new \MVC\Mapper\Table();
			$mCategory = new \MVC\Mapper\Category();
			$mCourse = new \MVC\Mapper\Course();
			$mTicket = new \MVC\Mapper\Ticket();
									
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------			
			$Table = $mTable->find($IdTable);
			$Course = $mCourse->find($IdCourse);
			
			$flag = false;
			if (!isset($Count)){
				$flag = true;
				$Count = 1;				
			}
			
			$IdTicket = $mTicket->check(array($IdTable, $IdCourse));
			if (!isset($IdTicket) || $IdTicket==null){
				$Ticket = new \MVC\Domain\Ticket(
					null,					//Id
					$IdTable,				//IdTable
					$IdCourse,				//IdCourse
					$Count,					//IdCustomer						
					""						//Note
				);
				$mTicket->insert($Ticket);
			}else{
				$Ticket = $mTicket->find($IdTicket);
				
				//Thủ thuật dồn 2 lệnh cập nhật lại làm 1
				if ($Count<1){
					$Ticket->setCount(1);
				}else{
					if ($flag==true){
						$Count = $Ticket->getCount() + $Delta;
					}
					$Ticket->setCount($Count);
				}								
				$mTicket->update($Ticket);
			}
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------												
			$request->setObject("Ticket", $Ticket);
		}
	}
?>
