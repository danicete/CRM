<?php

	if (isset($_POST['setpassword']) && !empty($_POST['setpassword'])) {

		$userID 		= intval($_POST['userID']);
		$password 		= $_POST['password'];

		$query = "UPDATE users SET password = '" . md5($password) . "', password_set = 1 WHERE id = $userID";
		$db->query($query);

		$auth->setUsername($_POST['userEmail']);
		$auth->setPassword(md5($password));
		$auth->checkAuth($db);
		echo json_encode(array("status"=>"success", "forward" => $PATH['http']['siteRoot']. '/password-success/', "email" => $_POST['userEmail'], "password" => md5($password)));
		
	} else if (isset($_POST['checkauth']) && !empty($_POST['checkauth'])) {

		$email = $_POST['email'];
		$password = $_POST['password'];

		$auth->setUsername($email);
		$auth->setPassword($password);

		if ($auth->checkAuth($db)) {
			echo json_encode(array("status"=>"success", "forward" => $PATH['http']['siteRoot'] . '/password-success/'));
		} else {
			echo json_encode(array("status"=>"failed"));
		}
	} else {

		if (isset($_GET['access_key']) && !empty($_GET['access_key'])) {
			$query = "SELECT * FROM users WHERE access_key = ? LIMIT 1";
			$user = $db->fetchAll($query, $_GET['access_key']);

			if (count($user) > 0) {
				$smarty->assign("user", $user[0]);
				$smarty->display($PATH['physical']['templates'] . '/set-password.tpl');
			} else {
				$smarty->display($PATH['physical']['templates'] . '/set-password-notfound.tpl');
			}
		} else
			$smarty->display($PATH['physical']['templates'] . '/set-password-notfound.tpl');
		

		
	}
	