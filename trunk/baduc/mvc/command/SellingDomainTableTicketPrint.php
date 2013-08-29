<?php
	namespace MVC\Command;
	class SellingDomainTableTicketPrint extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------						
			$Session = \MVC\Base\SessionRegistry::instance();
									
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$IdDomain = $request->getProperty("IdDomain");
			$IdTable = $request->getProperty("IdTable");
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			$mDomain = new \MVC\Mapper\Domain();
			$mTable = new \MVC\Mapper\Table();
			$mTicket = new \MVC\Mapper\Ticket();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$Table = $mTable->find($IdTable);
			$Domain = $mDomain->find($IdDomain);
			$TicketAll = $mTicket->findBy( array($IdTable) );
						
			$Title = mb_strtoupper("NHẬT KÍ / ".$Domain->getName()." / ".$Table->getName()." / PHIẾU GHI", 'UTF8');
						
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$request->setObject("Table", $Table);
			$request->setObject("Domain", $Domain);
			$request->setObject("TicketAll", $TicketAll);
			
			$request->setProperty('Title', $Title);			
		}
	}
?>