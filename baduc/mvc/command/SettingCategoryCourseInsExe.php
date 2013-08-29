<?php
	namespace MVC\Command;
	class SettingCategoryCourseInsExe extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$IdCategory = $request->getProperty('IdCategory');
			$Name = $request->getProperty('Name');
			$ShortName = $request->getProperty('ShortName');
			$Unit = $request->getProperty('Unit');
			$Price1 = $request->getProperty('Price1');
			$Price2 = $request->getProperty('Price2');
			$Price3 = $request->getProperty('Price3');
			$Price4 = $request->getProperty('Price4');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			
			$mCourse = new \MVC\Mapper\Course();								
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------										
			$Course = new \MVC\Domain\Course(
					null,
					$IdCategory,
					$Name,
					$ShortName,
					$Unit,
					$Price1==null?0:$Price1,
					$Price2==null?0:$Price2,
					$Price3==null?0:$Price3,
					$Price4==null?0:$Price4,
					""
			);
			$mCourse->Insert($Course);
									
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			return self::statuses('CMD_OK');
			
		}
	}
?>
