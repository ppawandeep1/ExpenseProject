
@section('content')
   <div class="home-main-content" style="background-image: url('assets/images/body_bg.jpeg')";>
       <div class="home-left-content" style="background-color:#DCDCDC; min-height:500px; margin-top:50px; margin-bottom:50px;">
                <ul style="list-style-type: none; margin: 5px; padding: 10px; margin-top: 80px; margin-bottom: 80px;">
                     <li><a style="color:#f45464;display: block; font-weight: 700;  padding: 40px 16px; text-decoration: none;">Your Dashboard</a></li>

                    <li><a  href="group" onMouseOver="this.style.background='#606060'" onMouseOut="this.style.background='none'" style="color:#f45464;display: block; font-weight: 700;
                        padding: 8px 16px; text-decoration: none;">Create Groups</a></li>
                    <li><a  href="addmembers" onMouseOver="this.style.background='#606060'" onMouseOut="this.style.background='none'" style="color:#f45464;display: block; font-weight: 700;
                            padding: 8px 16px; text-decoration: none;">Add Group Members</a></li>
                    <li><a href="#" onMouseOver="this.style.background='#606060'" onMouseOut="this.style.background='none'" style="color:#f45464;display: block; font-weight: 700;padding: 8px 16px;
                        text-decoration: none;">Add Expense</a></li>
                    <li><a href="#" onMouseOver="this.style.background='#606060'" onMouseOut="this.style.background='none'" style="color:#f45464;display: block; font-weight: 700; padding: 8px 16px;text-decoration: none;">Calculate Expense</a></li>

                    <li><a onMouseOver="this.style.background='#606060'" onMouseOut="this.style.background='none'" class="btn btn-primary fad fa-user" href="{{url('/logout')}}" role="button" style="color:#f45464;display: block; font-weight: 700; padding: 40px 16px;text-decoration: none;">Logout</a></li>
                </ul>
       </div>
       <div  class="home-right-content" style="background-color:#E8E8E8;margin-top:50px;margin-left: 80px; margin-bottom:50px;display:flex;flex-direction: row;">
           <div>
                <img src="{{ asset('assets/images/emoji2.png') }}" style="width: 200px;height:500px"/>
           </div>
            <div style="margin-top:70px; margin-left:100px; text-align:center;">
        <h2 style="color: #f45464">Create Group....</h2>
        <br></br>
        <form action="creategroup" method="post">
          {{ csrf_field() }}<!--token-->
            <div class="alert alert-info" style="width:300px;height: 100px;">
              <input type="text" style=" width: 100%; height: 40% ; text-align: center;" class="form-control" name="gname" id="gname" placeholder="Enter Group Name...."><br></br>
                <input type="submit" value="Save"> <input type="reset" value="Cancel">
            </div>
        </form>
            </div>
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


