<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');
	
	public static $rules = array(
        'email' => 'required|email',
        'password' => 'size:5'
    );

	public function posts() {
	    return $this->hasMany('Post');
	}
	
	/*
	// Example of oneToOne relationship
	
	// Inside of User model
	public function phone() {
	    return $this->hasOne('Phone');
	} 

    // Inside of Phone model
	public function user() {
	    return $this->hasOne('User');
	} 
	*/

    public function categories() {
        return $this->belongsToMany('Category');
    }
}
