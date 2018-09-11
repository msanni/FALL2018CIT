<?php
	
class user {
	
	protected $user_id;
	protected $first_name;
	protected $last_name;
	protected $email_address;
	protected $user_type;
	protected $user_level;
	
	public function __construct($level) {
		$this->user_level = $level;
	}
	
	public function __set($name,$value) {
		
	}
	
	public function __get($name) {
		
	}
	
	public function __destruct() {
		
	}
	
	
	
}
	
	
	
	
	
	
?>