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

Route::any('home', function() {
    
    return View::make('home');
    
    });

Route::any('/', array('as' => 'home', function () {
    
    return View::make('home');
    
    }));

Route::get('login', array('as' => 'login', function () {
    
    return View::make('login');
    
    }))->before('guest');

# Got issues with, expected to work, beta
/*Route::group(array('before' => 'guest'), function() {
    Route::get(
        'login', function() {
            # Has Auth Filter
            return View::make('login'); });
    });*/

Route::post('login', function () {
    
    $user = array(
        'username' => Input::get('username'),
        'password' => Input::get('password') );

    if (Auth::attempt($user)) {
        return Redirect::route('home')
            ->with('flash_notice', 'You are successfully logged in.'); }

    # authentication failure! lets go back to the login page
    return Redirect::route('login')
        ->with('flash_error', 'Your username/password combination was incorrect.')
        ->withInput();
    
    });

Route::group(array('before' => 'auth'), function() {
    
    Route::get(
        'logout', function() {
            # Has Auth Filter
            Auth::logout();
            return Redirect::route('login')
                ->with('flash_notice', 'You are successfully logged out.'); });

    Route::get(
        'profile', function() {
            # Has Auth Filter
            return View::make('profile'); });
    
    });
