<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("./smarty-3.1.34/libs/Smarty.class.php");

// create object
$smarty = new Smarty;
$smarty->template_dir = "views";
