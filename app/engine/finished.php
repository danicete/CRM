<?php


	if(isset($_GET)) {

		if (isset($_GET['rpin']) && isset($_GET['view'])) {

			$requestPin = $_GET['rpin'];
			$viewURL = $_GET['view'];


			$smarty->assign('requestPin', $requestPin);
			$smarty->assign('viewURL', $viewURL);

			$smarty->display($PATH['physical']['templates'] . '/finished.tpl');
		}
	}