<?php $__env->startSection('content'); ?>

<?php if(session()->has('message.level')): ?>
    <div class="alert alert-<?php echo e(session('message.level')); ?>" style="margin:13px;text-align: center;">
    <?php echo session('message.content'); ?>

    </div>
    <?php endif; ?>
	!--New hari Modal content-->
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
    <!-- event code starts here -->
   <div class="container mycntn" id="main-code">
   <ol class="breadcrumb" style="border:1px solid #46A6EA;color:#46A6EA;">
  <li class="breadcrumb-item"><a style="color:#777;" href="http://localhost/swim">Home</a></li>
  <li class="breadcrumb-item"><a style="color:#777;" href="http://localhost/swim/socialnetwork">Social Network</a></li>
  <li class="breadcrumb-item">Groups</li>
  </ol>
      <!--<h5 class="add_venue" style="padding:10px;"><span class="" style="font-size:17px;" ><i class="fa fa-calendar"> </i> </span> GALA</h5>-->
      <div class="row" style="margin-left:0px;margin-right:0px;">
	  <ul class="nav nav-tabs mob-none">
	<li class="active " style="margin-bottom:2px;"><a data-toggle="tab" class="" href="#mhome">Basic Details</a></li>
    <li style="margin-bottom:2px;"><a data-toggle="tab" class="" href="#home"> WHEN</a></li>
    <li><a class="" data-toggle="tab" href="#menu1"> WHERE</a></li>
    <li><a class="" data-toggle="tab" href="#menu2"> EVENT</a></li>
    
  </ul>
  <ul class="nav nav-tabs desk-none tab-none mob-block" style="border-bottom:0px">
	<li class="active " style="margin-bottom:2px;"><a data-toggle="tab" class="" href="#mhome"><i class="fa fa-list" id="info_fa"> </i></a></li>
    <li style="margin-bottom:2px;"><a data-toggle="tab" class="" href="#home"><i class="fa fa-clock-o" id="info_fa"> </i> </a></li>
    <li><a class="" data-toggle="tab" href="#menu1"><i class="fa fa-map-marker" id="info_fa"> </i> </a></li>
    <li><a class="" data-toggle="tab" href="#menu2"><i class="fa fa-calendar" aria-hidden="true" id="info_fa"></i> </a></li>
    
  </ul>
  <div class="tab-content">
  <div id="mhome" class="tab-pane fade in active">
  <div class="container"><!--id="main-code"-->
     <div class="col-xs-12 col-sm-3 kin_photo">
     <div class="fb-profile" style="margin-top:13%">
 <img class="thumbnail profile_image" src="images/sravan.jpeg" alt="Profile image">
     <div class="fb-profile-text text-center">
        <div class="col-xs-12 col-sm-12">
                    <input class="form-control myful" id="imgUpload" name="imgUpload" accept="image/*" type="file">
                </div><br><br><br>
         <!-- <p class="text-center"><i class="fa fa-map-marker" style="color:#46A6EA"></i> Location:UK</p>-->
</div>
</div>
</div>
 <div class="col-xs-12 col-sm-9 kin_info" style="border-left:1px solid #eee">
<form class="form-horizontal kin_infor" style="padding:17px;">
<?php echo e(csrf_field()); ?>

