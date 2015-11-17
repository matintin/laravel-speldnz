<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function processLogin(Request $request, \Illuminate\Contracts\Auth\Guard $auth){
    	$credential = $request->only("email","password");

    	if($auth->attempt($credential)){
    		//if it is professional member go to download page
    		return redirect('download');
    		//if it is admin go to loggedin page

    	}else {
    		return redirect("/")->with("message","Try again!");
    	}
    }

    public function logout(\Illuminate\Contracts\Auth\Guard $auth){
    	$auth->logout();
    	return redirect("/");
    }
}
