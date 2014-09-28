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
	
	public function insert() {
	
	   // $post = new Post;
	    
	   // $post->title = "A title from POST";
	   // $post->body = "A body from POST";
	    
	   // $post->save();
	   
	   $data = array('title' => "A title from POST using array", 'body' => "A body from POST using array", 'user_id' => 2);
	   
	   Post::create($data);
	    
	   dd('Post saved');
	}
	
	public function single($id) {
	    $post = Post::find($id);
	    
		return View::make('post.single')->with('post', $post);
	}
	
	public function update($id) {
	    dd($_POST);
	}	
}
