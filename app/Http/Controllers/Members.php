<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

class Members extends Controller
{
    //
     function members()
    {
       return view('addmembers');
    }
}
