<?php

class EditUserController extends Controller{

	protected $userObject;

	public function index(){
		$userObject = new Users();
		$this->set('task','add');
	}

	public function add(){

			$this->userObject = new Users();

			$password = $_POST['post_password'];
			$passhash = password_hash($password,PASSWORD_DEFAULT);

			$data = array('fname'=>$_POST['post_fname'], 'lname'=>$_POST['post_lname'], 'email'=>$_POST['post_email'], 'password'=>$passhash);

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

	public function update(){
		$data = array('fname'=>$_POST['post_fname'],'lname'=>$_POST['post_lname'],'email'=>$_POST['post_email'],'password'=>$_POST['$passhash']);

		$this->userObject = new Users();

		$result = $this->userObject->updateUser($data);
		$outcome = $this->userObject->getUser();
		$this->set('user',$outcome);
		$this->set('message', $result);
		$this->set('task', 'update');
	}

}

?>
