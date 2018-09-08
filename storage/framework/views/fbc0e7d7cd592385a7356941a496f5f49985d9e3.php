<?php $__currentLoopData = $instructors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $instructor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-sm-3">
  <?php if($instructor->Image == 'NA'): ?>
  
 <img style="width:100%" class="img-rounded profile_image" src="http://localhost/swim/public/images/venue.jpg"/>

  <?php else: ?>
  
  <img  style="width:100%" class="img-rounded profile_image" src="http://localhost/swim/public/images/venue.jpg" alt="Profile image"/>

<?php endif; ?>
  <div class="row">
      
    <div class="col-sm-12 col-xs-12" style="margin-top:5%;">
		<p> Qualification: <b>Frent Strock Swiming</b></p>
       <p>Experience<a href="#"> <b style="color:#000"> <?php echo e($instructor->Experience); ?> yrs</b></a></p>
       
	   
    </div>
    <div class="col-sm-12 col-xs-12" style="color:#46A6EA;">
      
    </div>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       <br><br>


 </div>


</div>