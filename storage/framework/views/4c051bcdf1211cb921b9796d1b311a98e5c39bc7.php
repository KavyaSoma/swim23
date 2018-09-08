<?php $__env->startSection('content'); ?>

     <div class="container mycntn">
   <ol class="breadcrumb" style="border:1px solid #46A6EA;color:#46A6EA;">
  <li class="breadcrumb-item"><a style="color:#777;" href="<?php echo e(url('/')); ?>">Home</a></li>
  <li class="breadcrumb-item"><a style="color:#777;" href="<?php echo e(url('/addvenue/'.$venue_id)); ?>">Add Venue</a></li>
  <li class="breadcrumb-item"><a style="color:#777;" href="<?php echo e(url('/venuepool/'.$venue_id)); ?>">Add Pool</a></li>
  <li class="breadcrumb-item"><a style="color:#777;" href="<?php echo e(url('/venuecontact/'.$venue_id)); ?>">Add Contact</a></li>
    <li class="breadcrumb-item"><a style="color:#777;" href="<?php echo e(url('/venuetimings/'.$venue_id)); ?>">Add Venue Timings</a></li>

  <li class="breadcrumb-item"><a style="color:#777;" href="<?php echo e(url('/venuesociallinks/'.$venue_id)); ?>">Venue Social links</a></li>
    <li class="breadcrumb-item">Confirm Venue</li>

 </ol>
 <?php if(session()->has('message.level')): ?>
    <div class="alert alert-<?php echo e(session('message.level')); ?>" style="margin-left:13px;text-align: center;">
     <?php echo session('message.content'); ?>

     </div>
     <?php endif; ?>      <div class="row">
             <div class="col-xs-12 col-sm-3 kin_photo">
     <div class="fb-profile" style="margin-top:8%;">
 <img alt="Profile image" class="img-rounded profile_image" src="<?php echo e($image[0]->ImagePath); ?>">
     <div class="fb-profile-text text-center">
        
         <!-- <p class="text-center"><i class="fa fa-map-marker" style="color:#46A6EA"></i> Location:UK</p>-->
</div>
</div>
</div>
<div class="col-sm-8 col-xs-12">
                 <!-- <h2>Welcome to IGHALO!<sup>™</sup></h2>-->
                 <div class="board-inner">
                 <!-- <h2>Welcome to IGHALO!<sup>™</sup></h2>-->
                 <div class="board-inner">
                 <!-- <h2>Welcome to IGHALO!<sup>™</sup></h2>-->
                 <div class="board-inner">
                 <ul class="nav nav-tabs nav_info" id="myTab">
                 <div class="liner"></div>
                  <li>
                  <a href="" title="Venue Summary">
                   <span class="round-tabs">
                           <i class="fa fa-list"></i>
                   </span>
               </a></li>

               <li><a href=""  title="Pool Information">
                  <span class="round-tabs">
                      <i class="fa fa-info"></i>
                  </span>
        </a>
              </li>
              <li><a href="" title="Address & Contact">
                  <span class="round-tabs">
                       <i class="fa fa-phone"></i>
                  </span> </a>
                  </li>

                  <li><a href="" title="Open hours & Facilities">
                      <span class="round-tabs">
                           <i class="fa fa-clock-o"></i>
                      </span>
                  </a></li>
                  <li><a href="" title="Web site & Social Links">
                      <span class="round-tabs">
                           <i class="fa fa-share-alt"></i>
                      </span>
                  </a></li>

                  <li  class="active"><a href="" title="Confirm Venue">
                      <span class="round-tabs">
                           <i class="fa fa-check"></i>
                      </span> </a>
                  </li>

                  </ul></div>

    <div class="tab-pane fade in active" style="padding:30px;" id="venueconfirm">

<div class="table-responsive table-bordered">
  <table class="table">
    <thead>
    <tr>
      <th>Pool Name</th>
      <th>Pool Area</th>
      <th>Length</th>
      <th>Width</th>
      <th>Deep End</th>
      <th>Shallow End</th>
    </tr>
  </thead>
   <?php $__currentLoopData = $pool_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pool): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($pool->PoolName); ?></td>
      <td><?php echo e($pool->Area); ?></td>
      <td><?php echo e($pool->Length); ?></td>
      <td><?php echo e($pool->Width); ?></td>
      <td><?php echo e($pool->MaximumDepth); ?></td>
      <td><?php echo e($pool->MinimumDepth); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <tr>

  </table>
