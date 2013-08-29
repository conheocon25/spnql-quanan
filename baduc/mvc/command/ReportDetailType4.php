<?php		
	namespace MVC\Command;	
	class ReportDetailType4 extends Command{
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
					$D1[] = "(".\date("d-m", strtotime($Date))." đến ".\date("d-m", strtotime($DateTemp))."): ".$N->formatCurrency()." đ";
					$D2[] = (int)($Value);
					$Date = \date("Y-m-d", strtotime("+1 day", strtotime($DateTemp)));
				}
				$Data[] = $D2;
				$Data[] = $D1;
						
			$Title1 = "BÁO CÁO / CHI TIẾT / CHI PHÍ / ".$Tracking->getDateStartPrint()." ĐẾN ".$Tracking->getDateEndPrint();
			$Title2 = "BÁO CÁO / BIỀU ĐỒ / CHI PHÍ / ".$Tracking->getDateStartPrint()." ĐẾN ".$Tracking->getDateEndPrint();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$request->setProperty('Title1', $Title1);
			$request->setProperty('Title2', $Title2);
			$request->setObject('Tracking', $Tracking);
			$request->setObject('Data', $D1);
			$request->setProperty('URLHeader', $Tracking->getURLView() );
		}
	}
?>