<?php

class LoginController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make("login");
	}

	public function login()
	{
		$username = Input::get("username");
		$password = Input::get("password");

		if (Auth::attempt(array('username' => $username, 'password' => $password)))
		{
		    return Redirect::intended('dashboard');
		}

		return View::make("login")->with(array("successful" => "false"));
	}

	public function logout() 
	{
		Auth::logout();
	}


}
