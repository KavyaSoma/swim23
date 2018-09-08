@extends('layouts.main')
@section('content')
@if(session()->has('message.level'))
    <!--<div class="alert alert-{{ session('message.level') }}" style="margin-left:13px;text-align: center">
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
                  <a href="{{ url('editvenue/'.$venue_id) }}" title="Venue Summary">
                   <span class="round-tabs">
                           <i class="fa fa-list"></i>
                   </span>
               </a></li>

               <li><a href="{{ url('edit-venuepool/'.$venue_id) }}"  title="Pool Information">
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

                  <li><a href="{{ url('edit-venuetimings/'.$venue_id) }}" title="Open hours & Facilities">
                      <span class="round-tabs">
                           <i class="fa fa-clock-o"></i>
                      </span>
                  </a></li>
                  <li class="active"><a href="{{ url('edit-venuesociallinks/'.$venue_id) }}" title="Web site & Social Links">
                      <span class="round-tabs">
                           <i class="fa fa-share-alt"></i>
                      </span>
                  </a></li>

                  <li ><a href="{{url('confirmvenue/'.$venue_id)}}" title="Confirm Venue">
                      <span class="round-tabs">
                           <i class="fa fa-check"></i>
                      </span> </a>
                  </li>


                  </ul></div>
                  <div class="tab-pane fade in active" id="venuesocial">

                   <form class="form-horizontal" style="background:#fff;padding:35px" method="post" action="{{ url('edit-venuesociallinks/'.$venue_id) }}">
                    {{csrf_field()}}
                      <h5 style="color:#46A6EA"><b>Social Links</b></h5>
                         <div class="row">
                          @foreach($check_links as $links)
                     <div class="form-group">
                           <label class="control-label col-xs-4  col-sm-2" for="email">Facebook:</label>
                             <div class="col-xs-8 col-sm-9">
                               <input type="text" class="form-control" id="email" name="facebook" value="{{$links->Facebook}}" required>
                             </div>
                             </div>
                           <div class="form-group">
                             <label class="control-label col-xs-4 col-sm-2" for="email">Twitter:</label>
                                 <div class="col-xs-8 col-sm-9">
                                     <input type="text" class="form-control" id="email" name="twitter" value="{{$links->Twitter}}" required>
                                 </div>
                           </div>
                             <div class="form-group">
                               <label class="control-label col-xs-4 col-sm-2" for="email">Google+:</label>
                                 <div class="col-xs-8 col-sm-9">
                                   <input type="email" class="form-control" id="email" name="google" value="{{$links->GooglePlus}}" required>
                                 </div>
                             </div>
                               <div class="form-group">
                                 <label class="control-label col-xs-4 col-sm-2" for="txt">Others:</label>
                                   <div class="col-xs-8 col-sm-9">
                                     <input type="text" class="form-control" id="txt" name="others" value="{{$links->Others}}" required>
                                   </div>
                               </div>

                                      <form class="form-horizontal" style="background:#fff;padding:35px">
                                         <h5 style="color:#46A6EA"><b>Website</b></h5><hr>
                                     <div class="row">
                                       <div class="form-group">
                                        <label class="control-label  col-xs-4 col-sm-2" for="txt">Link 1:</label>
                                        <div class="col-xs-8 col-sm-9">
                                          <input type="url" class="form-control" id="txt" name="link1" value="{{$links->Website}}" required>
                                      </div>
                                    </div>
                                   <div class="form-group">
                                     <label class="control-label  col-xs-4 col-sm-2" for="txt">Link 2:</label>
                                   <div class="col-xs-8 col-sm-9">
                                     <input type="url" class="form-control" id="txt" name="link2" value="{{$links->Website2}}">
                                   </div>
                                   </div>
@endforeach
                     <div class="col-sm-offset-5 col-xs-offset-4">
              <a><button class="btn btn-primary mybtn" type="reset">Back</button></a>
				 <button class="btn btn-primary mybtn">Save</button>
				 <button class="btn btn-primary mybtn">Next</button>
</div>
                       </div>
                     </div>
                   </div>
               </form></div></div></div></div></div>
@endsection