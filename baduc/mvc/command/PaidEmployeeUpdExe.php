<?php
	namespace MVC\Command;
	class PaidEmployeeUpdExe extends Command{
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$IdPaid = $request->getProperty('IdPaid');
			$Date = $request->getProperty('Date');			
			$Value = $request->getProperty('Value');
			$Note = $request->getProperty('Note');
														
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mPE = new \MVC\Mapper\PaidEmployee();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			if (!isset($Date))
				return self::statuses('CMD_OK');
				
			$PE = $mPE->find($IdPaid);
			$PE->setDate($Date);
			$PE->setValue($Value);
			$PE->setNote($Note);
			$mPE->update($PE);
					
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			return self::statuses('CMD_OK');
		}
	}
?>
