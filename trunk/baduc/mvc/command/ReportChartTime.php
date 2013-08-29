<?php		
	namespace MVC\Command;	
	class ReportChartTime extends Command {
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
			$mSession = new \MVC\Mapper\Session();
			$mDomain = new \MVC\Mapper\Domain();
			
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
					$D1[] = $arrTime[$i];
					$D2[] = $Value;
				}
					
				//Thêm vào biểu đồ
				$Data[] = $Domain->getName();
				$Data[] = $D2;
				$Data[] = $D1;
				
				$ChartData[] = $Data;
				$DomainAll->next();
			}
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setObject('ChartData', $ChartData);
		}
	}
?>