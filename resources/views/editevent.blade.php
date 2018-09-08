@extends('layouts.main')
@section('content')

@if(session()->has('message.level'))
    <div class="alert alert-{{ session('message.level') }}" style="margin:13px;text-align: center;">
    {!! session('message.content') !!}
    </div>
    @endif
    <!-- event code starts here -->
   <div class="container" id="main-code">
      <h5 class="add_venue" style="padding:10px;"><span class="" style="font-size:17px;" ><i class="fa fa-calendar"> </i> </span> GALA</h5>
      <div class="row" style="border:1px solid #eee;margin-left:0px;margin-right:0px;box-shadow: 0 3px 8px #ddd;">
    <ul class="nav nav-tabs">
    <li class="active " style="margin-bottom:2px;"><a href="{{url('/addevent')}}"><i class="fa fa-clock-o" id="info_fa"> </i> WHEN</a></li>
    <li><a class="" href="{{url('/event-venue')}}"><i class="fa fa-map-marker" id="info_fa"> </i> WHERE</a></li>
    <li><a class="" href="{{url('/subevent/')}}"><i class="fa fa-calendar" aria-hidden="true" id="info_fa"></i> EVENT</a></li>
    
  </ul>
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <div class="container"><!--id="main-code"-->
        <form class="form-horizontal kin_infor" method="post" action="{{url('/editevent/'.$event_id)}}" enctype="multiplart/form-data">
          {{csrf_field()}}
     <div class="col-xs-12 col-sm-6 col-md-3 kin_photo">
     <div class="fb-profile" style="margin-top:13%">
 <img class="thumbnail profile_image" src="{{asset('public/images/event.jpg')}}" alt="Profile image">
     <div class="fb-profile-text text-center">
        <div class="col-xs-12 col-sm-12">
                    <input class="form-control myful" id="imgUpload" name="imgUpload" accept="image/*" type="file"><span class="col-xs-8 btn btn-default mob-block desk-none tab-none" style="margin-top: 2%;"> <i class="fa fa-edit" style="color:#ff6600" title="Edit"> </i> Edit Image</span>
                </div>
         <!-- <p class="text-center"><i class="fa fa-map-marker" style="color:#46A6EA"></i> Location:UK</p>-->
</div>
</div>
</div>
 <div class="col-xs-12 col-sm-6 col-md-8 kin_info">

<div class="well" style="background:#fff;margin-top:43px;">
          <div class="row">
            @if(count($event_details)>0)
            @foreach($event_details as $event)
          <div class="form-group" id="field1">
            <label class="control-label col-xs-4 col-sm-4" for="txt">Gala Name:</label>
              <div class="col-xs-8 col-sm-7"> 
                  <input type="text" class="form-control" id="event-name" name="event_name" onchange="eventname()" value="{{$event->EventName}}" pattern="([A-zÀ-ž\s]){3,25}" required>

              </div>
          </div>
          <div class="form-group">
              <label class="control-label col-xs-4 col-sm-4" for="txt">Description:</label>
                  <div class="col-xs-8 col-sm-7">
                      <textarea class="form-control" id="txt" name="description"  required>{{$event->Description}}</textarea>
                  </div>
          </div>
            <div class="form-group">
            <label class="control-label col-xs-4 col-sm-4" for="txt">Privacy:</label>
              <div class="col-xs-8 col-sm-6 mob-none">
    <label class="radio-inline containerh">Public<input type="radio" name="privacy" value="Public" @if($event->Privacy == "Public") checked @endif required><span class="checkmark"></span></label>
  <label class="radio-inline containerh">Private<input type="radio" name="privacy" value="Private" @if($event->Privacy == "Private") checked @endif required><span class="checkmark"></span></label>
  <label class="radio-inline containerh">Personal<input type="radio" name="privacy" value="Personal" @if($event->Privacy == "Personal") checked @endif required><span class="checkmark"></span></label>
                    <label class="radio-inline containera"> <button class="btn btn-xs tooltips" data-container="body" data-placement="right" title=" 
                      Public means 'Event is shown for all users' , private means 'Event is shown for selected users' , 
                      Personal means 'Event is shown for personal invited users"> ? </button> </label>
              </div>
        <div class="col-xs-8 col-sm-4 desk-none tab-none mob-block">
    <label class="radio-inline containerh">Public<input type="radio" name="privacy" value="Public" @if($event->Privacy == "Public") checked @endif required><span class="checkmark"></span></label><br>
  <label class="radio-inline containerh">Private<input type="radio" name="privacy" value="Private" @if($event->Privacy == "Private") checked @endif required><span class="checkmark"></span></label><br>
  <label class="radio-inline containerh">Personal<input type="radio" name="privacy" value="Personal" @if($event->Privacy == "Personal") checked @endif required><span class="checkmark"></span></label><br>
              </div>
            </div>
              <div class="form-group">
                <label class="control-label col-xs-4 col-sm-4" for="txt">Short Name:</label>
                  <div class="col-xs-8 col-sm-7">
                    <input type="text" class="form-control" id="short-name" onblur="eventshortname('{{url('checkshortname/event')}}')" name="short_name" value="{{$event->ShortName}}">
                    <div id="message"></div>
                  </div>
            </div>
          
            <div class="form-group">
                <label class="control-label col-xs-4 col-sm-4" for="txt">Start Date & Time:</label>
                  <div class="col-xs-8 col-sm-7">
                    <div class="input-group">
                        <input class="form-control" id="tme" name="start_date" type="date" value="{{$event->StartDate}}">
                        <span class="input-group-addon"><i class="fa fa-calendar-o"></i></span>
                    </div>
                  </div>
         <!-- <div class="col-xs-8 col-sm-3">
                    <div class="input-group">
                        <input class="form-control" id="tme" name="time" type="time">
                        <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                    </div>
                    
                  </div>-->
            </div>
            <div class="form-group">
                <label class="control-label col-xs-4 col-sm-4" for="txt">End Date & Time:</label>
                  <div class="col-xs-8 col-sm-7">
                    <div class="input-group">
                        <input class="form-control" id="tme" name="end_date" type="date" value="{{$event->EndDate}}">
                        <span class="input-group-addon"><i class="fa fa-calendar-o"></i></span>
                    </div>
                  </div>
          <!--<div class="col-xs-8 col-sm-3">
                    <div class="input-group">
                        <input class="form-control" id="tme" name="time" type="time">
                        <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                    </div>-->
                    
                  </div>
            </div>
              </div>
  
</div>

</div></div>
<div class="col-sm-offset-6 col-xs-offset-6 "><button class="btn btn-primary mybtn" style="width:20%">save</button> </form>
  <form method="get" action="">
                        <center><button type="submit" class="btn btn-primary mybtn">Next</button></center>
                      </form>
         </div><br>
        
         @endforeach
         @endif
    </div>
  
 

                </div>
                    </div>
          </div>
          </div>
          </div>
                  </div>
                </div>
              </div>
       
        @endsection
    
