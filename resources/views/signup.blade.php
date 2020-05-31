
@section('content')

<div  class="home-right-content" style="background-color:#E8E8E8;margin-top:50px;margin-left: 300px; margin-bottom:50px;display:flex;flex-direction: row;">
       
  <!--Image-->
  <div>
       <img src="{{ asset('assets/images/emoji2.png') }}" style="width: 200px;height:500px"/>
  </div>
   <div style="margin-top:30px; margin-left:200px; text-align:center;">
<h2 style="color: #f45464">Sign up Here....</h2>
<br></br>


<!--Error message for username already exists-->
@if(Session::has('flash_message_error'))
				<div class="alert alert-danger alert-block" style="margin-bottom: 50px;">
                   <strong style="color: red;">{!! session('flash_message_error') !!}</strong>
                </div>
        @endif

<!--Success message for Signup successfully-->
        @if(Session::has('flash_message_success'))
				<div class="alert alert-danger alert-block" style="margin-bottom: 50px;">
                   <strong style="color: green;">{!! session('flash_message_success') !!}</strong>
                </div>
        @endif
        
        <!--Form starts-->
<form  action="/createsubmit" method = "post">

   <!--Token-->
   <input type="hidden" name="_token" value="{{csrf_token()}}">

   <div class="alert alert-info" style="width:300px; height: 100px; ">
    

           <!--Input field--->
    <div class="form-group">
      <div style="display:inline-block">
    <input width="50px" height="50px" class="form-control" name="name" id="name" placeholder="Enter User Name....">

    <input width="50px" height="50px" class="form-control" name="firstname" id="firstname" placeholder="Enter First Name....">
    </div>
    </div>
               <!--for Input field validations-->
    <div>
      @if ($errors->has('name'))
      <li style=" margin-left: -25%; ">{{ $errors->first('name') }}</li>
       @endif
    </div>
     <div>
      @if ($errors->has('firstname'))
      <li style=" margin-left: -16%; ">{{ $errors->first('firstname') }}</li>
       @endif
     </div>

      <!--Input field--->
    <div class="form-group">
      <div style="display:inline-block; margin-top:20px;">
    <input  width="50px" height="50px" class="form-control" name="lastname" id="lastname" placeholder="Enter Last Name....">
    <input type="num" width="50px" height="50px" class="form-control" name="phonenumber" id="phone" placeholder="Enter Phone Number....">
      </div>
    </div>
               <!--for Input field validations--> 
    <div>
      @if ($errors->has('lastname'))
      <li style=" margin-left: -15%; ">{{ $errors->first('lastname') }}</li>
       @endif
    </div>
     <div>
      @if ($errors->has('phonenumber'))
      <li style=" margin-left: -4%; ">{{ $errors->first('phonenumber') }}</li>
       @endif
     </div>
 
      <!--Input field--->
  <div class="form-group">
    <div style="display:inline-block;  margin-top:20px;">
    
   <input type="email" width="50px" height="50px" class="form-control" name="email" id="email" placeholder="Enter Email....">
    <input type="password" width="50px" height="50px" class="form-control" name="password" id="password" placeholder="Enter Password....">
  </div>
</div>
        <!--for Input field validations-->
<div>
  @if ($errors->has('email'))
  <li style=" margin-left: -23%; ">{{ $errors->first('email') }}</li>
   @endif
</div>
 <div>
  @if ($errors->has('password'))
  <li style=" margin-left: -13%; ">{{ $errors->first('password') }}</li>
   @endif
 </div>

  <!--Input field--->
  <div class="form-group" height="100px">
    <input type="text" style=" width: 100%; height: 40px;  margin-top:20px;"  class="form-control" name="address" id="address" placeholder="Enter Address....">
   </div>

         <!--for Input field validations-->
   <div>
    @if ($errors->has('address'))
    <li style=" margin-left: -18%; ">{{ $errors->first('address') }}</li>
     @endif
   </div>

   <!---Buttons--->
  <input style="  margin-top:20px;" type="submit" value="Submit">
   <input type="reset" value="cancel">
   
</div>
  </form>
</div>
</div>
</div>
@stop
 
<!doctype html>
<html>
    <head>
  
   <link rel="stylesheet" type="text/css" href="{{ url('css/custom.css') }}" />
   
</head>
<body>
<div class="container">
   <header class="row">
       @include('header')
   </header>
   <div id="main" class="row">
           @yield('content')
   </div>
<footer class="row">
    @include('footer')
</footer>
</div>
</body>
</html>