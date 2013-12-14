<?php
	namespace MVC\Command;	
	class NotifyCourse extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");	
			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------						
			$Session = \MVC\Base\SessionRegistry::instance();

			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
						
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			$mCL = new \MVC\Mapper\CourseLog();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------			
			$CLAll 		= $mCL->findBy(array());			
			$CL 		= $CLAll->current();
			$mCL->delete(array($CL->getId()));
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$json = array(
				'result' 	=> "OK",
				'id' 		=> $CL->getId(),
				'title' 	=> $CL->getTable()->getDomain()->getName()."/".$CL->getTable()->getName(),
				'message'	=> $CL->getCourse()->getName().' đã quá thời gian chuẩn bị'
			);
			echo json_encode($json);
		}
	}
?>