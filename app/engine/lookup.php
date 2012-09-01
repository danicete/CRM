<?php

	$jsIncludes[] = "lookup";

	if(isset($_GET)) {

		if(isset($_GET['rpin'])) {

			$pin = $_GET['rpin'];

		}
	}

	if($auth->checkAuth($db)) {

		$recentRequests = array();

		// Get recent request info
		$result = $db->fetchAll($db->quoteInto("SELECT * FROM user_request_link WHERE user_id = ? ORDER BY date_created ASC LIMIT 5", $auth->userID));
		if (count($result) > 0) {

			foreach ($result as $row) {
				$request = array();
				$query = "SELECT * FROM requests WHERE id = ?";
				$requestResult = $db->fetchAll($query, $row['request_id']);

				if (count($requestResult) > 0) {
					$requestRow = $requestResult[0];
					$request = array(
						'id'			=> $requestRow['id'],
						'campaignName'	=> $requestRow['campaignName'],
						'pin'			=> $requestRow['pin']
					);
					$recentRequests[] = $request;
				}
			}
		}
		$privileges = $db->fetchAll("SELECT * FROM privileges");

		foreach($privileges as $p) {
			if(in_array("showList", $p))
				$showIndex = $p['id'];
		}
		$user = $db->fetchRow("SELECT * FROM user_privilege_link WHERE user_id = " . $auth->userID . " AND privilege_id = " . $showIndex);
		$showList = 0;

		if($user) {
			$listingInfo = $db->fetchAll("SELECT * FROM requests ORDER BY date_created DESC");
			foreach($listingInfo as &$l) {
				$user = $db->fetchRow("SELECT * FROM users WHERE id = ". $l['curseSalesRep'] . " LIMIT 1");
				$l['curseSalesRep'] = $user['name'];
				$l['pageStatus'] = ($l['status'] == "inProgress") ? "In Progress" : (($l['status'] == "finished") ? "Finished" : (($l['status'] == "needsAttention") ? "Needs Attention" : "Submitted"));
			}
			$showList = 1;
			$smarty->assign("listingInfo", $listingInfo);
		}
		$smarty->assign("showList", $showList);
		$smarty->assign('recentRequests', $recentRequests);

		$recentRequestsBlock = $smarty->fetch($PATH['physical']['templates'] . "/_blocks/loggedIn-recentRequestsBlock.tpl");
	} else {
		$smarty->assign("showList", 0);
		$recentRequestsBlock = $smarty->fetch($PATH['physical']['templates'] . "/_blocks/loggedOut-recentRequestsBlock.tpl");
	}

	$smarty->assign("unfollowDialog", $PATH['physical']['templates'] . '/edit/followers/unfollowDialog.tpl');
	$smarty->assign("recentRequestsBlock", $recentRequestsBlock);
	$smarty->assign("jsIncludes", $jsIncludes);
	$smarty->display($PATH['physical']['templates'] . '/lookup.tpl');