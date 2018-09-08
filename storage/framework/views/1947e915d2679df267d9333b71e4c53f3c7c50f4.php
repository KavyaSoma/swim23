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
  <li class="breadcrumb-item">Groups</li>
  
 </ol>
   <div class="panel panel-default magic-element isotope-item">
      <div class="panel-body-heading edituser_panel">
        <h4 class="pb-title" style="padding:10px"><a href="#">Groups <span class="badge" id="badge"> <?php echo e(count($groups)); ?></span></a><span>
          <button class="btn btn-primary pull-right add-member" data-toggle="modal" data-target="#myModal2">Add Group</button>
        <!-- Modal -->
        <div class="modal fade" id="myModal2" role="dialog">
        <div class="modal-dialog modal_mobile">
        <!-- Modal content-->
        <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="modal-body" style="margin-top:10px">
        <form class="form-horizontal" method="post" action="<?php echo e(url('/addgroup')); ?>">
          <?php echo e(csrf_field()); ?>

          <div class="form-group">
            <label class="control-label col-sm-4" for="txt" style="color:#333">Group Name:</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="txt" name="group_name">
            </div>
          </div>

        
        </div>
        <div class="modal-footer">
        <center><button class="btn btn-primary col-sm-offset-5 col-sm-3">Create Group</button></center>
        </form>
        </div></div></div>
        </div>
        </div>
      </div>

      <div class="panel-body">
        <form method="post" action="<?php echo e(url('groups')); ?>">
          <?php echo e(csrf_field()); ?>

        <input type="text" class="form-control" placeholder="Search.." name="search_term"><br>
        <input type="submit" name="submit" style="visibility: hidden;">
      </form>
<?php if(count($groups)>0): ?>
      <div class="row">
        <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-3">
                    <div class="panel panel-default grp_member">
                      <div class="panel-body">
                            <div class="row">
                              <div class="col-md-offset-3 col-md-6">
                                  <div class="col-sm-5">
                                    <img src="<?php echo e(url('public/images/profile.png')); ?>" id="gimg_<?php echo e($user->GroupId); ?>_1" class="img-circle" height="35px" width="35px">
                                  </div>
                                  <div class="col-sm-5">
                                    <img src="<?php echo e(url('public/images/profile.png')); ?>" id="gimg_<?php echo e($user->GroupId); ?>_2" class="img-circle" height="35px" width="35px">
                                  </div>
                                </div>
                              </div>
                                <div class="col-md-12">
                                <a href="<?php echo e(url('group/'.$user->GroupId)); ?>" style="color:#000;">    
                                  <h5 class="img-circle text-center" class="names"><b><?php echo e($user->GroupName); ?></b></h5>
                                </a>
                                </div>
                                <div class="col-md-12">
                                <center><button class="btn btn-default" style="border:1px solid #46A6EA;" onclick="group('<?php echo e(url('group/'.$user->GroupId)); ?>')">View Group</button></center>
                                </div>
                             </div>
                        </div>
                      </div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     
                       
<center><ul class="pagination">
  <?php echo e($groups->links()); ?>

</ul></center>
<?php endif; ?>
</div>
</div>
</div>
</div>
</div>
<script>
<?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
console.log('<?php echo e(url('getgroupsimages/'.$group->GroupId)); ?>');
                               $.ajax({
                                   url: '<?php echo e(url('getgroupsimages/'.$group->GroupId)); ?>',
                                   success: function(html) {
                                     if(html=="no") {
                                     } else {
                                         var temp = new Array();
                                         temp = html.split(",");
                                         console.log(temp[0]);
                                         $('#gimg_'+<?php echo e($group->GroupId); ?>+'_1').attr('src',temp[0]);
                                         $('#gimg_'+<?php echo e($group->GroupId); ?>+'_2').attr('src',temp[1]);
                                      }
                                   },
                                   async:true
                                 });
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</script>    
<!--members List code ends here -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>