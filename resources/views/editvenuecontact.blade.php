@extends('layouts.main')
@section('content')
@if(session()->has('message.level'))
    <!--<div class="alert alert-{{ session('message.level') }}" style="margin-left:13px;text-align:center ">
    {!! session('message.content') !!}
    </div>-->
    @endif

   <div class="modal fade" id="myModalh" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h3 style="color:#46A6EA;background-color:#fff;padding-left:9px;">Previous Entries</h3>
</div>
<div class="modal-body">
 <div id="old_events">
                
                </div>
</div>
<!--<div class="modal-footer">
    <button class="btn btn-primary col-sm-offset-5 col-sm-2 mybtn" type="submit">Post</button>

</div>--></div>
</div></div>

<!-- model popup ends here -->
    <div class="container mycntn">
   <ol class="breadcrumb" style="border:1px solid #46A6EA;color:#46A6EA;">
  <li class="breadcrumb-item"><a style="color:#777;" href="http://localhost/swim">Home</a></li>
  <li class="breadcrumb-item"><a style="color:#777;" href="http://localhost/swim/socialnetwork">Social Network</a></li>
  <li class="breadcrumb-item">Groups</li>
  
 </ol>
 <div class="row"><h4 class="col-sm-9 " style="color:green;text-align:center;">{{ session('message.level') }} {!! session('message.content') !!}</h4>
 <button class="col-sm-2 btn btn-warning" data-toggle="modal" data-target="#myModalh"><i class="fa fa-bars"></i> Previous Entries</button></div>
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
                  <a href="" class="tab-one" title="Venue Summary">
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
               <!--<li><a href="" data-toggle="tab" title="Address">
                  <span class="round-tabs">
                       <i class="fa fa-map-marker"></i>
                  </span> </a>
                  </li>-->
                  
                  <li class="active"><a href="{{url('venueaddress/'.$venue_id)}}" data-toggle="tab" title="Contact">
                  <span class="round-tabs">
                       <i class="fa fa-phone"></i>
                  </span> </a>
                  </li>

                  <li><a href="" title="Open hours & Facilities">
                      <span class="round-tabs">
                           <i class="fa fa-clock-o"></i>
                      </span>
                  </a></li>
                  <li><a href="" title="Web site & Social Links">
                      <span class="round-tabs">
                           <i class="fa fa-share-alt"></i>
                      </span>
                  </a></li>

                  <li><a href="" data-toggle="tab" title="Confirm Venue">
                      <span class="round-tabs">
                           <i class="fa fa-check"></i>
                      </span> </a>
                  </li>

                  </ul></div>
                   <div class="tab-pane fade in active" id="venuecontact">
                    @foreach($contacts as $contact)
                     <form class="form-horizontal" style="background:#fff;padding:30px;" method="post" action="{{ url('edit-venuecontact/'.$venue_id.'/'.$contact->ContactId) }}">
                        {{csrf_field()}}
                                <div class="row">
                                      <div class="form-group">
                                           <label class="control-label col-xs-4 col-sm-offset-2 col-sm-2" for="txt">Contact Name:</label>
                                        <div class="col-xs-7 col-sm-6">
                                        <input type="text" class="form-control" id="venuecontact" name="contact_name" value="{{$contact->FirstName}}"  required>
                                        <span class="contact-error" style="color: red;display: none;">Contact Name should contain 3-25 Characters.</span>
                                       </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="control-label  col-xs-4 col-sm-offset-2 col-sm-2" for="email">Mobile:</label>
                                      <div class="col-xs-7 col-sm-6">
                                        <input type="text" class="form-control" id="venue-mobile" name="mobile" value="{{$contact->Phone}}" required>
                                        <span class="mobile-error" style="color: red;display: none;">Mobile number should contain 10 digits.</span>
                                      </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="control-label  col-xs-4 col-sm-offset-2 col-sm-2" for="email">Email:</label>
                                      <div class="col-xs-7 col-sm-6">
                                          <input type="email" class="form-control" id="email" name="email" value="{{$contact->Email}}" required>
                                      </div>
                                      </div>
                                      @endforeach
                                       <!-- <button class="btn btn-primary pull-right"><i class="fa fa-plus"></i>Add Another Contact</button><br>-->
                              <div class="col-sm-offset-5 col-xs-offset-3">
              <button class="btn btn-primary mybtn" type="reset">Back</button>
				 <button class="btn btn-primary mybtn">Save</button>
				 <button class="btn btn-primary mybtn">Next</button>
</div>
                               </form>  
                               <!--<form class="form-horizontal" style="background:#fff;" method="post" action="{{ url('edit-venuecontact/'.$venue_id.'/'.$contact->ContactId) }}">
                        {{csrf_field()}}
                                <div class="row">
                                      <div class="form-group">
                                           <label class="control-label col-xs-4 col-sm-offset-2 col-sm-2" for="txt">Contact Name:</label>
                                        <div class="col-xs-7 col-sm-6">
                                        <input type="text" class="form-control" id="venuecontact" name="new_contact"  required>
                                        <span class="contact-error" style="color: red;display: none;">Contact Name should contain 3-25 Characters.</span>
                                       </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="control-label  col-xs-4 col-sm-offset-2 col-sm-2" for="email">Mobile:</label>
                                      <div class="col-xs-7 col-sm-6">
                                        <input type="text" class="form-control" id="venue-mobile" name="new_mobile" required>
                                        <span class="mobile-error" style="color: red;display: none;">Mobile number should contain 10 digits.</span>
                                      </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="control-label  col-xs-4 col-sm-offset-2 col-sm-2" for="email">Email:</label>
                                      <div class="col-xs-7 col-sm-6">
                                          <input type="email" class="form-control" id="venue-email" name="new_email" required>
                                      </div>
                                      </div>
                                     -->
                                       <!-- <button class="btn btn-primary pull-right"><i class="fa fa-plus"></i>Add Another Contact</button><br>-->
                              
                               </form>
                                 </div>
                           </div>
                         </div>
                       </div>
                       </div>
   
                     </div>
                 
  <script>
$(document).ready(function() {
console.log('{{ url('getoldvenues/address/'.$venue_id) }}');
$.ajax({
    url: '{{ url('getoldvenues/address/'.$venue_id) }}',
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
$(document).ready(function() {
   
  
  var options = {
    data:[
      {"FirstName": "FirstName",
       "Phone":"Phone",
       "Email":"Email"}
    ],
  url: function(phrase) {
    return "{{ url('contactvenue/contact') }}/"+phrase;
  },
  getValue: "FirstName",
   list: {
    onSelectItemEvent: function() {
      var value = $("#venuecontact").getSelectedItemData().Phone;
      var email = $("#venuecontact").getSelectedItemData().Email;
      
      $("#venue-mobile").val(value).trigger("change");
      $("#venue-email").val(email).trigger("change");
     }
  }
  };
  $("#venuecontact").easyAutocomplete(options); 
});
</script> 
                                 @endsection