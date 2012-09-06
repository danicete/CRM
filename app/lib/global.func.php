<?php


class globalFunc {


	public static function sendEmail($type, $data, $options, $db, $smarty) {

		$smarty->assign("formData", $data);
		
		// Fetch appropriate template
		switch($type) {

			case "newRequest":

			$query = "SELECT * FROM users WHERE isAdmin = 1";
			$result = $db->fetchAll($query);

			$userName = $db->fetchRow("SELECT name FROM users WHERE id = " . $data['curseSalesRep']);
			$smarty->assign('salesRepName', $userName['name']);

			$adminEmails = array();
			foreach($result as $admin) {
				$adminEmails[] = $admin['email'];
			}

			$to = $options['followerEmails'] . $options['submitterEmail'];
			$subject = "CREATIVE REQUEST:". $data['campaignName'] ." PIN:" . $data['pin'];
			$message = $smarty->fetch($options['path']['physical']['templates'] . '/_components/emails/newRequest-email.tpl');
			$headers = (isset($options['headers']) ? $options['headers'] :  
						'From: creativerequest@curse.com' . "\r\n" .
					    'Reply-To: creativerequest@curse.com' . "\r\n" .
					    'Content-Type: text/html; charset=ISO-8859-1\r\n' . "\r\n" .
					    'X-Mailer: PHP/' . phpversion()); 
			mail($to, $subject, $message, $headers);

			break;

			case "editRequest":

				$query = "SELECT * FROM user_request_link WHERE request_id = " . $data['formID'];
				$result = $db->fetchAll($query);

				$followers = array();
				foreach($result as $follower) {
					$followers[] = $follower['user_id'];
				}

				$query = "SELECT * FROM users WHERE isAdmin = 1 OR id = " . implode(' OR id = ', $followers);
				$result = $db->fetchAll($query);

				$emails = array();
				foreach($result as $user) {
					$emails[] = $user['email'];
				}

				$smarty->assign("requestPin", $options['pin']);
				$to = implode(', ', $emails);
				$subject = "CREATIVE REQUEST:". $data['campaignName'] ." PIN:" . $data['pin'];
				$message = $smarty->fetch($options['path']['physical']['templates'] . '/_components/emails/editRequest-email.tpl');
				$headers = (isset($options['headers']) ? $options['headers'] :  
							'From: creativerequest@curse.com' . "\r\n" .
						    'Reply-To: creativerequest@curse.com' . "\r\n" .
						    'Content-Type: text/html; charset=ISO-8859-1\r\n' . "\r\n" .
						    'X-Mailer: PHP/' . phpversion()); 
				mail($to, $subject, $message, $headers);
			break;

			case "mockSubmitted":

				$query = "SELECT * FROM user_request_link WHERE request_id = " . $data['id'];
				$result = $db->fetchAll($query);

				$followers = array();
				foreach($result as $follower) {
					$followers[] = $follower['user_id'];
				}

				$query = "SELECT * FROM users WHERE isAdmin = 1 OR id = " . implode(' OR id = ', $followers);
				$result = $db->fetchAll($query);

				$emails = array();
				foreach($result as $user) {
					$emails[] = $user['email'];
				}
				$smarty->assign('mediaID', $options['mediaID']);
				$to = implode(', ', $emails);
				$subject = "CREATIVE REQUEST:". $data['campaignName'] ." PIN:" . $data['pin'];
				$message = $smarty->fetch($options['path']['physical']['templates'] . '/_components/emails/mockSubmitted-email.tpl');
				$headers = (isset($options['headers']) ? $options['headers'] :  
							'From: creativerequest@curse.com' . "\r\n" .
						    'Reply-To: creativerequest@curse.com' . "\r\n" .
						    'Content-Type: text/html; charset=ISO-8859-1\r\n' . "\r\n" .
						    'X-Mailer: PHP/' . phpversion()); 
				mail($to, $subject, $message, $headers);
			break;

			case "newFollower":

				// Send email to current followers that new followers have been added

				// Send email to new followers
				$newFollowers = $options['newFollowers'];
				foreach($newFollowers as $f) {
					$result = $db->fetchRow($db->quoteInto("SELECT * FROM users WHERE id = ?", $f));
					
					$smarty->assign('followerName', $result['name']);
					$to = $result['email'];
					$subject = "CREATIVE REQUEST:". $data['campaignName'] ." PIN:" . $data['pin'];
					$message = $smarty->fetch($options['path']['physical']['templates'] . '/_components/emails/newFollower-email.tpl');
					$headers = (isset($options['headers']) ? $options['headers'] :  
								'From: creativerequest@curse.com' . "\r\n" .
							    'Reply-To: creativerequest@curse.com' . "\r\n" .
							    'Content-Type: text/html; charset=ISO-8859-1\r\n' . "\r\n" .
							    'X-Mailer: PHP/' . phpversion()); 
					mail($to, $subject, $message, $headers);
				}

				
			break;


		}

		// Gather send/receive data

		// Send email
	}

	public static function randString($length, $charset='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789')
	{
	    $str = '';
	    $count = strlen($charset);
	    while ($length--) {
	        $str .= $charset[mt_rand(0, $count-1)];
	    }
	    return $str;
	}
}