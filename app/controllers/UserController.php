<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
// 		$users = DB::table('users')->get();
        // dd(DB::table('users')->lists('email'));
        // $users = DB::table('users')->where('id', 2)->orWhere('email', 'joe@doe.com')->get();
        // $users = DB::table('users')->where('id', '>', 1)->orderBy('email', 'desc')->take(2)->skip(0)->get();
        $users = DB::table('users')->join('posts', 'users.id', '=', 'posts.user_id')->get();
        // dd(DB::getQueryLog());
		
		$data = array('email' => 'new@doe.com', 'name' => 'New User');
		
		DB::table('users')->insert($data);
		
		return View::make('user.index', compact('users'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
	    // $user = DB::table('users')->find($id);
	    $user = DB::table('users')->where('id', $id)->first();
	   // $user = DB::table('users')->where('id', $id)->where('email', 'joe@doe.com')->first();
	    
	   // $user = DB::table('users')->where(array('id' => $id, 'email' => 'joe@doe.com'))->first();
	   
	   
	   // dd(DB::getQueryLog());
	    
		return View::make('user.show', compact('user'));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
