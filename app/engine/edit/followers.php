<?php

	if (isset($_POST['addFollowersAjax']) && !empty($_POST['addFollowersAjax'])) {

		$pin = $_POST['rpin'];
		$pin = mb_convert_encoding($pin, 'UTF-8', 'UTF-8');
		$pin = htmlentities($pin, ENT_QUOTES, 'UTF-8');

		$query = "SELECT * FROM requests WHERE pin = ?";
		$result = $db->fetchAll($query, $pin);
		if (count($result)>0) {
			$reqRow = $result[0];
			$query = "SELECT * FROM user_request_link WHERE request_id = ?";
			$result = $db->fetchAll($query, $reqRow['id']);
			if(count($result) > 0) {
				$currentFollowers = array();
				foreach ($result as $row) {
					$currentFollowers[] = $row['user_id'];
				}
				$query = "SELECT * FROM users WHERE NOT id = ". implode(" AND NOT id = ", $currentFollowers);
				$result = $db->fetchAll($query);
				if (count($result) > 0) {
					$usersInfo = array();
					foreach ($result as $row) {
						$usersInfo[] = $row;
					}
					$smarty->assign("usersInfo", $usersInfo);
					$smarty->assign("reqRow", $reqRow);
					$output = $smarty->fetch($PATH['physical']['templates'] . '/edit/followers/addFollowers-ajax.tpl');
					echo json_encode(array("status" => "success", "output" => $output));
				}
			}
		} else
			echo json_encode(array("status" => "failed", "message" => "Could not find a request with that PIN"));

	} else if(isset($_POST['addFollowers']) && !empty($_POST['addFollowers'])) {

		$formID = intval($_POST['formID']);
		$followers = $_POST['followers'];

		// add
		foreach ($followers as $f) {
			$query = "INSERT INTO user_request_link (user_id, request_id, date_created) VALUES ( ".$f.", ".$formID.", '" . date("Y-m-d H:i:s") . "')";
			$result = $db->query($query);
		}

		echo json_encode(array("status" => "success"));
		

	} else if(isset($_POST['removeFollower']) && !empty($_POST['removeFollower'])) {

		$followerID = $_POST['followerID'];
		$formID = $_POST['formID'];

		$db->delete('user_request_link', "user_id = $followerID AND request_id = $formID");

		echo json_encode((array("status"=>"success")));

	} else if(isset($_POST['unfollow']) && !empty($_POST['unfollow'])) {

		$userID = intval($_GET['userid']);
		$requestID = intval($_GET['requestid']);

		$db->delete('user_request_link', "user_id = $userID AND request_id = $requestID");

		echo json_encode(array("status"=>"success"));

	} else if(isset($_GET['rpin']) && !empty($_GET['rpin'])) {

		$pin = $_GET['rpin'];
		$pin = mb_convert_encoding($pin, 'UTF-8', 'UTF-8');
		$pin = htmlentities($pin, ENT_QUOTES, 'UTF-8');

		$query = "SELECT * FROM requests WHERE pin = ?";
		$result = $db->fetchAll($query, $pin);

		if (count($result) > 0) {
			$reqRow = $result[0];
			$requestID = $reqRow['id'];

			$query = "SELECT * FROM user_request_link WHERE request_id = ?";
			$result = $db->fetchAll($query, $requestID);
			if (count($result) > 0) {
				$followerIDs = array();
				foreach ($result as $row) {
					$followerIDs[] = $row['user_id'];
				}
				$query = "SELECT * FROM users WHERE id = ". implode(' OR id = ', $followerIDs) . " ORDER BY id ASC";
				$result = $db->fetchAll($query);
				if (count($result) > 0) {
					$usersInfo = array();
					foreach ($result as $row) {
						$usersInfo[] = $row;
					}
					$smarty->assign("usersInfo", $usersInfo);
				}
			}
			$smarty->assign("reqRow", $reqRow);
		}
		$smarty->assign("rpin", $pin);
		$smarty->display($PATH['physical']['templates'] . '/edit/followers.tpl');
	} else {
		header('Location: ' . $PATH['http']['siteRoot']);
		exit();
	}
	