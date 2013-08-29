<?php		
	namespace MVC\Command;	
	class ReportDetailType2 extends Command{
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
				$arrTime = array("Buổi sáng", "Buổi chiều", "Buổi tối");
				$arrTime1 = array(7, 14, 21);
				$arrTime2 = array(13, 20, 23);
				
				for ($i=0; $i<3; $i++){
					$Sessions = $mSession->findByTracking2( array($Domain->getId(), $arrTime1[$i], $arrTime2[$i]) );
					$Value = 0;
					while($Sessions->valid()){
						$Session = $Sessions->current();
						$Value += $Session->getValue();
						$Sessions->next();
					}
					$N = new \MVC\Library\Number($Value);
					$D1[] = $arrTime[$i].": ".$N->formatCurrency()." VNĐ";
					$D2[] = $Value;
				}
				
				//Thêm vào biểu đồ
				$Data[] = $Domain->getName();
				$Data[] = $D2;
				$Data[] = $D1;
				
				$ChartData[] = $Data;
				$DomainAll->next();
			}
			
			$Title1 = "BÁO CÁO / CHI TIẾT / DOANH SỐ THEO BUỔI/ ".$Tracking->getDateStartPrint()." ĐẾN ".$Tracking->getDateEndPrint();
			$Title2 = "BÁO CÁO / BIỂU ĐỒ / DOANH SỐ THEO BUỔI/ ".$Tracking->getDateStartPrint()." ĐẾN ".$Tracking->getDateEndPrint();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$request->setProperty('Title1', $Title1);
			$request->setProperty('Title2', $Title2);
			$request->setObject('Tracking', $Tracking);
			$request->setObject('DataChart', $ChartData);
			$request->setProperty('URLHeader', $Tracking->getURLView());
		}
	}
?>