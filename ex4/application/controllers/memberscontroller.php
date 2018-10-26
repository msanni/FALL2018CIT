<?php

class MembersController extends Controller{

	public $userObject;

   	public function view($email){

		$this->userObject = new User();
		$user = $this->userObject->getUser($email);
	  $this->set('user',$user);
		$this->set('title', 'The Members View');
		$this->set('email', $email);
		$this->set('first_name', $first_name);
		$this->set('last_name', $last_name);

   	}

	public function defaultTask(){

		$this->userObject = new User();
		$users = $this->userObject->getAllUsers();
		$this->set('title', 'The Members View');
		$this->set('users',$users);

	}


}

/* The reason we do not use the magic method is due to the fact that override what is in the parent.  The parent provides the base function for what we need.

View (in this framework or file) is a method that allows us to see one post */
