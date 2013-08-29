<?php		
	namespace MVC\Command;	
	class ReportChartPaidGeneral extends Command {
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
			$mPaid = new \MVC\Mapper\PaidGeneral();
						
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$Tracking = $mTracking->find($IdTrack);						
									
			$Data = array();
			$D1 = array();
			$D2 = array();
			
			$Date = $Tracking->getDateStart();
			$EndDate = $Tracking->getDateEnd();
		
			while (strtotime($Date) < strtotime($EndDate)){
				$DateTemp = \date("Y-m-d", strtotime("+6 day", strtotime($Date)));
				if ($DateTemp > $EndDate){
					$DateTemp = $EndDate;
				}
				$PaidAll = $mPaid->findByTracking( array($Date, $DateTemp) );
				$Value = 0;
				while ($PaidAll->valid()){
					$Paid = $PaidAll->current();
					$Value += $Paid->getValue();
					$PaidAll->next();
				}
				
				$N = new \MVC\Library\Number($Value);
				//Định dạng lại gọn
				$D1[] = "(".\date("d-m", strtotime($Date))." đến ".\date("d-m", strtotime($DateTemp)).")";
				$D2[] = (int)($Value);
				$Date = \date("Y-m-d", strtotime("+1 day", strtotime($DateTemp)));
			}
			$Data[] = $D2;
			$Data[] = $D1;
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setObject('ChartData', $Data);
		}
	}
?>