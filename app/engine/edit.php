<?php

	$jsIncludes[] = "edit";

	// Edit page and all subpages require authentication
	if(!$auth->checkAuth($db)) {
		$queryString;
		if (isset($_GET) && isset($_GET['rpin']) && $_GET['rpin'] != "")
			$queryString = '?f=/edit/?rpin=' . $_GET['rpin'];
		header("Location: " . $PATH['http']['siteRoot'] . '/login/' . $queryString);
		exit();
	}

	// load up subdirectory
	if (isset($parts[3]) && $parts[3] != '') {
		include($PATH['physical']['app'] . '/engine/edit/' . $parts[3] . '.php');
		exit();
	}

	if(isset($_GET['rpin'])) {

		$auth->writeAuthLog("viewed edit page", $db);

		$pin = $_GET['rpin'];
		$pin = mb_convert_encoding($pin, 'UTF-8', 'UTF-8');
		$pin = htmlentities($pin, ENT_QUOTES, 'UTF-8');

		$result = $db->fetchAll($db->quoteInto("SELECT * FROM requests WHERE pin = ?", $pin));

		if (count($result) > 0) {
			$reqRow = $result[0];
			$reqID = $reqRow['id'];

			$result = $db->fetchAll("SELECT * FROM user_request_link WHERE request_id = " . intval($reqID) . " AND user_id = " . intval($auth->userID));

			if (count($result) > 0) {

				$result = $db->fetchAll("SELECT * FROM users WHERE id = ?", intval($reqRow['curseSalesRep']));
				if (count($result) > 0)
					$userRow = $result[0];

				// Process the data
				// Campaign
				$requestData = array(
					'id'				=> $reqRow['id'],
					'campaignName'		=> $reqRow['campaignName'],
					'advertiser'		=> $reqRow['advertiser'],
					'agency'			=> $reqRow['agency'],
					'curseSalesRep'		=> $userRow['name'],
					'launchDate'		=> date('m/d/Y',strtotime($reqRow['launchDate'])),
					'timeline1'			=> $reqRow['timeline1'],
					'timeline2'			=> $reqRow['timeline2'],
					'timeline3'			=> $reqRow['timeline3'],
					'timeline4'			=> $reqRow['timeline4'],
					'timeline5'			=> $reqRow['timeline5'],
					'summary'			=> $reqRow['summary'],
					'ftpinfo'			=> $reqRow['ftpinfo'],
					'pin'				=> $reqRow['pin']
				);
				$campaignTitles = array(
					"Campaign Name",
					"Advertiser",
					"Agency",
					"Curse Sales Rep",
					"Launch Date",
					"campaignName",
					"advertiser",
					"agency",
					"curseSalesRep",
					"launchDate"
				);
				$timelineTitles = array(
					"Curse Provides 1st Mockups",
					"Client Provides Feedback",
					"Curse Provides Final Mockups",
					"Client Provides Final Feedback",
					"Initial Campaign Launch"
				);
				$unitTitles = array();

				$campaignInfo = array();
				$timelineInfo = array();
				$unitsInfo	  = array();
				$requestValues = array_values($requestData);
				$requestKeys = array_keys($requestData);

				$runningCount = 0;
				$campCount  = 0;
				for ($i = 0; $i < count($campaignTitles)/2; $i++) {
					// Temporary omission of launchDate
					if($i != 4) {
						$campaignInfo[$i] = array(
							"title"			=> $campaignTitles[$i],
							"value"			=> $requestValues[$i+1],
							"fieldDOMId"	=> $campaignTitles[((count($campaignTitles)/2)+$i)],
							"type"			=> ($requestKeys[$i+1] == "curseSalesRep") ? "salesRep" : (($requestKeys[$i+1] == "launchDate") ? "date" : "text"),
							"userID"		=> ($campaignTitles[((count($campaignTitles)/2)+$i)] == "curseSalesRep") ? $reqRow['curseSalesRep'] : ""
						);
					}
					$runningCount = $campCount = $i;
				}
				for ($i = 0; $i < count($timelineTitles); $i++) {
					$timelineInfo[$i] = array(
						"title"			=> $timelineTitles[$i],
						"value"			=> $requestValues[$campCount+$i+2],
						"fieldDOMId"	=> "timeline" . ($i+1),
						"type"			=> "date"
					);
					$runningCount = $campCount + $i;
				}

				// Request Units Info
				$result = $db->fetchAll("SELECT * FROM unit_types");
				if (count($result) > 0)
					$unitTypesResult = $result;

				$unitTypeInfo = array();
				foreach($unitTypesResult as $row) {
					$unitType = array(
						'id' => $row['id'],
						'name' => $row['name'],
						'options_count' => $row['options_count'],
						'options'	=> array()
					);
					for ($i = 0; $i < 4; $i++) {
						$unitType['options'][$i] = $row['timeline'.($i+1)];
					}
					$unitTypeInfo[] = $unitType;
				}

				$result = $db->fetchAll("SELECT * FROM unit_requests WHERE request_id = ?", intval($reqRow['id']));

				if (count($result) > 0) {
					foreach($result as $row) {
						$unit = array(
							'id'		=> $row['id'],
							'unit_type'	=> $row['unit_type'],
							'name'		=> $unitTypeInfo[(intval($row['unit_type'])-1)]['name'],
							'details'	=> $row['details'],
							'options_count'	=> $unitTypeInfo[(intval($row['unit_type'])-1)]['options_count'],
							'unitOptions'	=> array(),
							'optionquestion' => array()
						);
						for ($i = 0; $i < 4; $i++) {
							$unit['unitOptions'][$i] = $row['option'.($i+1)];
							$unit['optionquestion'][$i] = $unitTypeInfo[(intval($row['unit_type'])-1)]['options'][$i];
						}
						$unitsInfo[] = $unit;
					}
				}
				//print_r($unitsInfo);
				$smarty->assign("requestPin", $pin);
				$smarty->assign("requestData", $requestData);
				$smarty->assign("campaignInfo", $campaignInfo);
				$smarty->assign("timelineInfo", $timelineInfo);
				$smarty->assign("unitTypeInfo", $unitTypeInfo);
				
				$smarty->assign("unitsInfo", $unitsInfo);

				$smarty->assign("addRequestDialog", $PATH['physical']['templates'] . '/_components/addRequestDialog.tpl');
				$smarty->assign("removeUnitDialog", $PATH['physical']['templates'] . '/_components/removeUnitDialog.tpl');
				$smarty->assign("unitDOMblock", $PATH['physical']['templates'] . '/_blocks/unitDOMblock.tpl');
				$editPageContent = $smarty->fetch($PATH['physical']['templates'] . '/edit-form.tpl');
				
			} else 
				$editPageContent = $smarty->fetch($PATH['physical']['templates'] . '/edit-notfollower.tpl');

		} else
			$editPageContent = $smarty->fetch($PATH['physical']['templates'] . '/edit-notfound.tpl');


		$smarty->assign("editPageContent", $editPageContent);
		
		$smarty->assign('jsIncludes', $jsIncludes);
		$smarty->display($PATH['physical']['templates'] . '/edit.tpl');
		exit();
	}

	if (isset($_POST)) {

		if (isset($_POST['saveform']) && $_POST['saveform'] == 1) {

			$formData = $_POST['formData'];

			$requestedUnitIDs = array();

			foreach($formData as $key=>$value) {
				if($key == "units") {
					
					foreach($value as $unit) {
						if($unit['unitID'] > 0) {

							$unitData = array(
								'option1'	=> in_array(1, (isset($unit['unitOptions']) ? $unit['unitOptions'] : array())) ? 1 : 0,
								'option2'	=> in_array(2, (isset($unit['unitOptions']) ? $unit['unitOptions'] : array())) ? 1 : 0,
								'option3'	=> in_array(3, (isset($unit['unitOptions']) ? $unit['unitOptions'] : array())) ? 1 : 0,
								'option4'	=> in_array(4, (isset($unit['unitOptions']) ? $unit['unitOptions'] : array())) ? 1 : 0,
								'option5'	=> in_array(5, (isset($unit['unitOptions']) ? $unit['unitOptions'] : array())) ? 1 : 0,
								'details'	=> (isset($unit['details']) && $unit['details'] != "") ? $unit['details'] : ""
							);
							$db->update('unit_requests', $unitData, 'id = ' . $unit['unitID']);

							$requestedUnitIDs[] = $unit['unitID'];

						} else {
							$type = intval($unit['unit_type']);
							if (isset($unit['unitOptions'])) {
								$option1 = in_array(1, $unit['unitOptions']) ? 1 : 0;
								$option2 = in_array(2, $unit['unitOptions']) ? 1 : 0;
								$option3 = in_array(3, $unit['unitOptions']) ? 1 : 0;
								$option4 = in_array(4, $unit['unitOptions']) ? 1 : 0;
								$option5 = in_array(5, $unit['unitOptions']) ? 1 : 0;
							}
							$details = (isset($unit['details']) && $unit['details'] != "") ? $unit['details'] : "";

							$data = array(
								'request_id'		=> $formID,
								'unit_type'			=> $type,
								'option1'			=> $option1,
								'option2'			=> $option2,
								'option3'			=> $option3,
								'option4'			=> $option4,
								'option5'			=> $option5,
								'details'			=> $details,
								'date_created'		=> date('Y-m-d H:i:s')
							);
							$db->insert('unit_requests', $data);

							$requestedUnitIDs[] = $db->lastInsertId();
						}
						
					}

					// Clean up units
					$where = "request_id = " . $formData['formID'] . " AND NOT id = " . implode(' AND NOT id = ', $requestedUnitIDs);
					$db->delete('unit_requests', $where);

				} else
					$$key = $value;

			}

			// Update request info
			$requestData = array(
				'campaignName'	=> $campaignName,
				'advertiser'	=> $advertiser,
				'agency'		=> $agency,
				'curseSalesRep'	=> $curseSalesRep,
				'timeline1'		=> date('Y-m-d', strtotime($timeline1)),
				'timeline2'		=> date('Y-m-d', strtotime($timeline2)),
				'timeline3'		=> date('Y-m-d', strtotime($timeline3)),
				'timeline4'		=> date('Y-m-d', strtotime($timeline4)),
				'timeline5'		=> date('Y-m-d', strtotime($timeline5)),
				'summary'		=> $summary,
				'ftpinfo'		=> $ftpinfo
			);
			$result = $db->update('requests', $requestData, $db->quoteInto("id = ?", $formData['formID']));
			
			// $q = $profiler->getLastQueryProfile();
			// echo $db->quoteInto($q->getQuery(), $q->getQueryParams());

			if (SITE_MODE == "production") {
				$request = $db->fetchRow("SELECT pin FROM requests WHERE id = ?", $formData['formID']);
				$emailOptions = array(
					'pin'		=> $request['pin'],
					'path'		=> $PATH 
				);
				globalFunc::sendEmail("editRequest", $formData, $emailOptions, $db, $smarty);
			}
			//echo $query;
			if (true) {
				echo json_encode(array('status' => 'success', 'savedURL' => $PATH['http']['siteRoot'] . '/saved/?viewPin=' . $requestPin));
			} else {
				echo json_encode(array('status' => 'failed'));
			}

		} else if (isset($_POST['removeUnit']) && $_POST['removeUnit'] == 1) {

			$unitID = $_POST['unitID'];

			$db->delete('unit_requests', 'id = ' . $unitID);
		}
	}

	