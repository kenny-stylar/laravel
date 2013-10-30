<?php

class UserController extends BaseController {

	/**
	 * Display user profile
	 * @return View
	 */
	protected function getProfile()
	{
		//access user data
		$user = User::find(Auth::user()->id);
/*
var_dump($user->email);die;
		(object) [
			"username" => Auth::user()->username,
			"email" => Auth::user()->email,
			"created" => Auth::user()->created_at
		];
*/
		return View::make('user.profile', array( 'user' => $user ));
	}

}