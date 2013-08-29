<?php		
	namespace MVC\Command;	
	class ReportDetailType6 extends Command{
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------
			$Session = \MVC\Base\SessionRegistry::instance();
														
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------			
			$IdTrack = $request->getProperty('IdTrack');
						
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mTracking = new \MVC\Mapper\Tracking();
			$mSD = new \MVC\Mapper\SessionDetail();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$Tracking = $mTracking->find($IdTrack);			
			$SDs = $mSD->trackByCourse( array($Tracking->getDateStart(), $Tracking->getDateEnd()) );
			$Chart = array();
			
			while ($SDs->valid()){
				$Data = array();
																	
				$SD = $SDs->current();
				$IdCourse = $SD->getIdCourse();
				$Date = $Tracking->getDateStart();
				$EndDate = $Tracking->getDateEnd();
																																														
				$Data[] = $SD->getCourse()->getName();				
				$Data[] = $SD->getCount();
				$Data[] = 0;
				$Data[] = $SD->getCount() - 0;
				$Chart[] = $Data;
				$SDs->next();
			}
									
			$Title1 = "BÁO CÁO / CHI TIẾT / TỒN KHO / ".$Tracking->getDateStartPrint()." ĐẾN ".$Tracking->getDateEndPrint();
			$Title2 = "BÁO CÁO / BIỀU ĐỒ / TỒN KHO / ".$Tracking->getDateStartPrint()." ĐẾN ".$Tracking->getDateEndPrint();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$request->setProperty('Title1', $Title1);
			$request->setProperty('Title2', $Title2);
			$request->setObject('Tracking', $Tracking);
			$request->setObject('DataChart', $Chart);
			$request->setProperty('URLHeader', $Tracking->getURLView() );
		}
	}
?>