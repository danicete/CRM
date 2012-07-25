<?php

	$smarty->assign("PIN", $_GET['viewPin']);
	$smarty->display($PATH['physical']['templates'] . '\saved.tpl');