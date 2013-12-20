<?php
	require_once("mvc/base/Viewer.php");
	$Viewer = new Viewer("mvc/templates/ReportCustomerDailyDetail.html");
	echo $Viewer->html();
?>
