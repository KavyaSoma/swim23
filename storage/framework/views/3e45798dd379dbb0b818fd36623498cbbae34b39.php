<?php $__env->startSection('content'); ?>
<?php if(session()->has('message.level')): ?>
    <div class="alert alert-<?php echo e(session('message.level')); ?>" style="margin:13px;text-align: center;">
    <?php echo session('message.content'); ?>

    </div>
    <?php endif; ?>
  <!-- Friends List code starts here -->
   <div class="container" id="main-code">
   <br/>    
<ol class="breadcrumb" style="background:#46A6EA;">
  
  <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>">Home</a></li>
  <li class="breadcrumb-item"><a href="<?php echo e(url('/socialnetwork')); ?>">Social Network</a></li>
  <li class="breadcrumb-item active">Friends</li>
  
</ol>        
   <section class="main" style="margin-top:20px">
     <div class="col-xs-12 col-sm-12">
      <ul class="nav nav-tabs preview_tabs">
      <li ><a href="<?php echo e(url('friendlist')); ?>">All Users</a></li>
      <li class="active"><a href="<?php echo e(url('/myfriend')); ?>">My Friends</a></li>
        </ul>
        <div class="tab-content tab_details">
         <div class="tab-pane fade in active" id="myfriends">
          <div class="panel panel-default magic-element isotope-item">
          <div class="panel-body">
           <div class="row">
            <?php if(count($friends)>0): ?>
           <?php $__currentLoopData = $friends; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <div class="col-xs-12 col-md-2" style="border: 1px solid #eee;margin:5px;">
            <?php if($user->Image == "NA"): ?>    
            <img src="<?php echo e(url('public/images/profile.png')); ?>" class="img-rounded pull-left" alt="user" height="60px" width="60px"/>
            <?php else: ?>
            <img src="<?php echo e($user->Image); ?>" class="img-rounded pull-left" alt="user" height="60px" width="60px"/>
            <?php endif; ?>
            <span style="margin:5px;">
            &nbsp;<b><?php echo e(substr($user->UserName,0,10)); ?></b><br/>
            &nbsp;<a href="<?php echo e(url('addfriend/'.$user->UserId)); ?>"><button class="btn btn-xs btn-danger">Remove</button></a>
            </span>
            </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
               
                    <center><ul class="pagination">
               <?php echo e($friends->links()); ?>

             </ul></center>
             <?php else: ?>
             <h4>Friends not Added</h4>
             <?php endif; ?>
           </div>
         </div>
       </div>
         </div>
         </div>            
</div>
</div>
</section>
</div>


<!--Friends List code ends here -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>