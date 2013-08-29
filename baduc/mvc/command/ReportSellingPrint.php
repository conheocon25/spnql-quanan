<?php		
	namespace MVC\Command;	
	class ReportSellingPrint extends Command {
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
			$mSession = new \MVC\Mapper\Session();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------			
			$Title = "BÁO CÁO / NHẬT KÍ BÁN HÀNG";			
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
				
				$SessionAll = $mSession->findByTracking( array($Date, $Date) );
				$Value = 0;
				$SubData = array();
				$Index = 1;
				while ($SessionAll->valid()){
					$Session = $SessionAll->current();
					$Value += $Session->getValue();
					$SessionAll->next();
					$R = array(
						$Index++,
						$Session->getDateTimePrint(),
						$Session->getUser()->getEmail(),
						$Session->getTable()->getName(),
						$Session->getValuePrint()
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
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------						
			$request->setProperty('Title', $Title);
			$request->setObject('NTotal', $NTotal);			
			$request->setObject('DataAll', $DataAll);
		}
	}
?>