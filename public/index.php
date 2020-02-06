<?php
    // Start our session
    session_name("Default");
    session_start();
	ob_start();
	setcookie("Default",session_id(),0,"/",null,null,true);

	require_once('../app/bootstrap.php');
	Bootstrap::run();
	\Classes\Settings\Settings::initSettings();
	\Classes\Utils\Browser::run();

    // Init Core Library
    $init   =   new Core\Core();