<div>
          <div class="row">
          <div class="form-group" id="field1">
            <label class="control-label col-xs-4 col-sm-2" for="txt">Event Name:</label>
              <div class="col-xs-8 col-sm-9"> 
                  <input type="text" class="form-control" id="event-name" name="event_name" onchange="eventname()" value="<?php echo e(old('event_name')); ?>" pattern="([A-zÀ-ž\s]){3,25}" required>
                  <span class="name-error" style="color: red;display: none">Event Name should contain 3-25 characters.</span>

              </div>
          </div>
          <div class="form-group">
              <label class="control-label col-xs-4 col-sm-2" for="txt">Description:</label>
                  <div class="col-xs-8 col-sm-9">
                      <textarea class="form-control" id="txt" name="description" value="<?php echo e(old('description')); ?>" required></textarea>
                  </div>
          </div>
          <div class="form-group">
            <label class="control-label col-xs-4 col-sm-2" for="txt">Privacy:</label>
              <div class="col-xs-8 col-sm-9 mob-none">
    <label class="radio-inline containerh">Public<input name="privacy" value="public" checked="checked" required="" type="radio"><span class="checkmark"></span></label>
	<label class="radio-inline containerh">Private<input name="privacy" value="Private" required="" type="radio"><span class="checkmark"></span></label>
	<label class="radio-inline containerh">Personal<input name="privacy" value="Personal" required="" type="radio"><span class="checkmark"></span></label>
                    <label class="radio-inline containera"> <button class="btn btn-xs tooltips" data-container="body" data-placement="right" title=" 
                      Public means 'its shown for all users' ,
                      private means 'its shown for selected users' , 
                      Personal means 'its shown for personal invited users"> ? </button> </label>
              </div>
			  <div class="col-xs-8 col-sm-4 desk-none tab-none mob-block">
    <label class="radio-inline containerh">Public<input name="privacy" value="public" required="" type="radio"><span class="checkmark"></span></label><br>
	<label class="radio-inline containerh">Private<input name="privacy" value="Private" required="" type="radio"><span class="checkmark"></span></label><br>
	<label class="radio-inline containerh">Personal<input name="privacy" value="Personal" required="" type="radio"><span class="checkmark"></span></label><br>
              </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-4 col-sm-2" for="txt">Short Name:</label>
              <div class="col-xs-8 col-sm-9"> 
                  <input type="text" class="form-control" id="event-name" name="event_name" onchange="eventname()" value="<?php echo e(old('event_name')); ?>" pattern="([A-zÀ-ž\s]){3,25}" required>
                  <span class="name-error" style="color: red;display: none">Event Name should contain 3-25 characters.</span>

              </div>
            </div>
          
              </div>
  
</div>

</form>
<div class="col-sm-offset-5 col-xs-offset-6 "><button class="btn btn-primary mybtn" style="width:53%" type="reset">Next</button></a>
				 </div>
</div></div>
  </div>
    <div id="home" class="tab-pane fade">
      <div class="container"><!--id="main-code"-->
     <div class="col-xs-12 col-sm-3 kin_photo" style="border-right:1px solid #eee">
     <div class="fb-profile" style="margin-top:13%">
 <img class="thumbnail profile_image" src="images/sravan.jpeg" alt="Profile image">
     <div class="fb-profile-text text-center">
        <div class="col-xs-12 col-sm-12">
                    <input class="form-control myful" id="imgUpload" name="imgUpload" accept="image/*" type="file">
                </div>
         <!-- <p class="text-center"><i class="fa fa-map-marker" style="color:#46A6EA"></i> Location:UK</p>-->
</div>
</div>
</div>
<form class="form-horizontal kin_infor" style="padding:30px;">
 <div class="col-xs-12 col-sm-9 kin_info" >

<div>
          <div class="row">
          
          
            <div class="form-group">
                <label class="control-label col-xs-12 col-sm-3" for="txt">Start Date & Time:</label>
                  <div class="col-xs-6 col-sm-4">
                    <div class="input-group">
                        <input class="form-control" id="tme" name="time" type="date">
                        <span class="input-group-addon"><i class="fa fa-calendar-o"></i></span>
                    </div>
                  </div>
				  <div class="col-xs-6 col-sm-4">
                    <div class="input-group">
                        <input class="form-control" id="tme" name="time" type="time">
                        <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                    </div>
                    
                  </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-12 col-sm-3" for="txt">End Date & Time:</label>
                  <div class="col-xs-6 col-sm-4">
                    <div class="input-group">
                        <input class="form-control" id="tme" name="time" type="date">
                        <span class="input-group-addon"><i class="fa fa-calendar-o"></i></span>
                    </div>
                  </div>
				  <div class="col-xs-6 col-sm-4">
                    <div class="input-group">
                        <input class="form-control" id="tme" name="time" type="time">
                        <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                    </div>
                    
                  </div>
            </div>
              </div>
  
