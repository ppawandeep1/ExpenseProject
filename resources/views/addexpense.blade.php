

           
	    		 @section('content')
          

           <div  class="home-right-content" style="background-color:#E8E8E8;margin-top:50px;margin-left: 300px; margin-bottom:50px;display:flex;flex-direction: row;">
             <div>
                  <img src="{{ asset('assets/images/emoji2.png') }}" style="width: 200px;height:500px"/>
             </div>
              <div style="margin-top:30px; margin-left:200px; text-align:center;">
           <h2 style="color: #f45464">Add Expense Page</h2>
           <br></br>
                <form action="/expensesubmit" method = "post">
   
                    {{ csrf_field() }}
                


                      <div class="col-sm-6 padding-5px">
                        <div class="form-group">
                            <div class="col-xs-12"> 
                                <label class="control-label">Date </label>
                                <input type="text" name="dato" id="dato" class="form-control" value="<?php echo date('Y-m-d'); ?>"/>
                            </div>
                        </div> 
                    </div>
                    
                    <script>
                        $(document).ready(function(){
                            $("#dato").datepicker({
                                format: "yyyy-M-dd"
                            });
                        });
                    </script>

<div class="form-group">
  
   <input width="50px" height="70px"class="form-control" name="username" id="username"  value="{{session('uname')}}" placeholder="Enter User Name....">
</div>



  <div class="col-md-12">
    <div>
      <div style="display:inline-block">
<select name="selectgroup" id="selectgroup">
  @foreach($groups as $i)
<option value="{{$i->id}}">{{$i->gname}}</option>
   @endforeach
</select>
     


<select name="selectcategory" id="selectcategory" class="Selectpicker" data-style="select-with-transition" title="Select Group">
  @foreach($categories as $c_name)
<option value="{{$c_name->id}}">{{$c_name->category_name}}</option><br></br>
   @endforeach
</select>
    </div>
  </div>
</div>
            

                      <div class="form-group">
                      <input width="50px" height="70px"class="form-control" name="description" id="description" placeholder="Enter Description...."><br></br>
                         <!-- <input type="text" class="form-control" id="description" name="description">-->
                      </div> 
                    
                    
                      <div class="form-group">
                        <input width="50px" height="70px" type="numbers" class="form-control" id="amount" name="amount" placeholder="Enter the Amount...."><br></br>
                      </div>
                    
                      <input type="submit" value="Submit"> <input type="submit" value="cancel">
                  

                      <button type="submit" class="btn btn-primary">Submit</button>
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