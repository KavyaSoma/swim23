<?php $__env->startSection('content'); ?>
<?php if(session()->has('message.level')): ?>
    <div class="alert alert-<?php echo e(session('message.level')); ?>" style="margi-left:13px;">
    <?php echo session('message.content'); ?>

    </div>
    <?php endif; ?>
<!-- instructor preview code starts here -->
   <div class="container" id="main-code">
     <div class="fb-profile">

  <div class="container" style="margin-top:20px;background-color:#fff;padding:10px">
      <div class="col-sm-9">
        <?php $__currentLoopData = $instructors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $instructor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <ul class="nav nav-tabs preview_tabs">
         <li><a href="<?php echo e(url('instructor/'.$instructor->ShortName)); ?>"> <i class="fa fa-info" aria-hidden="true" id="info_fa"></i> Basic Details</a></li>
         <li><a href="<?php echo e(url('instructor/'.$instructor->ShortName.'/instructorevents')); ?>"> <i class="fa fa-calendar" aria-hidden="true" id="info_fa"></i>Events</a></li>
         <li><a href="<?php echo e(url('instructor/'.$instructor->ShortName.'/instructoraddress')); ?>"> <i class="fa fa-map-marker" aria-hidden="true" id="info_fa"></i> Address</a></li>
         <li><a href="<?php echo e(url('instructor/'.$instructor->ShortName.'/instructorqualification')); ?>"> <i class="fa fa-globe" aria-hidden="true" id="info_fa"></i>Qualification</a></li>
         <li><a href="<?php echo e(url('instructor/'.$instructor->ShortName.'/instructorcontact')); ?>"> <i class="fa fa-phone" aria-hidden="true" id="info_fa"></i> Contact</a></li>
            <li class="active"s><a href="<?php echo e(url('instructor/'.$instructor->ShortName.'/bookinstructor')); ?>"> Book Instructor</a></li>
   </ul>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   <div class="tab-content preview_details">
<div id="instructorpreview-events" class="tab-pane fade in active">
 <div class="col-sm-12">
<div class="box box-primary" style="margin-top:10%">
<div class="box-body no-padding">
   <?php echo $calendar->calendar(); ?>

</div>
 </div>
</div>
</div>
</div>
</div>
<?php echo $__env->make('instructorsidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>  <br><br>

     <div class="col-xs-12 col-sm-9" style="margin-left: 14px;margin-top:20px ">     <!-- Modal content-->
                     <form method="post" action="<?php echo e(url('instructor/'.$instructor->ShortName.'/bookinstructor')); ?>">
                      <?php echo e(csrf_field()); ?>

                     <div class="modal-content">
                       <div class="modal-body">
                        <div class="form-group">
                           <label class="control-label col-sm-4" for="txt">Name:</label>
                           <div class="col-sm-6">
                            <input type="hidden" name="instructorid" value="<?php echo e($instructorid); ?>">
                           <input type="text" class="form-control" id="txt" name="name">
                           </div>
                         </div><br><br> <br>
                         <div class="form-group">
                           <label class="control-label col-sm-4" for="txt">Venue:</label>
                           <div class="col-sm-6">
                           <input type="text" class="form-control" id="txt" name="venue">
                           </div>
                         </div><br><br>
                         <div class="form-group">
                           <label class="control-label col-sm-4" for="txt">Location:</label>
                           <div class="col-sm-6">
                           <input type="text" class="form-control" id="txt" name="location">
                           </div>
                         </div><br><br> 
                         <div class="form-group">
                           <label class="control-label col-sm-4" for="txt">Start Date:</label>
                           <div class="col-sm-6">
                           <input type="date" class="form-control" id="txt" name="start_date">
                           </div>
                         </div><br><br> 
                         <div class="form-group">
                           <label class="control-label col-sm-4" for="txt">End Date:</label>
                           <div class="col-sm-6">
                           <input type="date" class="form-control" id="txt" name="end_date">
                           </div>
                         </div><br><br> 
                         <div class="form-group">
                           <label class="control-label col-xs-4 col-sm-4" for="txt">Class Prefered:</label>
                             <div class="col-xs-8 col-sm-6">
                               <label class="radio-inline"><input type="radio" name="prefered_class">Yes</label>
                                 <label class="radio-inline"><input type="radio" name="prefered_class">No</label>
                            </div>
                          </div><br><br> 
                       </div>
                       <div class="modal-footer">
                         <center>
                         <button type="reset" class="btn btn-primary" >Reset</button>
                       <button type="submit" class="btn btn-primary">Submit</button>
                     </center>
                     </div>
                     </div>
                     </div>
                   </div>
                 </div>
               </form>
</div>
</div>
</div>
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.calendarmain', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>