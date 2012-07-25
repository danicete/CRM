<?php

	if (isset($_POST)) {

		$email = $_POST["email"];
		$password = $_POST["pass"];

		$auth->setUsername($email);
		$auth->setPassword(md5($password));

		if ($auth->checkAuth($db)) {
			echo json_encode(array("status"=>"success"));
		} else {
			echo json_encode(array("status"=>"failed"));
		}

	} else {
		echo "This is awkward.";
	}