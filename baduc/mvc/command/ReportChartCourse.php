<?php		
	namespace MVC\Command;	
	class ReportChartCourse extends Command {
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------
			$Session = \MVC\Base\SessionRegistry::instance();
														
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------			
			$IdTrack = $request->getProperty("IdTrack");
									
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
			while ($SDs->valid()){
				$Data = array();
				$D1 = array();
				$D2 = array();
													
				$SD = $SDs->current();
				$IdCourse = $SD->getIdCourse();
				$Date = $Tracking->getDateStart();
				$EndDate = $Tracking->getDateEnd();
			
				while (strtotime($Date) < strtotime($EndDate)){
					$DateTemp = \date("Y-m-d", strtotime("+6 day", strtotime($Date)));
					if ($DateTemp > $EndDate){
						$DateTemp = $EndDate;
					}
					$Count = $mSD->trackByCount( array($IdCourse, $Date, $DateTemp) );
					
					//Định dạng lại gọn
					$D1[] = "(".\date("d-m", strtotime($Date))." đến ".\date("d-m", strtotime($DateTemp)).")";								
					$D2[] = (int)($Count);
					$Date = \date("Y-m-d", strtotime("+1 day", strtotime($DateTemp)));
				}
																														
				$Data[] = $SD->getCourse()->getName()." (".$SD->getCount().")";
				$Data[] = $D2;
				$Data[] = $D1;
				$Chart[] = $Data;
				$SDs->next();
			}
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setObject('ChartData', $Chart);
		}
	}
?>