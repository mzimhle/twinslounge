<?php
/* Add this on all pages on top. */
set_include_path($_SERVER['DOCUMENT_ROOT'].'/'.PATH_SEPARATOR.$_SERVER['DOCUMENT_ROOT'].'/library/classes/');

/**
 * Standard includes
 */
require_once 'config/database.php';
require_once 'config/smarty.php';

require_once 'class/participant.php';

$participantObject	= new class_participant();

$results 				= array();
$list						= array();	

if(isset($_REQUEST['term'])) {
	
	$participantData	= $participantObject->getAll('participant.participant_active = 1', 'participant_added DESC');
	$q						= trim($_REQUEST['term']); 
	
	
	if(count($participantData) > 0) {
		for($i = 0; $i < count($participantData); $i++) {
			
			if(isset($_GET['more'])) {
				$list[] = array(
					"id" 			=> $participantData[$i]["participant_code"],
					"label" 		=> $participantData[$i]['participant_name'].' '.$participantData[$i]['participant_surname'],
					"value" 		=> $participantData[$i]['participant_name'].' '.$participantData[$i]['participant_surname'],
					"name" 	=> $participantData[$i]['participant_name'],
					"surname" => $participantData[$i]['participant_surname'],
					"email"		=> $participantData[$i]['participant_email'],
					"cellphone"		=> $participantData[$i]['participant_cellphone'],
					"gender"	=> $participantData[$i]['participant_gender'],
					"areapost_code"	=> $participantData[$i]['areapost_code'],
					"areapost_name"	=> $participantData[$i]['areapost_name']
				);			
			} else {
				$list[] = array(
					"id" 		=> $participantData[$i]["participant_code"],
					"label" 	=> $participantData[$i]['participant_name'].' '.$participantData[$i]['participant_surname'],
					"value" 	=> $participantData[$i]['participant_name'].' '.$participantData[$i]['participant_surname'],
					"name" 	=> $participantData[$i]['participant_name'],
					"surname" => $participantData[$i]['participant_surname'],
					"email"		=> $participantData[$i]['participant_email']
				);			
			}
		}
		
		foreach ($list as $details) {
			if (strpos(strtolower($details["value"]), $q) !== false) {
				$results[] = $details;
			}
		}		
	}
}

if(count($results) > 0) {
	echo json_encode($results); 
	exit;
} else {
	echo json_encode(array('id' => '', 'label' => 'no results')); 
	exit;
}
exit;

?>