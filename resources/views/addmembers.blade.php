@extends('layout')

@section('header')
@parent
@endsection

  @section('sidebar')
  @parent
  @endsection

  @section('content')
        
           <img src="{{ asset('assets/images/emoji2.png') }}" style="width: 250px;height:100%"/>
           <div class="membody">
            <h2 style="color:  #000000; padding-bottom: 50px;">Add Members....</h2>
              @if(Session::has('flash_message_success'))
                <div class="alert alert-danger alert-block" style="margin-bottom: 50px; padding-bottom: 50px;">
                   <strong style="color: green;">{!! session('flash_message_success') !!}</strong>
                </div>
                @endif
                   <form  id="myForm" action="membersubmit" method="post">
                    <div class="form-row" style="padding-top: 50px;">
                        <div class="form-group col-md-6" style="margin-left: -30%;margin-top: -50px;">
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
                         <div class="form-group col-md-6" style="margin-top: -76px;margin-left: 10%;">
                              <div id="k" style="display: none;"></div>
                              <select id="name" name="name" class="form-control" style="width: 45%; height: 40px ;">
                                   <option value="" disabled selected>Select Members....</option>
                                  @foreach($users as $u)
                                  <option value="{{$u->id}}">{{$u->name}}</option>
                                  @endforeach
                              </select>
                          </div>
                                <input type="button" class="add-row" value="Add Member" style="margin-left: -10%;" id="saveMember">
                               <br></br>
                               <div class="table">
                               <table id="table">
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
                            <input type="button" class="delete-row" value="Delete">
                            <input  id="submit" type="submit" value="Save">
                          </div>
                    </div>
                    </form>
      </div> 
   @endsection

@section('footer')
@parent
@endsection

