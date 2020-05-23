<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;

class Groups extends Controller
{
    //

    //group page
    function group()
    {
       return view('group');
    }
     
     function creategroup(Request $request)
     {

        $user= new Group([
        'gname' => $request->get('gname')
        ]);
      
        $result= $user->save();
	       if($result)
	       {
	       return redirect('/addmembers');
	       }
   
     }
}
