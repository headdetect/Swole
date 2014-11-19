<?php

class DashboardController extends BaseController {


	public function index()
	{
		if (!Auth::check()) 
		{
			return Redirect::intended('login');
		}

		return View::make('dashboard');
	}

}
