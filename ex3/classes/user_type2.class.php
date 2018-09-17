<?php

class user_type2 extends user {

  public function __construct($user_level, $user_id) {
    parent:: __construct($user_level);
    $this-> user_id = "crdillion";
    $this-> user_type= 2;
    $this-> user_level= "Administrator";


  }

  public function __set($name, $value) {
    $this-> $name = $value;
    return;

  }

  public function __get($name){
    return $this->$name;
  }

  public function __destruct() {

  }
}

?>
