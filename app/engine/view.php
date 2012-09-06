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
						$unitDetails = array();

						$query = "SELECT * FROM users WHERE id = " . $requestRow['curseSalesRep'];
						$userRow = $db->fetchRow($query);

						$unitDetails = array();
						$unitTypes = $db->fetchAll("SELECT * FROM unit_types");

						$units = $db->fetchAll('SELECT * FROM unit_requests WHERE request_id = ' . $requestID);
						if(!empty($units)) {
							foreach($units as $unit) {
								$newUnit 				= array();
								$typeIndex				= (int)$unit['unit_type'] - 1;
								
								$newUnit['id'] 			= $unit['id'];
								$newUnit['name']		= $unitTypes[$typeIndex]['name'];
								$newUnit['optionCount']	= $unitTypes[$typeIndex]['options_count'];
								$newUnit['timeline'] 	= array();
								for($i = 1; $i <= $newUnit['optionCount']; $i++) {
									$newUnit['timeline'][($i-1)] = substr($unitTypes[$typeIndex]['timeline'.$i], 0, -1);
								}
								for($j = 1; $j < 6; $j++) {
									$newUnit['options'][($j-1)] = $unit['option'.$j];
								}
								$newUnit['details'] = $unit['details'];

								// Mocks Info
								$unitMocks = array();

								$query = "SELECT * FROM media_unit_link WHERE unit_id = " . $unit['id'] . " ORDER BY date_created ASC";
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
								 				'imgPath'	=> $PATH['http']['siteRoot'] . '/media/' . $media['name'] . '.' . $media['file_ext'],
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

						// Is this person logged in. And if so, can they see the controls? (is follower?)
						if($auth->loggedIn) {
							$result = $db->fetchAll("SELECT * FROM user_request_link WHERE user_id = " . $auth->userID . " AND request_id = " . $requestID);
							if(count($result)>0)
								$showControls = 1;
							else
								$showControls = 0;
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
	
	if($requestFound)
		$requestContent = $smarty->fetch($PATH['physical']['templates'] . '/_components/requestView.tpl');
	else
		$requestContent = $smarty->fetch($PATH['physical']['templates'] . '/_components/requestNotFound.tpl');

	$smarty->assign('requestContent', $requestContent);
	$smarty->display($PATH['physical']['templates'] . '\view.tpl');