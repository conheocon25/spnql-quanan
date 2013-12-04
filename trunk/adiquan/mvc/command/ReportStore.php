<?php		
	namespace MVC\Command;	
	class ReportStore extends Command{
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
			$Save = $request->getProperty('Save');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mTracking 	= new \MVC\Mapper\Tracking();
			$mTS 		= new \MVC\Mapper\TrackingStore();
			$mResource 	= new \MVC\Mapper\Resource();
			$mSD 		= new \MVC\Mapper\SessionDetail();
			$mR2C  		= new \MVC\Mapper\R2C();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$Tracking 		= $mTracking->find($IdTrack);
			$ResourceAll 	= $mResource->findAll();
			
			//Xóa những dữ liệu tồn kho cũ
			$mTS->deleteByTracking(array($IdTrack));
			
			while ($ResourceAll->valid()){
				$Resource = $ResourceAll->current();				
				
				//Tính phần nhập hàng
				$R2CAll = $mR2C->findByResource(array($Resource->getId()));
												
				//Nếu có trong bảng ánh xạ mới tính toán
				if ($R2CAll->count()>0){
					
					//Tính số lượng hàng nhập trong kì
					$CountImport = $Tracking->getResourceImport( $Resource->getId() );
					
					//Tính số lượng hàng nhập xuất kho bán trong kì
					$R2CAll->rewind();
					$CountExport = 0;
					while ($R2CAll->valid()){
						$R2C = $R2CAll->current();
						$IdCourse = $R2C->getIdCourse();
						$CountExport += round(($Tracking->getCourseExport( $IdCourse ))*$R2C->getValue1()/$R2C->getValue2(),1);
						$R2CAll->next();
					}
					
					//Tính toán tồn cũ còn trước đó
					$TSAllPre = $mTS->findByPre(array($IdTrack, $Resource->getId()));
					if ($TSAllPre->count()==0){
						$CountOld = 0;
					}else{
						$CountOld = $TSAllPre->current()->getCountRemain();
					}
					
					$TS = new \MVC\Domain\TrackingStore(
						null,
						$IdTrack,
						$Resource->getId(), 
						$CountOld,
						$CountImport, 
						$CountExport,
						$Resource->getPrice()
					);
					$mTS->insert($TS);																				
										
				}
				$ResourceAll->next();
			}						
			$TSAll = $mTS->findBy(array($IdTrack));
			
			$Title = "TỒN KHO";
			$Navigation = array(				
				array("BÁO CÁO", "/report"),
				array($Tracking->getName(), $Tracking->getURLView() )
			);
						
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$request->setProperty('Title'		, $Title);
			$request->setObject('Navigation'	, $Navigation);
			$request->setObject('Tracking'		, $Tracking);
			$request->setObject('TSAll'			, $TSAll);			
		}
	}
?>