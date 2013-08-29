<?php		
	namespace MVC\Command;	
	class ReportOther extends Command {
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------
			$Session = \MVC\Base\SessionRegistry::instance();
														
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------			
			$DateStart = $request->getProperty("DateStart_Other");
			$DateEnd = $request->getProperty("DateEnd_Other");
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			
			$mPaid = new \MVC\Mapper\PaidOther();
						
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------									
			$Paids = $mPaid->findByTracking( array($DateStart, $DateEnd) );
			$Sum = 0;
			while($Paids->valid()){
				$Sum += $Paids->current()->getValue();
				$Paids->next();
			}
			$NSum = new \MVC\Library\Number($Sum);
			$DateStart1 = new \MVC\Library\Date($DateStart);
			$DateEnd1 = new \MVC\Library\Date($DateEnd);			
			$Title = "TỔNG CHI PHÍ TỪ ".$DateStart1->getDateFormat()." ĐẾN ".$DateEnd1->getDateFormat();
						
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$request->setProperty("Sum", $NSum->formatCurrency()." đ" );
			$request->setObject( "Paids", $Paids );
			
			$request->setProperty('Title', $Title);
		}
	}
?>