<?php

	$jsIncludes[] = "libs/jqueryFileUpload/vendor/jquery.ui.widget";
	$jsIncludes[] = "libs/jqueryFileUpload/jquery.iframe-transport";
	$jsIncludes[] = "libs/jqueryFileUpload/jquery.fileupload";

	$pin = $_GET['rpin'];
	$pin = mb_convert_encoding($pin, 'UTF-8', 'UTF-8');
	$pin = htmlentities($pin, ENT_QUOTES, 'UTF-8');

	$query = "SELECT * FROM requests WHERE pin = ?";
	$result = $db->fetchAll($query, $pin);

	if(count($result) > 0) {

		$request = $result[0];

		$query = "SELECT * FROM unit_types";
		$unitTypes = $db->fetchAll($query);

		$query = "SELECT * FROM unit_requests WHERE request_id = ?";
		$units = $db->fetchAll($query,$request['id']);

		$mocksInfo = array();
		foreach($units as $unit) {

			$unitType = array(
				'id'	=> $unit['id'],
				'name' => $unitTypes[$unit['unit_type']-1]['name'],
				'mocks'	=> array()
			);
			$query = "SELECT * FROM media_unit_link WHERE unit_id = " . $unit['id'];
			$result = $db->fetchAll($query);

			if (count($result) > 0) {
				$mediaIDs = array();
				$linkIDs = array();
				foreach($result as $r) {
					$mediaIDs[] = $r['media_id'];
					$linkIDs[] = $r['id'];
				}

				$query = "SELECT * FROM media WHERE id = " . implode(' OR id = ', $mediaIDs);
				$result = $db->fetchAll($query);

				if (count($result) > 0) {
					$count = 0;
					foreach($result as $media) {
						$mockInfo = array(
							'media_id'	=> $media['id'],
							'link_id'	=> $linkIDs[$count],
							'title' 	=> $media['name'],
							'imgPath' 	=> $PATH['http']['assets'] . '/files/' . $media['file_name'] . '.' . $media['file_ext'],
							'thumbPath' => $PATH['http']['assets'] . '/thumbnails/' . $media['file_name'] . '.' . $media['file_ext']
						);
						$unitType['mocks'][] = $mockInfo;
						$count++;
					}
				}
			}
			$mocksInfo[] = $unitType;
		}

		//$query = "SELECT *, ur.id FROM unit_requests ur LEFT JOIN unit_types ut ON ur.unit_type = ut.id WHERE ur.id = " . implode(' OR ur.id = ', $unitIDs);
		$query = "SELECT *, ur.id FROM unit_requests ur LEFT JOIN unit_types ut ON ur.unit_type = ut.id WHERE ur.request_id = " . $request['id'];
		$result = $db->fetchAll($query);

		$smarty->assign("unitsInfo", $result);
		$smarty->assign("requestPin", $pin);
		$smarty->assign("mocksInfo", $mocksInfo);
		$smarty->assign("requestID", $request['id']);
		$smarty->assign("highlightID", isset($_GET['highlight']) ? intval($_GET['highlight']) : 0);
	}

	//print_r($mocksInfo);
	$smarty->assign("jsIncludes", $jsIncludes);
	$smarty->assign("removeMockDialog", $PATH['physical']['templates'] . '/edit/removeMockDialog.tpl');
	$smarty->display($PATH['physical']['templates'] . '/edit/submit-mocks.tpl');