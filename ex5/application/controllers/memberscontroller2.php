<?php

class MembersController extends Controller{

	public $userObject;

   	public function view($uID){

		$this->userObject = new User();
		$user = $this->userObject->getUser($uID);
	  $this->set('user',$user);
		$this->set('title', 'The Members View');

   	}

	public function defaultTask(){

		$this->userObject = new User();
		$user = $this->userObject->getAllUser();
		$this->set('title', 'The Members View');
		$this->set('user',$user);
		//for some reason when I turned this into users it comes up with an error

	}


}

/* The reason we do not use the magic method is due to the fact that override what is in the parent.  The parent provides the base function for what we need.

View (in this framework or file) is a method that allows us to see one post */
