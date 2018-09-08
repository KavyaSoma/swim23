@extends('layouts.main')
@section('content')
@if(session()->has('message.level'))
    <!--<div class="alert alert-{{ session('message.level') }}" style="margin-left:13px;text-align: center;">
    {!! session('message.content') !!}
    </div>-->
    @endif
      <div class="container mycntn">
  <ol class="breadcrumb" style="border:1px solid #46A6EA;color:#46A6EA;">
  <li class="breadcrumb-item"><a style="color:#777;" href="http://localhost/swim">Home</a></li>
  <li class="breadcrumb-item"><a style="color:#777;" href="http://localhost/swim/socialnetwork">Social Network</a></li>
  <li class="breadcrumb-item">Groups</li>
  </ol>
  <div class="row"><h4 class="col-sm-12" style="color:green;text-align:center;">{{ session('message.level') }} {!! session('message.content') !!}</h4></div>
      <div class="row">
             <div class="col-xs-12 col-sm-3 kin_photo">
     <div class="fb-profile" style="margin-top:8%;">
 <img alt="Profile image" class="img-rounded profile_image" src="http://localhost/swim/public/images/sravan.jpeg">
     <div class="fb-profile-text text-center">
        <div class="col-xs-12 col-sm-12" style="margin-top: 14px;">
                    <input class="form-control myful" id="imgUpload" name="imgUpload" accept="image/*" type="file">
                </div>
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
                  <a href="{{url('editvenue/'.$venue_id)}}" class="tab-one" title="Venue Summary">
                   <span class="round-tabs">
                           <i class="fa fa-list"></i>
                   </span>
               </a></li>

               <li><a href="{{url('edit-venuepool/'.$venue_id)}}" title="Pool Information">
                  <span class="round-tabs">
                      <i class="fa fa-info"></i>
                  </span>
        </a>
              </li>
              <!--<li><a href="" data-toggle="tab" title="Address">
                  <span class="round-tabs">
                       <i class="fa fa-map-marker"></i>
                  </span> </a>
                  </li>-->
                  <li><a href="" data-toggle="tab" title="Contact">
                  <span class="round-tabs">
                       <i class="fa fa-phone"></i>
                  </span> </a>
                  </li>
                  <li  class="active"><a href="{{url('venuetimings/'.$venue_id)}}" title="Open hours & Facilities">
                      <span class="round-tabs">
                           <i class="fa fa-clock-o"></i>
                      </span>
                  </a></li>
                  <li><a href="{{url('edit-venuesociallinks/'.$venue_id)}}" title="Web site & Social Links">
                      <span class="round-tabs">
                           <i class="fa fa-share-alt"></i>
                      </span>
                  </a></li>

                  <li><a href="{{url('confirmvenue/'.$venue_id)}}" title="Confirm Venue">
                      <span class="round-tabs">
                           <i class="fa fa-check"></i>
                      </span> </a>
                  </li>

                  </ul></div>
                  <form method="post" action="{{ url('edit-venuetimings/'.$venue_id) }}">
                    {{csrf_field()}}
                     <div class="tab-pane fade in active" id="venuefacilities">
                        <h5 style="color:#46A6EA"><b>Opening Hours</b></h5><hr>
                        <div class="row">
                    
  <div class="col-sm-2">
    <label class="checkbox-inline containerck">Monday
     <input type="checkbox" name="day_one[]" value="Monday">
	 <span class="checkmarkck"></span>        
        </label>
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <label class="control-label col-sm-3" for="tme">From:</label>
          <div class="col-sm-2">
            <div class="input-group">
                  <input type="time" class="form-control" id="start-one" step="2" name="day_one[]">
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
                 <input type="time" class="form-control" id="end-one" step="2" name="day_one[]">
                <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
            </div>
          </div>
          </div>
</div>
</div><br>
<div class="row">
<div class="col-sm-2">
<label class="checkbox-inline containerck">Tuesday
     <input type="checkbox" name="day_two[]" value="Tuesday">
	 <span class="checkmarkck"></span>
   </label>
 </div>
 <div class="col-sm-4">
   <div class="form-group">
     <label class="control-label col-sm-3" for="tme">From:</label>
     <div class="col-sm-2">
       <div class="input-group">
           <input type="time" class="form-control" id="tme" step="2" name="day_two[]">
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
           <input type="time" class="form-control" id="tme" step="2" name="day_two[]">
           <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
       </div>
     </div>
     </div>
