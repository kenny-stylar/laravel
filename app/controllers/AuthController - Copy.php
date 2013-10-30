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
		$credentials = array(
			'username' => Input::get('username'),
			'password' => Input::get('password')
		);

		try{
			$user = Sentry::authenticate($credentials, false);

			if ($user) {
				return Redirect::route('profile');
			}
		}
		catch (Exception $ex) {
			return Redirect::route('login')->withErrors( array(
				'login' => $ex->getMessage()
			) );
		}
	}

	/**
	* Logout action
	* @return Redirect
	*/
	public function getLogout() {
		Sentry::logout();

		return Redirect::route('login');
	}

}