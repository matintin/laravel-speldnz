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
use Illuminate\Support\Facades\Mail;

Route::get('/',function() {

	//return \App\Models\Page::find(2)->children[0]->parent;
	return view('index');
});
Route::get('mail',function() {

	Mail::send('mail',['name'=>'Meme'],function($message) {

		$message->to('chadcho82@hotmail.com')
				->subject('welcome to mailer');
	});

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
Route::get('training',function() {
	return view('training');
});
Route::get('news_guest',function() {

	$posts = \App\Models\Post::all();

	$posts = \App\Models\Post::orderByRaw('DATE(`created_at`) < CURDATE()')
               ->orderBy('created_at', 'desc')
               ->get();

	return view('news_guest',compact('posts'));
});
Route::get('download',function() {

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

Route::post('bla',function(\App\Http\Requests\ContactRequest $request) {
	$contact = \App\Models\Contact::create($request->all());

	$contact->save();

	return redirect('thanks');
});
Route::get('thanks',function() {
	return view('thanks');
});


