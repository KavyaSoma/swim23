<?php $__env->startSection('content'); ?>
<div class="row1">
<?php if(session()->has('message.level')): ?>
    <div class="alert alert-<?php echo e(session('message.level')); ?>">
    <?php echo session('message.content'); ?>

    </div>
<?php endif; ?>
    <!-- venue info code starts here -->
<div class="container" id="main-code">
  <div class="row" id="venuepreview_tabs">
    <div class="col-sm-8">
      <?php if(count($venues)>0): ?>
        <ul class="nav nav-tabs preview_tabs mob-none">
          <li><a  href="<?php echo e(url('venue/'.$venues[0]->ShortName)); ?>"> <i class="fa fa-list" aria-hidden="true" id="info_fa"></i> Basic Details</a></li>
          <li  class="active"><a href="<?php echo e(url('venue/'.$venues[0]->ShortName.'/venuepool')); ?>"> <i class="fa fa-info" aria-hidden="true" id="info_fa"></i> Pool Details</a></li>
          <li><a href="<?php echo e(url('venue/'.$venues[0]->ShortName.'/venueevents')); ?>"> <i class="fa fa-calendar" aria-hidden="true" id="info_fa"></i>Events</a></li>
          <li><a  href="<?php echo e(url('venue/'.$venues[0]->ShortName.'/venueaddress')); ?>"> <i class="fa fa-map-marker" aria-hidden="true" id="info_fa"></i> Address</a></li>
          <li><a href="<?php echo e(url('venue/'.$venues[0]->ShortName.'/venuecontact')); ?>"> <i class="fa fa-phone" aria-hidden="true" id="info_fa"></i> Contact</a></li>
        </ul>
      <ul class="nav nav-tabs preview_tabs desk-none mob-block tab-none">
          <li><a  href="<?php echo e(url('venue/'.$venues[0]->ShortName)); ?>"> <i class="fa fa-list" aria-hidden="true" id="info_fa"></i></a></li>
          <li class="active"><a href="<?php echo e(url('venue/'.$venues[0]->ShortName.'/venuepool')); ?>"> <i class="fa fa-info" aria-hidden="true" id="info_fa"></i></a></li>
          <li><a href="<?php echo e(url('venue/'.$venues[0]->ShortName.'/venueevents')); ?>"> <i class="fa fa-calendar" aria-hidden="true" id="info_fa"></i></a></li>
          <li><a  href="<?php echo e(url('venue/'.$venues[0]->ShortName.'/venueaddress')); ?>"> <i class="fa fa-map-marker" aria-hidden="true" id="info_fa"></i></a></li>
          <li><a href="<?php echo e(url('venue/'.$venues[0]->ShortName.'/venuecontact')); ?>"> <i class="fa fa-phone" aria-hidden="true" id="info_fa"></i></a></li>
        </ul>
      <?php endif; ?>
      <div class="tab-content preview_details">
        <div id="venuepreview-pool" class="tab-pane fade in active">
         <div class="col-sm-12"   style="background:#fff;border:1px solid #ddd;margin-top:30px">
           <div class="row" style="margin-top:20px;">
            <?php $__currentLoopData = $pools; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pool): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="panel panel-default  col-md-12">
                             <div class="panel-heading" style="margin-left:-15px;margin-right:-15px;background:#46A6EA;color:#fff"  role="tab">
                                 <h3 class="panel-title">
                                  <?php echo e($pool->PoolName); ?></a>
                                 </h3>
                             </div>
                            <div class="panel-body">
                               <div class="col xs-12 col-sm-12 col-md-12 col-lg-12">
                                 <div>
                                   <h4 class="field_names">Area</h4>
                                 </div>
                                   <p><?php echo e($pool->Area); ?></p>
                                   <div>
                                     <h4 class="field_names">Length</h4>
                                   </div>
                                     <p><?php echo e($pool->Length); ?></p>
                                 <div>
                                   <h4 class="field_names">Special Reuirements</h4>
                                 </div>
                                   <p><?php echo e($pool->SpecialRequirements); ?></p>
                                 </div>
                            </div>
                         </div>
                         <!-- End fluid width widget -->
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             </div>
             <?php if(count($pools)>0): ?>
             <center><ul class="pagination">
<?php echo e($pools->links()); ?>

 </ul></center>
 <?php endif; ?>
             </div>

     </div>
         </div>
    <br><br>
    </div>
    <?php echo $__env->make('venuesidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
  </div>
</div>
<!-- venue info code ends here -->
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>