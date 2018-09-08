@extends('layouts.main')
@section('content')

      <div class="container mycntn">
   <ol class="breadcrumb" style="border:1px solid #46A6EA;color:#46A6EA;">
  <li class="breadcrumb-item"><a style="color:#777;" href="{{url('/')}}">Home</a></li>
  <li class="breadcrumb-item"><a style="color:#777;" href="{{url('/addvenue/'.$venue_id)}}">Add Venue</a></li>
  <li class="breadcrumb-item"><a style="color:#777;" href="{{url('/venuepool/'.$venue_id)}}">Add Pool</a></li>
  <li class="breadcrumb-item"><a style="color:#777;" href="{{url('/venuecontact/'.$venue_id)}}">Add Contact</a></li>
    <li class="breadcrumb-item">Add Venue Timings</li>

  
 </ol>
  @if(session()->has('message.level'))
 <div class="alert alert-{{ session('message.level') }}" style="margin-left:13px;text-align: center;">
      {!! session('message.content') !!}
    </div>
      @endif      <div class="row">
             <div class="col-xs-12 col-sm-3 kin_photo">
     <div class="fb-profile" style="margin-top:8%;">

 <img alt="Profile image" class="img-rounded profile_image" src="{{$image[0]->ImagePath}}">
     <div class="fb-profile-text text-center">
        
         <!-- <p class="text-center"><i class="fa fa-map-marker" style="color:#46A6EA"></i> Location:UK</p>-->
</div>
</div>
</div>
<div class="col-sm-8 col-xs-12">
                 <!-- <h2>Welcome to IGHALO!<sup>™</sup></h2>-->
                 <div class="board-inner">
                 <ul class="nav nav-tabs nav_info" id="myTab">
                 <div class="liner"></div>
                  <li>
                  <a href="{{url('addvenue')}}" class="tab-one" title="Venue Summary">
                   <span class="round-tabs">
                           <i class="fa fa-list"></i>
                   </span>
               </a></li>

               <li><a href="" title="Pool Information">
                  <span class="round-tabs">
                      <i class="fa fa-info"></i>
                  </span>
        </a>
              </li>

                  <li><a href="" data-toggle="tab" title="Contact">
                  <span class="round-tabs">
                       <i class="fa fa-phone"></i>
                  </span> </a>
                  </li>

                  <li  class="active"><a href="" title="Open hours & Facilities">
                      <span class="round-tabs">
                           <i class="fa fa-clock-o"></i>
                      </span>
                  </a></li>
                  <li><a href="" title="Web site & Social Links">
                      <span class="round-tabs">
                           <i class="fa fa-share-alt"></i>
                      </span>
                  </a></li>

                  <li><a href="" title="Confirm Venue">
                      <span class="round-tabs">
                           <i class="fa fa-check"></i>
                      </span> </a>
                  </li>

                  </ul></div>
                  <form method="post" style="background:#fff;padding:35px;" action="{{ url('venuetimings/'.$venue_id) }}">
                    {{csrf_field()}}
                     <div class="tab-pane fade in active" id="venuefacilities">
                        <h4 style="color:#46A6EA"><b>Opening Hours</b></h4><hr>

@if(count($days_open)>0)
<div class="row">
<div class="col-sm-2">
<label class="checkbox-inline containerck"><b>Monday
<input type="checkbox" name="day_one[]" value="Monday" @if($days_open[0]->Day == 'Monday') checked @endif>
<span class="checkmarkck"></span>
  </label>

</div>
<div class="col-sm-4">
<div class="form-group">
    <label class="control-label col-sm-3" for="tme">From:</label>
    <div class="col-sm-2">
      <div class="input-group">
            <input type="time" class="form-control" @if($days_open[0]->Day == 'Monday') value="{{$days_open[0]->OpeningHours}}" @endif  name="day_one[]">
          <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
      </div>
    </div>
    </div>
  </div>
<div class="col-sm-4">
    <div class="form-group">
    <label class="control-label col-sm-3" for="tme">To:</label>
    <div class="col-sm-2">
      <div class="input-group">
           <input type="time" class="form-control" @if($days_open[0]->Day == 'Monday') value="{{$days_open[0]->ClosingHours}}" @endif id="end-one"  name="day_one[]">
          <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
      </div>
    </div>
    </div>
