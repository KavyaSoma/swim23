<?php $__env->startSection('content'); ?>
<?php if(session()->has('message.level')): ?>
    <div class="alert alert-<?php echo e(session('message.level')); ?>" style="margin:13px;text-align: center;">
    <?php echo session('message.content'); ?>

    </div>
    <?php endif; ?>
 <!-- Dashboard code starts here -->
<div class="container" id="main-code">
  <section class="main" style="margin-top:20px">
    <section class="tab-content">
      <section class="tab-pane active fade in active">
        <div class="row" id="dashboard-mob">
              <div class="col-xs-12 col-sm-4">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <a href="#"><i class="fa fa-plus-circle" style="color:#46A6EA;"></i></a> Add User
                  </div>
                    <div class="panel-body">
                      <form class="form-horizontal" action="<?php echo e(url('admindashboard/adduser')); ?>" method="post">
                        <?php echo e(csrf_field()); ?>

                       <div class="form-group">
                          <label class="control-label col-sm-4" for="txt">User Name:</label>
                          <div class="col-sm-6">
                          <input type="text" class="form-control" id="username" name="username" onchange="input('<?php echo e(url('register')); ?>')" required>
                        
                          </div>
                          </div>
                           <div class="form-group">
                          <label class="control-label col-sm-4" for="mail">Email:</label>
                          <div class="col-sm-6">
                          <input type="email" class="form-control" id="email" name="email" onchange="emailcheck()"  required>
                           <div class="error-email" style="color:red;"></div>
                          </div>
                        </div>
                          <div class="form-group">
                          <label class="control-label col-sm-4" for="pwd">Password:</label>
                          <div class="col-sm-6">
                          <input type="password" class="form-control" id="password" name="password" onchange="password('<?php echo e(url('register')); ?>')" required>
                            <div id="pass" style="color: red;display:none"><li>Invalid Password</li></div>
                          </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-sm-4" for="txt">User Type:</label>
                              <div class="col-sm-6">
                            <select class="form-control" id="sel" name="user_type">
                              <option>Club Admin</option>
                              <option>Venue Admin</option>
                              <option>System Admin</option>
                              <option>Instructor</option>
                          </select>
                          </div>
                          </div>
                          <div class="form-group">
                                <div class="col-sm-6">
                          <input type="hidden" class="form-control" id="display" name="shortname" readonly>
                          </div>
                          </div>
                          <center><button type="submit" class="btn btn-primary">Submit</button></center>
                        </div>
                      </form>
                       </div>
                      </div>
                      <div class="col-xs-12 col-sm-8">
                        <div class="panel panel-default magic-element isotope-item">
                                  <div class="panel-body-heading edituser_panel">
                                      <h4 class="pb-title" style="padding:5px">Edit User</h4>
                                  </div>
                                  <div class="panel-body">
                                  <div class="col-xs-4 col-sm-3">
                                   
                                  </div>
                                 
                                  <div class="col-xs-4 col-sm-offset-5 col-sm-3">
                                  <form action="<?php echo e(url('admindashboard')); ?>" method="post">
                                      <?php echo e(csrf_field()); ?>

                                    <div class="form-group">
                                      <?php if($search_term=''): ?>
                                      <input type="text" class="form-control" id="txt" placeholder="Search.." name="search_term" required>
                                      <?php else: ?>
                                      <input type="text" class="form-control" id="txt" placeholder="Search.." name="search_term" value="<?php echo e($search_term); ?>" required>
                                      <?php endif; ?>
                                    </div>
                                  </form>
                                  </div>
                                  <div class="table table-responsive">
                                    <table class="table table-bordered table-striped">
                                      <thead>
                                      <tr>
                                        <th>S.no</th>
                                        <th>User Name</th>
                                        <th>User Type</th>
                                        <th>Email</th>
                                        <th>Edit/Delete</th>
                                        </tr>
                                      </thead>
                                      <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tbody>
                                          <tr>
                                            <td><?php echo e($user->UserId); ?></td>
                                            <td><?php echo e($user->UserName); ?></td>
                                            <td><?php echo e($user->UserType); ?></td>
                                            <td><?php echo e($user->Email); ?></td>
                                            <td><a href="<?php echo e(url('edituser/'.$user->UserId)); ?>" class="icon-block"><i class="fa fa-edit user_edit" title="Edit"></i></a> / <a href="<?php echo e(url('deleteuser/'.$user->UserId)); ?>" class="icon-block"><i class="fa fa-trash user_delete"</i></a></td>
                                          </tr>
                                         
                                        </tbody>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </table>
                                </div>
                                <?php if(count($users)>0): ?>
 <div class="text-center">
   <ul class="pagination">
<?php echo e($users->links()); ?>

 </ul>
 </div>
