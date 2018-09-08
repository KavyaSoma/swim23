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
         <li class="active"><a href="javascript:;">Invite Friends</a></li>
         <li><a href="<?php echo e(url('manageparticipants/'.$eventid)); ?>">Manage Invites</a></li>
 </ul>
 <div class="tab-content preview_details">
      <div id="invitefriends" class="tab-pane fade in active">
        <?php if(count($events)>0): ?>
        <div class="row" style="margin-top:20px;border-bottom:1px solid #eeeeee;">
         <div class="col-sm-4">
           <p><b>Event Name: <?php echo e($events[0]->EventName); ?></b></p>
         </div>
         <div class="col-sm-4">
           <p><b style="color:#46A6EA">Date & Time:</b> <?php echo e($events[0]->StartDateTime); ?></p>
         </div>
         <div class="col-sm-4" style="margin-bottom: 9px">
             <form action="<?php echo e(url('inviteparticipants/'.$eventid)); ?>" method="post"> 
                 <?php echo e(csrf_field()); ?>

             <?php if( $search_term == ''): ?>    
             <input type="text" name="search_term" placeholder="Search" required>
             <?php else: ?>
             <input type="text" name="search_term" placeholder="Search" value='<?php echo e($search_term); ?>' required>
             <?php endif; ?>
             </form>
         </div>
       </div>
      <?php endif; ?>
     
        <?php if(count($participants)>0): ?>
      
      <div class="panel-body">
         
            <div class="row">
               <?php $__currentLoopData = $participants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $participant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-xs-12 col-sm-3">
              <div class="panel friend">
                    <tr>
                      <td class="mns">
                        <span class="mash">
                          <?php if($participant->Image == "NA"): ?>
                          <input type="hidden" name="participantid" value="<?php echo e($participant->ParticipantId); ?>">
                         <div class=" col-xs-4 col-sm-3">
                          <?php if($participant->Image == 'NA'): ?>   
                          <img src="<?php echo e(url('public/images/profile.png')); ?>" class="img-circle pull-left" height="60px" width="60px"/>
                          <?php else: ?>
                          <img src="<?php echo e(url($participant->Image)); ?>" class="img-circle pull-left" height="60px" width="60px"/>
                          <?php endif; ?>
                         </div>
                             <?php else: ?>
                             <div class=" col-xs-4 col-sm-3">
                          <img src="<?php echo e($participant->Image); ?>" class="img-circle pull-left" height="60px" width="60px"/></div>
                             <?php endif; ?>  
                          <span class="col-xs-4 col-sm-4 frnd_name"><?php echo e($participant->ParticipantName); ?></span><br>
                      
                           <a href="<?php echo e(url('invite/'.$events[0]->EventId.'/'.$participant->ParticipantId)); ?>" > <span class="col-xs-4 col-sm-4 frnd_name"><i class="fa fa-plus plus"></i></span></a>
                           
                          </span></td>
                      </tr>
                    </div>
                  </div>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           
                     <?php endif; ?>
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