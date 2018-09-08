<?php $__env->startSection('content'); ?>
<?php if(session()->has('message.level')): ?>
    <div class="alert alert-<?php echo e(session('message.level')); ?>" style="margin:13px;text-align: center;">
    <?php echo session('message.content'); ?>

    </div>
    <?php endif; ?>
 <!-- Friends List code starts here -->
 <div class="container" id="main-code">
   <section class="main" style="margin-top:20px">
     <div class="col-xs-12 col-sm-12">
       <ul class="nav nav-tabs preview_tabs">
         <li><a href="<?php echo e(url('inviteparticipants/'.$eventid)); ?>">Invite Friends</a></li>
         <li class='active'><a href="javascript:;">Manage Invites</a></li>
 </ul>
 <div class="tab-content preview_details">
      <div id="invitefriends" class="tab-pane fade in active">
        <?php if(count($events)>0): ?>
        <div class="row" style="margin-top:20px">
         <div class="col-sm-4">
           <p><b style="color:#46A6EA">Event Name:</b><?php echo e($events[0]->EventName); ?></p>
         </div>
         <div class="col-sm-4">
           <p><b style="color:#46A6EA">Date & Time:</b><?php echo e($events[0]->StartDateTime); ?></p>
         </div>
        
       </div>
      <?php endif; ?>
     
           <div class="panel panel-default magic-element isotope-item">
           <div class="panel-body">

                   <?php if(count($manageinvites)>0): ?>
      
                    <?php $__currentLoopData = $manageinvites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $manage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-xs-12 col-sm-3">
              <div class="panel friend">
                    <tr>
                      <td class="mns">
                        <span class="mash">
                          <?php if($manage->Image == "NA"): ?>
                         <div class=" col-xs-4 col-sm-3">
                          <img src="<?php echo e(url('public/images/profile.png')); ?>" class="img-circle pull-left" height="60px" width="60px"/></div>
                             <?php else: ?>
                             <div class=" col-xs-4 col-sm-3">
                          <img src="<?php echo e($manage->Image); ?>" class="img-circle pull-left" height="60px" width="60px"/></div>
                             <?php endif; ?>  
                          <span class="col-xs-4 col-sm-4 frnd_name"><?php echo e($manage->ParticipantName); ?></span><br>
                          <a href="#" > <span class="col-xs-4 col-sm-4 frnd_name"><i class="fa fa-times plus"></i></span></a>
                          </span></td>
                      </tr>
                    </div>
                  </div>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        

                               
        
        </div>
        <?php else: ?>
        <h4>Once participants accepted your invite, those participants will be shown here.</h4>
        <?php endif; ?>
      

                </div>
</div>
</div>
</div>

</section>
</div>
<!--Friends List code ends here -->
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>