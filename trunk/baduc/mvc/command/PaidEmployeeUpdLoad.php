<?php		
	namespace MVC\Command;	
	class PaidEmployeeUpdLoad extends Command{
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$IdEmployee = $request->getProperty("IdEmployee");
			$IdPaid = $request->getProperty("IdPaid");
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------					
			$mPE = new \MVC\Mapper\PaidEmployee();
			$mEmployee = new \MVC\Mapper\Employee();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------						
			$Employee = $mEmployee->find($IdEmployee);
			$PE = $mPE->find($IdPaid);
			
			$Title = mb_strtoupper("CHI PHÍ / ".$Employee->getName()."/".$PE->getDatePrint()." / CẬP NHẬT", 'UTF8');
						
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$request->setObject('PE', $PE);
			$request->setProperty('Title', $Title);
			$request->setProperty('URLHeader', $Employee->getURLPaid());						
		}
	}
?>