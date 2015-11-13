<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('index',function() {
	return view('index');
});
Route::get('about',function() {

	return view('about');
});
Route::get('contact',function() {

	return view('contact');
});
Route::get('learning',function() {
	return view('learning');
});
Route::get('dyslexia',function() {
	return view('dyslexia');
});
Route::get('login',function() {
	return view('login');
});
Route::get('privacy',function() {
	return view('privacy');
});
Route::get('news',function() {
	return view('news');
});
Route::get('faq',function() {
	return view('faq');
});