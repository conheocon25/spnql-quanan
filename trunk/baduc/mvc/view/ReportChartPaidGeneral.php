<?php	
	require_once("mvc/base/ViewHelper.php");
	$request = VH::getRequest();
	$Data = $request->getObject('ChartData');
	echo json_encode($Data);
?>
