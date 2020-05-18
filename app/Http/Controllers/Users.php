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
    function signup()
    {
       return view('signup');/*page name*/
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

    function signsubmit(Request $req){
      $user = new User;
      $user->name=$req->name;
      $user->firstName=$req->firstname;
      $user->lastName=$req->lastname;
      $user->email=$req->email;
      $user->phone=$req->phone;
      $user->address=$req->address;
      $user->password=bcrypt($req->password);
      $user->save();
      /*$result=$user->save();*/
      if($req){
      print_r("inserted into database");
      }
    }
}
