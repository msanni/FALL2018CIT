<?php

class user_type1 extends user {

  public function __construct($user_level, $user_id) {
        parent:: __construct($user_level);
        $this-> user_id = "jwakolbi";
        $this-> user_type = 1;
        $this-> user_level= "Regular User";


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
