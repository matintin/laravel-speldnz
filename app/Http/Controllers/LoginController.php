<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function processLogin(\App\Http\Requests\LoginRequest $request, \Illuminate\Contracts\Auth\Guard $auth){
    	

        $credential = $request->only("email","password");

    	if(\Auth::attempt($credential)){
    		//if it is professional member go to download page
            if(\Auth::user()->role){
                return redirect('loggedin');
            }else {
                
                return redirect('download?userid='.\Auth::user()->id);
            }
    	}else{

    		return redirect('/');
           
    	}
    }

    public function logout(\Illuminate\Contracts\Auth\Guard $auth){
    	\Auth::logout();
    	return redirect("/");
    }
}
