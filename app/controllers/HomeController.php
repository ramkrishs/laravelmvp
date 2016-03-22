<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showLogin()
	{
		return View::make('login');
	}

	public function doLogin()
	{
		$credentials = 	Input::only('username','password');
		if(Auth::attempt($credentials)){
			return Redirect::intended('/securehome');
		}
		return Redirect::to('login');
	}

	public function showLogout()
	{	
		Auth::logout();
		return View::make('logout');
	}

}
