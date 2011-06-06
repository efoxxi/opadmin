<?php
include_once("inc/header.php");
include_once("inc/menu.php");
include_once("inc/body1.php");
if(isset($_GET['page'])) {
	if(strcmp($_GET['page'], "deliverables") == 0) {
    	include_once("inc/content/deliverables.php");
	}
	if(strcmp($_GET['page'], "team") == 0) {
    	include_once("inc/content/team.php");
	}
	if(strcmp($_GET['page'], "prototypes") == 0) {
    	include_once("inc/content/prototypes.php");
	}
	if(strcmp($_GET['page'], "client") == 0) {
    	include_once("inc/content/client.php");
	}
	if(strcmp($_GET['page'], "project") == 0) {
    	include_once("inc/content/project.php");
	}
	if(strcmp($_GET['page'], "contactus") == 0) {
    	include_once("inc/content/contactus.php");
	}
} else {
	// include by default
	include_once("inc/content/deliverables.php");
}
include_once("inc/footer.php");
?>
