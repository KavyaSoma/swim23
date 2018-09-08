@extends('layouts.main')
@section('content')

@if(session()->has('message.level'))
    <div class="alert alert-{{ session('message.level') }}" style="margin:13px;text-align: center;">
    {!! session('message.content') !!}
    </div>
    @endif
    <!-- event code starts here -->
     <div class="container" id="main-code">
      <h5 class="add_venue" style="padding:10px;"><span class="" style="font-size:17px;" ><i class="fa fa-calendar"> </i> </span> Add Event</h5>
      <div class="row" style="border:1px solid #eee;margin-left:0px;margin-right:0px;box-shadow: 0 3px 8px #ddd;">
        <div class="board" id="board_height">
          <div class="board-inner event_iconlist" id="icons_align">
            <ul class="nav nav-tabs nav_info" id="myTab"  style="margin:40px 25%">
                <div class="liner"></div>
                  <li>
                <a href= class="tab-one" title="Event Summary">
                  <span class="round-tabs">
                    <i class="fa fa-bullhorn"></i>
                  </span>
                 </a></li>
                 <li><a href="" title="Sub Events">
                   <span class="round-tabs">
                     <i class="fa fa-list"></i>
                   </span>
                 </a>
                    </li>
                  <li><a href="" title="Schedule">
                      <span class="round-tabs">
                           <i class="fa fa-calendar"></i>
                      </span> </a>
                      </li>

                      <li><a href="" title="Contacts">
                          <span class="round-tabs">
                               <i class="fa fa-phone"></i>
                          </span>
                      </a></li>
                      <li   class="active"><a href="{{url('/venue-event')}}" title="Venue">
                          <span class="round-tabs">
                               <i class="fa fa-paper-plane-o"></i>
                          </span>
                      </a></li>

                      <li><a href="" title="Conform">
                          <span class="round-tabs">
                               <i class="fa fa-check"></i>
                          </span> </a>
                      </li>


                      </ul></div>
 <div class="tab-content tab_details">

                                    <div class="tab-pane fade in active" id="eventvenue">
                                      <form class="form-horizontal" style="background:#fff;" method="post" action="{{ url('venue-event/'.$event_id) }}">
                                          {{ csrf_field() }}
                                        <div class="row">
                                    <div class="form-group" id="field1">
                                        <label class="control-label col-xs-4 col-sm-offset-2 col-sm-1" for="txt">Venue:</label>
                                        <div class="col-xs-7 col-sm-6">
                                          <input type="text" class="form-control" id="venuename" name="venue_name" required>
                                        </div>
                                        </div>
                                        <div class="form-group">
                                        <label class="control-label col-xs-4 col-sm-offset-2 col-sm-1" for="txt">Address:</label>
                                        <div class="col-xs-7 col-sm-6">
                                          <input type="txt" class="form-control" id="vaddress" name="venue_address">
                                        </div>
                                        </div>
                                        <div class="form-group">
                                        <label class="control-label  col-xs-4 col-sm-offset-2 col-sm-1" for="txt">City:</label>
                                        <div class="col-xs-7 col-sm-6">
                                        <input type="text" class="form-control" id="venuecity" name="venue_city">
                                        </div>
                                        </div>
                                        <div class="form-group">
                                        <label class="control-label col-xs-4 col-sm-offset-2 col-sm-1" for="txt">Post code:</label>
                                        <div class="col-xs-7 col-sm-6">
                                        <input type="text" class="form-control" id="venuecode" name="venue_code" pattern="([0-9]){5,10}">
                                        <div id="message" style="color: red"></div>
                                        </div>
                                        </div>
                                      </div><br>

                                        <center>
                                           <a href="{{url('')}}" class="btn btn-primary mybtn" >Back</a>
                                                <button class="btn btn-primary mybtn">Save&Continue</button>
                                                
                                              </center>
                                          </div>
                                         

                    </div>
                  </div>
                </div>
       <div id="old_events">
                
                </div>
              </div>
    <script>
$(document).ready(function() {
console.log('{{ url('getoldevents/venues/'.$event_id) }}');
$.ajax({
    url: '{{ url('getoldevents/venues/'.$event_id) }}',
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
      {"VenueName": "VenueName",
       "AddressLine1": "AddressLine1",
       "City":"City",
       "PostCode":"PostCode"}
    ],
  url: function(phrase) {
    return "{{ url('eventvenues/') }}/"+phrase;
  },
  getValue: "VenueName",
  list: {
    onSelectItemEvent: function() {
      var value = $("#venuename").getSelectedItemData().AddressLine1;
      var city = $("#venuename").getSelectedItemData().City;
      var postcode = $("#venuename").getSelectedItemData().PostCode;
      
      $("#vaddress").val(value).trigger("change");
      $("#venuecity").val(city).trigger("change");
      $("#venuecode").val(postcode).trigger("change");
     }
  }
  };
  $("#venuename").easyAutocomplete(options); 
});
</script>
                      @endsection