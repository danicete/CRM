<?php

	error_reporting(E_ALL);

	// Includes
	include('app/config/config.inc.php');

	require($PATH['physical']['lib'] . '/smarty/Smarty.class.php');
	require($PATH['physical']['lib'] . '/Authentication.class.php');
	require($PATH['physical']['lib']. '/global.func.php');
	include($PATH['physical']['lib']. '/Zend/Loader/Autoloader.php');
	$loader = Zend_Loader_Autoloader::getInstance();
	$db = new Zend_Db_Adapter_Pdo_Mysql(array(
		'host'				=> DB_HOST,
		'username'			=> DB_USER,
		'password'			=> DB_PASS,
		'dbname'			=> DB_NAME
	));
	$profiler = $db->getProfiler();
	$profiler->setEnabled(true);
	
	session_start();

	if(isset($_GET['clearsession']) && $_GET['clearsession'] == 1)
		session_destroy();

	// Init objects
	$smarty = new Smarty();
	$auth = new Authentication($db);

	// Configure Smarty
	$smarty->setTemplateDir('../app/templates');
	$smarty->setCompileDir('../app/templates_c');
	$smarty->setCacheDir('../app/lib/smarty/cache');
	$smarty->setConfigDir('../app/lib/smarty/config');

	if (!isset($_SERVER['REQUEST_URI'])) {
       $_SERVER['REQUEST_URI'] = substr($_SERVER['PHP_SELF'],1 );
       if (isset($_SERVER['QUERY_STRING'])) { $_SERVER['REQUEST_URI'].='?'.$_SERVER['QUERY_STRING']; }
	}

	// Break up URL
	$tmp = explode('?', $_SERVER['REQUEST_URI']);
	$request = $tmp[0];
	$queryParams = isset($tmp[1]) ? $tmp[1] : null;
	$parts = explode('/', $request);

	$page = isset($parts[2]) && $parts[2] != '' ? $parts[2] : "index";

	$smarty->assign("request_uri", $request);
	$smarty->assign("queryParams", $queryParams);
	$smarty->assign("path", $PATH['http']);
	$smarty->assign("auth", $auth);
	$smarty->assign("loggedIn", $auth->loggedIn);
	$smarty->assign("authMessage", "You are not currently signed in.");
	$smarty->assign("authName", $auth->name);
	$smarty->assign("authUserID", $auth->userID);
	$smarty->assign("authBar", $PATH['physical']['templates'] . '/_components/authbar.tpl');

	// Load page
	switch($page) {

		case "index":
			include("app/engine/home.php");
		break;
		case "new":
		case "edit":
		case "edit.ajax":
		case "lookup":
		case "login":
		case "login-form.ajax":
		case "login-submit.ajax":
		case "logout":
		case "submit":
		case "view":
		case "finished":
		case "saved":
		case "set-password":
		case "password-success":
			include("app/engine/".$page.".php");
		break;
		default:
			include("app/engine/home.php");
			//include("../app/engine/404.php");
		break;
	}