</div>
</div>
<br>
<div class="row">
<div class="col-sm-2">
<label class="checkbox-inline containerck"><b>Tuesday
     <input type="checkbox" name="day_two[]" value="Tuesday" @if($days_open[0]->Day == 'Tuesday') checked @endif>
	 <span class="checkmarkck"></span>
   </label>
 </div>
 <div class="col-sm-4">
   <div class="form-group">
     <label class="control-label col-sm-3" for="tme">From:</label>
     <div class="col-sm-2">
       <div class="input-group">
           <input type="time" class="form-control" id="tme"  @if($days_open[0]->Day == 'Tuesday') value="{{$days_open[0]->OpeningHours}}" @endif   name="day_two[]">
           <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
       </div>
     </div>
     </div>
   </div>
<div class="col-sm-4">
     <div class="form-group">
     <label class="control-label col-sm-3" for="tme">To:</label>
     <div class="col-sm-2">
       <div class="input-group">
           <input type="time" class="form-control"  @if($days_open[0]->Day == 'Tuesday') value="{{$days_open[0]->ClosingHours}}" @endif  id="tme"  name="day_two[]">
           <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
       </div>
     </div>
     </div>
</div>

</div><br>
<div class="row">
<div class="col-sm-2">
<label class="checkbox-inline containerck"><b>Wednesday
     <input type="checkbox" name="day_three[]" value="Wednesday" @if($days_open[0]->Day == 'Wedenesday') checked @endif>
	 <span class="checkmarkck"></span>
   </label>
 </div>
 <div class="col-sm-4">
   <div class="form-group">
     <label class="control-label col-sm-3" for="tme">From:</label>
     <div class="col-sm-2">
       <div class="input-group">
           <input type="time" class="form-control" id="tme"  @if($days_open[0]->Day == 'Wedenesday') value="{{$days_open[0]->OpeningHours}}" @endif name="day_three[]">
           <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
       </div>
     </div>
     </div>
   </div>
<div class="col-sm-4">
     <div class="form-group">
     <label class="control-label col-sm-3" for="tme">To:</label>
     <div class="col-sm-2">
       <div class="input-group">
           <input type="time" class="form-control" id="tme"  @if($days_open[0]->Day == 'Wedenesday') value="{{$days_open[0]->ClosingHours}}" @endif name="day_three[]">
           <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
       </div>
     </div>
     </div>
</div>

</div><br>
<div class="row">
<div class="col-sm-2">
<label class="checkbox-inline containerck"><b>Thursday
     <input type="checkbox" name="day_four[]" value="Thursday" @if($days_open[0]->Day == 'Thursday') checked @endif>
	 <span class="checkmarkck"></span>
   </label>
 </div>
 <div class="col-sm-4">
   <div class="form-group">
     <label class="control-label col-sm-3" for="tme">From:</label>
     <div class="col-sm-2">
       <div class="input-group">
           <input type="time" class="form-control" id="tme" @if($days_open[0]->Day == 'Thursday') value="{{$days_open[0]->OpeningHours}}" @endif   name="day_four[]">
           <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
       </div>
     </div>
     </div>
   </div>
<div class="col-sm-4">
     <div class="form-group">
     <label class="control-label col-sm-3" for="tme">To:</label>
     <div class="col-sm-2">
       <div class="input-group">
           <input type="time" class="form-control" id="tme"  @if($days_open[0]->Day == 'Thursday') value="{{$days_open[0]->ClosingHours}}" @endif name="day_four[]">
           <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
       </div>
     </div>
     </div>
</div>

</div><br>
<div class="row">
<div class="col-sm-2">
<label class="checkbox-inline containerck"><b>Friday
     <input type="checkbox" name="day_five[]" value="Friday" @if($days_open[0]->Day == 'Friday') checked @endif>
	 <span class="checkmarkck"></span>
   </label>
 </div>
 <div class="col-sm-4">
   <div class="form-group">
     <label class="control-label col-sm-3" for="tme">From:</label>
     <div class="col-sm-2">
       <div class="input-group">
           <input type="time" class="form-control" id="tme"  @if($days_open[0]->Day == 'Friday') value="{{$days_open[0]->OpeningHours}}" @endif name="day_five[]">
           <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
       </div>
     </div>
     </div>
   </div>
<div class="col-sm-4">
     <div class="form-group">
     <label class="control-label col-sm-3" for="tme">To:</label>
     <div class="col-sm-2">
       <div class="input-group">
           <input type="time" class="form-control" id="tme"  @if($days_open[0]->Day == 'Friday') value="{{$days_open[0]->ClosingHours}}" @endif name="day_five[]">
           <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
       </div>
     </div>
     </div>
</div>

