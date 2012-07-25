<?php

	if(isset($_POST['ajax']) && intval($_POST['ajax']) == 1) {

		$con = mysql_connect(DB_HOST, DB_USER, DB_PASS);

		if(!$con)
			die("DB connection failed");

		$db = mysql_select_db(DB_NAME, $con);

		// Get the followers' user info based on Request PIN
		$query = "SELECT * FROM requests WHERE pin = '" . $_GET['rpin'] . "'";
		$result = mysql_query($query);
		if (mysql_num_rows($result) > 0) {
			$reqRow = mysql_fetch_assoc($result);
			$query = "SELECT * FROM user_request_link WHERE request_id = ". intval($reqRow['id']);
			$result = mysql_query($query);
			if (mysql_num_rows($result) > 0) {
				$followerIDs = array();
				while($row = mysql_fetch_assoc($result)) {
					$followerIDs[] = $row['user_id'];
				}
				$query = "SELECT * FROM users WHERE id = ". implode(' OR id = ', $followerIDs) . " ORDER BY id ASC";
				$result = mysql_query($query);
				if (mysql_num_rows($result) > 0) {
					$usersInfo = array();
					while($row = mysql_fetch_assoc($result)) {
						$usersInfo[] = $row;
					}
					$smarty->assign("requestPIN", $reqRow['pin']);
					$smarty->assign("usersInfo", $usersInfo);
				}
			}
		} else {
			die("Couldn't find that pin");
		}

		$output = $smarty->fetch($PATH['physical']['templates'] . '/edit/view-followers-ajax.tpl');

		echo json_encode(array('status' => 'success', 'output' => $output));

	} else if (isset($_GET)) {

		if (isset($_GET['rpin'])) {


			$con = mysql_connect(DB_HOST, DB_USER, DB_PASS);

			if(!$con)
				die("DB connection failed");
 
			$db = mysql_select_db(DB_NAME, $con);

			// Get the followers' user info based on Request PIN
			$query = "SELECT * FROM requests WHERE pin = '" . $_GET['rpin'] . "'";
			$result = mysql_query($query);
			if (mysql_num_rows($result) > 0) {
				$reqRow = mysql_fetch_assoc($result);
				$query = "SELECT * FROM user_request_link WHERE request_id = ". intval($reqRow['id']);
				$result = mysql_query($query);
				if (mysql_num_rows($result) > 0) {
					$followerIDs = array();
					while($row = mysql_fetch_assoc($result)) {
						$followerIDs[] = $row['user_id'];
					}
					$query = "SELECT * FROM users WHERE id = ". implode(' OR id = ', $followerIDs) . " ORDER BY id ASC";
					$result = mysql_query($query);
					//echo $query;
					if (mysql_num_rows($result) > 0) {
						$usersInfo = array();
						while($row = mysql_fetch_assoc($result)) {
							$usersInfo[] = $row;
						}

						$smarty->assign("requestPin", $reqRow['id']);
						$smarty->assign("usersInfo", $usersInfo);
					}
				}
			} else {
				die("Couldn't find that pin");
			}

			
		}

		$smarty->display($PATH['physical']['templates'] . '/edit/view-followers.tpl');
	}