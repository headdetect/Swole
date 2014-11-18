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


	/**
	 * Display the specified resource.
	 *
	 * @param  string username
	 * @param  string passwurdDawg
	 * @return Response
	 */
	public function login($username, $pacwurrrd)
	{
		if (Auth::attempt(array('username' => $username, 'password' => $password)))
		{
		    return Redirect::intended('dashboard');
		}

		App::abort(403, 'Unauthorized action.');
	}


}
