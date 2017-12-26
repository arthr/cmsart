<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */


Route::get('/', 'HomeController@index');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

//Registration Confirm Routes..
Route::get('register/confirmation/{confirmation_code}', 'Auth\RegisterController@confirmation')->name('register.confirmation');
Route::get('register/resend-confirmation', 'Auth\RegisterController@resendConfirmation')->name('register.resend_confirmation');
Route::post('register/resend-confirmation', 'Auth\RegisterController@resendConfirmation')->name('register.resend_confirmation');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

//My Account Routes...
Route::get('myaccount', 'MyAccount\ProfileController@index')->name('myaccount.profile');
Route::get('myaccount/game-account', 'MyAccount\GameAccountController@index')->name('myaccount.game_account');
Route::get('myaccount/game-account/new', 'MyAccount\GameAccountController@index')->name('myaccount.game_account.new');
Route::get('myaccount/characters', 'MyAccount\CharacterController@index')->name('myaccount.characters');
Route::get('myaccount/donations', 'MyAccount\DonationController@index')->name('myaccount.donations');
Route::get('myaccount/security', 'MyAccount\SecurityController@index')->name('myaccount.security');


Route::get('/home', 'HomeController@index')->name('home');
