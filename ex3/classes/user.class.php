<?php

abstract class user {

  protected $user_id;
  protected $user_type;
  protected $user_level;
  protected $first_name;
  protected $last_name;
  protected $email_address;

  public function __construct($user_level) {
      $this->user_level = $user_level;
  }

  public function __set($user_level, $user_id) {

  }

  public function __get($user_level){
    return $this->$user_level;
  }

  public function __destruct() {

  }


    static public function addNum($a,$b){
      return  ($a+$b)*$a;
    }
}

?>
