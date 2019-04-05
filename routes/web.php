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
    /*datatable*/
    Route::get('/adminpanel/users/data',['as'=>'adminpanel.users.data','uses'=>'UserController@anyData']);
    Route::get('/adminpanel/buildings/data', ['as' => 'adminpanel.buildings.data', 'uses' => 'BuildingController@anyData']);
    /*admin*/
    Route::get('/adminpanel', 'AdminController@index');
    /*users*/
    Route::resource('adminpanel/users', 'UserController');
    Route::post('/adminpanel/users/changePassword', 'UserController@UpdatePassword');
    Route::get('/adminpanel/users/{user}/delete', 'UserController@destroy');

    /*sitesetting*/
    Route::get('/adminpanel/sitesettings', 'SiteSettingController@index');
    Route::post('/adminpanel/sitesettings', 'SiteSettingController@store');

    /*users*/
    Route::resource('adminpanel/buildings', 'BuildingController');
    Route::get('/adminpanel/buildings/{building}/delete', 'BuildingController@destroy');

});



Route::get('/', function () {return view('welcome');});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
