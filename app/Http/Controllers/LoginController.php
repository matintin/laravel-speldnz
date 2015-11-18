<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function processLogin(Request $request, \Illuminate\Contracts\Auth\Guard $auth){
    	$credential = $request->only("email","password");

    	if(\Auth::attempt($credential)){
    		//if it is professional member go to download page
    		return redirect('download?userid='.\Auth::user()->id);
    		//if it is admin go to loggedin page



    	}else{
    		return redirect("/");  
            // \hash::make();

        
    	}
    }

    public function logout(\Illuminate\Contracts\Auth\Guard $auth){
    	\Auth::logout();
    	return redirect("/");
    }
}
