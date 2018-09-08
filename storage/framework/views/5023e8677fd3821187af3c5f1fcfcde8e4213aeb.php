<?php $__env->startSection('content'); ?>
 <!-- group code starts here -->
 <?php if(session()->has('message.level')): ?>
    <div class="alert alert-<?php echo e(session('message.level')); ?>" style="margin:13px;text-align: center;">
    <?php echo session('message.content'); ?>

    </div>
    <?php endif; ?>
 <div class="container" id="main-code" style="margin-top:20px">
 <ol class="breadcrumb" style="background:#46A6EA;">
  <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>">Home</a></li>
  <li class="breadcrumb-item"><a href="<?php echo e(url('/socialnetwork')); ?>">Social Network</a></li>
  <li class="breadcrumb-item"><a href="<?php echo e(url('/groups')); ?>">Groups</a></li>
  <li class="breadcrumb-item"><?php echo e($group_info[0]->GroupName); ?></li>
  
 </ol> 
   <div class="panel panel-default magic-element isotope-item">
      <div class="panel-body-heading edituser_panel">
        <h4 class="pb-title" style="padding:10px"><a href="#"><?php echo e($group_info[0]->GroupName); ?> <span class="badge" id="badge"> <?php echo e($total_users[0]->count); ?></span></a><span>
        <?php if($show == 'admin'): ?>
        <button class="btn btn-primary pull-right add-member" onclick="group('<?php echo e(url('joingroup/'.$group_info[0]->GroupId.'/'.$user_id.'/'.$group_info[0]->UserId)); ?>')">Add Member</button>
        <?php else: ?>
        <button class="btn btn-primary pull-right add-member" onclick="group('<?php echo e(url('joingroup/'.$group_info[0]->GroupId.'/'.$user_id.'/'.$group_info[0]->UserId)); ?>')">Join Group</button>
        <?php endif; ?>
        <!-- Modal -->
        <div class="modal fade" id="myModal2" role="dialog">
        <div class="modal-dialog modal_mobile">
        <!-- Modal content-->
        <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="modal-body" style="margin-top:10px">
        <form class="form-horizontal">
          <div class="form-group">
            <label class="control-label col-sm-4" for="txt" style="color:#333">Member Name:</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="txt">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" for="txt" style="color:#333">Upload Image:</label>
            <div class="col-sm-6">
              <input type="file" class="form-control" id="txt">
            </div>
          </div>
        </form>
        </div>
        <div class="modal-footer">
        <center><button class="btn btn-primary col-sm-offset-5 col-sm-3">Add Member</button></center>
        </div></div></div>
        </div>
        </div>
      </div>

      <div class="panel-body">
          <?php if( count($users) > 0 ): ?>
                
          <br/>
      <div class="row">
          
          <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-md-2">
                      <div class="panel panel-default member">
                        <div class="panel-body text-left">
                              <div class="row">
                                  <div class="col-md-12">
                                      <center>
                                          <a class="" href="#">
                                              <?php if($user->Image == 'NA'): ?>
                                              <img src="<?php echo e(url('public/images/profile.png')); ?>" class="img-circle member_img">
                                              <?php else: ?>
                                              <img src="<?php echo e($user->Image); ?>" class="img-circle member_img">
                                              <?php endif; ?>
                                          </a>
                                      </center>
                                  </div>
                                  <div class="col-md-12">
                                    <h5 style="text-align:center" class="names"><b><?php echo e($user->UserName); ?></b></h5>
                                  </div>
                                  <div class="col-md-12">
                                      <center><a href="<?php echo e(url('user/'.$user->ShortName)); ?>"><button class="btn btn-primary"><i class="fa fa-eye" style="color:"></i> View</button></a></center>
                                  </div>
                              </div>
                          </div>

                      </div>
                  </div>
                  
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<center><ul class="pagination">
  <?php echo e($users->links()); ?>

</ul></center>
<?php else: ?>
<h4>No Members Yet</h4>
<?php endif; ?>
              </div>
              

</div>
</div>
</div>
</div>


<!--members List code ends here -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>