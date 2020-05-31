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

            $this->validate($request,[
              "date"=>"required|date",
              "selectgroup"=>"required",
              "selectcategory"=>"required",
              "description"=>"required|string",
              "amount"=>"required|regex:/^\d+(\.\d{1,2})?$/"
            ]);

            DB::table('addexpense')
       ->insert(
           
              ['date'=>$request->input('date'),
              'username'=>$request->input('username'),
             'group_id'=>$request->input('selectgroup'),
           'category_id'=>$request->input('selectcategory'),
           'description'=>$request->input('description'),
           'amount'=>$request->input('amount')]);

           return redirect('/addexpense')->with('success','!! Expense added Successfully!!');
     } 
}
