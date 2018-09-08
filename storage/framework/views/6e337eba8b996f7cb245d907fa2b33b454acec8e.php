<?php $__env->startSection('content'); ?>
<?php if(session()->has('message.level')): ?>
    <div class="alert alert-<?php echo e(session('message.level')); ?>" style="margi-left:13px;">
    <?php echo session('message.content'); ?>

    </div>
    <?php endif; ?>
    <div class="container">

        <div class="container">
        <h5 class="add_instructor"><a href="#"><button class="btn btn-primary" style="background-color:#fff;color:#46A6EA"><i class="fa fa-plus"></i></button></a> Add Instructor</h5>
        <div class="row" style="border:1px solid #eee">
          <div class="board">
          <div class="board-inner instructor_tabs">
              <center><ul class="nav nav-tabs nav_info" id="myTab">
                  <div class="liner"></div>
                    <li>
                      <a href="#" class="tab-one" title="Basic Details">
                        <span class="round-tabs">
                          <i class="fa fa-info"></i>
                        </span>
                       </a>
                     </li>
                     <li>
                       <a href="#" title="Timings">
                          <span class="round-tabs">
                            <i class="fa fa-clock-o"></i>
                         </span>
                      </a>
                     </li>
                       <li>
                         <a href="#" title="Address">
                            <span class="round-tabs">
                              <i class="fa fa-map-marker"></i>
                           </span>
                        </a>
                       </li>
                       <li>
                         <a href="#" title="Experience">
                            <span class="round-tabs">
                              <i class="fa fa-globe"></i>
                           </span>
                          </a>
                        </li>
                        <li class="active">
                          <a href="#" title="Contact">
                            <span class="round-tabs">
                              <i class="fa fa-phone"></i>
                            </span>
                         </a>
                        </li>
                      </ul></center>
                        </div>
                        
          <div class="tab-pane fade in active" id="instrutor_contact">
      <form class="form-horizontal" method="post" action="<?php echo e(url('instructorcontact/'.$id)); ?>" style="background:#fff;">
        <?php echo e(csrf_field()); ?>

       <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-sm-12">
          <div class="form-group">
   
<label class="control-label col-sm-4" for="email">Email:</label>
<div class="col-sm-6">
  <input type="email" class="form-control" id="email" value="" name="Email" onblur="shortName('<?php echo e(url('checkmail')); ?>')" required>
  <div id="message"></div>
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-4" for="txt">Phone 1:</label>
<div class="col-sm-6">
  <input type="text" class="form-control" id="phone1" value="<?php echo e($user->DayTimePhone); ?>"  pattern="([0-9]){10}" name="DayTimePhone" required > 
  <span id="message1" style="color: red;display: none">Phone Should contain Numeric digits</span>
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-4" for="txt">Phone 2:</label>
<div class="col-sm-6">
<input type="text" class="form-control" id="phone2" value="<?php echo e($user->EveningPhone); ?>" name="EveningPhone">
<span id="message2" style="color: red;display: none">Phone Should contain Numeric digits</span>
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-4" for="txt">Swimmiq contact:</label>
<div class="col-sm-6">
<input type="text" class="form-control" id="display" value="" name="ShortName" readonly>
</div>
</div>

<center>
   <button type="submit" class="btn btn-primary" id="instructor-contact">Submit</button>
 <br><br>
</div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</form>

</div>
</center>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>