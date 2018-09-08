<div class="col-xs-12 col-sm-3">
  <?php if(count($venues)>0): ?>
  <?php if($image[0]->ImagePath == 'NA'): ?>
       <img style="width:100%" src="<?php echo e(url('public/images/venue.jpg')); ?>"/>
  <?php else: ?>
      <img style="width:100%" src="<?php echo e($image[0]->ImagePath); ?>"/>
  <?php endif; ?>
      <h5 style="color:#46A6EA">Venue Name</h5>
      <p><?php echo e($venues[0]->VenueName); ?></P>
        <?php if(count($address)>0): ?>
      <i class="fa fa-map-marker" style="color:#46A6EA"></i> <?php echo e($address[0]->Country); ?>

      <?php endif; ?>
      <?php if(count($timings)>0): ?>
      <h5 style="color:#46A6EA">Opening Hours</h5>
      <?php $__currentLoopData = $timings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $timing): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <p><?php echo e($timing->Day); ?>(<?php echo e($timing->OpeningHours); ?> to <?php echo e($timing->ClosingHours); ?>)<br>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
      </p>

   <br>
	<div class="col-md-12 footer-social-icons">
<a href="https://twitter.com/<?php echo e($venues[0]->Twitter); ?>" class="myzommimg" target="blank" style="background:#76a9eb;"><i class="fa fa-twitter myzommimg" aria-hidden="true"></i></a>&nbsp;&nbsp;
<a href="https://www.facebook.com/<?php echo e($venues[0]->Facebook); ?>" class="myzommimg" target="blank" style="background:#23527c;"><i class="fa fa-facebook myzommimg" aria-hidden="true"></i></a>&nbsp;&nbsp;
<a href="#" class="myzommimg" target="blank" style="background:#f51c0b;"><i class="fa fa-google-plus myzommimg" aria-hidden="true"></i></a>&nbsp;&nbsp;
</div>
</div>
    <?php endif; ?>
