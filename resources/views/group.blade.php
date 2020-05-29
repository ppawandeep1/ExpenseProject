@extends('layout')



@section('header')
@parent
@endsection

  @section('sidebar')
  @parent
  @endsection

  @section('content')
        
           <img src="{{ asset('assets/images/emoji2.png') }}" style="width: 250px;height:100%"/>   
        <br></br>
        <form action="creategroup" method="post">
          {{ csrf_field() }}<!--token-->
          <h2 style="color: #000000; text-align: center; padding-bottom: 50px;  margin-top:-600px;" >Create Group....</h2>
            <div class="alert alert-info" style="width:300px;height: 100px;margin-left: 400px; margin-top: 100px;">
              <input type="text" style=" width: 100%; height: 40% ; text-align: center; margin-bottom: 50px;" class="form-control" name="gname" id="gname" placeholder="Enter Group Name...."><br></br>
                <input type="submit" value="Save"> <input type="reset" value="Cancel">
            </div>
        </form>
      
   @endsection

@section('footer')
@parent
@endsection