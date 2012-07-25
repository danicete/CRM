<?php

class Authentication {


	public $loggedIn, $lastAuthTime,
			$username, $password, $name, $isAdmin, $userID;
		

	public function __construct() {

		if(isset($_SESSION['creativeauth'])) {
			$this->readLocalData($_SESSION['creativeauth']);
		} else if(isset($_COOKIE['creativeauth']))
			$this->readLocalData($_COOKIE['creativeauth']);
		else {
			
		}

	}

	// Public functions
	public function checkAuth($db) {

		$ret = false;

		if($this->loggedIn == 1 && (time() - $this->lastAuthTime < 10800)) {
			$ret = true;
		} else {
			$query = "SELECT * FROM users WHERE email = '". $this->username . "' AND password = '" . $this->password . "'";
			$result = $db->fetchAll($query);

			if(count($result) < 1) {
				$this->loggedIn = 0;
				$_SESSION['creativeauth'] = $this;
			} else {
				$row = $result[0];
				$this->name = $row['name'];
				$this->loggedIn = 1;
				$this->lastAuthTime = time();
				$this->isAdmin = $row['isAdmin'];
				$this->userID = $row['id'];
				$_SESSION['creativeauth'] = $this;

				if(!$this->writeAuthLog("logged in", $db)) {
					die("Error writing to auth log.");
				}

				$ret = true;
			}
		}

		return $ret;
	}

	public function logoutUser($db) {
		$this->writeAuthLog("logged out", $db);
		$this->loggedIn = 0;
		$_SESSION['creativeauth'] = array();
		$_COOKIE['creativeauth'] = array();
	}

	public function storeDataLocal() {
		$_COOKIE['creativeauth'] = $this;
	}

	public function setUsername($username) {
		$this->username = $username;
	}

	public function setPassword($password) {
		$this->password = $password;
	}

	// Private functions
	private function readLocalData($authObj) {
		if(gettype($authObj) == "object" && get_class($authObj) == "Authentication") {
			foreach($authObj as $var => $value) {
				$this->$var = $value;
			}

			if($this->loggedIn == 1) {
				if(time() - $this->lastAuthTime > 10800)
					$this->loggedIn = 0;
			}
		}

	}

	public function writeAuthLog($action, $db, $options=null) {

		$username = $this->username;
		$action = mysql_escape_string($action);

		$data = array(
			'user'		=> $username,
			'action'	=> $action,
			'date_created'	=> date('Y-m-d H:i:s')
		);
		$result = $db->insert('auth_log', $data);

		return $result;
	}	

}