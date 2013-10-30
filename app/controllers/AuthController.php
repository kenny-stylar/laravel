<?php

class AuthController extends BaseController {

	/**
	* Display login page
	* @return View
	*/
	public function getLogin() {
		return View::make('login');
	}

	/**
	* Login action
	* @return Redirect
	*/
	public function postLogin() {

		$credentials = [
			'username' => Input::get('username'),
			'password' => Input::get('password')
		];

	 	$validator = Validator::make( $credentials, [
            "username" => "required",
            "password" => "required"
        ] );

	 	if ($validator->fails()) {
	 		return Redirect::route('login')->withErrors( [
				'msg' => '* All fields are required!'
			] )->withInput(Input::except('password'));
	 	}

	 	//not working - testing
	 	if (Auth::attempt($credentials)) {
	 		return Redirect::route('profile');
	 	}
	 	else {
		$credentials = [
			'email' => Input::get('username'),
			'password' => Input::get('password')
		];
	 	if (Auth::attempt($credentials)) {
	 		return Redirect::route('profile');
	 	}else {

	 		return Redirect::route('login')->withErrors( [
				'msg' => '* Wrong username/password!'
			] )->withInput(Input::except('password'));
	 		
	 	}
	 	}
	}

	/**
	* Logout action
	* @return Redirect
	*/
	public function getLogout() {
		Auth::logout();
		return Redirect::route('login');
	}

}