</div>

</div><br>
<div class="row">
<div class="col-sm-2">
<label class="checkbox-inline containerck">Wednesday
     <input type="checkbox" name="day_three[]" value="Wednesday">
	 <span class="checkmarkck"></span>
   </label>
 </div>
 <div class="col-sm-4">
   <div class="form-group">
     <label class="control-label col-sm-3" for="tme">From:</label>
     <div class="col-sm-2">
       <div class="input-group">
           <input type="time" class="form-control" id="tme" step="2" name="day_three[]">
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
           <input type="time" class="form-control" id="tme" step="2" name="day_three[]">
           <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
       </div>
     </div>
     </div>
</div>

</div><br>
<div class="row">
<div class="col-sm-2">
<label class="checkbox-inline containerck">Thursday
     <input type="checkbox" name="day_four[]" value="Thursday">
	 <span class="checkmarkck"></span>
   </label>
 </div>
 <div class="col-sm-4">
   <div class="form-group">
     <label class="control-label col-sm-3" for="tme">From:</label>
     <div class="col-sm-2">
       <div class="input-group">
           <input type="time" class="form-control" id="tme" step="2" name="day_four[]">
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
           <input type="time" class="form-control" id="tme" step="2" name="day_four[]">
           <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
       </div>
     </div>
     </div>
</div>

</div><br>
<div class="row">
<div class="col-sm-2">
<label class="checkbox-inline containerck">Friday
     <input type="checkbox" name="day_five[]" value="Friday">
	 <span class="checkmarkck"></span>
   </label>
 </div>
 <div class="col-sm-4">
   <div class="form-group">
     <label class="control-label col-sm-3" for="tme">From:</label>
     <div class="col-sm-2">
       <div class="input-group">
           <input type="time" class="form-control" id="tme" step="2" name="day_five[]">
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
           <input type="time" class="form-control" id="tme" step="2" name="day_five[]">
           <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
       </div>
     </div>
     </div>
</div>

</div><br>
<div class="row">
<div class="col-sm-2">
<label class="checkbox-inline containerck">Saturday
     <input type="checkbox" name="day_six[]" value="Saturday">
	 <span class="checkmarkck"></span>
   </label>
 </div>
 <div class="col-sm-4">
   <div class="form-group">
     <label class="control-label col-sm-3" for="tme">From:</label>
     <div class="col-sm-2">
       <div class="input-group">
           <input type="time" class="form-control" id="tme" step="2" name="day_six[]">
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
           <input type="time" class="form-control" id="tme" step="2" name="day_six[]">
           <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
       </div>
     </div>
     </div>
</div>

</div><br>
<div class="row">
<div class="col-sm-2">
<label class="checkbox-inline containerck">Sunday
     <input type="checkbox" name="day_seven[]" value="Sunday">
	 <span class="checkmarkck"></span>
   </label>
 </div>
 <div class="col-sm-4">
   <div class="form-group">
     <label class="control-label col-sm-3" for="tme">From:</label>
     <div class="col-sm-2">
       <div class="input-group">
           <input type="time" class="form-control" id="tme" step="2" name="day_seven[]">
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
           <input type="time" class="form-control" id="tme" step="2" name="day_seven[]">
           <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
       </div>
     </div>
     </div>
</div>

