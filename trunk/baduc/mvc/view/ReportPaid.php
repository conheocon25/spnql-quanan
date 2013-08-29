<?php
	require_once("mvc/base/Viewer.php");
	$Viewer = new Viewer("mvc/templates/ReportPaid.html");
	echo $Viewer->html();
?>
