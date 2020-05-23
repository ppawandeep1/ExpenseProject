<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Addexpense;
class addexpenses extends Controller
{
    //
     //Add Expense

     function expense()
     {
         $groups= \DB::table('groups')->select('*')->get();
           //    ->join('users', 'users.id', '=', 'addexpense.id')
             //  ->oin('groups', 'groups.id', '=', '')
 
       //  $data=  Addexpense::all(); 
        // return view('addexpense',['data'=>$data]);
         return view('addexpense',['groups'=>$groups]);
         
     }
 
   /*  function expensesubmit(Request $request){
       $request->session()->put('data',$request->input());
       if($request->session()->has('data'))
       {
         $user = new addexpenses;
         $user->date=$request->date;
         $user->description=$request->description;
         $user->amount=$request->amount;
       }
     } */
}
