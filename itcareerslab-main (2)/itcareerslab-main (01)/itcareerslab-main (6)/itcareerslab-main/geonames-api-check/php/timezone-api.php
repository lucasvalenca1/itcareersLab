<?php
	//ini_set('display_errors', 'On');
	//error_reporting(E_ALL);

	$executionStartTime = microtime(true);

	$timezoneUrl = "http://api.geonames.org/timezoneJSON?formatted=true&lat=" . $_REQUEST['latitude'] . "&lng=" . $_REQUEST['longitude'] . "&username=lucasdvalenca002&style=full";

	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
	curl_setopt($ch, CURLOPT_URL,$timezoneUrl); 
	$result=curl_exec($ch); 
	curl_close($ch); 

	$output['status']['code'] = "200";
	$output['status']['name'] = "ok";
	$output['status']['description'] = "success";
	$output['status']['returnedIn'] = intval((microtime(true) - $executionStartTime) * 1000) . " ms";
	$output['data'] = json_decode($result,true);
	
	header('Content-Type: application/json; charset=UTF-8');

	echo json_encode($output); 

?>