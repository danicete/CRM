<?php

	// Get query parameters for login page forwarding
	$loginForwardString = isset($_GET['f']) ? ($_GET['f'] != '' ? $_GET['f'] : '') : '';
	$loginDestString = isset($_GET['d']) ? ($_GET['d'] != '' ? $_GET['d'] : '') : '';

	$loginErrors = isset($_GET['e']) ? ($_GET['e'] != '' ? $_GET['e'] : '') : '';

	if (isset($_GET) && isset($_GET['s']) && $_GET['s'] != '') {

		if ($_GET['s'] == "form") {

			$username = (isset($_POST)) ? $_POST['loginUser'] : '';
			$pass = (isset($_POST)) ? $_POST['loginPw'] : '';

			$username = mb_convert_encoding($username, 'UTF-8', 'UTF-8');
			$username = htmlentities($username, ENT_QUOTES, 'UTF-8');
			$pass = mb_convert_encoding($pass, 'UTF-8', 'UTF-8');
			$pass = htmlentities($pass, ENT_QUOTES, 'UTF-8');

			$auth->setUsername($username);
			$auth->setPassword(md5($pass));

			if ($auth->checkAuth($db)) {
				header('Location: ' . $PATH['http']['siteRoot'] . $loginForwardString);
				exit();
			} else {
				header('Location: ' . $PATH['http']['siteRoot'] . '/login/?e=1');
				exit();
			}
		}
	}

	$smarty->assign("loginErrors", $loginErrors);
	$smarty->assign("loginForwardString", $loginForwardString);
	$smarty->assign("loginDestString", $loginDestString);

	$smarty->display($PATH['physical']['templates'] . '\login.tpl');