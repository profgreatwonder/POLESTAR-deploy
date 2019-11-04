<?php

Route::get('/', function () {

    return view('welcome');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('{provider}/auth', [

//     'uses' => 'MediaPlatformController@auth',

//     'as' => 'social.auth'

// ]);

// Route::get('/{provider}/redirect', [

//     'uses' => 'MediaPlatformController@auth_callback',

//     'as' => 'social.callback'
// ]);

Route::get('/auth/redirect/{provider}', 'MediaPlatformController@redirect');

  Route::get('/callback/{provider}', 'MediaPlatformMController@callback');
