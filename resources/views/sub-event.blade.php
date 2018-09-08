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
    <li class="active " style="margin-bottom:2px;"><a data-toggle="tab" class="" href="#home"><i class="fa fa-clock-o" id="info_fa"> </i> WHEN</a></li>
    <li><a class="" data-toggle="tab" href="#menu1"><i class="fa fa-map-marker" id="info_fa"> </i> WHERE</a></li>
    <li><a class="" data-toggle="tab" href="#menu2"><i class="fa fa-calendar" aria-hidden="true" id="info_fa"></i> EVENT</a></li>
    
  </ul>
  
    <div id="menu1" class="tab-pane fade">
      <div class="container" ><!--id="main-code"-->
     <div class="col-xs-12 col-sm-6 col-md-3 kin_photo">
     <div class="fb-profile" style="margin-top:13%">
 <img class="thumbnail profile_image" src="images/sravan.jpeg" alt="Profile image">
     <div class="fb-profile-text text-center">
         <!--<h3>Event Name</h3>
          <p class="text-center"><i class="fa fa-map-marker" style="color:#46A6EA"></i> Location:UK</p>-->
</div>
</div>
</div>
</div>
<div class="col-sm-offset-5 col-xs-offset-2 ">
<button class="btn btn-primary mybtn" type="reset">Save & Close</button>
<button class="btn btn-primary mybtn"  type="reset">Save & continue </button>
</a>
				 </div><br>
    </div>
    <div id="menu2" class="tab-pane fade">
     
        <div class="board" id="board_height">
          <div class="board-inner event_iconlist" id="icons_align">
            <ul class="nav nav-tabs nav_info" id="myTab"  style="margin:40px 25%">
                <div class="liner"></div>
                <li  class="active">
                <a href="{{url('/addevent')}}" class="tab-one" title="Event Summary">
                  <span class="round-tabs">
                    <i class="fa fa-bullhorn"></i>
                  </span>
                 </a></li>
                 <li><a href="#" title="Sub Events">
                   <span class="round-tabs">
                     <i class="fa fa-list"></i>
                   </span>
                 </a>
                    </li>
                  <li><a href="#" title="Schedule">
                      <span class="round-tabs">
                           <i class="fa fa-calendar"></i>
                      </span> </a>
                      </li>

                      <li><a href="#" title="Contacts">
                          <span class="round-tabs">
                               <i class="fa fa-phone"></i>
                          </span>
                      </a></li>
                      <li><a href="#" title="Venue">
                          <span class="round-tabs">
                               <i class="fa fa-paper-plane-o"></i>
                          </span>
                      </a></li>

                      <li><a href="#" title="Conform">
                          <span class="round-tabs">
                               <i class="fa fa-check"></i>
                          </span> </a>
                      </li>

                      </ul></div>
<div class="tab-content tab_details">
    <div class="tab-pane fade in active" id="eventsummary">
      <form class="form-horizontal" style="background:#fff;" method="post" action="{{url('addevent')}}"  enctype="multipart/form-data">
        
        <div class="row">
          <div class="form-group" id="field1">
            <label class="control-label col-xs-4 col-sm-4" for="txt">Event Name:</label>
              <div class="col-xs-8 col-sm-6"> 
                  <input type="text" class="form-control" id="event-name" name="event_name" onchange="eventname()" value="{{old('event_name')}}" pattern="([A-zÀ-ž\s]){3,25}" required>
                  <span class="name-error" style="color: red;display: none">Event Name should contain 3-25 characters.</span>

              </div>
          </div>
          <div class="form-group">
              <label class="control-label col-xs-4 col-sm-4" for="txt">Description:</label>
                  <div class="col-xs-8 col-sm-6">
                      <textarea class="form-control" id="txt" name="description" value="{{old('description')}}" required></textarea>
                  </div>
          </div>
          <div class="form-group">
            <label class="control-label col-xs-4 col-sm-4" for="txt">Privacy:</label>
              <div class="col-xs-8 col-sm-4 mob-none">
    <label class="radio-inline containerh">Public<input type="radio" name="privacy" value="public" checked="checked" required><span class="checkmark"></span></label>
	<label class="radio-inline containerh">Private<input type="radio" name="privacy" value="Private" required><span class="checkmark"></span></label>
	<label class="radio-inline containerh">Personal<input type="radio" name="privacy" value="Personal" required><span class="checkmark"></span></label>
                    <label class="radio-inline containera"> <button class="btn btn-xs tooltips" data-container="body" data-placement="right" title=" 
                      Public means 'its shown for all users' ,
                      private means 'its shown for selected users' , 
                      Personal means 'its shown for personal invited users"> ? </button> </label>
              </div>
			  <div class="col-xs-8 col-sm-4 desk-none tab-none mob-block">
    <label class="radio-inline containerh">Public<input type="radio" name="privacy" value="public" required><span class="checkmark"></span></label><br>
	<label class="radio-inline containerh">Private<input type="radio" name="privacy" value="Private" required><span class="checkmark"></span></label><br>
	<label class="radio-inline containerh">Personal<input type="radio" name="privacy" value="Personal" required><span class="checkmark"></span></label><br>
              </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-4 col-sm-4" for="txt">Short Name:</label>
                  <div class="col-xs-8 col-sm-6">
                    <input type="text" class="form-control" id="short-name" onblur="eventshortname('{{url('checkshortname/event')}}')" name="short_name" value="{{old('short_name')}}">
                    <div id="message"></div>
                  </div>
            </div>
            <div class="form-group">
              <label class="control-label col-xs-4 col-sm-4" for="imgUpload">Image:</label>
                <div class="col-xs-8 col-sm-6">
                    <input type="file" class="form-control myful" id="imgUpload" name="imgUpload"  accept="image/*"><span class="col-xs-8 btn btn-default mob-block desk-none tab-none" style="margin-top: 2%;"> <i class="fa fa-edit" style="color:#ff6600" title="Edit"> </i> Edit Image</span>
                </div>
			
              </div>
			  <div class="col-xs-offset-4 col-sm-offset-4 col-xs-4 col-sm-4 col-offset-sm-4 col-xs-offset-4 mypic mob-none" >
              
				<img src="{{ url('public/images/taylor.png') }}" alt="img" class="img-thumbnail" style="height: 132px;" width="100%">
              <button class="btn btn-default" style="margin-top:-55px" onclick="imgupload()"><i class="fa fa-edit" aria-hidden="true" title="Edit Picture" id="fa_edit"></i></button>
			  </div>
			  <div class="col-xs-offset-4 col-sm-offset-4 col-xs-4 col-sm-4 col-offset-sm-4 col-xs-offset-4 mypic desk-none tab-none mob-block" >
              
				<img src="{{ url('public/images/taylor.png') }}" alt="img" class="img-thumbnail" style="height: 76px;" width="100%">
              </div>
              </div>
              <center>
              <a><button class="btn btn-primary mybtn" type="reset">Cancel</button></a>
				 <button class="btn btn-primary mybtn">Save and Continue</button>
              </form>
                </div>
                    </div>
					</div>
					</div>
					</div>
                  </div>
                </div>
              </div>
			 
        @endsection
		
