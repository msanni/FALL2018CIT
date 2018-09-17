<?php

class registeredUser extends user {

  public function __construct($newuser, $regular) {
        parent:: __construct($newuser);
        $this-> newuser = "New User";
        $this-> regular = $_POST["firstName"];
        $thisFirstname = $_POST["firstName"];
        $thisLastname = $_POST["lastName"];
        $thisEmail = $_POST["email"];


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
