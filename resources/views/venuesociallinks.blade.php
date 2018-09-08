@extends('layouts.main')
@section('content')

    <div class="container mycntn">
   <ol class="breadcrumb" style="border:1px solid #46A6EA;color:#46A6EA;">
  <li class="breadcrumb-item"><a style="color:#777;" href="{{url('/')}}">Home</a></li>
  <li class="breadcrumb-item"><a style="color:#777;" href="{{url('/addvenue/'.$venue_id)}}">Add Venue</a></li>
  <li class="breadcrumb-item"><a style="color:#777;" href="{{url('/venuepool/'.$venue_id)}}">Add Pool</a></li>
  <li class="breadcrumb-item"><a style="color:#777;" href="{{url('/venuecontact/'.$venue_id)}}">Add Contact</a></li>
    <li class="breadcrumb-item"><a style="color:#777;" href="{{url('/venuetimings/'.$venue_id)}}">Add Venue Timings</a></li>

  <li class="breadcrumb-item">Venue Social links</a></li>
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

                  <li><a href="{{url('venueaddress/'.$venue_id)}}" data-toggle="tab" title="Contact">
                  <span class="round-tabs">
                       <i class="fa fa-phone"></i>
                  </span> </a>
                  </li>

                  <li><a href="" title="Open hours & Facilities">
                      <span class="round-tabs">
                           <i class="fa fa-clock-o"></i>
                      </span>
                  </a></li>
                  <li class="active"><a href="" title="Web site & Social Links">
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
                  <div class="tab-pane fade in active" id="venuesocial">

                   <form class="form-horizontal" style="background:#fff;padding:35px" method="post" action="{{ url('venuesociallinks/'.$venue_id) }}">
                    {{csrf_field()}}
                      <h5 style="color:#46A6EA"><b>Social Links</b></h5>
                      <div class="row">
                     <div class="form-group">
                           <label class="control-label col-xs-4 col-sm-offset-1 col-sm-2" for="email">Facebook:</label>
                             <div class="col-xs-8 col-sm-8">
                               @if($social_links[0]->Facebook == 'NA')
                               <input type="text" class="form-control" id="email" placeholder="www.facebook.com" name="facebook">
                               @else
                               <input type="text" class="form-control" id="email" value="{{$social_links[0]->Facebook}}" name="facebook">
                               @endif
                             </div>
                             </div>
                           <div class="form-group">
                             <label class="control-label col-xs-4 col-sm-offset-1 col-sm-2" for="email">Twitter:</label>
                                 <div class="col-xs-8 col-sm-8">
                                @if($social_links[0]->Twitter == 'NA')
                                <input type="text" class="form-control" id="email" placeholder="www.twitter.com" name="twitter">
                               @else
                                <input type="text" class="form-control" id="email" value="{{$social_links[0]->Twitter}}" name="twitter">
                             @endif
                                 </div>
                           </div>
                             <div class="form-group">
                               <label class="control-label col-xs-4 col-sm-offset-1 col-sm-2" for="email">Google+:</label>
                                 <div class="col-xs-8 col-sm-8">
                                   @if($social_links[0]->GooglePlus == 'NA')
                                   <input type="text" class="form-control" id="email" placeholder="www.googleplus.com" name="google">
                                  @else
                                   <input type="text" class="form-control" id="email" value="{{$social_links[0]->GooglePlus}}" name="google">
                                   @endif
                                 </div>
                             </div>
                               <div class="form-group">
                                 <label class="control-label col-xs-4 col-sm-offset-1 col-sm-2" for="txt">Others:</label>
                                   <div class="col-xs-8 col-sm-8">
                                     @if($social_links[0]->Others == 'NA')
                                     <input type="text" class="form-control" id="txt"  name="others">
                                  @else
                               <input type="text" class="form-control" id="txt" value="{{$social_links[0]->Others}}" name="others">
                                 @endif
                                   </div>
                               </div>
                        <h5 style="color:#46A6EA"><b>Website</b></h5><hr>
                                     <div class="row">
                                       <div class="form-group">
                                        <label class="control-label  col-xs-4 col-sm-offset-1 col-sm-2" for="txt">Link 1:</label>
                                        <div class="col-xs-8 col-sm-8">
                                          @if($social_links[0]->Website == 'NA')
                                          <input type="url" class="form-control" id="txt" placeholder="www.vonkdoth.com" name="link1">
                                          @else
                                          <input type="url" class="form-control" id="txt" value="{{$social_links[0]->Website}}" name="link1">
                                         @endif
                                      </div>
                                    </div>
                                   <div class="form-group">
                                     <label class="control-label  col-xs-4 col-sm-offset-1 col-sm-2" for="txt">Link 2:</label>
                                   <div class="col-xs-8 col-sm-8">
                                     @if($social_links[0]->Website2 == 'NA')
                                     <input type="url" class="form-control" id="txt" placeholder="www.swiimiq.com" name="link2">
                                      @else
                                     <input type="url" class="form-control" id="txt" value="{{$social_links[0]->Website2}}" name="link2">
                                     @endif
                                   </div>
                                   </div>

                     <div class="col-sm-offset-5 col-xs-offset-4">
            <a href="{{url('venuetimings/'.$venue_id)}}" class="btn btn-primary mybtn" type="reset">Back</button></a>
				 <button class="btn btn-primary mybtn" id="savelink">Save</button>
        </form>
        
				 <a href="{{url('confirmvenue/'.$venue_id)}}" class="btn btn-primary mybtn" id="confirmvenue">Next</a>
</div>
                     </div>
                   </div>
               </div></div></div></div></div>

@endsection
