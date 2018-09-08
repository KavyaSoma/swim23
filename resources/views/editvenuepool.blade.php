@extends('layouts.main')
@section('content')

@if(session()->has('message.level'))
    <!--<div class="alert alert-{{ session('message.level') }}" style="margin-left:13px;text-align:center ">
    {!! session('message.content') !!}
    </div>-->
    @endif
<!--New hari Modal content-->
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
  <div class="row"><h4 class="col-sm-9" style="color:green;text-align:center;">{{ session('message.level') }} {!! session('message.content') !!}</h4>
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
                  <a href="{{ url('editvenue/'.$venue_id) }}" title="Venue Summary">
                   <span class="round-tabs">
                           <i class="fa fa-list"></i>
                   </span>
               </a></li>

               <li  class="active"><a href="{{ url('edit-venuepool/'.$venue_id) }}"  title="Pool Information">
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
                  <li><a href="{{ url('edit-venuesociallinks/'.$venue_id) }}" title="Web site & Social Links">
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
                   
                  <div class="tab-pane fade in active" id="venueinformation">
                    <!--<form class="form-horizontal" style="background:#fff;padding:35px;" method="post" action="{{url('edit-venuepool/'.$venue_id.'/'.$poolid)}}">
                      {{csrf_field()}}
                      
                      <div class="row">
                            <div class="form-group" id="field1">
                                  <label class="control-label col-xs-4 col-sm-2" for="txt">Pool Name:</label>
                                  <div class="col-xs-8 col-sm-9">
                                    <input type="text" class="form-control" id="pool-name" name="pool_name" value="{{$pool_details[0]->PoolName}}" required>
                                  </div>
                                  <br><br>
                                </div>

                      <div class="form-group">
                          <label class="control-label col-xs-4 col-sm-2" for="txt">Pool Width:</label>
                          <div class="col-xs-8 col-sm-9">
                            <input type="text" class="form-control" id="pool-width" name="pool_width" value="{{$pool_details[0]->Width}}" required>
                          </div>
                           
                          <br>
                        </div>
                        <div class="form-group">
                            <label class="control-label  col-xs-4 col-sm-2" for="txt">Pool Length:</label>
                            <div class="col-xs-8 col-sm-9">
                              <input type="text" class="form-control" id="pool-length" name="pool_length" value="{{$pool_details[0]->Length}}" required>
                            </div>
                             

                          </div>
                          <div class="form-group">
                              <label class="control-label col-xs-4 col-sm-2" for="txt">Shallow End:</label>
                              <div class="col-xs-8 col-sm-9">
                                <input type="text" class="form-control" id="shallow-end" name="shallow_end" value="{{$pool_details[0]->MinimumDepth}}" required>
                              </div>
                              

                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-4 col-sm-2" for="txt">Deep End:</label>
                                <div class="col-xs-8 col-sm-9">
                                  <input type="text" class="form-control" id="deep-end" name="deep_end" value="{{$pool_details[0]->MaximumDepth}}" required>
                                </div>
                                 

                              </div>
                              <div class="form-group">
                                  <label class="control-label col-xs-4 col-sm-2" for="txt">Pool Area:</label>
                                  <div class="col-xs-8 col-sm-9">
                                    <input type="text" class="form-control" id="pool-area" name="pool_area" value="{{$pool_details[0]->Area}}" required>
                                  </div>
                              </div>
                                <div class="form-group">
                         <label class="control-label col-xs-4  col-sm-2" for="description" required>Description:</label>
                         <div class="col-xs-8 col-sm-9">
                           <textarea class="form-control" id="txt" name="description">{{$pool_details[0]->SpecialRequirements}}</textarea>
                         </div>
                       </div>
                       
                       
                    </div><br>
                     
                      <div class="col-sm-offset-4 col-xs-offset-3">
              <a><button class="btn btn-primary mybtn" type="reset">Back</button></a>
				 <button class="btn btn-primary mybtn">Save</button>
				 <button class="btn btn-primary mybtn">Next</button>
