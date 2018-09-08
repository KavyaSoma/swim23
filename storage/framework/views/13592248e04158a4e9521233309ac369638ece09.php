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
      <li class="active"><a href="<?php echo e(url('friendlist')); ?>" >All Users</a></li>
      <li><a href="<?php echo e(url('myfriendlist')); ?>">My Friends</a></li>
        </ul>
        <div class="tab-content tab_details">
       <div class="tab-pane fade in active" id="allfriends">
       <div class="panel panel-default magic-element isotope-item">
          <div class="panel-body">

            <form method="post" action="<?php echo e(url('friendlist')); ?>">
              <?php echo e(csrf_field()); ?>

            <input type="text" class="form-control" name="search" placeholder="Search.."><br>
            <input type="submit" name="submit" style="display: none">
          </form>
            <div class="row">
               <?php if(count($allusers)>0): ?>
              <?php $__currentLoopData = $allusers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              
            <div class="col-xs-12 col-md-2" style="border: 1px solid #eee;margin:5px;">
            <?php if($user->Image == "NA"): ?>    
            <img src="<?php echo e(url('public/images/profile.png')); ?>" class="img-rounded pull-left" height="60px" width="60px" alt="user" title="Add <?php echo e($user->UserName); ?> to your friend list"/>
            <?php else: ?>
            <img src="<?php echo e($user->Image); ?>" class="img-rounded pull-left" height="60px" width="60px" alt="user" title="Add <?php echo e($user->UserName); ?> to your friend list"/>
            <?php endif; ?>
            <span style="margin:5px;">
            &nbsp;<b><?php echo e(substr($user->UserName,0,10)); ?></b><br/>
            &nbsp;<a href="<?php echo e(url('addfriend/'.$user->UserId)); ?>"><button class="btn btn-xs btn-default" title="Add <?php echo e($user->UserName); ?> to your friend list">+Add Friends</button></a>
            </span>
            </div>
              
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                 
                 
                 
                   <center><ul class="pagination">
               <?php echo e($allusers->links()); ?>

             </ul></center>
             <?php else: ?>
             <h4>No results Found</h4>
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