</div><br>
<div class="row">
<div class="col-sm-2">
  <label class="checkbox-inline containerck"><b>Saturday
  <input type="checkbox" name="day_six[]" value="Saturday" @if($days_open[0]->Day == 'Saturday') checked @endif>
  <span class="checkmarkck"></span>
    </label>

  </div>
  <div class="col-sm-4">
  <div class="form-group">
      <label class="control-label col-sm-3" for="tme">From:</label>
      <div class="col-sm-2">
        <div class="input-group">
              <input type="time" class="form-control" id="start-one" @if($days_open[0]->Day == 'Saturday') value="{{$days_open[0]->OpeningHours}}" @endif  name="day_six[]">
            <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
        </div>
      </div>
      </div>
    </div>
  <div class="col-sm-4">
      <div class="form-group">
      <label class="control-label col-sm-3" for="tme">To:</label>
      <div class="col-sm-2">
        <div class="input-group">
             <input type="time" class="form-control" @if($days_open[0]->Day == 'Saturday') value="{{$days_open[0]->ClosingHours}}" @endif id="end-one"  name="day_six[]">
            <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
        </div>
      </div>
      </div>
  </div>
  </div>
  <br><br>
<div class="row">
<div class="col-sm-2">
<label class="checkbox-inline containerck"><b>Sunday
     <input type="checkbox" name="day_seven[]" value="Sunday" @if($days_open[0]->Day == 'Sunday') checked @endif>
	 <span class="checkmarkck"></span>
   </label>
 </div>
 <div class="col-sm-4">
   <div class="form-group">
     <label class="control-label col-sm-3" for="tme">From:</label>
     <div class="col-sm-2">
       <div class="input-group">
           <input type="time" class="form-control" id="tme"  @if($days_open[0]->Day == 'Sunday') value="{{$days_open[0]->OpeningHours}}" @endif name="day_seven[]">
           <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
       </div>
     </div>
     </div>
   </div>
<div class="col-sm-4">
     <div class="form-group">
     <label class="control-label col-sm-3" for="tme">To:</label>
     <div class="col-sm-2">
       <div class="input-group">
           <input type="time" class="form-control" id="tme"  @if($days_open[0]->Day == 'Sunday') value="{{$days_open[0]->ClosingHours}}" @endif name="day_seven[]">
           <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
       </div>
     </div>
     </div>
</div>

</div>
@else
<div class="row">
<div class="col-sm-2">
  <label class="checkbox-inline containerck"><b>Monday
   <input type="checkbox" name="day_one[]"  value="Monday">
 <span class="checkmarkck"></span>
      </label>
    </div>
    <div class="col-sm-4">
      <div class="form-group">
        <label class="control-label col-sm-3" for="tme">From:</label>
        <div class="col-sm-2">
          <div class="input-group">
                <input type="time" class="form-control" id="start-one"  name="day_one[]">
              <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
          </div>
        </div>
        </div>
      </div>
<div class="col-sm-4">
        <div class="form-group">
        <label class="control-label col-sm-3" for="tme">To:</label>
        <div class="col-sm-2">
          <div class="input-group">
               <input type="time" class="form-control" id="end-one"  name="day_one[]">
              <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
          </div>
        </div>
        </div>
</div>
</div><br>
<div class="row">
<div class="col-sm-2">
<label class="checkbox-inline containerck"><b>Tuesday
   <input type="checkbox" name="day_two[]" value="Tuesday">
 <span class="checkmarkck"></span>
 </label>
</div>
<div class="col-sm-4">
 <div class="form-group">
   <label class="control-label col-sm-3" for="tme">From:</label>
   <div class="col-sm-2">
     <div class="input-group">
         <input type="time" class="form-control" id="tme"  name="day_two[]">
         <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
     </div>
   </div>
   </div>
 </div>
<div class="col-sm-4">
   <div class="form-group">
   <label class="control-label col-sm-3" for="tme">To:</label>
   <div class="col-sm-2">
     <div class="input-group">
         <input type="time" class="form-control" id="tme"  name="day_two[]">
         <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
     </div>
   </div>
   </div>
</div>

</div><br>
<div class="row">
<div class="col-sm-2">
<label class="checkbox-inline containerck"><b>Wednesday
   <input type="checkbox" name="day_three[]" value="Wednesday">
 <span class="checkmarkck"></span>
 </label>
</div>
<div class="col-sm-4">
 <div class="form-group">
   <label class="control-label col-sm-3" for="tme">From:</label>
   <div class="col-sm-2">
     <div class="input-group">
         <input type="time" class="form-control" id="tme"  name="day_three[]">
         <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
     </div>
   </div>
   </div>
 </div>
<div class="col-sm-4">
   <div class="form-group">
   <label class="control-label col-sm-3" for="tme">To:</label>
   <div class="col-sm-2">
     <div class="input-group">
         <input type="time" class="form-control" id="tme"  name="day_three[]">
         <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
     </div>
   </div>
   </div>
