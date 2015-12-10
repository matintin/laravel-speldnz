<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{

    public function __construct() {

        $this->middleware('auth');
        $this->middleware('Admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = \App\Models\Post::all();

        $posts = \App\Models\Post::orderByRaw('DATE(`created_at`) < CURDATE()')
               ->orderBy('created_at', 'desc')
               ->get();

        return view('news',compact("posts"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createNews');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(\App\Http\Requests\CreateNewsRequest $request)
    {
        $post = \App\Models\Post::create($request->all());

        $post->save();

        $users = \App\Models\User::lists('email');


        Mail::send('mailnewpost',['post'=>$post],function($message) use ($users){

            foreach($users as $user){

                $message->to($user)
                        ->bcc($user)
                        ->from('admin@gmail.com', 'Laravel')
                        ->subject('welcome to mailer');
            }
        });

        return redirect('news');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = \App\Models\Post::find($id);

        return view('singleNews',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = \App\Models\Post::find($id);

        return view('updateNews',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $post = \App\Models\Post::find($id);

        $value = \Request::input("value");
        $field = \Request::input("field");

        $post->$field = $value;
        $post->save();

        return $value;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = \App\Models\Post::find($id);

        $post->delete();

        return redirect("news");
    }
}
