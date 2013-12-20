<?php
	require_once("mvc/base/Viewer.php");
	$Viewer = new Viewer("mvc/templates/ReportCustomerDaily.html");
	echo $Viewer->html();
?>
