<!-- social Communication code starts here -->

<?php $__env->startSection('content'); ?>

<?php if(session()->has('message.level')): ?>
    <div class="alert alert-<?php echo e(session('message.level')); ?>" style="margin:13px;text-align: center;">
    <?php echo session('message.content'); ?>

    </div>
    <?php endif; ?>

<div class="container" id="main-code">
 <section class="main" style="margin-top:20px">
   <section class="tab-content">
     <section class="tab-pane active fade in active">
       <div class="row" id="dashboard-mob">
         <div class="panel-body">
                   <div class="col-xs-12 col-sm-12">
                       <div class="panel panel-default magic-element isotope-item">
                                 <div class="panel-body-heading edituser_panel">
                                     <h4 class="pb-title" style="padding:5px">Friends <span class="badge" id="badge"><?php echo e(count($friends)); ?></span></h4>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
<!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body" style="padding:20px">
        <h5 style="color:#fff;background-color:#46A6EA;padding:5px">Find Friends</h5>
        <form method="post" action="<?php echo e(url('socialnetwork')); ?>">
          <?php echo e(csrf_field()); ?>

         <input type="text" class="form-control" name="name" placeholder="Enter Name/Email"><br>
         <center><button class="btn btn-primary">Add to List</button></center>
       </form>
      </div>
    </div>
  </div>
  </div>
 </div>
 <div class="panel-body">
   <?php if( count($friends) > 0 ): ?>  
   <?php $__currentLoopData = $friends; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <div class="col-xs-12 col-md-2" style="border: 1px solid #eee;margin:5px;">
            <?php if($user->Image == "NA"): ?>    
            <img src="<?php echo e(url('public/images/profile.png')); ?>" class="img-rounded pull-left" height="60px" width="60px" alt="User" title="Add <?php echo e($user->UserName); ?> to your friend list"/>
            <?php else: ?>
            <img src="<?php echo e($user->Image); ?>" class="img-rounded pull-left" height="60px" width="60px" alt="User" title="Add <?php echo e($user->UserName); ?> to your friend list"/>
            <?php endif; ?>
            <span style="margin:5px;">
            &nbsp;<b><?php echo e(substr($user->UserName,0,10)); ?></b><br/>
            &nbsp;<a href="<?php echo e(url('user/'.$user->ShortName)); ?>"><button class="btn btn-xs btn-default" title="View <?php echo e($user->UserName); ?> profile">View Profile</button></a>
            </span>
            </div>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     <?php else: ?>
     <h4>You Have not added friends yet, Click on View All Users to get started</h4>
     <?php endif; ?>
     <div class="col-xs-12 col-md-2" style="margin:10px;">
       <center>
   <a href="<?php echo e(url('friendlist')); ?>"><button class="btn btn-primary btn-lg">View All Users</button></a>

       </center>  
     </div>
     
 </div>
 </div>
 </div>
 <div class="col-xs-12 col-sm-12">
     <div class="panel panel-default magic-element isotope-item">
               <div class="panel-body-heading edituser_panel">
                   <h4 class="pb-title" style="padding:5px">Forum <span class="badge" id="badge"> <?php echo e(count($questions)); ?></span></h4>
                    <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal1">Ask Forum</button> 
<div class="modal fade" id="myModal1" role="dialog">
<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h5 style="color:#fff;background-color:#46A6EA;padding:5px;margin-top:30px">Ask Forum</h5>
<div class="modal-body">
<form class="form-horizontal" method="post" action="<?php echo e(url('forumquestion')); ?>">
  <?php echo e(csrf_field()); ?>  
  <div class="form-group">
    <label class="control-label col-sm-4" for="txt" style="color:#333">Topic:</label>
    <div class="col-sm-6">
      <select class="form-control" name="topic">
                         <?php $__currentLoopData = $topics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $topic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e(strtolower($topic->Topic)); ?>"><?php echo e(strtolower($topic->Topic)); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-4" for="txt"  style="color:#333">Question:</label>
    <div class="col-sm-6">
      <textarea type="text" rows="15" class="form-control" id="txt" name="question" required></textarea>
    </div>
  </div>
