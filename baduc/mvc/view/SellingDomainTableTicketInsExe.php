<?php
	require_once("mvc/base/ViewHelper.php");
	$request = VH::getRequest();
	$Ticket = $request->getObject('Ticket');
	$Data = array(
		"Result" => "OK",
		"Name"=>$Ticket->getCourse()->getName(),
		"Unit"=>$Ticket->getCourse()->getUnit(),
		"Count"=>$Ticket->getCount()
	);
	echo json_encode($Data);
?>