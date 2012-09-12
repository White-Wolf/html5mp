<?php
/*
 * BEGIN global page code
 * Note: this code should be found at the extreme top of any main page as is (with the exception of the PAGE constant).
 */
DEFINE('IN_SITE', true); //Must be defined as true on any php script that will the common.php
DEFINE('PAGE', 'index'); //Used to keep track of where we are globally

require_once 'common.php'; //Include our common script which does all major initialization'
/*
 * END global page code
 */

$Display->hasHeader = true;
$Display->hasFooter = true;
$Display->addController($config->controllers->index);

$Display->render();
?>