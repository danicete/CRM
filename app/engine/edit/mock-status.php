<?php

	if(isset($_POST['approve']) && !empty($_POST['approve'])) {

		$mediaID = $_POST['mediaID'];

		$data = array(
			'approved'	=> 1
		);
		$r = $db->update('media', $data, $db->quoteInto('where = ?', $mediaID));

		if ($r > 0)
			echo json_encode(array("status"=>"success"));
		else
			echo json_encode(array("status"=>"error", "message" => "Media status was not updated by DB call."));

	} else if(isset($_POST['revision']) && !empty($_POST['revision'])) {

		$mediaID = $_POST['mediaID'];

		$data = array(
			'approved'	=> 2
		);
		$r = $db->update('media', $data, $db->quoteInto('where = ?', $mediaID));

		if ($r > 0)
			echo json_encode(array("status"=>"success"));
		else
			echo json_encode(array("status"=>"error", "message" => "Media status was not updated by DB call."));

	} else if(isset($_POST['notes']) && !empty($_POST['notes'])) {

		$mediaID = $_POST['mediaID'];

		$result = $db->fetchAll($db->quoteInto("SELECT * FROM notes WHERE media_id = ? ORDER BY date_created", $mediaID));

		foreach($result as &$r) {
			$userID = $r['user_id'];
			$userInfo = $db->fetchRow("SELECT name FROM users WHERE id = " . $userID);
			$r['user_name'] = $userInfo['name'];
		}

		if(count($result)>0) {
			echo json_encode(array("status"=>"success", "notes" => $result);
		} else {
			echo json_encode(array("status"=>"success", "notes" => array()));
		}

	}