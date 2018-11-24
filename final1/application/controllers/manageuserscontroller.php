<?php

class ManageUsersController extends Controller{

	public $userObject;

    protected $access = "1";

	   	public function users($uID){
	      $this->userObject = new Users();
				$user = $this->userObject->getUser($uID);
		  	$this->set('user',$user);
	   	}

		public function index(){
	    $this->userObject = new Users();
			$users = $this->userObject->getAllUsers();
			$this->set('title', 'The Members View');
			$this->set('users',$users);
			$this->set('first_name',$first_name);
			$this->set('last_name',$last_name);
			$this->set('email',$email);
		}

	public function add(){
		$this->userObject = new Users();
		$this->set('task', 'save');
	}

	public function save(){
		$this->userObject = new Users();

		$password = $_POST['post_password'];
		$passhash = password_hash($password,PASSWORD_DEFAULT);

		$data = array('fname'=>$_POST['post_fname'], 'lname'=>$_POST['post_lname'], 'email'=>$_POST['post_email'], 'password'=>$passhash);
		//$this->getCategories();

		$result = $this->userObject->addUser($data);
		$this->set('message', $result);
	}

	public function edit($uID){

			$this->userObject = new Users();

			$user = $this->userObject->getUser($uID);

			$this->set('uID', $user['uID']);
			$this->set('fname', $user['first_name']);
			$this->set('lname', $user['last_name']);
			$this->set('email', $user['email']);
			$this->set('password', $user['password']);
			$this->set('task', 'update');
	}

	public function delete($uID){
		$this->userObject = new Users();
		$user = $this->userObject->getUser($uID);

		$this->set('uID', $user['uID']);
		$this->set('fname', $user['first_name']);
		$this->set('lname', $user['last_name']);
		$this->set('email', $user['email']);
		$this->set('password', $user['password']);
		$this->set('task', 'update');
	}


	public function update(){
		$data = array('fname'=>$_POST['post_fname'],'lname'=>$_POST['post_lname'],'email'=>$_POST['post_email'],'password'=>$_POST['$passhash']);

		$this->userObject = new Users();

		$result = $this->userObject->updateUser($data);
		$outcome = $this->userObject->getUser();
		$this->set('user',$outcome);
		$this->set('message', $result);
		$this->set('task', 'update');
	}

	public function checkUser($uID){
		$this->userObject = new Users();
		$this->userObject->isActive($userInfo['uID']) ;
	}
	/*
	public function edit($uID){

			$this->userObject = new Users();

			$user = $this->userObject->getUser($uID);

			$this->set('uID', $user['uID']);
			$this->set('fname', $user['first_name']);
			$this->set('lname', $user['last_name']);
			$this->set('email', $user['email']);
			$this->set('password', $user['password']);
			$this->set('task', 'update');
		}
		*/


/*
	public function update(){

		$this->userObject = new Users();

		$password = $_POST['post_password'];
		$passhash = password_hash($password,PASSWORD_DEFAULT);

		$data = array('fname'=>$_POST['post_fname'], 'lname'=>$_POST['post_lname'], 'email'=>$_POST['post_email'], 'password'=>$passhash);
		//$this->getCategories();

		$result = $this->userObject->updateUser($data);
		$outcome = $this->userObject->getAllUsers();
		$this->set('users',$outcome);
		$this->set('message', $result);
	} */

}
?>
