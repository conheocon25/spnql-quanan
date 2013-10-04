<?php
	namespace MVC\Command;	
	class App extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------						
			$Session = \MVC\Base\SessionRegistry::instance();
									
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
									
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			require_once("mvc/base/mapper/MapperDefault.php");
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------						
			$CategoryAll 	= $mCategory->findAll();
			$CourseAll 		= $mCourse->findAll();
			$DomainAll 		= $mDomain->findAll();
			$TableAll 		= $mTable->findAll();
			$EmployeeAll 	= $mEmployee->findAll();
			$UnitAll 		= $mUnit->findAll();
			$CustomerAll 	= $mCustomer->findAll();
			$TermPaidAll 	= $mTermPaid->findAll();
			$TermCollectAll = $mTermCollect->findAll();			
			$UserAll 		= $mUser->findAll();
			$ConfigAll 		= $mConfig->findAll();
			$SessionAll 	= $mSession->findAll();
			$SessionLastAll = $mSession->findLastAll(array());
			$SessionNowAll = $mSession->findNowAll(array());
			
			$Title = "";
			$Navigation = array();
						
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setProperty("ActiveAdmin", "Admin");
			$request->setProperty("Title", $Title);
			$request->setObject("Navigation", $Navigation);
			
			$request->setObject('CategoryAll'	, $CategoryAll);			
			$request->setObject('DomainAll'		, $DomainAll);
			$request->setObject('TableAll'		, $TableAll);
			$request->setObject('CourseAll'		, $CourseAll);
			$request->setObject('EmployeeAll'	, $EmployeeAll);
			$request->setObject('UnitAll'		, $UnitAll);			
			$request->setObject('CustomerAll'	, $CustomerAll);
			$request->setObject('TermPaidAll'	, $TermPaidAll);
			$request->setObject('TermCollectAll', $TermCollectAll);
			$request->setObject('UserAll'		, $UserAll);
			$request->setObject('ConfigAll'		, $ConfigAll);
			$request->setObject('SessionAll'	, $SessionAll);
			$request->setObject('SessionLastAll', $SessionLastAll);
			$request->setObject('SessionNowAll'	, $SessionNowAll);
		}
	}
?>