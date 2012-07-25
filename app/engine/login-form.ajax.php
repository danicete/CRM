<?php

	$smarty->assign("submitURL", $PATH['http']['siteRoot'] . '/login-submit.ajax/');

	$output = $smarty->fetch($PATH['physical']['templates'] . '\login-form.ajax.tpl');

	echo json_encode(array("status"=>"success", "output"=>$output));