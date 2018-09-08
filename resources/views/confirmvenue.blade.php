@extends('layouts.main')
@section('content')

     <div class="container mycntn">
   <ol class="breadcrumb" style="border:1px solid #46A6EA;color:#46A6EA;">
  <li class="breadcrumb-item"><a style="color:#777;" href="{{url('/')}}">Home</a></li>
  <li class="breadcrumb-item"><a style="color:#777;" href="{{url('/addvenue/'.$venue_id)}}">Add Venue</a></li>
  <li class="breadcrumb-item"><a style="color:#777;" href="{{url('/venuepool/'.$venue_id)}}">Add Pool</a></li>
  <li class="breadcrumb-item"><a style="color:#777;" href="{{url('/venuecontact/'.$venue_id)}}">Add Contact</a></li>
    <li class="breadcrumb-item"><a style="color:#777;" href="{{url('/venuetimings/'.$venue_id)}}">Add Venue Timings</a></li>

  <li class="breadcrumb-item"><a style="color:#777;" href="{{url('/venuesociallinks/'.$venue_id)}}">Venue Social links</a></li>
    <li class="breadcrumb-item">Confirm Venue</li>

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
                 <!-- <h2>Welcome to IGHALO!<sup>™</sup></h2>-->
                 <div class="board-inner">
                 <!-- <h2>Welcome to IGHALO!<sup>™</sup></h2>-->
                 <div class="board-inner">
                 <ul class="nav nav-tabs nav_info" id="myTab">
                 <div class="liner"></div>
                  <li>
                  <a href="" title="Venue Summary">
                   <span class="round-tabs">
                           <i class="fa fa-list"></i>
                   </span>
               </a></li>

               <li><a href=""  title="Pool Information">
                  <span class="round-tabs">
                      <i class="fa fa-info"></i>
                  </span>
        </a>
              </li>
              <li><a href="" title="Address & Contact">
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

                  <li  class="active"><a href="" title="Confirm Venue">
                      <span class="round-tabs">
                           <i class="fa fa-check"></i>
                      </span> </a>
                  </li>

                  </ul></div>

    <div class="tab-pane fade in active" style="padding:30px;" id="venueconfirm">

<div class="table-responsive table-bordered">
  <table class="table">
    <thead>
    <tr>
      <th>Pool Name</th>
      <th>Pool Area</th>
      <th>Length</th>
      <th>Width</th>
      <th>Deep End</th>
      <th>Shallow End</th>
    </tr>
  </thead>
   @foreach($pool_details as $pool)
    <tr>
      <td>{{$pool->PoolName}}</td>
      <td>{{$pool->Area}}</td>
      <td>{{$pool->Length}}</td>
      <td>{{$pool->Width}}</td>
      <td>{{$pool->MaximumDepth}}</td>
      <td>{{$pool->MinimumDepth}}</td>
    </tr>
    @endforeach
    <tr>

  </table>
</div>
<div class="row" style="border: 1px solid #cdd1d1;margin-left: 0;margin-right: 0;margin-top: 6px; border-radius:5px">
<div class="col-sm-6 col-xs-6">
<h5 style="color:#46A6EA"><b>Venue Name</b></h5>
@foreach($facilities as $facility)
<p>{{$facility->VenueName}}</p>
@endforeach
<h5 style="color:#46A6EA"><b>Pool Description</b></h5>
@foreach($pool_details as $pool)
<p>{{$pool->SpecialRequirements}}</p>
@endforeach
<h5 style="color:#46A6EA"><b>Opening Hours</b></h5>
@if(count($timings)>0)

@foreach($timings as $timing)
<p>{{$timing->Day}}({{$timing->OpeningHours}} to {{$timing->ClosingHours}})<br>
  @endforeach
  @endif
</div>
<div class="col-sm-6 col-xs-6">
<h5 style="color:#46A6EA"><b>Address</b></h5>
@foreach($venue_address as $address)
<p>{{$address->AddressLine1}}<br>Post Code: {{$address->PostCode}}<br>{{$address->City}},{{$address->County}},{{$address->Country}}</p>
@endforeach
<h5 style="color:#46A6EA"><b>Contact</b></h5>
@foreach($venue_contact as $contact)
<p>Mobile:{{$contact->Phone}}<br>Email:{{$contact->Email}}</p>
@endforeach
@if(count($facilities)>0)
@foreach($facilities as $facility)
<h5 style="color:#46A6EA"><b>Facilities</b></h5>
@if($facility->VisitingGallery == "yes")
<img src="{{ url('public/images/visitinggallery.png') }}" title="visiting gallery" height="30px" width="30px">
@endif
@if($facility->Shower == "yes")
<img src="{{ url('public/images/shower.png') }}" title="shower" height="30px" width="30px">
@endif
@if($facility->Gym == "yes")
<img src="{{ url('public/images/gym.jpg') }}" title="gym" height="30px" width="30px">
@endif
@if($facility->Teachers == "yes")
<img src="{{ url('public/images/instructors.png') }}" title="instructors" height="30px" width="30px">
@endif
@if($facility->ParaSwimmingFacilities == "yes")
  <img src="{{ url('public/images/paraswimming.jpg') }}" title="paraswimming" height="30px" width="30px">
@endif
@if($facility->LadiesOnlySwimming == "yes")
<img src="{{ url('public/images/ladiesonlyswimmtime.png') }}" title="LadiesOnlySwimTimes" height="30px" width="30px">
@endif
@if($facility-> Toilets == "yes")
<img src="{{ url('public/images/toilets.jpg') }}" title="toilets" height="30px" width="30px">
@endif
@if($facility->Diving == "yes")
<img src="{{ url('public/images/diving.png') }}" title="diving" height="30px" width="30px">
@endif
@if($facility->PrivateHire == "yes")
<img src="{{ url('public/images/privatehire.png') }}" title="private hire" height="30px" width="30px">

@endif
@if($facility->Parking == "yes")
  <img src="{{ url('public/images/parking.jpg') }}" title="parking" height="30px" width="30px">
@endif
@if($facility->SwimForKids == "yes")
<img src="{{ url('public/images/kidszone.png') }}" title="kids zone" height="30px" width="30px">
@endif
@endforeach
@endif
</div>

</div>
<br>
<form method="post" action="{{url('confirmvenue/'.$venue_id)}}">
  {{csrf_field()}}

  <div class="col-sm-offset-4 col-xs-offset-3">
              <a href="{{url('venuesociallinks/'.$venue_id)}}" class="btn btn-primary mybtn" type="reset">Back</a>
				 <button class="btn btn-primary mybtn">Submit</button>
			
</div></form>

   </div>
</div>
</div>
</div>

</div>
</div>
@endsection
