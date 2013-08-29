<?php		
	namespace MVC\Command;	
	class ReportDetailType5 extends Command{
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
			$mOrder = new \MVC\Mapper\OrderImport();
			$mSupplier = new \MVC\Mapper\Supplier();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$Tracking = $mTracking->find($IdTrack);			
			$SupplierAll = $mSupplier->findAll();
			$Chart = array();
			
			while ($SupplierAll->valid()){
				$Data = array();
				$D1 = array();
				$D2 = array();
													
				$Supplier = $SupplierAll->current();
				$IdSupplier = $Supplier->getId();
				$Date = $Tracking->getDateStart();
				$EndDate = $Tracking->getDateEnd();
				
				$Sum = 0;
				while (strtotime($Date) < strtotime($EndDate)){
					$DateTemp = \date("Y-m-d", strtotime("+6 day", strtotime($Date)));
					if ($DateTemp > $EndDate){
						$DateTemp = $EndDate;
					}
					$OrderAll = $mOrder->findByTracking1( array($IdSupplier, $Date, $DateTemp) );
					$Value = 0;
					while ($OrderAll->valid()){
						$Order = $OrderAll->current();
						$Value += $Order->getValue();
						$OrderAll->next();
					}
					
					//Định dạng lại gọn
					$N = new \MVC\Library\Number($Value);
					$D1[] = "(".\date("d-m", strtotime($Date))." đến ".\date("d-m", strtotime($DateTemp))."): ".$N->formatCurrency()." VNĐ";
					$D2[] = (int)($Value);
					$Date = \date("Y-m-d", strtotime("+1 day", strtotime($DateTemp)));
					$Sum += $Value;
				}
				$NSum = new \MVC\Library\Number($Sum);
				$Data[] = $Supplier->getName()." (".$NSum->formatCurrency()." VNĐ)";
				$Data[] = $D2;
				$Data[] = $D1;
				$Chart[] = $Data;
				$SupplierAll->next();
			}
			
						
			$Title1 = "BÁO CÁO / CHI TIẾT / NHẬP HÀNG / ".$Tracking->getDateStartPrint()." ĐẾN ".$Tracking->getDateEndPrint();
			$Title2 = "BÁO CÁO / BIỀU ĐỒ / NHẬP HÀNG / ".$Tracking->getDateStartPrint()." ĐẾN ".$Tracking->getDateEndPrint();
			
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