</div>
<div class="modal-footer">
    <center><button class="btn btn-primary col-sm-offset-6 col-sm-2" type="submit">Post</button></center>
</div></form>
</div></div>
</div></div>
</div>
<br>
 <div class="form-group">
                    <div class="col-sm-3">
                      <select class="form-control" id="rselect">
                        <option>Select Topic</option>
                        <?php $__currentLoopData = $topics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $topic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option onclick="topic('<?php echo e(url('questions/'.$topic->Topic)); ?>')"><?php echo e($topic->Topic); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                    </div>
                      </div><br>
<div class="panel-body">
   <div class="table table-responsive table-container">
     <table class="table table-striped table-bordered table-hover" id="sample_3">
       <thead>
         <tr>
           <th> Questions</th>
           <th> Topic</th>
           <th> Replies </th>
           <th> Views </th>
         </tr>
       </thead>
       <tbody>
        <?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
         <td id="mns">
           <h5>
             <a id="mrs" href="<?php echo e(url('forumanswers/'.$question->QuestionId)); ?>">
              <?php echo e($question->Question); ?></a>
           </h5>
           <span id="mash">
           <?php if($question->Image == "NA"): ?>    
           <img src="<?php echo e(url('public/images/profile.png')); ?>" class="img-circle" height="40px" width="40px"/>
           <?php else: ?>
           <img src="<?php echo e(url('public/'.$question->Image)); ?>" class="img-circle" height="40px" width="40px"/>
           <?php endif; ?>
             <i class="fa fa-calendar" style="color:#ff6600;font-size:18px"></i> <b style="color: #000;font-weight:normal; font-size:12px;"> <?php echo e($question->DateTime); ?> </b>
           </span></td>
           <td>
             <?php echo e($question->Topic); ?>

           </td>
         <td> &nbsp;<span id="count_<?php echo e($question->QuestionId); ?>">..</span></td>
     <td>
     <i class="fa fa-eye" style="color:#46A6EA;font-size:18px"></i>
      <?php echo e($question->View); ?>

     </td>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     </tr>

     </table>
             </div>
            <center><a href="<?php echo e(url('forum')); ?>"><button class="btn btn-primary">View All Questions</button></a></center>
           </div>
</div>
</div>
<div class="col-xs-12 col-sm-12">
   <div class="panel panel-default magic-element isotope-item">
             <div class="panel-body-heading edituser_panel">
                 <h4 class="pb-title" style="padding:5px;">Groups <span class="badge" id="badge"><?php echo e($groups_count[0]->count); ?></span></h4>
<!-- Modal -->
<div class="modal fade" id="myModal2" role="dialog">
<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h5 style="color:#fff;background-color:#46A6EA;padding:5px;margin-top:30px">Create Group</h5>
<div class="modal-body">
<form class="form-horizontal" method="post" action="<?php echo e(url('socialnetwork')); ?>">
  <?php echo e(csrf_field()); ?>

 <div class="form-group">
   <label class="control-label col-sm-4" for="txt" style="color:#333">Group Name:</label>
   <div class="col-sm-6">
     <input type="text" class="form-control" id="txt" name="group_name">
   </div>
 </div>

