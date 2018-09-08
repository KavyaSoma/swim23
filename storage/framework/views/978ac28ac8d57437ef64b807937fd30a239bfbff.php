<?php $__env->startSection('content'); ?>

<?php if(session()->has('message.level')): ?>
    <div class="alert alert-<?php echo e(session('message.level')); ?>" style="margin:13px;text-align: center;">
    <?php echo session('message.content'); ?>

    </div>
    <?php endif; ?>
    <!-- event code starts here -->
     <div class="container" id="main-code">
      <h5 class="add_venue" style="padding:10px;"><span class="" style="font-size:17px;" ><i class="fa fa-calendar"> </i> </span> Add Event</h5>
      <div class="row" style="border:1px solid #eee;margin-left:0px;margin-right:0px;box-shadow: 0 3px 8px #ddd;">
        <div class="board" id="board_height">
          <div class="board-inner event_iconlist" id="icons_align">
            <ul class="nav nav-tabs nav_info" id="myTab"  style="margin:40px 25%">
                <div class="liner"></div>
                 <li >
                <a href="<?php echo e(url('/addevent')); ?>" class="tab-one" title="Event Summary">
                  <span class="round-tabs">
                    <i class="fa fa-bullhorn"></i>
                  </span>
                 </a></li>
                 <li class="active"><a href="<?php echo e(url('/subevent')); ?>" title="Sub Events">
                   <span class="round-tabs">
                     <i class="fa fa-list"></i>
                   </span>
                 </a>
                    </li>
                  <li><a href="<?php echo e(url('/schedule-event/'.$event_id)); ?>" title="Schedule">
                      <span class="round-tabs">
                           <i class="fa fa-calendar"></i>
                      </span> </a>
                      </li>

                      <li><a href="<?php echo e(url('/contact-event')); ?>" title="Contacts">
                          <span class="round-tabs">
                               <i class="fa fa-phone"></i>
                          </span>
                      </a></li>
                      <li><a href="<?php echo e(url('/venue-event')); ?>" title="Venue">
                          <span class="round-tabs">
                               <i class="fa fa-paper-plane-o"></i>
                          </span>
                      </a></li>

                      <li><a href="<?php echo e(url('/confirm-event')); ?>" title="Conform">
                          <span class="round-tabs">
                               <i class="fa fa-check"></i>
                          </span> </a>
                      </li>


                      </ul></div>
