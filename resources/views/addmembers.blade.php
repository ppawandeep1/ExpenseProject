
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
            <div style="margin-top:70px; margin-left:150px; text-align:center;">
            <h2 style="color: #f45464">Add Members....</h2>
            <br></br>
              @if(Session::has('flash_message_success'))
                <div class="alert alert-danger alert-block" style="margin-bottom: 50px; padding-bottom: 50px;">
                   <strong style="color: green;">{!! session('flash_message_success') !!}</strong>
                </div>
                @endif
                   <form  id="myForm" action="membersubmit" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6" style="margin-left: -100%;margin-top: -50px;">
                          {{ csrf_field() }}<!--token-->
                              <input type="hidden" value="0" name="count" id="count">
                              <select id="group" name="group" class="form-control" style="width: 30%; height: 40px ;">
                                <option value="" disabled selected>Select Group....</option>
                                  @foreach($groups as $g)
                                  <option  value="{{$g->id}}">{{$g->gname}}</option>
                                  @endforeach
                              </select>
                          </div>
                              <br></br>
                         <div class="form-group col-md-6" style="margin-top: -76px;margin-left: 40%;">
                              <div id="k" style="display: none;"></div>
                              <select id="name" name="name" class="form-control" style="width: 100%; height: 40px ;">
                                   <option value="" disabled selected>Select Members....</option>
                                  @foreach($users as $u)
                                  <option value="{{$u->id}}">{{$u->name}}</option>
                                  @endforeach
                              </select>
                          </div>
                                <input type="button" class="add-row" value="Add Member" style="margin-left: -40%;" id="saveMember">
                               <br></br>
                               <table id="table" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Select</th>
                                        <th>User Name</th>
                                        <th>Group Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    </tr>
                                </tbody>
                            </table>
                            <input type="button" class="delete-row" value="Delete Member">
                            <input  id="submit" type="submit" value="Save">
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
   <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>
    var formData=[];
    
    $(document).ready(function(){
         data=$("myForm");
        $("#saveMember").click(function(){
            //data.push({'group':$('#group').val(),'name':$("#name").val()})
             console.log("here");
             var  name = $("#name").val();
             var group =  $("#group").val();
             var count = parseInt($("#count").val());
             count++;
             $("#count").val(count);
             var str="<input type='hidden' name='group"+count+"' value='"+group+"'><input type='hidden' name='name"+count+"' value='"+name+"'>"
             $("#k").append(str);
             formData.push({'group':group,'name':name})
             console.log("formData=>", formData)
             
             var  name = $("#name option:selected").html();
             var group =  $("#group option:selected").html();
            var markup = "<tr><td><input type='checkbox' name='record'></td><td>" + name + "</td><td>" + group + "</td></tr>";
            $("#table").append(markup);
        })
        $("#submit").click(function(){
        });
        //delete row
        $(".delete-row").click(function(){
            $("table tbody").find('input[name="record"]').each(function(){
                if($(this).is(":checked")){
                    $(this).parents("tr").remove();
                }
            });
        });
    });    
</script>

<style>
    table, th, td {
  border: 1px solid black;
}
th {
  background-color: #f45464;
  color: white;
}
table{
   background-color: white; 
}
</style>

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


