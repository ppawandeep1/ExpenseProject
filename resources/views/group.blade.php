@section('content')
   <div class="home-main-content" style="background-image: url('assets/images/body_bg.jpeg')";>
       <div class="home-left-content" style="background-color:#DCDCDC; min-height:500px; margin-top:50px; margin-bottom:50px;">
                <ul style="list-style-type: none; margin: 5px; padding: 10px;">
                    <li><a href="/" style="color:#2c343c;display: block; font-weight: 900;
                        padding: 8px 16px; text-decoration: none;">Dashboard</a></li>
                    <li><a  href="creategroup" onMouseOver="this.style.background='#606060'" onMouseOut="this.style.background='none'" style="color:#f45464;display: block; font-weight: 700;
						padding: 8px 16px; text-decoration: none;">Create Groups</a></li>
						<li><a  href="creategroup" onMouseOver="this.style.background='#606060'" onMouseOut="this.style.background='none'" style="color:#f45464;display: block; font-weight: 700;
							padding: 8px 16px; text-decoration: none;">Add Group Members</a></li>
                    <li><a href="#" onMouseOver="this.style.background='#606060'" onMouseOut="this.style.background='none'" style="color:#f45464;display: block; font-weight: 700;padding: 8px 16px;
                        text-decoration: none;">Add Expense</a></li>
                    <li><a href="#" onMouseOver="this.style.background='#606060'" onMouseOut="this.style.background='none'" style="color:#f45464;display: block; font-weight: 700; padding: 8px 16px;text-decoration: none;">Calculate Expense</a></li>
                </ul>
       </div>
       <div class="home-right-content" style="background-color:#E8E8E8;margin-top:50px; margin-bottom:50px;display:flex;flex-direction: row;">
           <div>
                <img src="{{ asset('assets/images/emoji2.png') }}" style="width: 200px;height:500px"/>
           </div>
            <div style="margin-top:70px; margin-left:30px; text-align:center;">
				<h2 style="color: #f45464">Create Group</h2>
				<form action="#">
					<input type="text" id="groupname" name="groupname" placeholder="Group Name..">
					<input type="text" id="id" name="id" placeholder="Id"> 
				
					<label for="participants">Add Participants</label><br>
					<input type="text" id="username" name="username" placeholder="Enter Username"> <br>
				
					<input type="submit" value="Submit"> <input type="submit" value="cancel">
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


