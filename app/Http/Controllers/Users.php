<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

 use App\User;
class Users extends Controller
{
   

     function login()
    {
       return view('Login');/*page name*/
    }

     function loginsubmit(Request $request)
    {
    	// print_r($request->input());//working
        //  return User::all();//working

       return  User :: select('name')->where(
         [
	         ['email','=',$request->email],
	         ['password','=',$request->password ]
         ]
         )->get();
    }
}
