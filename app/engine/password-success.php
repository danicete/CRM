<?php

	$auth->checkAuth($db);

	$smarty->display($PATH['physical']['templates'] . '/password-success.tpl');