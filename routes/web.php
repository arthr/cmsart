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

//My Account Routes Group...
Route::group(['middleware' => 'auth', 'prefix' => 'myaccount', 'as' => 'myaccount.', 'namespace' => 'MyAccount'], function () {
    //Profile
    Route::group(['prefix' => 'profile', 'as' => 'profile.'], function () {
        Route::get('/', 'ProfileController@index')
            ->name('index');
    });

    //Game Account
    Route::group(['prefix' => 'game-account', 'as' => 'game_account.'], function () {
        Route::get('/', 'GameAccountController@index')
            ->name('index');
        Route::get('create', 'GameAccountController@create')
            ->name('create');
        Route::post('store', 'GameAccountController@store')
            ->name('store');

        Route::group(['prefix' => 'settings/{login}'], function () {
            Route::get('/', 'GameAccountController@settings')
                ->name('settings');
            Route::post('update', 'GameAccountController@update')
                ->name('update');
            Route::post('destroy', 'GameAccountController@destroy')
                ->name('destroy');
        });
    });

    //Characters
    Route::group(['prefix' => 'characters', 'as' => 'characters.'], function () {
        Route::get('/', 'CharacterController@index')
            ->name('index');
    });
    //Donations
    Route::get('donations', 'DonationController@index')
        ->name('donations');
    //Security
    Route::get('security', 'SecurityController@index')
        ->name('security');
});

Route::get('/home', 'HomeController@index')->name('home');