<div class="tab-content tab_details">
  
              <div class="tab-pane fade in active" id="subevents">
                <form class="form-horizontal" style="background:#fff;" method="post" action="<?php echo e(url('/subevent/'.$event_id)); ?>">
                  <?php echo e(csrf_field()); ?>

                  <div class="row">
                    <form class="form-horizontal">
    <div class="form-group"  id="field1">
      <label class="control-label col-xs-4 col-sm-4" for="txt">SubEvent Name:</label>
      <div class="col-xs-7 col-sm-6">
        <input type="text" class="form-control" id="sub-event" name="subevent_name" value="<?php echo e(old('subevent_name')); ?>" pattern="([A-zÀ-ž\s]){3,25}" required>
        <span class="error" style="color: red;display: none;">SubEvent Name should contain 5-25 characters</span>
      </div>
    </div>
	<div class="form-group mob-none">
                          <label class="control-label col-xs-5 col-sm-offset-2 col-sm-2" for="txt">Gender :</label>
                              <div class="col-xs-7 col-sm-4">
			<label class="radio-inline containerh">Male<input type="radio" name="privacy" value="public" required><span class="checkmark"></span></label>
			<label class="radio-inline containerh">Female<input type="radio" name="privacy" value="public" required><span class="checkmark"></span></label>
			<label class="radio-inline containerh">Both<input type="radio" name="privacy" value="public" required><span class="checkmark"></span></label>
                                      
                              </div>
                        </div>
	
	 <div class="form-group desk-none tab-none mob-block">
                          <label class="control-label col-xs-5 col-sm-offset-2 col-sm-2" for="txt">Gender :</label>
                              <div class="col-xs-7 col-sm-4">
                                      <label class="radio-inline containerh">Male<input type="radio" name="privacy" value="public" required><span class="checkmark"></span></label><br>
                                      <label class="radio-inline containerh">Female<input type="radio" name="privacy" value="public" required><span class="checkmark"></span></label><br>
									  <label class="radio-inline containerh">Both<input type="radio" name="privacy" value="public" required><span class="checkmark"></span></label><br>
                              </div>
                        </div>
    <div class="form-group">
      <label class="control-label col-xs-4 col-sm-4" for="sel">Swim Style:</label>
      <div class="col-xs-7 col-sm-6">
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
      <label class="control-label col-xs-4 col-sm-4" for="txt">Course(mts):</label>
      <div class="col-xs-4 col-sm-4">
        <input type="text" class="form-control" id="course" name="course" value="<?php echo e(old('course')); ?>" pattern="([0-9]){2,10}" required>
        <span class="course-error" style="color: red;display: none;">Course Should Contain Numeric Charaters</span>
      </div>
	  <div class="col-xs-4 col-sm-2">
        <select class="form-control" id="sel" name="width_dimension">
        <option>M</option>
        <option>KM</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-xs-4 col-sm-4" for="txt">Description:</label>
      <div class="col-xs-7 col-sm-6">
        <textarea type="text" class="form-control" id="txt" name="description" required><?php echo e(old('description')); ?></textarea>
      </div>
    </div>
    <div class="form-group">
                          <label class="control-label col-xs-5 col-sm-offset-2 col-sm-2" for="txt">Disabled Only?:</label>
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
    <?php if($privacy == "personal"): ?>
   <!-- when privacy is set as personal participants block should be displayed-->
    <?php else: ?>
    <hr>
    <h5 style="color:#46A6EA;text-align: center;width: 57%;"><b>Participants</b></h5>
                  <div class="form-group">
                    <label class="control-label col-xs-4 col-sm-4" for="txt">Minimum:</label>
                    <div class="col-xs-7 col-sm-6">
                      <input type="text" class="form-control" id="min-part" name="min_participants" value="<?php echo e(old('min_participants')); ?>" pattern="([0-9]){1,3}" required>
                      <span class="min-part-error" style="color: red;display: none;">Minimum Participants should contain 2-3 Numeric values</span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-xs-4 col-sm-4" for="txt">Maximum:</label>
                    <div class="col-xs-7 col-sm-6">
                      <input type="text" class="form-control" id="max-part" name="max_participants" value="<?php echo e(old('max_participants')); ?>" pattern="([0-9]){1,3}" required>
                      <span class="max-part-error" style="color: red;display: none">Maximum partcipants should contain 2-3 Numeric values</span>
                      <span class="participant-error" style="color: red;display: none">Minimum partcipants should be less than Maximum participants</span>
                    </div>
                  </div>
                    <hr>
                    <h5 style="color:#46A6EA;text-align: center;width: 57%;"><b>Age</b></h5>
                    <div class="form-group">
                      <label class="control-label col-xs-4 col-sm-4" for="txt">Minimum:</label>
                      <div class="col-xs-7 col-sm-6">
                        <input type="text" class="form-control" id="min-age" name="min_age" value="<?php echo e(old('min_age')); ?>" pattern="([0-9]){1,3}" required>
                        <span class="min-age-error" style="color: red;display: none">Minimum Age should contain 1-2 Numeric values</span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-xs-4 col-sm-4" for="txt">Maximum:</label>
                      <div class="col-xs-7 col-sm-6">
                        <input type="text" class="form-control" id="max-age" name="max_age" value="<?php echo e(old('max_age')); ?>" pattern="([0-9]){1,3}" required>
                        <span class="max-age-error" style="color: red;display: none">Minimum Age should contain 1-2 Numeric values</span>
                        <span class="age-error" style="color: red;display:none">Minimum Age should be less than Maximum Age</span>
                      </div>
                    </div>
                        <!--  <button class="btn btn-primary pull-right" id="subevent"><i class="fa fa-plus"> Add Another Sub Event</i></button>-->
                      </div><br>
                      <?php endif; ?>
                  <center>
                          <button class="btn btn-primary mybtn" >Save</button>
                        </center>
                      </form>
                      </div>
                      
                       

                    </div>
                  </div>
                </div>
                <div id="old_events">
                
                </div>
              </div>
            </form>
          </div>
<script>
$(document).ready(function() {
console.log('<?php echo e(url('getoldevents/subevents/'.$event_id)); ?>');
$.ajax({
    url: '<?php echo e(url('getoldevents/subevents/'.$event_id)); ?>',
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
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>