</div>

 
                        <h5 style="color:#46A6EA"><b>Facilities</b></h5><hr>
                        <div class="row">
                        <div class="col-sm-4">
                        <div class="checkbox">
                          <label class="containerck">Para swimming<input type="checkbox" name="para_swimming" @if('checked') value="yes" @else value="no" @endif>
							<span class="checkmarkck"></span>
						  </label>
                          <img src="{{ url('images/paraswimming.jpg') }}" height="30px" width="30px" style="margin-left:17px">
                        </div>
                        <div class="checkbox">
                          <label class="containerck">Shower<input type="checkbox" name="shower"  @if('checked') value="yes" @else value="no" @endif>
						  <span class="checkmarkck"></span></label>
                          <img src="{{ url('images/shower.png') }}" height="30px" width="30px" style="margin-left:63px">
                        </div>
                        
                        <div class="checkbox">
                          <label class="containerck">Gym<input type="checkbox" name="gym"  @if('checked') value="yes" @else value="no" @endif>
						  <span class="checkmarkck"></span>
						  </label>
                         <img src="{{ url('images/gym.jpg') }}" height="30px" width="30px"  style="margin-left:81px">
                        </div>
                        <div class="checkbox">
                        <label class="containerck">Ladies Only<input type="checkbox" name="ladies"  @if('checked') value="yes" @else value="no" @endif>
						<span class="checkmarkck"></span>
						</label>
                       <img src="{{ url('images/parking.jpg') }}" height="30px" width="30px"style="margin-left:35px">
                      </div>
                      </div>
                      <div class="col-sm-4">
                      <div class="checkbox">
                        <label class="containerck"><input type="checkbox" name="parking"  @if('checked') value="yes" @else value="no" @endif>Parking
						<span class="checkmarkck"></span>
						</label>
                        <img src="{{ url('images/parking.jpg') }}" height="30px" width="30px"style="margin-left:61px">
                      </div>
                      <div class="checkbox">
                        <label class="containerck"><input type="checkbox" name="instructor"  @if('checked') value="yes" @else value="no" @endif>Instructors
						<span class="checkmarkck"></span>
						</label>
                        <img src="{{ url('images/instructors.png') }}" height="30px" width="30px" style="margin-left:43px">
                      </div>
                      <div class="checkbox">
                        <label class="containerck"><input type="checkbox" name="diving"  @if('checked') value="yes" @else value="no" @endif>Diving
						<span class="checkmarkck"></span>
						</label>
                        <img src="{{ url('images/diving.png') }}" height="30px" width="30px"style="margin-left:69px">
                      </div>
                      <div class="checkbox">
                        <label class="containerck"><input type="checkbox" name="swim_kids"  @if('checked') value="yes" @else value="no" @endif>Swim for kids
						<span class="checkmarkck"></span>
						</label>
                        <img src="{{ url('images/parking.jpg') }}" height="30px" width="30px"style="margin-left:26px">
                      </div>
                      </div>
                      <div class="col-sm-4">
                      
                      <div class="checkbox">
                        <label class="containerck"><input type="checkbox" name="visit_gallery"  @if('checked') value="yes" @else value="no" @endif>Visiting Gallery
						<span class="checkmarkck"></span>
						</label>
                        <img src="{{ url('images/kidszone.png') }}" height="30px" width="30px" style="margin-left:14px">
                      </div>
                      <div class="checkbox">
                        <label class="containerck"><input type="checkbox" name="toilet" @if('checked') value="yes" @else value="no" @endif>Toilets
						<span class="checkmarkck"></span>
						</label>
                        <img src="{{ url('images/instructors.png') }}" height="30px" width="30px" style="margin-left:68px">
                      </div>
                      <div class="checkbox">
                        <label class="containerck"><input type="checkbox" name="privatehire"  @if('checked') value="yes" @else value="no" @endif>PrivateHire
						<span class="checkmarkck"></span>
						</label>
                        <img src="{{ url('images/diving.png') }}" height="30px" width="30px"style="margin-left:40px">
                      </div>
                      </div>
                    </div>
                    

                   <div class="col-sm-offset-4 col-xs-offset-3">
              <button class="btn btn-primary mybtn" type="reset">Back</button>
				 <button class="btn btn-primary mybtn">Save</button>
				 <button class="btn btn-primary mybtn">Next</button>
</div>
</form>
                          </div>
                        </div>
                      </div>
                      
                    </div>
<script>
$(document).ready(function() {
console.log('{{ url('getoldvenues/timings/'.$venue_id) }}');
$.ajax({
    url: '{{ url('getoldvenues/timings/'.$venue_id) }}',
    success: function(html) {
      if(html=="no") {
      } else {
        console.log(html);
        //$('#old_events').attr("src",html);
        $('#old_events').html(html);
      }
    },
    async:true
  });
              });
</script> 
          
                          @endsection