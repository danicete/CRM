<?php

	$jsIncludes[] = "form";

	if(!$auth->checkAuth($db)) {
		header("Location: " . $PATH['http']['siteRoot'] . '/login/?f=/new/');
		exit();
	}

	$query = "SELECT * FROM users WHERE NOT id = " . $auth->userID;
	$result = $db->fetchAll($query);

	$smarty->assign("usersInfo", $result);

	$requestFormatBlock = $smarty->fetch($PATH['physical']['templates'] . '/_blocks/requestFormatBlock.tpl');

	$smarty->assign("formSubmitURL", $PATH['http']['siteRoot'] . '/submit/');
	$smarty->assign("test", "New Creative Request");
	$smarty->assign("requestFormatBlock", $requestFormatBlock);
	$smarty->assign("formPage1", $smarty->fetch($PATH['physical']['templates'] . '/_formPages/page1.tpl'));
	$smarty->assign("formPage2", $smarty->fetch($PATH['physical']['templates'] . '/_formPages/page2.tpl'));
	$smarty->assign("formPage3", $smarty->fetch($PATH['physical']['templates'] . '/_formPages/page3.tpl'));
	$smarty->assign("formPage4", $smarty->fetch($PATH['physical']['templates'] . '/_formPages/page4.tpl'));
	$smarty->assign("formFinishedPage", $smarty->fetch($PATH['physical']['templates'] . '/_formPages/finishedPage.tpl'));
	$smarty->assign("formCompletePage", $smarty->fetch($PATH['physical']['templates'] . '/_formPages/completePage.tpl'));

	$smarty->assign('jsIncludes', $jsIncludes);

	$smarty->display($PATH['physical']['templates'] . '\new.tpl');