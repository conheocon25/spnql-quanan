<?php		
	namespace MVC\Command;	
	class Paid extends Command {
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			$mTerm = new \MVC\Mapper\Term();			
			$mPaidGeneral = new \MVC\Mapper\PaidGeneral();
									
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------						
			$Terms = $mTerm->findAll();
			$Terms1 = $mTerm->findAll();
						
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------						
			$request->setObject('Terms', $Terms);
			$request->setObject('Terms1', $Terms1);
			
			$request->setProperty('URLHeader', "/app");
		}
	}
?>