</div>

</div><div class="col-sm-offset-5 col-xs-offset-4 "><button class="btn btn-primary mybtn" style="width:53%" type="reset">Next</button></a>
				 </div></form></div>
<br>
    </div>
	
    <div id="menu1" class="tab-pane fade">
      <div class="container" ><!--id="main-code"-->
     <div class="col-xs-12 col-sm-6 col-md-3 kin_photo">
     <div class="fb-profile" style="margin-top:13%">
 <img class="thumbnail profile_image" src="images/sravan.jpeg" alt="Profile image">
     <div class="fb-profile-text text-center">
         <!--<h3>Event Name</h3>
          <p class="text-center"><i class="fa fa-map-marker" style="color:#46A6EA"></i> Location:UK</p>-->
</div>
</div>
</div>
 <div class="col-xs-12 col-sm-9 kin_info" style="border-left:1px solid #eee">
<form class="form-horizontal kin_infor"  style="padding:30px;">
<div>
          <div class="row">
          <div class="form-group" id="field1">
            <label class="control-label col-xs-4 col-sm-2" for="txt">Venue:</label>
              <div class="col-xs-8 col-sm-9"> 
                  <input type="text" class="form-control" name="venue" required>
                

              </div>
          </div>
          <div class="form-group" id="field1">
            <label class="control-label col-xs-4 col-sm-2" for="txt">Address:</label>
              <div class="col-xs-8 col-sm-9"> 
                  <input type="text" class="form-control" name="address" required>
                  
              </div>
          </div>
          
            <div class="form-group" id="field1">
            <label class="control-label col-xs-4 col-sm-2" for="txt">City:</label>
              <div class="col-xs-8 col-sm-9"> 
                  <input type="text" class="form-control" name="city" required>
                  

              </div>
          </div>
            <div class="form-group" id="field1">
            <label class="control-label col-xs-4 col-sm-2" for="txt">Post code:</label>
              <div class="col-xs-8 col-sm-9"> 
                  <input type="int" class="form-control"  name="post_code" required>
                  

              </div>
          </div>
		  <button class="btn btn-primary pull-right mybtn" id="sub-event"><i class="fa fa-plus"> Add More Venues</i></button>
              </div>

</div>

</div></div>
<div class="col-sm-offset-5 col-xs-offset-2 ">
<button class="btn btn-primary mybtn" type="reset">Save & Close</button>
<button class="btn btn-primary mybtn"  type="reset">Save & continue </button>
</a>
				 </div></form><br>
    </div>
    <div id="menu2" class="tab-pane fade">
     
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
<div class="col-sm-9 col-xs-12" style="border-left:1px solid #eee;padding:0">
                 <!-- <h2>Welcome to IGHALO!<sup>™</sup></h2>-->
                 <div class="board-inner">
            <ul class="nav nav-tabs nav_info" id="myTab">
                <div class="liner"></div>
                <li class="active"><a href="<?php echo e(url('/subevent')); ?>" title="Sub Events">
                   <span class="round-tabs">
                     <i class="fa fa-list"></i>
                   </span>
                 </a>
                    </li>
                  <li><a href="#" title="Schedule">
                      <span class="round-tabs">
                           <i class="fa fa-calendar"></i>
                      </span> </a>
                      </li>

                      <li><a href="#" title="Contacts">
                          <span class="round-tabs">
                               <i class="fa fa-phone"></i>
                          </span>
                      </a></li>
                      <li><a href="#" title="Venue">
                          <span class="round-tabs">
                               <i class="fa fa-paper-plane-o"></i>
                          </span>
                      </a></li>

                      <li><a href="#" title="Conform">
                          <span class="round-tabs">
                               <i class="fa fa-check"></i>
                          </span> </a>
                      </li>
					  <li style="padding:32px">
                               <button class=" btn btn-warning" data-toggle="modal" data-target="#myModalh"><i class="fa fa-bars"></i> Previous Entries</button>
                       </li>

                      </ul></div>
