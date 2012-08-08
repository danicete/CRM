<?php

	$smarty->assign("test", "Test Message!");

	$smarty->display($PATH['physical']['templates'] . '/index.tpl');