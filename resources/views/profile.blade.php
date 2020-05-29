@extends('layout')

@section('header')
@parent
@endsection

  @section('sidebar')
  @parent
  @endsection

  @section('content')
        
           <img src="{{ asset('assets/images/emoji2.png') }}" style="width: 250px;height:100%"/>
           
            <h1 style="color: #f45464; text-align:center; margin-top: -500px;margin-left: 200px;  padding-top: 100px">Welcome  &nbsp;&nbsp;{{Session::get('uname')}}</h1> 
            <h2 style="color: #f45464;text-align: center; margin-top: 130px;margin-left: 252">Select Your Option From Dashboard !!</h2>
      
   @endsection

@section('footer')
@parent
@endsection
