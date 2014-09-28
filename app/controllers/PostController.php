<?php

class PostController extends BaseController {

	public function show() {
	    $post= new StdClass();
	    
	    $post->title = "My Post Title";
	    
		return View::make('post.show')->with('post', $post);
	}
	
	public function listing() {
	    // $posts = Post::all();
	    // $posts = Post::where('title', 'LIKE', '%2%')->get();
	    $posts = Post::where('title', 'LIKE', '%2%')->take(2)->skip(1)->get();
	    
		return View::make('post.listing', compact('posts'));
	}
	
	public function single($id) {
	    $post = Post::find($id);
	    
		return View::make('post.single')->with('post', $post);
	}
	
	public function update($id) {
	    dd($_POST);
	}	
}
