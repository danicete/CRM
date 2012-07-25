<?php

	if(isset($_GET) || isset($_POST)) {

		if (isset($_REQUEST['t'])) {

			if($_REQUEST['t'] == 'newrequest') {

				$ret = false;

				$formData = $_POST;
				$requestedUnitIDs = array();

				foreach($formData as $key=>$value) {
					if($key == "units") {
						foreach($value as $unit) {
							$type = intval(substr($unit['unitID'], -1));
							if (isset($unit['unitOptions'])) {
								$option1 = in_array(1, $unit['unitOptions']) ? 1 : 0;
								$option2 = in_array(2, $unit['unitOptions']) ? 1 : 0;
								$option3 = in_array(3, $unit['unitOptions']) ? 1 : 0;
								$option4 = in_array(4, $unit['unitOptions']) ? 1 : 0;
								$option5 = in_array(5, $unit['unitOptions']) ? 1 : 0;
							}
							$details = (isset($unit['details']) && $unit['details'] != "") ? $unit['details'] : "";
							$format = (isset($unit['format']) && $unit['format'] != "") ? $unit['format'] : "";

							$data = array(
								'unit_type'		=> $type,
								'option1'		=> $option1,
								'option2'		=> $option2,
								'option3'		=> $option3,
								'option4'		=> $option4,
								'option5'		=> $option5,
								'details'		=> $details,
								'format'		=> $format,
								'date_created'	=> date('Y-m-d H:i:s')
							);
							$db->insert('unit_requests', $data);

							$requestedUnitIDs[] = $db->lastInsertId();
						}	
					} else
						$$key = $value;

				}

				$requestData = array(
					'campaignName'	=> $campaignName,
					'advertiser'	=> $advertiser,
					'agency'		=> $agency,
					'curseSalesRep'	=> $curseSalesRep,
					'launchDate'	=> date('Y-m-d', strtotime($launchDate)),
					'timeline1'		=> date('Y-m-d', strtotime($timeline1)),
					'timeline2'		=> date('Y-m-d', strtotime($timeline2)),
					'timeline3'		=> date('Y-m-d', strtotime($timeline3)),
					'timeline4'		=> date('Y-m-d', strtotime($timeline4)),
					'timeline5'		=> date('Y-m-d', strtotime($timeline5)),
					'summary'		=> $creativeUnits,
					'ftpinfo'		=> $ftpinfo,
					'unitDetails'	=> implode(", ", $requestedUnitIDs),
					'date_created'	=> date('Y-m-d H:i:s')
				);
				$db->insert('requests', $requestData);

				$requestID = $db->lastInsertId();
				$formData['formID'] = $requestID;

				$where = "id = " . implode($requestedUnitIDs, " OR id = ");
				$data = array(
					'request_id'	=> $requestID
				);
				$db->update('unit_requests', $data, $where);

				if ($requestID) {

					// If the request has been properly saved,
					// generate a PIN that does not currently exist.
					do {
						$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
						$pin = '';
						for ($i = 0; $i < 5; $i++) {
						    $pin .= $characters[rand(0, strlen($characters) - 1)];	
						}
						$result = $db->fetchAll("SELECT * FROM requests WHERE pin = ?", $pin);
						$rowCount = count($result);
					} while($rowCount > 0);
				}
				$formData['pin'] = $pin;
				
				$where = "id = " . $requestID;
				$data = array(
					'pin'	=> $pin
				);
				$db->update('requests', $data, $where);

				$linkData = array(
					'user_id' 		=> $auth->userID,
					'request_id' 	=> $requestID,
					'date_created'	=> date('Y-m-d H:i:s')
				);
				$db->insert('user_request_link', $linkData);

				$followers = $formData['followers'];
				$followerEmails;
				if(is_array($followers) && !empty($followers)) {
					foreach($followers as $f) {
						$linkData = array(
							'user_id'		=> $f,
							'request_id'	=> $requestID,
							'date_created'	=> date('Y-m-d H:i:s')
						);
						$db->insert('user_request_link', $linkData);
						$user = $db->fetchRow("SELECT * FROM users WHERE id = ?", $f);
						$followerEmails .= $user['email'] . ', ';
					}
				}
				if (SITE_MODE == "production") {
					$mailOptions = array(
						'submitterEmail' 	=> $auth->username,
						'followerEmails'	=> $followerEmails,
						'pin'				=> $pin	    
					);
					globalFunc::sendEmail("newRequest", $formData, $emailOptions, $db, $smarty);
				}


				echo json_encode(array("status" => "success", "forwardURL" => $PATH['http']['siteRoot'] . '/finished/?rpin=' . $pin . '&view=/view/?rpin='.$pin));
				

			} else if ($_REQUEST['t'] == 'login') {

			}
		}
	}