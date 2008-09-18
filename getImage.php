<?php
require('phpClasses/autoload.php');

	$dbConnection =  new DbConnection();
	$imgIndex =      new ImgIndex($dbConnection);
	$queryForField = 'abbreviation'; // eventually this will change to id
	
	foreach(array('observatory', 'instrument', 'detector', 'measurement') as $field) {
	  $src["$field.$queryForField"] = $_GET[$field];
	}
	
	switch ($_GET['action']) {
		case 'getProperties':
			header('Content-type: application/json');
			echo json_encode($imgIndex->getProperties($_GET['imageId']));
			break;
	  
		case 'getClosest':
			header('Content-type: application/json');
			echo json_encode($imgIndex->getClosestImage($_GET['timestamp'], $src));
			break;
			
		case 'getJP2URL':
			echo $imgIndex->getJP2URL($_GET['timestamp'], $src);
			break;
	}
?>
