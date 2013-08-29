<?php		
	namespace MVC\Command;	
	class PaidOtherListUpdLoad extends Command{
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$IdPaidOther = $request->getProperty("IdPaidOther");
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------						
			$mPO = new \MVC\Mapper\PaidOther();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------						
			$PO = $mPO->find($IdPaidOther);
			$POs = $mPO->findAll();
			$Title = "CHI PHÍ / ".$PO->getDatePrint()." / CẬP NHẬT";
						
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$request->setProperty('Title', $Title);
			$request->setProperty('URLHeader', "/paid#other");
			$request->setObject('PaidOther', $PO);
			$request->setObject('PaidOthers1', $POs);
		}
	}
?>