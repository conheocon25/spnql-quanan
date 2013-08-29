<?php		
	namespace MVC\Command;	
	class ReportSupplier extends Command{
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------
			$Session = \MVC\Base\SessionRegistry::instance();

			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------									
			$DateStart = $request->getProperty("DateStart_Supplier");
			$DateEnd = $request->getProperty("DateEnd_Supplier");
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			
			$mSupplier = new \MVC\Mapper\Supplier();
			$mOrder = new \MVC\Mapper\OrderImport();
			$mSPaid = new \MVC\Mapper\PaidSupplier();
			
			//-------------------------------------------------------------
			//XỬ LÍ CHÍNH
			//-------------------------------------------------------------			
			$Suppliers = $mSupplier->findAll();									
			$Session->setReportSupplierDateStart( $DateStart );
			$Session->setReportSupplierDateEnd($DateEnd );
									
			$Sum = 0;
			while ($Suppliers->valid()){
				$Sum += $Suppliers->current()->getNewDebt();
				$Suppliers->next();
			}
			$NSum = new \MVC\Library\Number($Sum);
									
			$Title = "CHI TIẾT HÀNG NHẬP";
												
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$request->setProperty("Title", $Title);
			$request->setProperty("SNewDebt", $NSum->formatCurrency()." đ");
			$request->setObject("Suppliers", $Suppliers);
						
		}
	}
?>