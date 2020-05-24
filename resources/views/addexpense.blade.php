@extends('layout')

            <div class="content">
	    		 @section('content')
                <h1>Add Expense page</h1>
                <form action="/expensesubmit" method = "post">
   
                    {{ csrf_field() }}
                
                  <!--  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Date</label>
                      <div class="col-sm-10">
                   <input type="date" class="form-control" id="date" name="date" >
                     
                    </div>
                      </div>-->


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
                      
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">UserName</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="username" name="username" value="{{session('uname')}}" />
                       
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <div>
                      <select name="selectgroup" id="selectgroup">
                        @foreach($groups as $i)
                      <option value="{{$i->id}}">{{$i->gname}}</option>
                         @endforeach
                      </select>
                          </div>
                        </div>
                      </div> 

                      <div class="row">
                        <div class="col-md-12">
                          <div>
                      <select name="selectcategory" id="selectcategory" class="Selectpicker" data-style="select-with-transition" title="Select Group">
                        @foreach($categories as $c_name)
                      <option value="{{$c_name->id}}">{{$c_name->category_name}}</option>
                         @endforeach
                      </select>
                          </div>
                        </div>
                      </div> 

                      <div class="form-group row">
                        <label for="description" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="description" name="description">
                        </div>
                      </div>
                    
                    <div class="form-group row">
                      <label for="amount" class="col-sm-2 col-form-label">Amount</label>
                      <div class="col-sm-10">
                        <input type="numbers" class="form-control" id="amount" name="amount">
                      </div>
                    </div>

                  

                      <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
	    		
            </div>
	    		@endsection 