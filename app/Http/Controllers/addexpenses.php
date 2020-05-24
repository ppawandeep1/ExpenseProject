<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Addexpense;
use DB;
class addexpenses extends Controller
{
    //
     //Add Expense

     function expense()
     {
         $groups= \DB::table('groups')->select('*')->get();
     
         $categories= \DB::table('category')->select('*')->get();
         
 
       //  $data=  Addexpense::all(); 
        // return view('addexpense',['data'=>$data]);
         return view('addexpense',['groups'=>$groups , 'categories'=>$categories]);
         
     }
 
    function expensesubmit(Request $request){
     
           //  print_r($request->input());
            // print_r($request->input());

            DB::table('addexpense')
       ->insert(
           
              ['date'=>$request->input('dato'),
              'username'=>$request->input('username'),
             'group_id'=>$request->input('selectgroup'),
           'category_id'=>$request->input('selectcategory'),
           'description'=>$request->input('description'),
           'amount'=>$request->input('amount')]);

     } 
}
