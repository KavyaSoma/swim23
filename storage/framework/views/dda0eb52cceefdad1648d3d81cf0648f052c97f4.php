<?php $__env->startSection('content'); ?>

<?php if(session()->has('message.level')): ?>
    <div class="alert alert-<?php echo e(session('message.level')); ?>" style="margin:13px;text-align: center;">
    <?php echo session('message.content'); ?>

    </div>
    <?php endif; ?>
<!-- settings information code starts here -->
  <div class="container" id="main-code">
     <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2" id=kin_photo>
      <?php if($users[0]->Image == "NA"): ?>
     <div class="fb-profile"  style="margin-top:21%">
 <img class="thumbnail user_image"  src="<?php echo e(url('public/images/profile.png')); ?>" alt="Profile image" width="200px" height="190px"/>
</div>
<?php else: ?>
 <div class="fb-profile"  style="margin-top:21%">
 <img class="thumbnail user_image"  src="<?php echo e($users[0]->Image); ?>" alt="Profile image" width="200px" height="190px"/>
</div>
<?php endif; ?>
<a href="<?php echo e(url('editprofile')); ?>"><button class="btn btn-primary">Edit</button></a>
   <?php if(Session::get('user_type') == "user"): ?>     
  <a href="<?php echo e(url('addkin')); ?>" class="btn btn-primary">Add Kin </a>
 
                         <?php endif; ?>
</div>
<div class="col-xs-12 col-sm-6 col-md-10" id="kin_info">
<form class="form-horizontal kin_info">

       <div class="well" style="background:#fff">
         <div class="container">
         <div class="row" style="width:73%">
           <?php if(Session::get('user_type') == "User"): ?>   
          <ul class="nav nav-tabs preview_tabs">
               <li><a  href="<?php echo e(url('profile')); ?>"> <i class="fa fa-cog" aria-hidden="true" id="info_fa"></i> Account Settings</a></li>
               <li class="active"><a href="<?php echo e(url('kindetails')); ?>"> <i class="fa fa-info" aria-hidden="true" id="info_fa"></i> Kin Details</a></li>

                </ul>
             <?php else: ?>
       <ul class="nav nav-tabs preview_tabs">
               <li class="active"><a data-toggle="tab" href="#accountsettings"> <i class="fa fa-cog" aria-hidden="true" id="info_fa"></i> Account Settings</a></li>
             </ul>
             <?php endif; ?>
              <div class="tab-content preview_details">
                <div id="kindetails" class="tab-pane fade in active">
                    

                      <div class="row" style="margin-top:10px">
                         <?php if(count($kins)>0): ?>
                         <?php $__currentLoopData = $kins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-3 col-xs-6 col-sm-3 book-now-img" >
                          <a href="#">
                                      <div class="book-img-thumb">
                                        <?php if($kin->Image == "NA"): ?>
                                         <img src="<?php echo e(url('public/images/user-200.png')); ?>"/>
                                         <?php else: ?>
                                        <img src="<?php echo e($kin->Image); ?>"/>
                                       <?php endif; ?>
                                     <div class="swim-curve">
                                         <div class="swim-curve-img">
                                         </div>
                                        
                                         <div class="swim-name">
                                             <span class="m-name"><?php echo e($kin->ParticipantName); ?></span>
                                           </div>
                                         <div class="swim-lang">
                                             <span><?php echo e($kin->Relationship); ?></span>
                                         </div>
                                     <div class="swim-det">
                                         <div class="swim-genre">
                                              <ul class="list-inline">
                                                 <li><?php echo e($kin->Height); ?>cms</li>
                                                 <li><?php echo e($kin->Weight); ?>Kg</li>
                                                 
                                             </ul>
                                         </div>

                                      </div>
                                  </div>
                                  <a href="<?php echo e(url('editkin/'.$kin->ParticipantId)); ?>" class="btn btn-primary edit_button col-xs-12 col-sm-6">
                                        <i class="fa fa-edit"></i>Edit
                                      </span>
                                   </a>
                                   <a href="<?php echo e(url('kininformationpage/'.$kin->ParticipantId)); ?>" class=" btn btn-primary delete_button col-xs-12 col-sm-6">
                                          <i class="fa fa-eye"></i>  View
                                        </span>
                                    </a>
                         </div>
                     </div>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 <?php if(count($kins)>0): ?>
 <div class="text-center">
   <ul class="pagination">
<?php echo e($kins->links()); ?>

 </ul>
 </div>
 <?php endif; ?>
           </div>
            <?php else: ?>
                      <h1>No Kins Available</h1>
                    <?php endif; ?>

                          </div>
                        </form>
                      </div>
                    </div>
                     </div>
                  </div>
                </div></div></div>
                <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>