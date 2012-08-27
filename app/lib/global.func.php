<?php


class globalFunc {


	public static function sendEmail($type, $data, $options, $db, $smarty) {

		$smarty->assign("formData", $data);
		
		// Fetch appropriate template
		switch($type) {

			case "newRequest":

			$query = "SELECT * FROM users WHERE isAdmin = 1";
			$result = $db->fetchAll($query);

			$userName = $db->fetchRow("SELECT name FROM users WHERE id = " . $formData['curseSalesRep']);
			$smarty->assign('salesRepName', $userName);

			$adminEmails = array();
			foreach($result as $admin) {
				$adminEmails[] = $admin['email'];
			}

			$to = implode(', ', $adminEmails) . $options['followerEmails'] . $options['submitterEmail'];
			$subject = "A new Request has been submitted. PIN: " . $data['pin'];
			$message = $smarty->fetch('_components/emails/newRequest-email.tpl');
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
				$subject = "A request has been edited. PIN: " . $options['pin'];
				$message = $smarty->fetch('_components/emails/editRequest-email.tpl');
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
				$subject = "A mock has been added to Request PIN #" . $data['pin'];
				$message = $smarty->fetch('_components/emails/mockSubmitted-email.tpl');
				$headers = (isset($options['headers']) ? $options['headers'] :  
							'From: creativerequest@curse.com' . "\r\n" .
						    'Reply-To: creativerequest@curse.com' . "\r\n" .
						    'Content-Type: text/html; charset=ISO-8859-1\r\n' . "\r\n" .
						    'X-Mailer: PHP/' . phpversion()); 
				mail($to, $subject, $message, $headers);
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