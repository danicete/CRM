<?php


	if(isset($_GET)) {

		if(isset($_GET['rpin']) && $_GET['rpin'] != "") {

			$requestPIN = mysql_escape_string($_GET['rpin']);

			$query = "SELECT * FROM requests WHERE pin = '$requestPIN'";
			$result = $db->fetchAll($query);

			if (count($result) > 0) {
				foreach($result as $row) {
					if ($requestPIN === $row['pin']) {
						$requestFound = 1;

						$requestRow = $row;
						$requestID = $row['id'];
						$unitIDs = explode(',', $row['unitDetails']);
						$unitDetails = array();

						$query = "SELECT * FROM users WHERE id = " . $requestRow['curseSalesRep'];
						$userRow = $db->fetchRow($query);

						if(count($unitIDs)>1) {
							foreach($unitIDs as $unit) {
								$query = "SELECT * FROM unit_requests WHERE id = $unit";
								$result = $db->fetchAll($query);
								if (count($result) > 0) {
									$reqRow = $result[0];
									$newUnit = array();

									$query = "SELECT * FROM unit_types WHERE id = '" . $reqRow['unit_type'] . "'";
									$typeRow = $db->fetchRow($query);

									$newUnit['id'] = $reqRow['id'];
									$newUnit['name'] = $typeRow['name'];
									$newUnit['optionCount'] = $typeRow['options_count'];
									for($i = 1; $i <= (int)$typeRow['options_count']; $i++) {
										$newUnit['timeline'][($i-1)] = substr($typeRow['timeline'.$i], 0, -1);
									}
									for($j = 1; $j < 6; $j++) {
										$newUnit['options'][($j-1)] = $reqRow['option'.$j];
									}
									$newUnit['details'] = $reqRow['details'];
									$newUnit['format'] = $reqRow['format'];
									
									// Mocks Info
									$unitMocks = array();

									$query = "SELECT * FROM media_unit_link WHERE unit_id = $unit ORDER BY date_created ASC";
									$result = $db->fetchAll($query);
									if(count($result) > 0) {
										$mediaIDs = array();
										foreach($result as $r) {
											$mediaIDs[] = $r['media_id'];
										}

										$query = "SELECT * FROM media WHERE id = " . implode(' OR id = ', $mediaIDs);
										$result = $db->fetchAll($query);
										if(count($result) > 0) {
											$c = 0;
											foreach($result as $media) {
												$mock = array(
													'pageName'  => $c == 0 ? 'Initial Mock' : 'Revision ' . $c,
									 				'title'		=> $media['name'],
									 				'imgPath'	=> $PATH['http']['assets'] . '/files/' . $media['file_name'] . '.' . $media['file_ext'],
									 				'thumbPath' => $PATH['http']['assets'] . '/thumbnails/' . $media['file_name'] . '.' . $media['file_ext']
								 				);
								 				$unitMocks[] = $mock;
								 				$c++;
											}
										}
									}
									
									$newUnit['mocks'] = $unitMocks;
									$unitDetails[] = $newUnit;
								}
							}
						}

						// Is this person logged in. And if so, can they see the controls? (is follower?)
						if($auth->loggedIn) {
							$result = $db->fetchAll("SELECT * FROM user_request_link WHERE user_id = " . $auth->userID . " AND request_id = " . $requestID);
							if(count($result)>0)
								$showControls = 1;
						} else
							$showControls = 0;
						
						$smarty->assign("showControls", $showControls);
						$smarty->assign("unitDetails", $unitDetails);
						$smarty->assign("requestRow", $requestRow);
						$smarty->assign("curseSalesRep", $userRow['name']);

					} else
						$requestFound = 0;	
				}
				
			} else {
				$requestFound = 0;

			}

			$smarty->assign("requestPIN", $requestPIN);
		}

	}

	$smarty->assign('requestFound', $requestFound);
	$smarty->assign('requestView', $PATH['physical']['templates'] . '/_components/requestView.tpl');
	$smarty->display($PATH['physical']['templates'] . '\view.tpl');