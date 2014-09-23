<?php

class PostController extends BaseController {

	public function show() {
	    $post= new StdClass();
	    
	    $post->title = "My Post Title";
	    
		return View::make('post.show')->with('post', $post);
	}
	
	public function listing() {
		return View::make('post.listing');
	}
	
	public function single($id) {
		return View::make('post.single')->with('id', $id);
	}
	
	public function update($id) {
	    dd($_POST);
	}	
}
