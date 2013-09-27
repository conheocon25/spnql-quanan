<?php
	namespace MVC\Command;
	class SellingDomainTableTicketInsLoad extends Command{
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------						
			$Session = \MVC\Base\SessionRegistry::instance();
									
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$IdDomain = $request->getProperty("IdDomain");
			$IdTable = $request->getProperty("IdTable");
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			$mCategory = new \MVC\Mapper\Category();
			$mCourse = new \MVC\Mapper\Course();
			$mTable = new \MVC\Mapper\Table();			
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------			
			$Categories = $mCategory->findAll();
			$Categories1 = $mCategory->findAll();
			$CoursesTop20 = $mCourse->findTop20(null);
			$Table = $mTable->find($IdTable);			
			$Title = mb_strtoupper("CHỌN DANH MỤC MÓN", 'UTF8');
						
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setProperty("URLHeader", $Table->getURLTicket());
			
			$request->setObject("Categories", $Categories);
			$request->setObject("Categories1", $Categories1);
			$request->setObject("CoursesTop20", $CoursesTop20);
			$request->setObject('Table', $Table);
		}
	}
?>