</div>
                        </form>
                        <hr>-->
                        <form class="form-horizontal" style="background:#fff;padding:30px" method="post" action="{{url('venuepool/'.$venue_id)}}">
                      {{csrf_field()}}
                      <div class="row">
                            <div class="form-group" id="field1">
                                  <label class="control-label col-xs-4 col-sm-2" for="txt">Pool Name:</label>
                                  <div class="col-xs-8 col-sm-9">
                                    <input type="text" class="form-control" id="pool-name" name="pool_name" pattern="([A-zÀ-ž\s]){5,25}" required>
                                    <span class="pool-error" style="color: red;display: none;">Pool Name should contain 5-25 characters</span>
                                  </div>
                                  <br><br>
                                </div>

                      <div class="form-group">
                          <label class="control-label col-xs-4 col-sm-2" for="txt">Pool Width:</label>
                          <div class="col-xs-4 col-sm-6">
                            <input type="text" class="form-control" id="pool-width" name="pool_width"  pattern="([0-9]){2,3}" required>
                            <span class="pool-width-error" style="color: red;display: none;">Pool Width should contain 2-3 Numeric Values</span>
                          </div>
                          <div class="col-xs-4 col-sm-3">
                            <select  class="form-control" id="sel" name="width_dimension">
                              <option>mt</option>
                              <option>cm</option>
                            </select>
                          </div>
                          <br>
                        </div>
                        <div class="form-group">
                            <label class="control-label  col-xs-4 col-sm-2" for="txt">Pool Length:</label>
                            <div class="col-xs-4 col-sm-6">
                              <input type="text" class="form-control" id="pool-length" name="pool_length"  pattern="([0-9]){2,3}" required>
                              <span class="pool-length-error" style="color: red;display: none;">Pool Length should contain 2-3 Numeric Values</span>
                            </div>
                            <div class="col-xs-4 col-sm-3">
                              <select  class="form-control" id="sel" name="length_dimension">
                                <option>mt</option>
                                <option>cm</option>
                              </select>
                            </div>

                          </div>
                          <div class="form-group">
                              <label class="control-label col-xs-4 col-sm-2" for="txt">Shallow End:</label>
                              <div class="col-xs-4 col-sm-6">
                                <input type="text" class="form-control" id="shallow-end" name="shallow_end" pattern="([0-9]){2,3}" required>
                                <span class="shallow-end-error" style="color: red;display: none;">Shallow End should contain 2-3 Numeric Values</span>
                              </div>
                              <div class="col-xs-4 col-sm-3">
                                <select  class="form-control" id="sel" name="shallow_dimension">
                                  <option>mt</option>
                                  <option>cm</option>
                                </select>
                              </div>

                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-4 col-sm-2" for="txt">Deep End:</label>
                                <div class="col-xs-4 col-sm-6">
                                  <input type="text" class="form-control" id="deep-end" name="deep_end" pattern="([0-9]){2,3}" required>
                                   <span class="deep-end-error" style="color: red;display: none;">Deep End should contain 2-3 Numeric Values</span>
                                </div>
                                <div class="col-xs-4 col-sm-3">
                                  <select  class="form-control" id="sel" name="deep_dimension">
                                    <option>mt</option>
                                    <option>cm</option>
                                  </select>
                                </div>

                              </div>
                              <div class="form-group">
                                  <label class="control-label col-xs-4 col-sm-2" for="txt">Pool Area:</label>
                                  <div class="col-xs-4 col-sm-6">
                                    <input type="text" class="form-control" id="pool-area" name="pool_area" pattern="([0-9]){2,5}" required>
                                    <span class="pool-area-error" style="color: red;display: none;">Pool Area should contain 2-5 Numeric Values</span>
                                  </div>
                                  <div class="col-xs-4 col-sm-3">
                                    <select  class="form-control" id="sel" name="area_dimension">
                                      <option>ft</option>
                                      <option>cm</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="form-group">
                         <label class="control-label col-xs-4 col-sm-2" for="description" required>Description:</label>
                         <div class="col-xs-8 col-sm-9">
                           <textarea class="form-control" id="txt" name="description"></textarea>
                         </div>
                       </div>
                                           </div><br>
                     
                      <div class="col-sm-offset-4 col-xs-offset-3">
              <a><button class="btn btn-primary mybtn" type="reset">Back</button></a>
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
console.log('{{ url('getoldvenues/poolinfo/'.$venue_id) }}');
$.ajax({
    url: '{{ url('getoldvenues/poolinfo/'.$venue_id) }}',
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