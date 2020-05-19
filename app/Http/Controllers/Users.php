<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

 use App\User;

 use \Crypt;
 use Hash;
 use Session;
class Users extends Controller
{
   
    /*welcome page*/
    function welcome()
    {
        return view('welcome');
    }
    /*profile page*/
    function profile()
    {
       return view('profile');
    }

    /*login page*/
    function loginsubmit(Request $request)
    {
            // print_r($request->input());//working
            // return User::all();//working

    function signup()
    {
       return view('signup');/*page name*/
    }


            $username = $request->input('name');
            $password =$request->input('password');
               $user= User::where('name', '=', $username)->first();
               if($user &&Hash::check($password, $user->password))
               {
                 //$request->session()->put('_KUL',1);
                 $request->session()->put('data',$request->input());    
               }
               else
               {
                return "Login Invalid , Check Login Details";
               }
               return redirect('/profile');
          
    }
    /*sign up page*/
    function create()   
    {
        return view('signup');
    }

    function createsubmit(Request $request)
    {
         $request->session()->put('data',$request->input());
          if($request->session()->has('data'))
          {
            $user = new User;
            $user->name=$request->username;
            $user->firstName=$request->firstname;
            $user->lastName=$request->lastname;
            $user->email=$request->email;
            $user->phone=$request->phonenumber;
            $user->address=$request->address;
            $user->password=Hash::make($request->password);
            $user->save();
            return redirect('/login');
          }
         return redirect('/profile');   
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