<div class="tab-content tab_details">
    <div class="tab-pane fade in active" id="eventsummary">
      <form class="form-horizontal" style="background:#fff;padding:32px;" method="post" action="subevent">
                  <?php echo e(csrf_field()); ?>

                  <div class="row">
                    <form class="form-horizontal">
    <div class="form-group"  id="field1">
      <label class="control-label col-xs-4 col-sm-2" style="padding-left: 0;padding-right:0" for="txt">SubEvent Name:</label>
      <div class="col-xs-7 col-sm-9">
        <input type="text" class="form-control" id="sub-event" name="subevent_name" value="<?php echo e(old('subevent_name')); ?>" pattern="([A-zÀ-ž\s]){3,25}" required>
        <span class="error" style="color: red;display: none;">SubEvent Name should contain 5-25 characters</span>
      </div>
    </div>
	<div class="form-group mob-none">
                          <label class="control-label col-xs-5 col-sm-2" style="padding-left: 0;padding-right:0" for="txt">Gender :</label>
                              <div class="col-xs-7 col-sm-4">
			<label class="radio-inline containerh">Male<input type="radio" name="privacy" value="public" required><span class="checkmark"></span></label>
			<label class="radio-inline containerh">Female<input type="radio" name="privacy" value="public" required><span class="checkmark"></span></label>
			<label class="radio-inline containerh">Both<input type="radio" name="privacy" value="public" required><span class="checkmark"></span></label>
                                      
                              </div>
                        </div>
	
	 <div class="form-group desk-none tab-none mob-block">
                          <label class="control-label col-xs-5  col-sm-2" style="padding-left: 0;padding-right:0" for="txt">Gender :</label>
                              <div class="col-xs-7 col-sm-9">
                                      <label class="radio-inline containerh">Male<input type="radio" name="privacy" value="public" required><span class="checkmark"></span></label><br>
                                      <label class="radio-inline containerh">Female<input type="radio" name="privacy" value="public" required><span class="checkmark"></span></label><br>
									  <label class="radio-inline containerh">Both<input type="radio" name="privacy" value="public" required><span class="checkmark"></span></label><br>
                              </div>
                        </div>
    <div class="form-group">
      <label class="control-label col-xs-4 col-sm-2" style="padding-left: 0;padding-right:0" for="sel">Swim Style:</label>
      <div class="col-xs-7 col-sm-9">
        <select class="form-control" id="sel" name="swim_styles" required>
          <option value="Any">Any</option>
          <option value="Butterfly">Butterfly</option>
          <option value="BackStroke">BackStroke</option>
          <option value="Any">Breaststroke</option>
          <option value="Butterfly">Combat sidestroke</option>
          <option value="BackStroke">Dog paddle</option>
          <option value="FrontStroke">Eggbeater kick</option>
		  <option value="Any">Flutter kick</option>
          <option value="Butterfly">Free Colchian</option>
          <option value="BackStroke">Freestyle swimming</option>
          <option value="FrontStroke">Front crawl</option>
		  <option value="Any">FrontStroke</option>
          <option value="Butterfly">Georgian swimming</option>
          <option value="BackStroke">Medley swimming</option>
          <option value="FrontStroke">Sidestroke</option>
		  <option value="FrontStroke">Total Immersion</option>
		  <option value="FrontStroke">Treading water</option>
		  <option value="FrontStroke">Trudgen</option>
		  <option value="FrontStroke">Wading</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-xs-4 col-sm-2" style="padding-left: 0;padding-right:0" for="txt">Course(mts):</label>
      <div class="col-xs-4 col-sm-5">
        <input type="text" class="form-control" id="course" name="course" value="" pattern="([0-9]){2,10}" required>
        <span class="course-error" style="color: red;display: none;">Course Should Contain Numeric Charaters</span>
      </div>
	  <div class="col-xs-4 col-sm-4">
        <select class="form-control" id="sel" name="width_dimension">
        <option>M</option>
        <option>KM</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-xs-4 col-sm-2" style="padding-left: 0;padding-right:0" for="txt">Description:</label>
      <div class="col-xs-7 col-sm-9">
        <textarea type="text" class="form-control" id="txt" name="description" required></textarea>
      </div>
    </div>
    <div class="form-group">
                          <label class="control-label col-xs-5 col-sm-2" style="padding-left: 0;padding-right:0" for="txt">Disabled Only?:</label>
                              <div class="col-xs-7 col-sm-4">
								<input type="radio" name="rdo" id="yes" />
								<input type="radio" name="rdo" id="no" checked/>
								<div class="switch radio-inline">
									<label for="yes">Yes</label>
									<label for="no">No</label>
									<span></span>
								</div>
                                  
                              </div>
                        </div>
    
    <hr>
    <h5 style="color:#46A6EA;text-align: center;"><b>Participants</b></h5>
                  <div class="form-group">
                    <label class="control-label col-xs-4 col-sm-2" style="padding-left: 0;padding-right:0" for="txt">Minimum:</label>
                    <div class="col-xs-7 col-sm-9">
                      <input type="text" class="form-control" id="min-part" name="min_participants" value="<?php echo e(old('min_participants')); ?>" pattern="([0-9]){1,3}" required>
                      <span class="min-part-error" style="color: red;display: none;">Minimum Participants should contain 2-3 Numeric values</span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-xs-4 col-sm-2" style="padding-left: 0;padding-right:0" for="txt">Maximum:</label>
                    <div class="col-xs-7 col-sm-9">
                      <input type="text" class="form-control" id="max-part" name="max_participants" value="<?php echo e(old('max_participants')); ?>" pattern="([0-9]){1,3}" required>
                      <span class="max-part-error" style="color: red;display: none">Maximum partcipants should contain 2-3 Numeric values</span>
                      <span class="participant-error" style="color: red;display: none">Minimum partcipants should be less than Maximum participants</span>
                    </div>
                  </div>
                    <hr>
                    <h5 style="color:#46A6EA;text-align: center;"><b>Age</b></h5>
                    <div class="form-group">
                      <label class="control-label col-xs-4 col-sm-2" style="padding-left: 0;padding-right:0" for="txt">Minimum:</label>
                      <div class="col-xs-7 col-sm-9">
                        <input type="text" class="form-control" id="min-age" name="min_age" value="<?php echo e(old('min_age')); ?>" pattern="([0-9]){1,3}" required>
                        <span class="min-age-error" style="color: red;display: none">Minimum Age should contain 1-2 Numeric values</span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-xs-4 col-sm-2" style="padding-left: 0;padding-right:0" for="txt">Maximum:</label>
                      <div class="col-xs-7 col-sm-9">
                        <input type="text" class="form-control" id="max-age" name="max_age" value="<?php echo e(old('max_age')); ?>" pattern="([0-9]){1,3}" required>
                        <span class="max-age-error" style="color: red;display: none">Minimum Age should contain 1-2 Numeric values</span>
                        <span class="age-error" style="color: red;display:none">Minimum Age should be less than Maximum Age</span>
                      </div>
                    </div>
                        <!--  <button class="btn btn-primary pull-right" id="subevent"><i class="fa fa-plus"> Add Another Sub Event</i></button>-->
                      </div>
                     
                  <div class="col-sm-offset-5 col-xs-offset-4">
              <a><button class="btn btn-primary mybtn" type="reset">Back</button></a>
				 <button class="btn btn-primary mybtn">Save</button>
				 <button class="btn btn-primary mybtn">Next</button>
</div><br><br>
                      </form>
                </div>
                    </div>
					</div>
					</div>
					</div>
                  </div>
                </div>
              </div>
			 
        <?php $__env->stopSection(); ?>
		

<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>