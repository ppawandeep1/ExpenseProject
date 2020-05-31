
@section('content')

<div  class="home-right-content" style="background-color:#E8E8E8;margin-top:50px;margin-left: 300px; margin-bottom:50px;display:flex;flex-direction: row;">
  <div>
       <img src="{{ asset('assets/images/emoji2.png') }}" style="width: 200px;height:500px"/>
  </div>
   <div style="margin-top:30px; margin-left:200px; text-align:center;">
<h2 style="color: #f45464">Sign up Form</h2>
<br></br>

@if(Session::has('flash_message_error'))
				<div class="alert alert-danger alert-block" style="margin-bottom: 50px;">
                   <strong style="color: red;">{!! session('flash_message_error') !!}</strong>
                </div>
        @endif
        
<form  action="/createsubmit" method = "post">
  

   <input type="hidden" name="_token" value="{{csrf_token()}}"> <!--Token-->

   <div class="alert alert-info" style="width:300px; height: 100px;">
    
    <div class="form-group">
      <div style="display:inline-block">
    <input width="50px" height="50px" class="form-control" name="name" id="name" placeholder="Enter User Name....">

    <input width="50px" height="50px" class="form-control" name="firstname" id="firstname" placeholder="Enter First Name...."><br></br>
    </div>
    </div>

    <div class="form-group">
      <div style="display:inline-block">
    <input  width="50px" height="50px" class="form-control" name="lastname" id="lastname" placeholder="Enter Last Name....">
    <input type="num" width="50px" height="50px" class="form-control" name="phonenumber" id="phone" placeholder="Enter Phone Number...."><br></br>
      </div>
    </div>
 
  <div class="form-group">
    <div style="display:inline-block">
    
   <input type="email" width="50px" height="50px" class="form-control" name="email" id="email" placeholder="Enter Email....">
    <input type="password" width="50px" height="50px" class="form-control" name="password" id="password" placeholder="Enter Password...."><br></br>
  </div>
</div>

  <div class="form-group">
    <input type="textarea"style=" width: 100%; height: 100%;"  class="form-control" name="address" id="address" placeholder="Enter Address...."><br></br>
   </div>

  <input type="submit" value="Submit"> <input type="submit" value="cancel">
   
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