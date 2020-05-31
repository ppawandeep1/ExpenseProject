<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ViewEx;
use DB;

class ViewExs extends Controller
{
    

    function calculate () {
 
    $groups = \DB::table('groups')->select('*')->get(); 
     return view('calculate',['groups'=>$groups]);

    }

   function ViewEx(){

           $data=\ DB::table('addexpense')
           ->join('category','category.id','addexpense.category_id')
           ->join('groups','groups.id','addexpense.group_id')
           ->get();
         return view('viewExpense',['data'=>$data]); 
     }

     function calculate_submit( Request $request){

          $date_1 =$request->input('date_1');
          $date_2 =$request->input('date_2');
          $id=$request->input('group');

         $users = \DB::table('addexpense')
        ->whereBetween('date',[$date_1,$date_2])
        ->where('group_id','=',[$id])
        ->get();

      return view('finalEx',['users'=>$users]); 
     }
}