</div>
<div class="row" style="border: 1px solid #cdd1d1;margin-left: 0;margin-right: 0;margin-top: 6px; border-radius:5px">
<div class="col-sm-6 col-xs-6">
<h5 style="color:#46A6EA"><b>Venue Name</b></h5>
<?php $__currentLoopData = $facilities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $facility): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<p><?php echo e($facility->VenueName); ?></p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<h5 style="color:#46A6EA"><b>Pool Description</b></h5>
<?php $__currentLoopData = $pool_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pool): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<p><?php echo e($pool->SpecialRequirements); ?></p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<h5 style="color:#46A6EA"><b>Opening Hours</b></h5>
<?php if(count($timings)>0): ?>

<?php $__currentLoopData = $timings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $timing): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<p><?php echo e($timing->Day); ?>(<?php echo e($timing->OpeningHours); ?> to <?php echo e($timing->ClosingHours); ?>)<br>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <?php endif; ?>
</div>
<div class="col-sm-6 col-xs-6">
<h5 style="color:#46A6EA"><b>Address</b></h5>
<?php $__currentLoopData = $venue_address; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $address): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<p><?php echo e($address->AddressLine1); ?><br>Post Code: <?php echo e($address->PostCode); ?><br><?php echo e($address->City); ?>,<?php echo e($address->County); ?>,<?php echo e($address->Country); ?></p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<h5 style="color:#46A6EA"><b>Contact</b></h5>
<?php $__currentLoopData = $venue_contact; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<p>Mobile:<?php echo e($contact->Phone); ?><br>Email:<?php echo e($contact->Email); ?></p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php if(count($facilities)>0): ?>
<?php $__currentLoopData = $facilities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $facility): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<h5 style="color:#46A6EA"><b>Facilities</b></h5>
<?php if($facility->VisitingGallery == "yes"): ?>
<img src="<?php echo e(url('public/images/visitinggallery.png')); ?>" title="visiting gallery" height="30px" width="30px">
<?php endif; ?>
<?php if($facility->Shower == "yes"): ?>
<img src="<?php echo e(url('public/images/shower.png')); ?>" title="shower" height="30px" width="30px">
<?php endif; ?>
<?php if($facility->Gym == "yes"): ?>
<img src="<?php echo e(url('public/images/gym.jpg')); ?>" title="gym" height="30px" width="30px">
<?php endif; ?>
<?php if($facility->Teachers == "yes"): ?>
<img src="<?php echo e(url('public/images/instructors.png')); ?>" title="instructors" height="30px" width="30px">
<?php endif; ?>
<?php if($facility->ParaSwimmingFacilities == "yes"): ?>
  <img src="<?php echo e(url('public/images/paraswimming.jpg')); ?>" title="paraswimming" height="30px" width="30px">
<?php endif; ?>
<?php if($facility->LadiesOnlySwimming == "yes"): ?>
<img src="<?php echo e(url('public/images/ladiesonlyswimmtime.png')); ?>" title="LadiesOnlySwimTimes" height="30px" width="30px">
<?php endif; ?>
<?php if($facility-> Toilets == "yes"): ?>
<img src="<?php echo e(url('public/images/toilets.jpg')); ?>" title="toilets" height="30px" width="30px">
<?php endif; ?>
<?php if($facility->Diving == "yes"): ?>
<img src="<?php echo e(url('public/images/diving.png')); ?>" title="diving" height="30px" width="30px">
<?php endif; ?>
<?php if($facility->PrivateHire == "yes"): ?>
<img src="<?php echo e(url('public/images/privatehire.png')); ?>" title="private hire" height="30px" width="30px">

<?php endif; ?>
<?php if($facility->Parking == "yes"): ?>
  <img src="<?php echo e(url('public/images/parking.jpg')); ?>" title="parking" height="30px" width="30px">
<?php endif; ?>
<?php if($facility->SwimForKids == "yes"): ?>
<img src="<?php echo e(url('public/images/kidszone.png')); ?>" title="kids zone" height="30px" width="30px">
<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
</div>

</div>
<br>
<form method="post" action="<?php echo e(url('confirmvenue/'.$venue_id)); ?>">
  <?php echo e(csrf_field()); ?>


  <div class="col-sm-offset-4 col-xs-offset-3">
              <a href="<?php echo e(url('venuesociallinks/'.$venue_id)); ?>" class="btn btn-primary mybtn" type="reset">Back</a>
				 <button class="btn btn-primary mybtn">Submit</button>
			
</div></form>

   </div>
</div>
</div>
</div>

</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>