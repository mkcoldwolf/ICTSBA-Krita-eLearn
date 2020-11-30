<?php

	class User {
		
		private $username;
		
		function __construct($username) {
			$this->username = $username;
			
			$json = file_get_contents(__DIR__.'/../../.database/users_config.json');
			$jsonObj = json_decode($json, true);
			
			if(!isset($jsonObj[$this->username])) {
				throw new Exception("USER_NOT_EXIST");
			}
		}
		
		function getEmail() {
			$json = file_get_contents(__DIR__.'/../../.database/users_config.json');
			$jsonObj = json_decode($json, true);
			
			return $jsonObj[$this->username]['email'];
		}
		
		function getUserType() {
			$json = file_get_contents(__DIR__.'/../../.database/users_config.json');
			$jsonObj = json_decode($json, true);
			
			return $jsonObj[$this->username]['user_type'];
		}
		
		function getAvatarUrl() {
			
			$supported_extensions = array("png", "jpg", "gif");
			
			foreach($supported_extensions as $extension) {
				if(file_exists(__DIR__.'/../../.database/users_avatar/'.$this->username.'.'.$extension)) {
					require('bootstrap.php');
					return $rootDir.'/.database/users_avatar/'.$this->username.'.'.$extension;
				}
			}
			
			return "https://www.gravatar.com/avatar/".md5($this->getEmail());
		}
		
	}
?>