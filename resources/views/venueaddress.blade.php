@extends('layouts.main')
@section('content')
@if(session()->has('message.level'))
    <div class="alert alert-{{ session('message.level') }}" style="margin-left:13px;text-align:center ">
    {!! session('message.content') !!}
    </div>
    @endif

    <div class="container mycntn">
  <h5 class="add_venue" style="padding:10px;"><span class="" style="font-size:17px;" ><i class="fa fa fa-paper-plane-o"> </i> </span> Add Venue</h5>
      <div class="row" style="border:1px solid #eee;margin-left:0px;margin-right:0px;box-shadow: 0 3px 8px #ddd;">
             <div class="board">
                 <!-- <h2>Welcome to IGHALO!<sup>™</sup></h2>-->
                 <div class="board-inner  iconlistn">
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
              <li class="active"><a href="{{url('venueaddress/'.$venue_id)}}" data-toggle="tab" title="Address">
                  <span class="round-tabs">
                       <i class="fa fa-map-marker"></i>
                  </span> </a>
                  </li>
                  <li><a href="" data-toggle="tab" title="Contact">
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

                      <form class="form-horizontal" style="background:#fff;" method="post" action="{{ url('venueaddress/'.$venue_id) }}">
                        {{csrf_field()}}
                          <h5 style="color:#46A6EA"><b>Address</b></h5><hr>
                        <div class="row">
                        <div class="form-group">
                              <label class="control-label col-xs-4 col-sm-offset-2 col-sm-2" for="txt">Address:</label>
                                <div class="col-xs-8 col-sm-6">
                                  <input type="text" class="form-control" id="address" name="address" value="{{old('address')}}" required>
                                </div>
                                </div>
                              <div class="form-group">
                                <label class="control-label col-xs-4 col-sm-offset-2 col-sm-2" for="email">City:</label>
                                    <div class="col-xs-8 col-sm-6">
                                        <input type="text" class="form-control" id="venue-city" name="city" value="{{old('city')}}" pattern="([A-zÀ-ž\s]){5,20}" required>
                                        <span class="city-error" style="color: red;display: none;">City Should contain Only 5-20 characters</span>
                                    </div>
                              </div>
                                <div class="form-group">
                                  <label class="control-label col-xs-4 col-sm-offset-2 col-sm-2" for="email">Post Code:</label>
                                    <div class="col-xs-8 col-sm-6">
                                      <input type="text" class="form-control" id="post-code" name="post_code" value="{{old('post_code')}}" pattern="([0-9]){3,25}" required>
                                      <span class="post-error" style="color: red;display: none;">Post Code Should contain Numeric Characters</span>
                                    </div>
                                </div>
                                  <div class="form-group">
                                    <label class="control-label col-xs-4 col-sm-offset-2 col-sm-2" for="email">Town:</label>
                                      <div class="col-xs-8 col-sm-6">
                                        <input type="text" class="form-control" id="town" name="town" value="{{old('town')}}" pattern="([A-zÀ-ž\s]){5,25}" required>
                                        <span class="town-error" style="color: red;display: none;">Town Should contain Only 5-25 characters</span>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="control-label col-xs-4 col-sm-offset-2 col-sm-2" for="email">Country:</label>
                                      <div class="col-xs-8 col-sm-6">
                                        <input type="text" class="form-control" id="country" name="country" value="{{old('country')}}" pattern="([A-zÀ-ž\s]){3,25}" required>
                                        <span class="country-error" style="color: red;display: none;">Country Should contain Only 5-25 characters</span>
                                      </div>
                                  </div>
                                  <!--<button class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Add Another Address</button>-->
                                </div>

                                 
                                       <!-- <button class="btn btn-primary pull-right"><i class="fa fa-plus"></i>Add Another Contact</button><br>-->
                              <center>
                                <button class="btn btn-primary mybtn" type="reset">Back</button>
                              <button class="btn btn-primary mybtn">Save&Continue</button>
                              
                            </center>
                               </form>
                                 </div>
                           </div>
                         </div> 
   
                     </div>
  <script>

$(document).ready(function() {
  var options = {
     data:[
      {"AddressLine1": "AddressLine1",
       "City":"City",
       "County":"County",
       "Country":"Country",
       "PostCode":"PostCode"}
    ],
  url: function(phrase) {
    return "{{ url('contactvenue/address') }}/"+phrase;
  },
  getValue: "AddressLine1",
   list: {
    onSelectItemEvent: function() {
      var city = $("#address").getSelectedItemData().City;
      var town = $("#address").getSelectedItemData().County;
      var country = $("#address").getSelectedItemData().Country;
      var postcode = $("#address").getSelectedItemData().PostCode;
     
      $("#venue-city").val(city).trigger("change");
      $("#town").val(town).trigger("change");
      $("#country").val(country).trigger("change");
      $("#post-code").val(postcode).trigger("change");
    }
  }
  };
  $("#address").easyAutocomplete(options); 
  
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