</div>
<div class="modal-footer">
<center><button class="btn btn-primary col-sm-offset-5 col-sm-4">Create Group</button></center>
</form>
</div></div></div>
</div>
</div>
</div><br>
<div class="panel-body">
<?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
<div class="col-md-3">
                    <div class="panel panel-default grp_member">
                      <div class="panel-body">
                            <div class="row">
                              <div class="col-md-offset-3 col-md-6">
                                  <div class="col-sm-5">
                                    <img src="<?php echo e(url('public/images/profile.png')); ?>" id="gimg_<?php echo e($group->GroupId); ?>_1" class="img-circle" height="35px" width="35px">
                                  </div>
                                  <div class="col-sm-5">
                                    <img src="<?php echo e(url('public/images/profile.png')); ?>" class="img-circle" id="gimg_<?php echo e($group->GroupId); ?>_2" height="35px" width="35px">
                                  </div>
                                </div>
                              </div>
                      <a href="<?php echo e(url('group/'.$group->GroupId)); ?>" style="color:#000;">    
                                <div class="col-md-12">
                                    <h5 class="img-circle text-center" class="names"><b><?php echo e($group->GroupName); ?></b></h5>
                                </div>
                                <div class="col-md-12">
                                <center><button class="btn btn-default" style="border:1px solid #46A6EA;" onclick="group('<?php echo e(url('joingroup/'.$group->GroupId.'/'.session()->get('user_id').'/'.$group->UserId)); ?>')">View Group</button></center>
                                </div>
                      </a>
                             </div>
                        </div>
                      </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <br/>
<center><button class="btn btn-warning" data-toggle="modal" data-target="#myModal2">Create New Group</button>&nbsp;&nbsp;&nbsp;
   <a href="<?php echo e(url('groups')); ?>" class="btn btn-primary">View All Groups</a></center>
</div>
</div>
 </div>

   <!-- Modal -->
   <div class="modal fade" id="myModal4" role="dialog">
   <div class="modal-dialog">
   <!-- Modal content-->
   <div class="modal-content" style="height:500px">
   <div class="modal-header">
 <div class="col-xs-12 col-sm-12" id="add_member">
     <div class="panel panel-default magic-element isotope-item">
               <div class="panel-body-heading edituser_panel">
                   <h4 class="pb-title" style="padding:12px;margin-top: 20px" ><div id="groupname">Group Name(0 members)</div>
<button class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal5" style="border:1px solid #fff;margin-top:-25px" id="add_btn">Add Members</button></h4>
 <!-- Modal -->
 <div class="modal fade" id="myModal5" role="dialog" style="margin-top: 50px;">
 <div class="modal-dialog">
 <!-- Modal content-->
 <div class="modal-content">
 <div class="modal-header">
 <button type="button" class="close" data-dismiss="modal">&times;</button>

 <div class="modal-body">
 <form class="form-horizontal" method="post" action="<?php echo e(url('socialnetwork')); ?>" style="margin-top: 20px">
  <?php echo e(csrf_field()); ?>

   <div class="form-group">
     <label class="control-label col-sm-4" for="txt" style="color:#333">Group Name:</label>
     <div class="col-sm-6">
      <input type="hidden" class="form-control" name="group_id" id="group_id">
       <input type="text" class="form-control" id="group-name" name="old_groupname" readonly>
     </div>
   </div>
   <div class="form-group">
     <label class="control-label col-sm-4" for="txt" style="color:#333">Member Name:</label>
     <div class="col-sm-6">
       <input type="text" class="form-control" id="txt" name="member_name">
     </div>
   </div>
 
 </div>
 <div class="modal-footer">
 <center><button class="btn btn-primary col-sm-offset-5 col-sm-4">Update Group</button></center>
 </form>
 </div></div></div>
 </div>
 </div>
 </div>
</div>
</div>
</div>
</div>
</div>
</div>
 <br>
 <div class="panel-body">
 <div class="table table-responsive table-container">
 </div>
 </div>
 </div>
   </div>
 </section>
 </section>
 </section>
</div>
<!-- social Communication code ends here -->
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

 $('#rselect').on('change', function() {
  //window.location('<?php echo e(url('forum/')); ?>'+this.value);
  //alert(this.value);
  window.location.href = '<?php echo e(url('forum')); ?>/'+this.value; 
});
 <?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
console.log('<?php echo e(url('answerscount/'.$question->QuestionId)); ?>');
                               $.ajax({
                                   url: '<?php echo e(url('answerscount/'.$question->QuestionId)); ?>',
                                   success: function(html) {
                                   console.log(html);    
                                   $("#count_<?php echo e($question->QuestionId); ?>").html(html);
                                      
                                   },
                                   async:true
                                 });
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>              
</script>              
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>