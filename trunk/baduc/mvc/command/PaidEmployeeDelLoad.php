<?php		
	namespace MVC\Command;	
	class PaidEmployeeDelLoad extends Command{
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$IdPaid = $request->getProperty("IdPaid");
			$IdEmployee = $request->getProperty("IdEmployee");
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			$mEmployee = new \MVC\Mapper\Employee();
			$mPE = new \MVC\Mapper\PaidEmployee();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------						
			$Employee = $mEmployee->find($IdEmployee);
			$PE = $mPE->find($IdPaid);
			$PEAll = $mPE->findBy(array($IdEmployee));
			$Title = mb_strtoupper("CHI PHÍ / ".$Employee->getName()." / ".$PE->getDatePrint()." / XÓA", 'UTF8');
						
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$request->setProperty('Title', $Title);
			$request->setProperty('URLHeader', $Employee->getURLPaid());
			$request->setObject('PE', $PE);			
			
		}
	}
?>