<?php $__env->startSection('content'); ?>

<?php if(session()->has('message.level')): ?>
    <div class="alert alert-<?php echo e(session('message.level')); ?>" style="margin:13px;text-align: center;">
    <?php echo session('message.content'); ?>

    </div>
    <?php endif; ?>
    <div class="container" id="main-code">
    <br/>
    <ul class="nav nav-tabs preview_tabs">
      <li><a href="<?php echo e(url('/instructors')); ?>">All Instructors</a></li>
      <li class="active"><a href="javascript:;">My Instructors</a></li>
</ul>        
    <?php if( count($instructors)>0 ): ?>
     <br/>
    <?php $__currentLoopData = $instructors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $instructor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-md-3 col-xs-6 col-sm-4 book-now-img">
      <a href="javascript:;">
                    <div class="book-img-thumb">
                       <img id="image_<?php echo e($instructor->UserId); ?>" src="<?php echo e(url('public/images/instructor.jpg')); ?>"/>
                   <div class="swim-curve">
                       <div class="swim-curve-img">
                       </div>
                       <div class="swim-rate swim-rate-orange" onclick="manageFavourites('<?php echo e(url('managefavourites/instructor/'.$instructor->UserId.'/'.Session::get('user_id'))); ?>','<?php echo e($instructor->UserId); ?>')">
                        <span id="fav_<?php echo e($instructor->UserId); ?>"><i class="fa fa-heart-o"></i></span>
                       </div>
                       <div class="swim-name">
                           <span class="m-name"><?php echo e($instructor->UserName); ?></span>

                       </div>
                       <div class="swim-lang">
                           <span id="favcount_<?php echo e($instructor->UserId); ?>"></span>
                       </div>
                   <div class="swim-det">
                       <div class="swim-genre">
                            <ul class="list-inline">
                               <li><?php echo e($instructor->Experience); ?> Years Experience</li>
                           </ul>
                       </div>

                    </div>
                </div>
           <a href="<?php echo e(url('instructor/'.$instructor->ShortName.'/')); ?>"  class="view-btn">
                  <i class="fa fa-eye"></i>  View Instructor

                </span>
            </a>
       </div>
   </div>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               <?php else: ?>
               <h4>No Instructors Available</h4>
               <?php endif; ?>
               <?php if(count($instructors)>0): ?>
                    <div class="row text-center">
                      <div class="col-lg-12">
                        <ul class="pagination">
                          <?php echo e($instructors->links()); ?>

                        </ul>
                      </div>
                    </div>
                    <?php endif; ?>
             </div>
             <script>
             <?php $__currentLoopData = $instructors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $instructor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             console.log('<?php echo e(url('getimages/instructor/'.$instructor->UserId)); ?>');
             $.ajax({
                 url: '<?php echo e(url('getimages/instructor/'.$instructor->UserId)); ?>',
                 success: function(html) {
                   if(html=="no") {
                   } else {
                     console.log(html);

                       $('#image_'+<?php echo e($instructor->UserId); ?>).attr("src",html);
                   }
                 },
                 async:true
               });
                               console.log('<?php echo e(url('getfavourites/instructor/'.$instructor->UserId.'/'.Session::get('user_id'))); ?>');
                               $.ajax({
                                   url: '<?php echo e(url('getfavourites/instructor/'.$instructor->UserId.'/'.Session::get('user_id'))); ?>',
                                   success: function(html) {
                                     if(html=="no") {
                                     } else {
                                         var temp = new Array();
                                         temp = html.split(",");
                                         console.log(temp[0]);
                                         if(temp[0] == 'yes') {
                                           $('#fav_'+<?php echo e($instructor->UserId); ?>).html('<i class="fa fa-heart">');
                                         } else {
                                           $('#fav_'+<?php echo e($instructor->UserId); ?>).html('<i class="fa fa-heart-o">');
                                         }
                                         $('#favcount_'+<?php echo e($instructor->UserId); ?>).text(temp[1]+' Favourites');
                                     }
                                   },
                                   async:true
                                 });
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              function manageFavourites(aurl,cid) {
                console.log(aurl);
                $.ajax({
                    url: aurl,
                    success: function(html) {
                      console.log(html);
                      if(html == 'yes') {
                            $('#fav_'+cid).html('<i class="fa fa-heart">');
                          } else {
                            $('#fav_'+cid).html('<i class="fa fa-heart-o">');
                          }
                      },
                    async:true
                  });
              }
             </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>