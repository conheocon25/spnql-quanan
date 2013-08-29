<?php		
	namespace MVC\Command;	
	class ReportStorePrint extends Command {
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
			$mTracking = new \MVC\Mapper\Tracking();
			$mOrder = new \MVC\Mapper\OrderImport();
			$mOD = new \MVC\Mapper\OrderImportDetail();
			$mSupplier = new \MVC\Mapper\Supplier();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$Title = "BÁO CÁO KHO";
			$arrTime = array(				
				"thismonth"	=>	@\MVC\Library\Date::rangeThisMonth(), 
				"lastmonth"	=>	@\MVC\Library\Date::rangeBeforeMonth()
			);
			
			$DateStart = $arrTime[$Type][0];
			$DateEnd = $arrTime[$Type][1];
			
			$DataAll = array();						
			$SupplierAll = $mSupplier->findAll();
						
			while ($SupplierAll->valid()){
				$Data = array();
																	
				$Supplier = $SupplierAll->current();												
				$ResourceAll = $Supplier->getResources();
				$Data[] = $Supplier->getName();
				$R = array();
				while ($ResourceAll->valid()){
					$Resource = $ResourceAll->current();					
					$Count = $mOD->trackByCount( array($Resource->getId(), '2013-1-1', '2013-12-31') );
					$Export = $mOD->trackByExport( array($Resource->getId()) );
					$R[] = array($Resource->getName(), $Resource->getUnit(), $Count, $Export, ($Count - $Export) );
					$ResourceAll->next();
				}
				$Data[] = $R;
				
				$DataAll[] = $Data;
				$SupplierAll->next();				
			}
									
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------						
			$request->setProperty('Title', $Title);
			$request->setObject('DataAll', $DataAll);
		}
	}
?>