</div>
<?php endif; ?>
                              </div>
  </div>
  </div>
  <br>
  <div class="col-xs-12 col-sm-4 post_news well">
   <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home"><span class="glyphicon glyphicon-plus-sign" ></span><b> Add</b></a></li>
    <li><a data-toggle="tab" href="#menu1"><span class="glyphicon glyphicon-share"></span> <b>Post</b></a></li>
    <li><a data-toggle="tab" href="#menu2"><span class="glyphicon glyphicon-remove-circle"> <b>Completed</b></span></a></li>  
    
  </ul>

  <div class="tab-content" id="user_scroll">
    <div id="home" class="tab-pane fade in active">
      <br>
      <ul class="media-list">
        <?php if(count($adds)>0): ?>
        <?php $__currentLoopData = $adds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $add): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <li class="media">
                            <?php if($add->ImagePath == 'NA'): ?>
                              <div class="media-left">
                                <img src="<?php echo e(url('public/images/advertisement.png')); ?>" class="img-circle" width="65px" height="65px">
                              </div>
                              <?php else: ?>
                              <div class="media-left">
                                <img src="<?php echo e(url($add->ImagePath)); ?>" class="img-circle" width="65px" height="65px">
                              </div>
                              <?php endif; ?>
                              <div class="media-body">
                                <p><b> <?php echo e($add->Subject); ?></b></p><p><?php echo e($add->PublishDate); ?></p>
                                <p><?php echo e($add->Message); ?></p>
                              </div>
                              <div class="media-right">
                                  <a href="<?php echo e(url('acceptrequest/'.$add->AdvertisementId)); ?>"><i class="fa fa-check-circle" aria-hidden="true" title="Accept" style="font-size:20px;color: #46A6EA;"></i></a>
                                  <a href="<?php echo e(url('rejectrequest/'.$add->AdvertisementId)); ?>"><i class="fa fa-times-circle-o" aria-hidden="true" title="Reject" style="font-size:20px;color: #d9534f;" ></i></a>
                              </div>
                          </li>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <?php else: ?>
                      <h4>No Requests available</h4>
                    <?php endif; ?>
              </ul>
    </div>
    <div id="menu1" class="tab-pane fade">
      <br>
      <ul class="media-list">
        <?php if(count($posts)>0): ?>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <li class="media">
                            <?php if($post->ImagePath == 'NA'): ?>
                             <div class="media-left">
                                <img src="<?php echo e(url('public/images/defaultnews.png')); ?>" class="img-circle" width="65px" height="65px">
                              </div>
                              <?php else: ?>
                             <div class="media-left">
                                <img src="<?php echo e($post->ImagePath); ?>" class="img-circle" width="65px" height="65px">
                              </div>
                              <?php endif; ?>
                              <div class="media-body">
                                <p><b> <?php echo e($post->Subject); ?></b></p><p><?php echo e($post->PublishDate); ?></p>
                                <p><?php echo e($post->Message); ?></p>
                              </div>
                              <div class="media-right">
                                  <a href="<?php echo e(url('acceptrequest/'.$post->AdvertisementId)); ?>"><i class="fa fa-check-circle" aria-hidden="true" title="Accept" style="font-size:20px;color: #46A6EA;"></i></a>
                                  <a href="<?php echo e(url('rejectrequest/'.$post->AdvertisementId)); ?>"><i class="fa fa-times-circle-o" aria-hidden="true" title="Reject" style="font-size:20px;color: #d9534f;" ></i></a>
                              </div>
                          </li>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          <?php else: ?>
                          <h4>No Requests Available</h4>
                          <?php endif; ?>
                        </ul>
    </div>
    <div id="menu2" class="tab-pane fade">
      <br>
      <ul class="media-list">
        <?php if(count($accept)>0): ?>
        <?php $__currentLoopData = $accept; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $accepts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <li class="media">
                            <?php if($accepts->AdvertisementType == 'News'): ?>
                            <?php if($accepts->ImagePath == 'NA'): ?>
                              <div class="media-left">
                                <img src="<?php echo e(url('public/images/defaultnews.png')); ?>" class="img-circle" width="65px" height="65px">
                              </div>
                              <?php else: ?>
                               <div class="media-left">
                                <img src="<?php echo e($accepts->ImagePath); ?>" class="img-circle" width="65px" height="65px">
                              </div>
                              <?php endif; ?>
                              <?php else: ?>
                              <?php if($accepts->ImagePath == 'NA'): ?>
                              <div class="media-left">
                                <img src="<?php echo e(url('public/images/advertisement.png')); ?>" class="img-circle" width="65px" height="65px">
                              </div>
                              <?php else: ?>
                               <div class="media-left">
                                <img src="<?php echo e($accepts->ImagePath); ?>" class="img-circle" width="65px" height="65px">
                              </div>
                              <?php endif; ?>
                              <?php endif; ?>
                              <div class="media-body">
                                <p><b> <?php echo e($accepts->Subject); ?></b></p><p> <?php echo e($accepts->PublishDate); ?> </p>
                                <p<?php echo e($accepts->Message); ?></p>
                              </div>
                              <div class="media-right">
                                <?php if($accepts->Status == "Accepted"): ?>
                                  <a href="#"><i class="fa fa-check-circle" aria-hidden="true" title="Accept" style="font-size:20px;color: #46A6EA;"></i></a>
                                  <?php else: ?>
                                  <a href="#"><i class="fa fa-times-circle-o" aria-hidden="true" title="Reject" style="font-size:20px;color: #d9534f;" ></i></a>
                                  <?php endif; ?>
                              </div>
                          </li>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          <?php else: ?>
                          <h4>No Completed Requests</h4>
                          <?php endif; ?>
               
              </ul>
    </div>
    </div>
</div>
    </div>
  </section>
  </section>
  </section>
</div>
 <!-- Dashboard code ends here -->
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>