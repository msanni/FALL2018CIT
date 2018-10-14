<?php

//$title = $_POST['post_title'];
//$content = $_POST['post_content'];



class AddPostController extends Controller{

	public $postObject;



	public function defaultTask(){

		$this->postObject = new Post();
		$this->set('task', 'add');


	}

	public function add(){

			$this->postObject = new Post();

			$data = array('title'=>$_POST['post_title'], 'content'=>$_POST['post_content'],'categoryID'=>$_POST['post_categoryID'],'date'=>date("Y-m-d H:i:s"));

			//'date'=>$_POST[STR_TO_DATE('$date', '%m/%d/%Y');

			$result = $this->postObject->addPost($data);

			$this->set('message', $result);


	}

	public function edit($pID){

			$this->postObject = new Post();

			$post = $this->postObject->getPost($pID);

			$this->set('date', date("Y-m-d H:i:s"));
			$this->set('pID', $post['pID']);
			$this->set('title', $post['title']);
			$this->set('content', $post['content']);
			$this->set('categoryID', $post['categoryID']);
			$this->set('task', 'update');


	}

	public function updatePost($data) {

		$sql='UPDATE posts (title,content,categoryID,date) VALUES (?,?)';
		$this->db->execute($sql,$data);
		$message = 'Post updated.';
		return $message;

	}
}
