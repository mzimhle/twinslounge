<?php
/* Add this on all pages on top. */
set_include_path($_SERVER['DOCUMENT_ROOT'].'/'.PATH_SEPARATOR.$_SERVER['DOCUMENT_ROOT'].'/library/classes/');

/*** Standard includes */
require_once 'config/database.php';
require_once 'config/smarty.php';

/* objects. */
require_once 'class/_comm.php';
require_once 'class/participant.php';
require_once 'class/participantlogin.php';
require_once 'class/File.php';

/* include the Zend class for Authentification */
require_once 'Zend/Session.php';

$zfsession 			= new Zend_Session_Namespace('FrontendUser');
$participantObject	= new class_participant();

if(isset($zfsession->identity)) {
	$participantData = $participantObject->getByCode($zfsession->identity);

	if(!$participantData) {
		// redirect to the success page. 
		header('Location: /');
		exit;
	}
} else {
	// redirect to the success page. 
	header('Location: /');
	exit;
}

$smarty->assign('participantData', $participantData);

/* Display the template */	
$smarty->display('complete.tpl');
?>