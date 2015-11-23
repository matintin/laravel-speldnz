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

Route::get('download',function() {

	// $user = \App\Models\User::find(\Request::get("userid"));

	$user = \Auth::user();

	return view('download',compact("user"));

});

Route::get('privacy',function() {
	return view('privacy');
});

Route::get('faq',function() {
	return view('faq');
});
Route::get('loggedin',["middleware"=>"Admin",function() {
	return view('loggedin');
}]);
Route::resource("users","MemberController");
Route::resource("news","NewsController");

Route::post('login',"LoginController@processLogin");
Route::get('logout',"LoginController@logout");

Route::get('pages/{id}',function($id) {
	$page = \App\Models\Page::find($id);
	return view('page',compact("page"));
});
