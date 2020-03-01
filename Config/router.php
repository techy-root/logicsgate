<?php
//Define path for project directory
define("APP_ROOT", '.');
define("APP_ROUTER", APP_ROOT.'/'.basename(__DIR__));
define("APP_CONTROLLER", APP_ROOT.'/Controller');
define("APP_MODEL", APP_ROOT.'/Model');
define("APP_VIEW", APP_ROOT.'/View');

// import dependany file
require_once APP_ROUTER."/dataSource.php";
?>