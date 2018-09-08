<?php $__env->startSection('content'); ?>

<?php if(session()->has('message.level')): ?>
    <div class="alert alert-<?php echo e(session('message.level')); ?>" style="margin:13px;text-align: center;">
    <?php echo session('message.content'); ?>

    </div>
    <?php endif; ?>
    <!-- event code starts here -->
   <div class="container" id="main-code">
      <h5 class="add_venue"><a href="#"><button class="btn btn-primary" style="background-color:#fff;color:#46A6EA"><i class="fa fa-plus"></i></button></a> Add Event</h5>
      <div class="row" style="border:1px solid #eee;margin-left:0px;margin-right:0px;box-shadow: 0 3px 8px #ddd;">
        <div class="board" id="board_height">
          <div class="board-inner event_iconlist" id="icons_align">
            <ul class="nav nav-tabs nav_info" id="myTab"  style="margin:40px 25%">
                <div class="liner"></div>
                <li  class="active">
                <a href="<?php echo e(url('/addevent')); ?>" class="tab-one" title="Event Summary">
                  <span class="round-tabs">
                    <i class="fa fa-bullhorn"></i>
                  </span>
                 </a></li>
                 <li><a href="#" title="Sub Events">
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

                      </ul></div>
<div class="tab-content tab_details">
    <div class="tab-pane fade in active" id="eventsummary">
      <form class="form-horizontal" style="background:#fff;" method="post" action="<?php echo e(url('addevent')); ?>"  enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

        <div class="row">
          <div class="form-group" id="field1">
            <label class="control-label col-xs-4 col-sm-4" for="txt">Event Name:</label>
              <div class="col-xs-7 col-sm-6"> 
                  <input type="text" class="form-control" id="event-name" name="event_name" onchange="eventname()" value="<?php echo e(old('event_name')); ?>" pattern="([A-zÀ-ž\s]){3,25}" required>
                  <span class="name-error" style="color: red;display: none">Event Name should contain 3-25 characters.</span>

              </div>
          </div>
          <div class="form-group">
              <label class="control-label col-xs-4 col-sm-4" for="txt">Description:</label>
                  <div class="col-xs-7 col-sm-6">
                      <textarea class="form-control" id="txt" name="description" value="<?php echo e(old('description')); ?>" required></textarea>
                  </div>
          </div>
          <div class="form-group">
            <label class="control-label col-xs-4 col-sm-4" for="txt">Privacy:</label>
              <div class="col-xs-8 col-sm-4">
    <label class="radio-inline containerh">Public<input type="radio" name="privacy" value="public" required><span class="checkmark"></span></label>
	<label class="radio-inline containerh">Private<input type="radio" name="privacy" value="Private" required><span class="checkmark"></span></label>
	<label class="radio-inline containerh">Personal<input type="radio" name="privacy" value="Personal" required><span class="checkmark"></span></label>
                    <label class="radio-inline containera"> <button class="btn btn-xs tooltips" data-container="body" data-placement="right" title=" 
                      Public means 'its shown for all users' ,
                      private means 'its shown for selected users' , 
                      Personal means 'its shown for personal invited users"> ? </button> </label>
              </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-4 col-sm-4" for="txt">Short Name:</label>
                  <div class="col-xs-7 col-sm-6">
                    <input type="text" class="form-control" id="short-name" onblur="eventshortname('<?php echo e(url('checkshortname/event')); ?>')" name="short_name" value="<?php echo e(old('short_name')); ?>">
                    <div id="message"></div>
                  </div>
            </div>
            <div class="form-group">
              <label class="control-label col-xs-4 col-sm-4" for="imgUpload">Image:</label>
                <div class="col-xs-7 col-sm-4">
                    <input type="file" class="form-control" id="imgUpload" name="imgUpload"  accept="image/*" required>
                </div>
				<div class="col-xs-7 col-sm-2">
                    <button class="btn btn-default">Change Image</button>
                </div>
              </div>
              </div>
              <center>
              <a><button class="btn btn-primary mybtn" type="reset">Cancel</button></a>
				 <button class="btn btn-primary mybtn">Save and Continue</button>
              </form>
                </div>
                    </div>
                  </div>
                </div>
              </div>
        <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>