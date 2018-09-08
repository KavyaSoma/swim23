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
      <div id="old_events">
                
                </div><br>
      <div class="row" style="border:1px solid #eee;margin-left:0px;margin-right:0px;box-shadow: 0 3px 8px #ddd;">
    <ul class="nav nav-tabs">
    <li ><a data-toggle="tab" class="" href="#home"><i class="fa fa-clock-o" id="info_fa"> </i> WHEN</a></li>
    <li><a class="" data-toggle="tab" href="#menu1"><i class="fa fa-map-marker" id="info_fa"> </i> WHERE</a></li>
    <li class="active " style="margin-bottom:2px;"><a class="" data-toggle="tab" href="#menu2"><i class="fa fa-calendar" aria-hidden="true" id="info_fa"></i> EVENT</a></li>
    
  </ul>

    <div id="menu2" class="tab-pane fade in active">
        <div class="board" id="board_height">
          <div class="board-inner event_iconlist" id="icons_align">
            <ul class="nav nav-tabs nav_info" id="myTab"  style="margin:40px 25%">
                <div class="liner"></div>
               
                 <li><a href="{{url('/subevent')}}" title="Sub Events">
                   <span class="round-tabs">
                     <i class="fa fa-list"></i>
                   </span>
                 </a>
                    </li>
                  <li><a href="{{url('/schedule-event/'.$event_id)}}" title="Schedule">
                      <span class="round-tabs">
                           <i class="fa fa-calendar"></i>
                      </span> </a>
                      </li>

                      <li><a href="{{url('/contact-event')}}" title="Contacts">
                          <span class="round-tabs">
                               <i class="fa fa-phone"></i>
                          </span>
                      </a></li>
                    

                      <li class="active"><a href="{{url('/confirm-event')}}" title="Conform">
                          <span class="round-tabs">
                               <i class="fa fa-check"></i>
                          </span> </a>
                      </li>


                      </ul></div>
                       <div class="tab-content tab_details">
 {{$event_name}}
                                          <div class="tab-pane fade in active" id="eventconform">
                                            <div class="table-responsive">
                                              @if(count($event_details)>0)
                                              <table class="table table-bordered">
                                                <thead>
                                                <tr>
                                                  
                                                  <th>SubEvent Name</th>
                                                  <th>Swim Style</th>
                                                  <th>Team Size</th>
                                                  <th>Is Disabled</th>
                                                  <th>Age(Min-Max)</th>
                                                  <th>Participants (Min-Max)</th>
                                                </tr>
                                              </thead>
                                              @foreach($event_details as $event)
                                                <tr>
                                                 
                                                  <td>{{$event->SubEventName}}
                                                  <td>{{$event->SwimStyle}}</td>
                                                  <td>{{$event->MembersPerTeam}}</td>
                                                  <td>{{$event->AbleBodied}}</td>
                                                  <td>{{$event->MinimumAge}}-{{$event->MaximumAge}}</td>
                                                  <td>{{$event->MinParticipants}}-{{$event->MaxParticipants}}</td>
                                                </tr>
                                               @endforeach
                                              </table>
                                              @endif
                                            </div>
                                         <!--   <center><ul class="pagination">

          <li><a href="#">&laquo;</a></li>
          <li><a href="#">1</a></li>
           <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
          <li><a href="#">&raquo;</a></li>
        </ul>
                                        </center>-->
										<div class="row" style="border: 1px solid #cdd1d1;margin-left: 0;margin-right: 0; border-radius:5px">
										    <div	class="col-sm-12">
                                            <div style="box-shadow: 0 6px 4px #f8f8f8;width: 100%;padding: 10px;margin: 0;">
											<h5 style="color:#46A6EA"><b>Event Description</b></h5>
                                            <p>{{$event_descripiton}}</p>
                                            @if(count($venues)>0)</div>
                                            <div style="box-shadow: 0 6px 4px #f8f8f8;width: 100%;padding: 10px;margin: 0;">
											<h5 style="color:#46A6EA"><b>Venue</b></h5>
                                            @foreach($venues as $venue)
                                            <p>{{$venue->VenueName}}</p>
                                            @endforeach
                                            @endif
                                            @if(count($schedulers)>0)</div>
                                            <div style="box-shadow: 0 6px 4px #f8f8f8;width: 100%;padding: 10px;margin: 0;">
										<h5 style="color:#46A6EA"><b>Schedule</b></h5>
                                            @foreach($schedulers as $schedule)
                                            <p>Occuarance:{{$schedule->ScheduleType}}<br> Between {{$schedule->StartDateTime}} and {{$schedule->EndDateTime}} at {{$schedule->StartTime}}</p>
                                            @endforeach
                                            @endif
                                            @if(count($venues)>0)</div></div>
                                           <div	class="col-sm-7">
                                            <div style="box-shadow: 0 6px 4px #f8f8f8;width: 100%;padding: 10px;margin: 0;">
										<h5 style="color:#46A6EA"><b>Address</b></h5>
                                            @foreach($venues as $venue)
                                            <p>{{$venue->AddressLine1}}<br>Post Code: {{$venue->PostCode}}<br> {{$venue->City}}</p>
                                            @endforeach
                                            @endif
                                            @if(count($clubs)>0)</div>
                                            <div style="box-shadow: 0 6px 4px #f8f8f8;width: 100%;padding: 10px;margin: 0;">
										<h5 style="color:#46A6EA"><b>Clubs</b></h5>
                                            @foreach($clubs as $club)
                                            <p>Mobile:{{$club->ClubName}}<br>Email:{{$club->Email}}<br>Phone:{{$club->MobilePhone}}<br>Website:<a href="{{$club->Website}}" style="color:black">{{$club->Website}}</a></p>
                                            @endforeach
                                            @endif
                                            @if(count($venues)>0)</div><div style="box-shadow: 0 6px 4px #f8f8f8;width: 100%;padding: 10px;margin: 0;">
										<h5 style="color:#46A6EA"><b>Contact</b></h5>
                                            @foreach($contacts as $contact)
                                            <p>Mobile:{{$contact->Phone}}<br>Email:{{$contact->Email}}</p>
                                            @endforeach
                                            @endif</div>
                                            <br>
                                            <form method="post" action="{{url('confirm-event/'.$event_id)}}">
                                              {{csrf_field()}}
                                               @foreach($event_details as $event)
                                              <input type="hidden" name="event_name" value="{{$event->EventName}}">
                                              @endforeach
                                        
                                  
									  </div>
									  <div class="col-sm-5 " style="margin-top: 12px;">
										<img class="img-thumbnail myzommimg" src="{{$image}}" width="100%"alt="Here Image here">
									  </div><br>

                                                 </div><br>
												 
										<center><button type="submit" class="btn btn-primary mybtn">Submit</button></center>
										    </form>
                        <form method="get" action="{{url('editpage/event/contact/'.$event_id)}}">
                        <center><button type="submit" class="btn btn-primary mybtn">Back</button></center>
                      </form>
                    </div>
                  </div>
                </div>
              </div></div></div>
              @endsection