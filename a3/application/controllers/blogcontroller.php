<?php

class BlogController extends Controller{

	public $postObject;

   	public function view($pID){

		$this->postObject = new Post();
		$post = $this->postObject->getPost($pID);
	  $this->set('post',$post);

   	}

	public function defaultTask(){

		$this->postObject = new Post();
		$posts = $this->postObject->getAllPosts();
		$this->set('title', 'The Default Blog View');
		$this->set('posts',$posts);

	}


}

/* The reason we do not use the magic method is due to the fact that override what is in the parent.  The parent provides the base function for what we need.

View (in this framework or file) is a method that allows us to see one post */
