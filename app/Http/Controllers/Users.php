<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

 use App\User;

 use \Crypt;
 use Hash;
 use Session;
class Users extends Controller
{
    protected $redirectTo = '/login';
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
   // logout
    function logout()
    {
      Session::flush();
  
     return redirect('/');
    }
    
    /*login page*/
    function loginsubmit(Request $request)
    {
            // print_r($request->input());//working
            // return User::all();//working

            $username = $request->input('name');
            $password =$request->input('password');
               $user= User::where('name', '=', $username)->first();
               if($user &&Hash::check($password, $user->password))
               {
                 $request->session()->put('data',$request->input());  
                 $request->session()->put('uname',$request->input('name'));  
               }
               else
               {
                return redirect('/login')->with('flash_message_error','!! Login Invalid , Check Login Details !!');     
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




}

