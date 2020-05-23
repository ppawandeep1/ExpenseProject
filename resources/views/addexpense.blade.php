@extends('layout')

            <div class="content">
	    		 @section('content')
                <h1>Add Expense page</h1>
                <form action="/expensesubmit" method = "post">
   
                    {{ csrf_field() }}
                
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Date</label>
                      <div class="col-sm-10">
                      <input type="date" class="form-control" id="date" name="date">
                    </div>
                      </div>

                      
                      <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">UserName</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="name" name="name">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <div>
                      <select name="selectgroup" id="selectgroup" class="Selectpicker" data-style="select-with-transition" title="Select Group">
                        <option value="name">SelectGroup</option>
                        @foreach($groups as $i)
                      <option value="{{$i->id}}">{{$i->group_name}}</option>
                         @endforeach
                      </select>
                          </div>
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