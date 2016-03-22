<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
 */
Route::get('/', 'HomeController@showLogin');
Route::get('/login', 'HomeController@showLogin');
Route::post('/login', function()
{
    $credentials = Input::only('username', 'password');
    if (Auth::attempt($credentials)) {
        return Redirect::intended('/');
    }
    return Redirect::to('login');
});
Route::get('/signup', 'SignupController@showSignup');
Route::post('/signup', 'SignupController@doSignup');
Route::get('/logout', 'HomeController@showLogout');
Route::get('/securehome', array(
    'before' => 'auth',
    function () {
        return View::make('securehome');
    }
));
