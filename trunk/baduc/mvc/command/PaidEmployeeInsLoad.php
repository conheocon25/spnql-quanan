<?php		
	namespace MVC\Command;	
	class PaidEmployeeInsLoad extends Command{
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
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------						
			$mEmployee = new \MVC\Mapper\Employee();
			$mPS = new \MVC\Mapper\PaidEmployee();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------						
			$Employee = $mEmployee->find($IdEmployee);
			$PSs = $mPS->findBy(array($IdEmployee));
			$Title = mb_strtoupper("CHI PHÍ / ".$Employee->getName()." / THÊM", 'UTF8');
						
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$request->setProperty('Title', $Title);
			$request->setProperty('URLHeader', $Employee->getURLPaid() );
			$request->setObject('Employee', $Employee);
			$request->setObject('PaidEmployees1', $PSs);
		}
	}
?>