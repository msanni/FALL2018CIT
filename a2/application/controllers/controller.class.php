<?php
class Controller {

    public $load;
    public $user;


    function __construct() {

        $this->load = new Load();
        $this->user = new User();

        $this->home();

    }

    function home() {

        $this->user->userID = 'crdillon';
        $this->user->firstname = 'Rob';
        $this->user->lastname = 'Dillon';
        $this->user->email = 'crdillon@iu.edu';
        $this->user->role = 'admin';


        $data = $this->user->getName();
        $this->load->view('view.php',$data);

    }





}

?>