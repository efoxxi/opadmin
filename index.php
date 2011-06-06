<?php
$page_arr = array("deliverables",
    "team",
    "prototypes",
    "client",
    "project",
    "contactus");

include_once("inc/header.php");
include_once("inc/menu.php");
include_once("inc/body1.php");
if (isset($_GET['page'])) {
    foreach ($page_arr as $page) {
        if (strcmp($_GET['page'], $page) == 0) {
            include_once("inc/content/" . $page . ".php");
        }
    }
} else {
    // include by default
    include_once("inc/content/deliverables.php");
}
include_once("inc/footer.php");
?>
