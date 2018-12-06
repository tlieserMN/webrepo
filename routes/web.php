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
    return view('welcome');
});

Route::get("/main", "MainController@Main");
Route::get("/callback", "MainController@Callback");

Route::get("/tweets", "TweetController@Tweets");

Route::get("/tweets/{idsssss}", "TweetController@TweetDetail")->middleware('thomas');
Route::get("/tweets/{ids}/test/{idss}", "TweetController@Test");

Route::post("/create", "TweetController@Create");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
