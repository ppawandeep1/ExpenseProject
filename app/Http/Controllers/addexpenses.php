<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Addexpense;
use DB;
class addexpenses extends Controller
{
   
     //Add Expense

     function expense()
     {
         $groups= \DB::table('groups')->select('*')->get();
     
         $categories= \DB::table('category')->select('*')->get();
         
         return view('addexpense',['groups'=>$groups , 'categories'=>$categories]);
         
     }
     
 
    function expensesubmit(Request $request){
     
            //validations
            
            $this->validate($request,[
              "date"=>"required|date",
              "selectgroup"=>"required",
              "selectcategory"=>"required",
             "description"=>"required|regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/",
              "amount"=>"required|regex:/^\d+(\.\d{1,2})?$/"
            ]);

            //storing the data into the database

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
