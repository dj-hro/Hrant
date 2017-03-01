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

Route::get('/', function () {

		 if (Auth::check()){

             return view('home');       

        }
        else
        {


    		return view('welcome');

        }

});

Auth::routes();


Route::get('/home', ['uses' => 'HomeController@index', 'as' =>'home']);
Route::get('/comments', ['uses' => 'ShowComments@index', 'as' =>'comments']);
Route::match(['get', 'post'], '/addcomment', ['uses' => 'AddComment@index', 'as' =>'addcomment']);
Route::get('/mycomments', ['uses' => 'MyComments@index', 'as' =>'mycomments']);
Route::post('/deletecomment', ['uses' => 'DeleteComment@index', 'as' =>'deletecomment']);
Route::post('/editcomment', ['uses' => 'EditComment@index', 'as' =>'editcomment']);



Route::group(['middleware' => 'web'], function () {

Route::get('login/facebook', 'FacebookAuthController@redirectToProvider');
Route::get('login/facebook/callback', 'FacebookAuthController@handleProviderCallback');

});

Route::match(['get', 'post'], '/addandviewpictures', ['uses' => 'AddAndViewPictures@index', 'as' =>'addandviewpictures']);
Route::get('/deletepicture', ['uses' => 'DeletePicture@index', 'as' =>'deletepicture']);
// Route::group(['middleware' => 'web'], function () {

// Route::get('login/google', 'GoogleAuthController@redirectToProvider');
// Route::get('login/google/callback', 'GoogleAuthController@handleProviderCallback');

// });

