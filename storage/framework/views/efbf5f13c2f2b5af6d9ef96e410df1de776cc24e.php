<?php $__env->startSection('content'); ?>

<?php if(session()->has('message.level')): ?>
    <div class="alert alert-<?php echo e(session('message.level')); ?>" style="margin:13px;text-align: center;">
    <?php echo session('message.content'); ?>

    </div>
    <?php endif; ?>
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
  <li ><a data-toggle="tab" class="" href="#mhome">Basic Details</a></li>
    <li class="active " style="margin-bottom:2px;"><a href=""> WHEN</a></li>
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

    <div id="home" class="tab-pane fade in active">
      <div class="container"><!--id="main-code"-->
     <div class="col-xs-12 col-sm-3 kin_photo" style="border-right:1px solid #eee">
     <div class="fb-profile" style="margin-top:13%">
      <?php if(count($event_image)>0): ?>
 <img class="thumbnail profile_image" src="<?php echo e($event_image[0]->ImagePath); ?>" alt="Profile image">
 <?php else: ?>
 <img class="thumbnail profile_image" src="<?php echo e(url('public/images/event.jpg')); ?>" alt="Profile image">
 <?php endif; ?>

</div>
</div>
<form class="form-horizontal kin_infor" style="padding:30px;" method="post" action="<?php echo e(url('eventtime/'.$event_id)); ?>">
  <?php echo e(csrf_field()); ?>

 <div class="col-xs-12 col-sm-9 kin_info" >
   
<div>
  <?php if(count($event_time)>0): ?>
  <?php $__currentLoopData = $event_time; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $time): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="row">
            <div class="form-group">
                <label class="control-label col-xs-12 col-sm-3" for="txt">Start Date & Time:</label>
                  <div class="col-xs-6 col-sm-4">
                    <div class="input-group">
                        <input class="form-control" id="tme" name="start_date" type="date" value="<?php echo e($time->StartDate); ?>">
                        <span class="input-group-addon"><i class="fa fa-calendar-o"></i></span>
                    </div>
                  </div>
          <div class="col-xs-6 col-sm-4">
                    <div class="input-group">
                        <input class="form-control" id="tme" name="start_time" type="time" value="<?php echo e($time->StartTime); ?>">
                        <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                    </div>
                    
                  </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-12 col-sm-3" for="txt">End Date & Time:</label>
                  <div class="col-xs-6 col-sm-4">
                    <div class="input-group">
                        <input class="form-control" id="tme" name="end_date" type="date" value="<?php echo e($time->EndDate); ?>">
                        <span class="input-group-addon"><i class="fa fa-calendar-o"></i></span>
                    </div>
                  </div>
          <div class="col-xs-6 col-sm-4">
                    <div class="input-group">
                        <input class="form-control" id="tme" name="end_time" type="time" value="<?php echo e($time->EndTime); ?>">
                        <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                    </div>
                    
                  </div>
            </div>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php else: ?>
              <div class="row">
            <div class="form-group">
                <label class="control-label col-xs-12 col-sm-3" for="txt">Start Date & Time:</label>
                  <div class="col-xs-6 col-sm-4">
                    <div class="input-group">
                        <input class="form-control" id="tme" name="start_date" type="date">
                        <span class="input-group-addon"><i class="fa fa-calendar-o"></i></span>
                    </div>
                  </div>
          <div class="col-xs-6 col-sm-4">
                    <div class="input-group">
                        <input class="form-control" id="tme" name="start_time" type="time">
                        <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                    </div>
                    
                  </div>
            </div>
            <div class="form-group">
                <label class="control-label col-xs-12 col-sm-3" for="txt">End Date & Time:</label>
                  <div class="col-xs-6 col-sm-4">
                    <div class="input-group">
                        <input class="form-control" id="tme" name="end_date" type="date">
                        <span class="input-group-addon"><i class="fa fa-calendar-o"></i></span>
                    </div>
                  </div>
          <div class="col-xs-6 col-sm-4">
                    <div class="input-group">
                        <input class="form-control" id="tme" name="end_time" type="time">
                        <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                    </div>
                    
                  </div>
            </div>
              </div>
              <?php endif; ?>
  
</div>

</div><div class="col-sm-offset-5 col-xs-offset-4 ">
  <a href="<?php echo e(url('addevent/'.$event_id)); ?>" class="btn btn-primary mybtn">Back</a>
  <button class="btn btn-primary mybtn">Save</button>
  <?php if(count($event_time)>0): ?>
  <a href="<?php echo e(url('/venue-event/'.$event_id)); ?>" class="btn btn-primary mybtn" type="reset">Next</a>
  <?php else: ?>
  <a href="<?php echo e(url('/venue-event/'.$event_id)); ?>" class="btn btn-primary mybtn disabled" type="reset">Next</a>
  <?php endif; ?>
         </div></form></div>
<br>
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