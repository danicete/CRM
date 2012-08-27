<?php

	// This is a tool that is used to edit the email templates used by the app

	// It will support tokens and an HTML-renderer so you can see changes immediately
	// as well as change the content of the emails

	$jsIncludes[] = "email-tool";

	if(!$auth->checkAuth($db)) {
		header("Location: " . $PATH['http']['siteRoot'] . '/login/?f=/email-tool/');
		exit();
	}
	if(!$auth->isAdmin) {
		header("Location: " . $PATH['http']['siteRoot']);
		exit();
	}

