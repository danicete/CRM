<?php

	$auth->logoutUser($db);

	if(isset($_GET['currPage'])) {
		header("Location: " . $_GET['currPage']);
		exit();
	} else {
		header("Location: " . $PATH['http']['siteRoot']);
		exit();
	}
	