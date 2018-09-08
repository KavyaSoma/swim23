@extends('layouts.main')
@section('content')
@if(session()->has('message.level'))
    <div class="alert alert-{{ session('message.level') }}" style="margin:13px;text-align: center;">
    {!! session('message.content') !!}
    </div>
    @endif
    <!-- venue code starts here -->
<div class="container mycntn">
  <ol class="breadcrumb" style="border:1px solid #46A6EA;color:#46A6EA;">
  <li class="breadcrumb-item"><a style="color:#777;" href="{{url('/')}}">Home</a></li>
  <li class="breadcrumb-item">Add Venue</li>
  </ol>
  
  <form class="form-horizontal" style="background:#fff;padding:35px" method="post" action="{{url('/addvenue/'.$venue_id)}}" enctype="multipart/form-data">
                      {{csrf_field()}}
      <div class="row">
             <div class="col-xs-12 col-sm-3 kin_photo">
     <div class="fb-profile" style="margin-top:8%;">

@if(count($venue_image)>0)
 <img alt="Profile image" class="img-rounded profile_image" id="venue-image" src="{{$venue_image[0]->ImagePath}}">
 <input type="hidden" name="image_check" value="{{$venue_image[0]->ImagePath}}">
 @else
 <img alt="Profile image" class="img-rounded profile_image" id="venue-image" src="{{url('public/images/venue.jpeg')}}">
 <input type="hidden" name="image_check" value="{{url('public/images/venue.jpg')}}">
 @endif
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
                  <li class="active">
                  <a href="{{url('addvenue')}}" data-toggle="tab" class="tab-one" title="Venue Summary">
                   <span class="round-tabs">
                           <i class="fa fa-list"></i>
                   </span>
               </a></li>

               <li><a href="#"  title="Pool Information">
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
                  <li><a href="#" title="Open hours & Facilities">
                      <span class="round-tabs">
                           <i class="fa fa-clock-o"></i>
                      </span>
                  </a></li>
                  <li><a href="#" data-toggle="tab" title="Web site & Social Links">
                      <span class="round-tabs">
                           <i class="fa fa-share-alt"></i>
                      </span>
                  </a></li>

                  <li><a href="#" data-toggle="tab" title="Confirm Venue">
                      <span class="round-tabs">
                           <i class="fa fa-check"></i>
                      </span> </a>
                  </li>

                  </ul></div>
                  <br>
                  <div class="tab-content tab_details">
                   <div class="tab-pane fade in active" id="venuesummary">
                    
                    @if($show=="yes")
                    @foreach($venue_details as $venue)
                    
                           <div class="row">
                             <div class="form-group">
                                   <label class="control-label col-xs-4 col-sm-2" for="txt">Venue Name:</label>
                                   <div class="col-xs-8 col-sm-9">
                                    <input type="hidden" id="show" value="{{$show}}">
                                    <input type="hidden" name="venueid" value="{{$venue_id}}">
                                     <input type="text" class="form-control" id="venue-name" name="venue_name" value="{{$venue->VenueName}}"  required>
                                     
                                   </div>
                                 </div>
                                 
                      <div class="form-group">
                         <label class="control-label col-xs-4 col-sm-2" for="txt">Description:</label>
                         <div class="col-xs-8 col-sm-9">
                           <textarea class="form-control" id="txt" name="description" required> {{$venue->Description}}</textarea>
                         </div>
                       </div>
                       <div class="form-group">
                           <label class="control-label col-xs-4 col-sm-2" for="txt">Short Name:</label>
                           <div class="col-xs-8 col-sm-9">
                             <input type="text" class="form-control" id="venue-short-name" name="short_name" onblur="venueshortname('{{url('checkshortname/venue')}}')" value="{{$venue->ShortName}}" required>
                             <div id="message"></div>
                           </div>
                         </div>
             <div class="form-group">
              <label class="control-label col-xs-4 col-sm-2">Address:</label>
                <div class="col-xs-8  col-sm-9 ">
                    <input type="text" class="form-control myful" name="address" value="{{$venue->AddressLine1}}" required>
                </div>
			
              </div>
			  <div class="form-group">
              <label class="control-label col-xs-4 col-sm-2" >Postcode:</label>
                <div class="col-xs-8  col-sm-9 ">
                    <input type="int" class="form-control myful" id="postcode" name="postcode" onblur="checkaddress('{{url('/checkpostcode')}}')" value="{{$venue->PostCode}}" required>
                    <div id="postcode-error"></div>
                </div>
			
              </div>
			  <div class="form-group">
              <label class="control-label col-xs-4 col-sm-2" >City:</label>
                <div class="col-xs-8  col-sm-9 ">
                    <input type="text" class="form-control myful" name="city" id="city" value="{{$venue->City}}" required>
                    <div id="city-error" style="color: red;"></div>
                </div>
			
              </div>
			  <div class="form-group">
              <label class="control-label col-xs-4 col-sm-2" >Country:</label>
                <div class="col-xs-8  col-sm-9 ">
                    <input type="text" class="form-control myful" name="country" id="country" value="{{$venue->Country}}" readonly>
                    <div id="country-error" style="color: red;"></div>
                </div>
			
              </div>
			  
			  </div>

    @endforeach
    @else
     <div class="row">
                             <div class="form-group">
                                   <label class="control-label col-xs-4 col-sm-2" for="txt">Venue Name:</label>
                                   <div class="col-xs-8 col-sm-9">
                                    <input type="hidden" id="show" value="{{$show}}">
                                    <input type="hidden" name="venueid" value="{{$venue_id}}">
                                     <input type="text" class="form-control" id="venue-name" name="venue_name" value=""  required>
                                     
                                   </div>
                                 </div>
                                 
                      <div class="form-group">
                         <label class="control-label col-xs-4 col-sm-2" for="txt">Description:</label>
                         <div class="col-xs-8 col-sm-9">
                           <textarea class="form-control" id="txt" name="description" required> </textarea>
                         </div>
                       </div>
                       <div class="form-group">
                           <label class="control-label col-xs-4 col-sm-2" for="txt">Short Name:</label>
                           <div class="col-xs-8 col-sm-9">
                             <input type="text" class="form-control" id="venue-short-name" name="short_name" onblur="venueshortname('{{url('checkshortname/venue')}}')" value="{{old('short_name')}}" value="" required>
                             <div id="message"></div>
                           </div>
                         </div>
             <div class="form-group">
              <label class="control-label col-xs-4 col-sm-2">Address:</label>
                <div class="col-xs-8  col-sm-9 ">
                  <input type="hidden" name="address_id" value="">
                    <input type="text" class="form-control myful" name="address" value="" required>
                </div>
      
              </div>
        <div class="form-group">
              <label class="control-label col-xs-4 col-sm-2" >Postcode:</label>
                <div class="col-xs-8  col-sm-9 ">
                    <input type="int" class="form-control myful" id="postcode" name="postcode" onblur="checkaddress('{{url('/checkpostcode')}}')" value="" required>
                    <div id="postcode-error" style="color: red"></div>
                </div>
      
              </div>
        <div class="form-group">
              <label class="control-label col-xs-4 col-sm-2" >City:</label>
                <div class="col-xs-8  col-sm-9 ">
                    <input type="text" class="form-control myful" name="city" id="city" value="" required>
                    <div id="city-error" style="color: red;"></div>
                </div>
      
              </div>
        <div class="form-group">
              <label class="control-label col-xs-4 col-sm-2" >Country:</label>
                <div class="col-xs-8  col-sm-9 ">
                    <input type="text" class="form-control myful" name="country" id="country" value="United Kingdom" readonly>
                    <div id="country-error" style="color: red;"></div>
                </div>
      
              </div>
        
        </div>
         @endif
