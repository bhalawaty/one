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


/*admin route*/
Route::group(['middleware'=>['web','admin']],function(){
    Route::get('/adminpanel', 'AdminController@index');
    Route::resource('adminpanel/users', 'UserController');
    Route::post('/adminpanel/users/changePassword', 'UserController@UpdatePassword');
    Route::get('/adminpanel/users/{user}/delete', 'UserController@destroy');



});



Route::get('/', function () {return view('welcome');});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
