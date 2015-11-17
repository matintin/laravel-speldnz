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

Route::get('/',function() {

	//return \App\Models\Page::find(2)->children[0]->parent;
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
Route::post('download',function() {
	return redirect('download');
});
Route::get('download',function() {
	return view('download');
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
Route::get('loggedin',function() {
	return view('loggedin');
});
Route::resource("users","MemberController");
Route::post('login',"LoginController@processLogin");
Route::get('pages/{id}',function($id) {
	$page = \App\Models\Page::find($id);
	return view('page',compact("page"));
});