<div class="col-sm-offset-5 col-xs-offset-4">
              <a><button class="btn btn-primary mybtn" type="reset">Cancel</button></a>
         <button class="btn btn-primary mybtn" id="save-venue">Save</button></form>
         @if(count($venue_details)>0)
          <a href="{{url('/venuepool/'.$venue_id)}}" class="btn btn-primary mybtn" >Next</a>
          @else
          <a href="javascript:;" class="btn btn-primary mybtn disabled" >Next</a>
            @endif
</div></div>
    
   
    </div>
      </div>
 </div>
</div>
</div>
</div>
</div>
<!-- venue code ends here -->
<script>

function checkaddress(url){

var postcode = $("#postcode").val();
console.log(url+'/'+postcode);
 jQuery.ajax({
    url: url+'/'+postcode,

     success:function(value){
      if(value == "success"){
        $("#postcode-error").html("");
          $("#save-venue").removeAttr('disabled');
      }
      else{
      $("#postcode-error").html("<span style='color:red'>Not a valid UK PostCode.Please Enter a valid UK PostCode.</span>");
      $("#save-venue").attr('disabled', 'disabled');
    } 
  },
    async:true
  });
}  
$("#venue-name").ready(function(){
  $("#venue-name").on('keypress keydown keyup',function(){
        var venuename=$('#venue-name').val();
        venuename =venuename.replace(/ +/g, ""); 
        document.getElementById('venue-short-name').value = venuename;

      });
});
function venueshortname(url){
   var shortname = $("#venue-short-name").val();
 jQuery.ajax({
    url: url+'/'+shortname,
    success:function(value){
      if(value == "success"){
        $("#message").html("");
          $("#save-venue").removeAttr('disabled');
      }
      else{
        console.log('error');
        $("#save-venue").attr('disabled', 'disabled');
      $("#message").html("<span style='color:red'>ShortName Already exists.Please Add numeric characters or change shortname</span>");
    } 
  },
    async:true
  });
}
</script>


@endsection