<?php

	if (isset($_POST)) {

		if (isset($_POST['fetchUnitInfo']) && $_POST['fetchUnitInfo'] == 1) {

			$result = $db->fetchAll("SELECT * FROM unit_types WHERE id = ?", intval($_POST['type_id']));

			if (count($result) > 0) {

				$typeInfo = $result[0];

				$typeInfo['options'] = array();
				for ($i = 0; $i < 4; $i++) {
					$typeInfo['options'][$i] = $typeInfo['timeline'.($i+1)];
				}

				$smarty->assign("typeInfo", $typeInfo);
				$output = $smarty->fetch($PATH['physical']['templates'] . '\_editPages\requestDialogContent.tpl');

			} else
				$output = "<div class='addRequestDialogContent'><p>Cat's outta the bag.</p></div>";

			echo json_encode(array("status" => "success", "output" => $output));

		} else if (isset($_POST['buildDOMUnit']) && $_POST['buildDOMUnit'] == 1) {

			$unitData = $_POST['unitData'];
			$unitType = $_POST['unitData']['unit_type'];

			$result = $db->fetchAll("SELECT * FROM unit_types WHERE id = ?", intval($unitType));

			if (count($result) > 0) {
				$row = $result[0];

				$unitData['optionquestion'] = array();

				for ($i = 0; $i < 5; $i++) {
					if (!empty($row['timeline'.($i+1)]))
						$unitData['optionquestion'][]= $row['timeline'.($i+1)];
				}
				
				if(!isset($unitData['unitOptions']))
					$unitData['unitOptions'] = array();
				$smarty->assign('unit', $unitData);
				$output = $smarty->fetch($PATH['physical']['templates'] . '/_blocks/unitDOMblock.tpl');
				echo json_encode(array('status' => 'success', 'output' => $output));
			} else 
				echo json_encode(array('status' => 'failed', 'message' => 'Something bunked'));

			
		} else if(isset($_POST['salesRepPopup']) && $_POST['salesRepPopup'] == 1) {

			$formID = $_POST['formID'];
			$notID = $_POST['currentRep'];

			$result = $db->fetchAll("SELECT * FROM user_request_link WHERE request_id = " . $formID . " AND NOT user_id = " . $notID);

			if (count($result) > 0) {
				$userIDs = array();
				foreach ($result as $link) {
					$userIDs[] = $link['user_id'];
				}

				$result = $db->fetchAll("SELECT * FROM users WHERE id = " . implode(' OR id = ', $userIDs));
			} else
				$result = array();
			

			$smarty->assign('salesRepInfo', $result);
			$output = $smarty->fetch($PATH['physical']['templates'] . '/_blocks/salesRepPopup.tpl');
			echo json_encode(array('status' => 'success', 'hasOptions' => (count($result) > 0), 'output' => $output));

		}

	}