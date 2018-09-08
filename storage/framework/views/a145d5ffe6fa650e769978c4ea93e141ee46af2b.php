<?php $__currentLoopData = $instructors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $instructor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-sm-3">
  <?php if($instructor->Image == 'NA'): ?>
  <div class="row">
 <img align="left" class="image-ins thumbnail" style="margin-top:1%" src="<?php echo e(url('public/images/instructor.jpg')); ?>"/></div>
 <div class="row">
  <?php else: ?>
  <div class="row">
  <img align="left" class="image-ins thumbnail" style="margin-top:1%" src="<?php echo e($instructor->Image); ?>" alt="Profile image"/>
</div>
<?php endif; ?>
  <div class="row">
 <a href="javascript:;">
    <div class="col-sm-1 col-xs-6">

      <?php if(count($favourites)>0): ?>
    <div class="col-sm-1 col-xs-6">
   <a href="<?php echo e(url('instructor/'.$instructor->ShortName.'/unfollow')); ?>"><i class="fa fa-heart" title="favourite" style="color:#ff6600;font-size:20px"></i></a>
    </div>
      <?php else: ?>
      <div class="col-sm-1 col-xs-6">
   <a href="<?php echo e(url('instructor/'.$instructor->ShortName.'/following')); ?>"><i class="fa fa-heart-o" title="favourite" style="color:#ff6600;font-size:20px"></i></a>
    </div>
    <?php endif; ?>
    </div>
    </a>
      <div class="col-sm-1 col-xs-6" style="position: relative;left: 15px;">
     <a href="<?php echo e(url('sendmessage')); ?>"><i class="fa fa-envelope" title="message" style="color:#46A6EA;font-size:20px"></i></a>
   </div><br>
    <div class="col-sm-12 col-xs-12">
      <h5><?php echo e($instructor->ShortName); ?></h5>
      <div> <p>Experience<a href="#"> <span class="badge"> <?php echo e($instructor->Experience); ?> yrs</span></a></p></div>
    </div>
    <div class="col-sm-12 col-xs-12" style="color:#46A6EA;">
      <h5><?php echo e($instructor->UserType); ?></h5>
    </div>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       <br><br>


 </div>
<div class="col-xs-6 col-sm-3">
  <!-- Modal -->
</div>
<div class="modal fade" id="myModal" role="dialog">
                   <div class="modal-dialog">
                     <!-- Modal content-->
                     <div class="modal-content">
                       <div class="modal-body">
                        <div class="form-group">
                           <label class="control-label col-sm-4" for="txt">Name:</label>
                           <div class="col-sm-6">
                           <input type="text" class="form-control" id="txt" name="txt">
                           </div>
                         </div><br><br>
                         <div class="form-group">
                           <label class="control-label col-sm-4" for="txt">Venue:</label>
                           <div class="col-sm-6">
                           <input type="text" class="form-control" id="txt" name="txt">
                           </div>
                         </div><br>
                         <div class="form-group">
                           <label class="control-label col-sm-4" for="txt">Location:</label>
                           <div class="col-sm-6">
                           <input type="text" class="form-control" id="txt" name="txt">
                           </div>
                         </div><br>
                         <div class="form-group">
                           <label class="control-label col-sm-4" for="txt">Start Date:</label>
                           <div class="col-sm-6">
                           <input type="date" class="form-control" id="txt" name="txt">
                           </div>
                         </div><br>
                         <div class="form-group">
                           <label class="control-label col-sm-4" for="txt">End Date:</label>
                           <div class="col-sm-6">
                           <input type="date" class="form-control" id="txt" name="txt">
                           </div>
                         </div><br>
                         <div class="form-group">
                           <label class="control-label col-xs-4 col-sm-4" for="txt">Class Prefered:</label>
                             <div class="col-xs-8 col-sm-6">
                               <label class="radio-inline"><input type="radio" name="optradio">Yes</label>
                                 <label class="radio-inline"><input type="radio" name="optradio">No</label>
                            </div>
                          </div><br>
                       </div>
                       <div class="modal-footer">
                         <div class="col-xs-6 col-sm-6">
                         <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                       </div>
                       <div class="col-xs-6 col-sm-6">
                       <button type="button" class="btn btn-primary">Submit</button>
                     </div>
                     </div>
                     </div>
                   </div>
                 </div>
</div>
</div>
