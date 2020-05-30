
@extends('layout')

@section('header')
@parent
@endsection

  @section('sidebar')
  @parent
  @endsection
           
	    		 @section('content')
          

             
                  <img src="{{ asset('assets/images/emoji2.png') }}" style="width: 250px; height:100%"/>
             <div class = "membody">
             <h2 style="color: #c60c12; padding-bottom: 50px; margin-left: -20%;">Add Expense Page</h2>
           

           @if(Session::has('success'))
           <div class="alert alert-danger alert-block" style="margin-bottom: 50px;">
                      <strong style="color: #c60c12;">{!! session('success') !!}</strong>
                   </div>
           @endif

                <form action="/expensesubmit" method = "post">
                    {{ csrf_field() }}
                
                    <div class="alert alert-info" style="width:100%;height: 100px;">

                    
                        <div class="form-group">
                         <input type="date" style=" width: 80%; height: 50% ; margin-left: -30%; text-align: center;" name="dato" id="dato" class="form-control" /><br></br>
                        </div>
                   

                        <div class="form-group">
                          
                          <input  style=" width: 80%; height: 50% ; margin-left: -30%;" class="form-control" name="username" id="username"  value="{{session('uname')}}" placeholder="Enter User Name...."><br></br>
                        </div>

      
                        <select style="width: 40%; height: 40px ; margin-left: -30%;" name="selectgroup" id="selectgroup"  >
                          <option value="" disabled selected>Select Group....</option>
                          @foreach($groups as $i)
                        <option value="{{$i->id}}">{{$i->gname}}</option>
                          @endforeach
                        </select>
                            


                        <select  style="width: 40%; height: 40px ; "  name="selectcategory" id="selectcategory" >
                          <option value="" disabled selected>Select Category....</option>
                          @foreach($categories as $c_name)
                        <option value="{{$c_name->id}}">{{$c_name->category_name}}</option>
                          @endforeach
                        </select><br></br>
                            
                        
            

                      <div class="form-group">
                      <input style=" width: 80%; height: 50% ;margin-left: -30%; text-align: center;"class="form-control" name="description" id="description" placeholder="Enter Description...."><br></br>
                         <!-- <input type="text" class="form-control" id="description" name="description">-->
                      </div> 
                    
                    
                      <div class="form-group">
                        <input style=" width: 80%; height: 50% ; margin-left: -30%; text-align: center;" type="numbers" class="form-control" id="amount" name="amount" placeholder="Enter the Amount...."><br></br>
                      </div>
                    
                      <input style="  margin-left: -10%; " type="submit" value="Submit"> <!--<input type="submit" value="cancel">-->.
                  
                    </div>
                  </div>
                  </form>
              
              </div>
              @endsection

  @section('footer')
  @parent
  @endsection  
             