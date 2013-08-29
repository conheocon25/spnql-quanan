<?php		
	namespace MVC\Command;	
	class ReportPaid extends Command {
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------
			$Session = \MVC\Base\SessionRegistry::instance();
			$Type = $request->getProperty('Type');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mPaid = new \MVC\Mapper\PaidGeneral();
			$mOrder = new \MVC\Mapper\OrderImport();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$Title = "BÁO CÁO / NHẬT KÍ CHI PHÍ";
			$arrTime = array(
				"today"		=> 	@\MVC\Library\Date::rangeToday(),
				"yesterday"	=>	@\MVC\Library\Date::rangeYesterday(),
				"thisweek"	=>	@\MVC\Library\Date::rangeThisWeek(), 
				"lastweek"	=>	@\MVC\Library\Date::rangeBeforeWeek()
			);
			
			$DateStart = $arrTime[$Type][0];
			$DateEnd = $arrTime[$Type][1];
			
			$Date = $DateStart;
			$Total = 0;
			$DataAll = array();						
			while (strtotime($Date) <= strtotime($DateEnd)){
								
				$Value = 0;
				$SubData = array();
				$Index = 1;
				$PaidAll = $mPaid->findByTracking( array($Date, $Date) );
				while ($PaidAll->valid()){
					$Paid = $PaidAll->current();
					$Value += $Paid->getValue();
					$PaidAll->next();
					$R = array(
						$Index++,
						$Paid->getTerm()->getName(),
						$Paid->getNote(),
						$Paid->getValuePrint()
					);
					$SubData[] = $R;
				}
								
				$OrderAll = $mOrder->findByTracking( array($Date, $Date) );
				while ($OrderAll->valid()){
					$Order = $OrderAll->current();
					$Value += $Order->getValue();
					$OrderAll->next();
					$R = array(
						$Index++,
						$Order->getSupplier()->getName(),
						$Order->getDescription(),
						$Order->getValuePrint()
					);
					$SubData[] = $R;
				}
				
				$Sum = new \MVC\Library\Number($Value);
				$DateCurrent = new \DateTime($Date);				
				$DataAll[] = array($DateCurrent->format('d/m/Y'), $SubData, $Sum->formatCurrency()." đ" );
				$Total += $Value;
				$Date = \date("Y-m-d", strtotime("+1 day", strtotime($Date)));
			}
			$NTotal = new \MVC\Library\Number($Total);
						
			$URLPrint = "/report/paid/".$Type."/print";
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------						
			$request->setProperty('Title', $Title);			
			$request->setProperty('URLHeader', "/report");
			$request->setProperty('URLPrint', $URLPrint);			
			$request->setObject('NTotal', $NTotal);
			$request->setObject('DataAll', $DataAll);
		}
	}
?>