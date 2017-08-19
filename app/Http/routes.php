<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::any('/', 'BookController@welcome');
Route::any('book/detail/{id}', 'BookController@detail');


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

    Route::get('student/index', ['uses' => 'StudentController@index']);
    Route::any('student/create', ['uses' => 'StudentController@create']);
    Route::any('student/save', ['uses' => 'StudentController@save']);
    Route::any('student/update/{id}', ['uses' => 'StudentController@update']);
    Route::any('student/detail/{id}', ['uses' => 'StudentController@detail']);
    Route::any('student/delete/{id}', ['uses' => 'StudentController@delete']);
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/Admin/home', 'AdminHomeController@index');
Route::group(['prefix' => 'Admin', 'namespace' => 'Admin'], function () {
    // Authentication Routes...
    Route::get('login', 'AdminController@showLoginForm');
    Route::post('login', 'AdminController@login');
    Route::get('logout', 'AdminController@logout');

    // Registration Routes...
    Route::get('register', 'AdminController@showRegistrationForm');
    Route::post('register', 'AdminController@register');

    // Password Reset Routes...
    Route::get('password/reset/{token?}', 'AdminController@showResetForm');
    Route::post('password/email', 'AdminController@sendResetLinkEmail');
    Route::post('password/reset', 'AdminController@reset');
});
