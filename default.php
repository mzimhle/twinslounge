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

/* Set up the namespace */
$zfsession = $zfsession->identity = null; 
unset($zfsession, $zfsession->identity);

$zfsession 					= new Zend_Session_Namespace('FrontendUser');

$participantObject 			= new class_participant();
$participantloginObject 	= new class_participantlogin();
$commObject 				= new class_comm();
$fileObject 					= new File(array('gif', 'png', 'jpg', 'jpeg', 'gif'));


/* Check posted data. */
if(count($_POST) > 0 && !isset($_GET['ajax'])) {
	$errorArray		= array();
	$data 				= array();
	$formValid		= true;
	$success			= NULL;
	
	if(isset($_POST['participant_name']) && trim($_POST['participant_name']) == '') {
		$errorArray[] = 'Please add a name(s)';
		$formValid = false;		
	}
	
	if(isset($_POST['participant_surname']) && trim($_POST['participant_surname']) == '') {
		$errorArray[] = 'Please add a surname';
		$formValid = false;		
	}
	
	if(isset($_POST['participant_email']) && trim($_POST['participant_email']) != '') {
		if($participantObject->validateEmail(trim($_POST['participant_email'])) == '') {
			$errorArray[] = 'Needs to be a valid email address';
			$formValid = false;	
		} else {
		
			$emailData = $participantloginObject->checkEmail(trim($_POST['participant_email']));
			
			if($emailData) {
				$errorArray[] = 'Email already exists';
				$formValid = false;				
			}
		}
	} else {
		$errorArray[] = 'Please add an email address';
		$formValid = false;			
	}
	
	if(count($errorArray) == 0 && $formValid == true) {

		$data 	= array();	
		$data['participant_name']		= trim($_POST['participant_name']);	
		$data['participant_surname']	= trim($_POST['participant_surname']);	
		$data['participant_cellphone']	= trim($_POST['participant_cellphone']);	
		$data['participant_email']		= trim($_POST['participant_email']);
		$data['participant_active']		= 1;

		$success = $participantObject->insert($data);
		
		if(count($errorArray) == 0) {
			/* Setup the login variables. */
			$zfsession->identity		= $success;
			
			// redirect to the success page. 
			header('Location: /complete.php');
			exit;		
		}
			
	}
	
	/* if we are here there are errors. */
	$smarty->assign('errorArray', implode(". ", $errorArray));	
}

/* Display the template */	
$smarty->display('default.tpl');
?>