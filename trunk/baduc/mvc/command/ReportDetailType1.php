<?php		
	namespace MVC\Command;	
	class ReportDetailType1 extends Command{
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
			$mDomain = new \MVC\Mapper\Domain();
			$mSession = new \MVC\Mapper\Session();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$DomainAll = $mDomain->findAll();
			$Tracking = $mTracking->find($IdTrack);
			$ChartData = array();
			
			while ($DomainAll->valid()){
				$Domain = $DomainAll->current();
				
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
					
					$Sessions = $mSession->findByTracking1( array($Domain->getId(), $Date, $DateTemp) );
					$Value = 0;
					while($Sessions->valid()){
						$Session = $Sessions->current();
						$Value += $Session->getValue();
						$Sessions->next();
					}
					
					//Định dạng lại gọn
					$N = new \MVC\Library\Number($Value);
					$D1[] = "(".\date("d-m", strtotime($Date))." đến ".\date("d-m", strtotime($DateTemp))."): ".$N->formatCurrency()." đ";
					$D2[] = (int)($Value);
					$Date = \date("Y-m-d", strtotime("+1 day", strtotime($DateTemp)));
				}
					
				//Thêm vào biểu đồ
				$Data[] = $Domain->getName();
				$Data[] = $D2;
				$Data[] = $D1;
				
				$ChartData[] = $Data;
				$DomainAll->next();
			}
									
			$Title1 = "BÁO CÁO / CHI TIẾT / DOANH SỐ / ".$Tracking->getDateStartPrint()." ĐẾN ".$Tracking->getDateEndPrint();
			$Title2 = "BÁO CÁO / BIỂU ĐỒ / DOANH SỐ / ".$Tracking->getDateStartPrint()." ĐẾN ".$Tracking->getDateEndPrint();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$request->setProperty('Title1', $Title1);
			$request->setProperty('Title2', $Title2);
			
			$request->setObject('Tracking', $Tracking);
			$request->setObject('ChartData', $ChartData);
			$request->setProperty('URLHeader', $Tracking->getURLView() );
		}
	}
?>