</div>

</div><br>
<div class="row">
<div class="col-sm-2">
<label class="checkbox-inline containerck"><b>Thursday
   <input type="checkbox" name="day_four[]" value="Thursday">
 <span class="checkmarkck"></span>
 </label>
</div>
<div class="col-sm-4">
 <div class="form-group">
   <label class="control-label col-sm-3" for="tme">From:</label>
   <div class="col-sm-2">
     <div class="input-group">
         <input type="time" class="form-control" id="tme"  name="day_four[]">
         <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
     </div>
   </div>
   </div>
 </div>
<div class="col-sm-4">
   <div class="form-group">
   <label class="control-label col-sm-3" for="tme">To:</label>
   <div class="col-sm-2">
     <div class="input-group">
         <input type="time" class="form-control" id="tme"  name="day_four[]">
         <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
     </div>
   </div>
   </div>
</div>

</div><br>
<div class="row">
<div class="col-sm-2">
<label class="checkbox-inline containerck"><b>Friday
   <input type="checkbox" name="day_five[]" value="Friday">
 <span class="checkmarkck"></span>
 </label>
</div>
<div class="col-sm-4">
 <div class="form-group">
   <label class="control-label col-sm-3" for="tme">From:</label>
   <div class="col-sm-2">
     <div class="input-group">
         <input type="time" class="form-control" id="tme"  name="day_five[]">
         <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
     </div>
   </div>
   </div>
 </div>
<div class="col-sm-4">
   <div class="form-group">
   <label class="control-label col-sm-3" for="tme">To:</label>
   <div class="col-sm-2">
     <div class="input-group">
         <input type="time" class="form-control" id="tme"  name="day_five[]">
         <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
     </div>
   </div>
   </div>
</div>

</div><br>
<div class="row">
<div class="col-sm-2">
<label class="checkbox-inline containerck"><b>Saturday
   <input type="checkbox" name="day_six[]" value="Saturday">
 <span class="checkmarkck"></span>
 </label>
</div>
<div class="col-sm-4">
 <div class="form-group">
   <label class="control-label col-sm-3" for="tme">From:</label>
   <div class="col-sm-2">
     <div class="input-group">
         <input type="time" class="form-control" id="tme"  name="day_six[]">
         <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
     </div>
   </div>
   </div>
 </div>
<div class="col-sm-4">
   <div class="form-group">
   <label class="control-label col-sm-3" for="tme">To:</label>
   <div class="col-sm-2">
     <div class="input-group">
         <input type="time" class="form-control" id="tme"  name="day_six[]">
         <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
     </div>
   </div>
   </div>
</div>

</div><br>
<div class="row">
<div class="col-sm-2">
<label class="checkbox-inline containerck"><b>Sunday
   <input type="checkbox" name="day_seven[]" value="Sunday">
 <span class="checkmarkck"></span>
 </label>
</div>
<div class="col-sm-4">
 <div class="form-group">
   <label class="control-label col-sm-3" for="tme">From:</label>
   <div class="col-sm-2">
     <div class="input-group">
         <input type="time" class="form-control" id="tme"  name="day_seven[]">
         <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
     </div>
   </div>
   </div>
 </div>
<div class="col-sm-4">
   <div class="form-group">
   <label class="control-label col-sm-3" for="tme">To:</label>
   <div class="col-sm-2">
     <div class="input-group">
         <input type="time" class="form-control" id="tme"  name="day_seven[]">
         <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
     </div>
   </div>
   </div>
</div>

