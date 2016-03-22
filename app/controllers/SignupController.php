<?php

class SignupController extends BaseController {

	public function showSignup()
	{
		return View::make('signup');
	}

	public function doSignup()
	{
		$user = new User;
		$user->email = Input::get('email');
		$user->username = Input::get('username');
		$user->password = Hash::make(Input::get('password'));
		$user->save();
		$thisEmail = Input::get('email');
		return View::make('thanks')->with('thisEmail',$thisEmail);
	}


}
