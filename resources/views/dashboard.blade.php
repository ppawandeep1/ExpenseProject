
@section('content')
   <div class="home-main-content" style="background-image: url('assets/images/body_bg.jpeg')";>
       <div class="home-left-content" style="background-color:#DCDCDC; min-height:500px; margin-top:50px; margin-bottom:50px;">
                <ul style="list-style-type: none; margin: 5px; padding: 10px; margin-top: 80px; margin-bottom: 80px;">
                     <li><a style="color:#f45464;display: block; font-weight: 700;  padding: 40px 16px; text-decoration: none;">Your Dashboard</a></li>

                    <li><a  href="group" onMouseOver="this.style.background='#606060'" onMouseOut="this.style.background='none'" style="color:#f45464;display: block; font-weight: 700;
                        padding: 8px 16px; text-decoration: none;">Create Groups</a></li>
                    <li><a  href="addmembers" onMouseOver="this.style.background='#606060'" onMouseOut="this.style.background='none'" style="color:#f45464;display: block; font-weight: 700;
                            padding: 8px 16px; text-decoration: none;">Add Group Members</a></li>
                    <li><a href="addexpense" onMouseOver="this.style.background='#606060'" onMouseOut="this.style.background='none'" style="color:#f45464;display: block; font-weight: 700;padding: 8px 16px;
                        text-decoration: none;">Add Expense</a></li>
                    <li><a href="#" onMouseOver="this.style.background='#606060'" onMouseOut="this.style.background='none'" style="color:#f45464;display: block; font-weight: 700; padding: 8px 16px;text-decoration: none;">Calculate Expense</a></li>

                    <li><a onMouseOver="this.style.background='#606060'" onMouseOut="this.style.background='none'" class="btn btn-primary fad fa-user" href="{{url('/logout')}}" role="button" style="color:#f45464;display: block; font-weight: 700; padding: 40px 16px;text-decoration: none;">Logout</a></li>
                </ul>
       </div>
<!doctype html>
<html>
    <head>
   {{-- @include('head') --}}
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



<html>
  <head>
    
      <script src="{{asset('js/app.js')}} "></script> <!--add js file-->

  </head>
  <link rel="stylesheet" href="{{asset('css/app.css')}}"> 
  <link rel="stylesheet" href="{{asset('css/custom.css')}}">  

      <body>
        <div class="header">
                @section('header')
          <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                 
                 <a class="navbar-brand" href="#">Welcome</a>
                              
                  <a class="navbar-brand" href="login">Login</a> 
                  <a class="navbar-brand" href="create">SignUp</a> 
                               
                </div>
            </div>
        </nav>
          @show   
        </div>
        <div class="content">
           @section('content')
          @show 
        </div>
        <div class="footer">
           @section('footer')
          <h1>Footer Part</h1>
          @show 
        </div>
    </body>

</html>