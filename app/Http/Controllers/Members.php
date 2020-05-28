<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use DB;

class Members extends Controller
{
    
     function members()
    {

     $groups = \DB::table('groups')->select('*')->get(); // first drop down list get groups from group table
      
      $users = \DB::table('users')->select('*')->get();  // second drop down list get users from users table


     return view('addmembers',['groups'=>$groups , 'users'=>$users]);

    }

     function membersubmit(Request $request)
     {
     
     // print_r($request->input('name'));
     // die;
     // 	DB::table('members')
     // 	->insert([
	    // ['groupid'=>$request->input('group'), 
	    //  //insert group id and user id into members table according to user what selected from drop down list
	    // 'userid'=>$request->input('name')],
	    //  ]);
        $count=$request->input('count');
        for($i=1;$i<=$count;$i++){

         DB::table('members')
        ->insert([
        ['groupid'=>$request->input('group'.$i), 
         //insert group id and user id into members table according to user what selected from drop down list
        'userid'=>$request->input('name'.$i)],
         ]);
        }
     //	die('kuljit');
       // return  "Members Added Into Group !!";
        return redirect('/addmembers')->with('flash_message_success','!! Members Added Successfully In Group !!');    
    
     }

}
