<?php	
	require_once("mvc/base/Viewer.php");
	$Viewer 	= new Viewer("mvc/templates/SellingTablePrint1.html");
	$Request 	= \MVC\Base\RequestRegistry::getRequest();
	$Config 	= $Request->getObject("Config");	
	$Viewer->html();
?>