</div>
@endif
<br>

  <h4 style="color:#46A6EA"><b>Facilities</b></h4><hr>
  @if(Count($venue_facility)>0)
                        <div class="row">
                        <div class="col-sm-4">
                        <div class="checkbox">
                          <label class="containerck"><b>Para swimming<input type="checkbox" name="para_swimming" @if($venue_facility[0]->ParaSwimmingFacilities == 'yes') checked @endif @if('checked') value="yes" @else value="no" @endif>
							<span class="checkmarkck"></span>
						  </label>
                          <img src="{{ url('public/images/paraswimming.jpg') }}" height="30px" width="30px" style="margin-left:17px">
                        </div>
                        <div class="checkbox">
                          <label class="containerck"><b>Shower<input type="checkbox" name="shower" @if($venue_facility[0]->Shower == 'yes') checked @endif  @if('checked') value="yes" @else value="no" @endif>
						  <span class="checkmarkck"></span></label>
                          <img src="{{ url('public/images/shower.png') }}" height="30px" width="30px" style="margin-left:63px">
                        </div>

                        <div class="checkbox">
                          <label class="containerck"><b>Gym<input type="checkbox" name="gym" @if($venue_facility[0]->Gym == 'yes') checked @endif @if('checked') value="yes" @else value="no" @endif>
						  <span class="checkmarkck"></span>
						  </label>
                         <img src="{{ url('public/images/gym.jpg') }}" height="30px" width="30px"  style="margin-left:81px">
                        </div>
                        <div class="checkbox">
                        <label class="containerck"><b>Ladies Only<input type="checkbox" name="ladies" @if($venue_facility[0]->LadiesOnlySwimming == 'yes') checked @endif  @if('checked') value="yes" @else value="no" @endif>
						<span class="checkmarkck"></span>
						</label>
                       <img src="{{ url('public/images/ladiesonlyswimmtime.png') }}" height="30px" width="30px"style="margin-left:35px">
                      </div>
                      </div>
                      <div class="col-sm-4">
                      <div class="checkbox">
                        <label class="containerck"><b>Parking<input type="checkbox" name="parking" @if($venue_facility[0]->Parking == 'yes') checked @endif  @if('checked') value="yes" @else value="no" @endif>
						<span class="checkmarkck"></span>
						</label>
                        <img src="{{ url('public/images/parking.jpg') }}" height="30px" width="30px"style="margin-left:61px">
                      </div>
                      <div class="checkbox">
                        <label class="containerck"><b>Instructors<input type="checkbox" name="instructor" @if($venue_facility[0]->Teachers == 'yes') checked @endif @if('checked') value="yes" @else value="no" @endif>
						<span class="checkmarkck"></span>
						</label>
                        <img src="{{ url('public/images/instructors.png') }}" height="30px" width="30px" style="margin-left:43px">
                      </div>
                      <div class="checkbox">
                        <label class="containerck"><b>Diving<input type="checkbox" name="diving" @if($venue_facility[0]->Diving == 'yes') checked @endif  @if('checked') value="yes" @else value="no" @endif>
						<span class="checkmarkck"></span>
						</label>
                        <img src="{{ url('public/images/diving.png') }}" height="30px" width="30px"style="margin-left:69px">
                      </div>
                      <div class="checkbox">
                        <label class="containerck"><b>Swim for kids<input type="checkbox" name="swim_kids" @if($venue_facility[0]->Parking == 'yes') checked @endif  @if('checked') value="yes" @else value="no" @endif>
						<span class="checkmarkck"></span>
						</label>
                        <img src="{{ url('public/images/kidszone.png') }}" height="30px" width="30px"style="margin-left:26px">
                      </div>
                      </div>
                      <div class="col-sm-4">

                      <div class="checkbox">
                        <label class="containerck"><b>Visiting Gallery<input type="checkbox" name="visit_gallery" @if($venue_facility[0]->SwimForKids == 'yes') checked @endif  @if('checked') value="yes" @else value="no" @endif>
						<span class="checkmarkck"></span>
						</label>
                        <img src="{{ url('public/images/visitinggallery.png') }}" height="30px" width="30px" style="margin-left:14px">
                      </div>
                      <div class="checkbox">
                        <label class="containerck"><b>Toilets<input type="checkbox" name="toilet" @if($venue_facility[0]->Toilets == 'yes') checked @endif @if('checked') value="yes" @else value="no" @endif>
						<span class="checkmarkck"></span>
						</label>
                        <img src="{{ url('public/images/toilets.jpg') }}" height="30px" width="30px" style="margin-left:68px">
                      </div>
                      <div class="checkbox">
                        <label class="containerck"><b>PrivateHire<input type="checkbox" name="privatehire" @if($venue_facility[0]->Diving == 'yes') checked @endif @if('checked') value="yes" @else value="no" @endif>
						<span class="checkmarkck"></span>
						</label>
                        <img src="{{ url('public/images/privatehire.png') }}" height="30px" width="30px"style="margin-left:40px">
                      </div>
                      </div>
                    </div>
@endif

                   <div class="col-sm-offset-4 col-xs-offset-3">
              <a href="{{url('venuecontact/'.$venue_id)}}" class="btn btn-primary mybtn" type="reset">Back</a>
				 <button class="btn btn-primary mybtn">Save</button>
         @if(count($days_open) > 0)
				 <a href="{{url('venuesociallinks/'.$venue_id)}}" class="btn btn-primary mybtn">Next</a>
         @else
         <a href="javascript:;" class="btn btn-primary mybtn disabled">Next</a>
         @endif
</div>
</form>
                          </div>
                        </div>
                      </div>
                    </div>
                          @endsection
