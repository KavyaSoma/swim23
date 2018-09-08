<?php $__env->startSection('content'); ?>
   <?php if(session()->has('message.level')): ?>
    <div class="alert alert-<?php echo e(session('message.level')); ?>" style="margin:13px;text-align: center;">
    <?php echo session('message.content'); ?>

    </div>
    <?php endif; ?>

<!-- Modal -->
<div class="modal fade" id="loc-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="loc-popup clearfix">
          <div class="col-md-6">
       <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3736489.7218514383!2d90.21589792292741!3d23.857125486636733!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1506502314230" width="100%" height="315" frameborder="0" style="border:0" allowfullscreen></iframe>
     </div>
          <div class="col-md-6">
             <div class="city-search clearfix">
                <div class="input-group-btn search-bar">
                    <input type="text" placeholder="Search for pools" id="search-input" class="form-control">
                </div>
                <div class="input-group-btn search-submit">
                    <input type="submit" class="search-btn">
                </div>
             </div>
           </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- location popup ends here -->
 <!-- header ends here -->
 <!-- top slider starts here -->
   <div class="swim-slider mob-none">
          <div class="container"  style="background:#fff;border:1px solid #eee">
              <div class="col-md-7">
                  <h1 style="color:#46A6EA;font-size:49px;padding-top:30px">Our Resource, your Passion.</h1>
                    <h1 style="color:#484848;padding-top:15px">Are you looking for clubs,venues,professional trainers to swim?</h1>
                    <?php if(Session::has('user_id')): ?>
<center><button class="btn btn-primary" style="width:40%;padding:10px;margin-top:5%;border-radius:0"><span style="font-size:20px">Start your Journey</span></button>
  <?php else: ?>
  <center><a href="<?php echo e(url('register')); ?>"><button class="btn btn-primary" style="width:40%;padding:10px;margin-top:5%;border-radius:0"><span style="font-size:20px">Join Here</span></button></a>
    <?php endif; ?>
          </div>
       <div class="col-md-5 swimming-flow">
           <div id="desk-slider-coverflow">
               <div class="cover">
                   <img class="cover" src="<?php echo e(asset('public/images/swim1.jpg')); ?>" id="slider"/>
               </div>
               <div class="cover">
                   <img class="cover" src="<?php echo e(asset('public/images/swimming.jpg')); ?>"  id="slider"/>

               </div>
               <div class="cover">
                   <img class="cover" src="<?php echo e(asset('public/images/swim14.jpg')); ?>"  id="slider"/>
               </div>
               <div class="cover">
                   <img class="cover" src="<?php echo e(asset('public/images/swim15.jpg')); ?>"  id="slider"/>

               </div>
               <div class="cover">
                   <img class="cover" src="<?php echo e(asset('public/images/swim8.jpg')); ?>"  id="slider"/>
               </div>
               <div class="cover">
                   <img class="cover" src="<?php echo e(asset('public/images/swim1.jpg')); ?>"  id="slider"/>

               </div>
               <div class="cover">
                   <img class="cover" src="<?php echo e(asset('public/images/swim4.jpg')); ?>"  id="slider"/>
               </div>
               <div class="cover">
                   <img class="cover" src="<?php echo e(asset('public/images/swim16.jpg')); ?>"  id="slider"/>
                 </div>
               </div>
       </div>
     </div>
   </div>
   <div class="col-xs-12  desk-none tab-none mob-block">
                  <h3 style="color:#46A6EA;*font-size:49px;padding-top:80px">Our Resource, your Passion.</h3>
                    <h3 style="color:#484848;padding-top:15px">Are you looking for clubs,venues,professional trainers to swim?</h3>
                    <?php if(Session::has('user_id')): ?>
<button class="btn btn-primary" style="width:100%;padding:10px;margin-top:5%;border-radius:0"><span style="font-size:20px">Start your Journey</span></button>
  <?php else: ?>
  <center><a href="<?php echo e(url('register')); ?>"><button class="btn btn-primary" style="width:100%;padding:10px;margin-top:5%;border-radius:0"><span style="font-size:20px">Join Here</span></button></a>
    <?php endif; ?>
          </div>

<!-- top slider ends here -->
<!-- responsive code starts here -->
<!-- responsive-slider starts here -->
  <div class="swim-slider desk-none mob-block tab-block">
          <div class="container">
             <div class="clearfix">
             <div class="col-md-12 swimming-flow">
                <div id="res-slider-coverflow">
                  <div class="cover">
                   <img class="cover" src="public/images/swim1.jpg" id="slider"/>
                  </div>
                  <div class="cover">
                   <img class="cover" src="public/images/swiming.jpg" id="slider"/>

                  </div>
                  <div class="cover">
                   <img class="cover" src="public/images/swim14.jpg" id="slider"/>
                  </div>
                  <div class="cover">
                   <img class="cover" src="public/images/swim15.jpg" id="slider"/>

                  </div>
                  <div class="cover">
                   <img class="cover" src="public/images/swim8.jpg" id="slider"/>
                  </div>
                  <div class="cover">
                   <img class="cover" src="public/images/portfolio-1/9.png" id="slider"/>

                  </div>
                  <div class="cover">
                   <img class="cover" src="public/images/swim4.jpg" id="slider"/>
                  </div>
                  <div class="cover">
                   <img class="cover" src="public/images/swim16.jpg" id="slider"/>

                  </div>
               </div>
          </div>
     </div>
   </div>
   </div>

<!-- top slider ends here -->
<!-- Modal -->
<div class="modal fade" id="loc-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="loc-popup clearfix">
          <div class="col-md-6">
       <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3736489.7218514383!2d90.21589792292741!3d23.857125486636733!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1506502314230" width="100%" height="315" frameborder="0" style="border:0" allowfullscreen></iframe>
     </div>
          <div class="col-md-6">
             <div class="city-search clearfix">
                <div class="input-group-btn search-bar">
                    <input type="text" placeholder="Search for pools" id="search-input" class="form-control">
                </div>
                <div class="input-group-btn search-submit">
                    <input type="submit" class="search-btn">
                </div>
             </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- location popup ends here -->
<div class="modal fade" id="loc-modal-mob" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="loc-popup clearfix">
                <div class="col-md-6">
                        <div class="city-search clearfix">

                            <div class="input-group-btn search-bar">
                                <input type="text" placeholder="Search for pools" id="search-input" class="form-control"  ng-model="selected" uib-typeahead="state as state.city for state in stateswithcyties($viewValue) | limitTo:8 " typeahead-show-hint="true" typeahead-min-length="0" typeahead-on-select="onSelect($item, $model, $label)">
                            </div>
                            <div class="input-group-btn search-submit">
                                <input type="submit" class="search-btn">
                            </div>
                        </div>
                        <div class="select-state">
                            <div class="state-name" id="sel_state" style="display:none"></div>
                            <div class="main-cities">
                                <ul class="list-inline" id="citylist"></ul>
                            </div>
                        </div>
                        <div class="popular-cities">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
<div class="swim-lang-tab">
            <div class="container">
               <div class="clearfix">
               <div class="swim-lang-hold">
                   <div class="swim-nav">
                       <ul class="nav nav-tabs " role="tablist">
                       <li role="presentation" class="active"><div href="#mainevents" aria-controls="mainevents" role="tab" data-toggle="tab">EVENTS</div></li>
                       <li role="presentation"><div href="#mainclubs" aria-controls="mainclubs" role="tab" data-toggle="tab">CLUBS</div></li>
                       <li role="presentation"><div href="#mainvenues" aria-controls="mainvenues" role="tab" data-toggle="tab">VENUES</div></li>
                       <li role="presentation"><div href="#maininstructors" aria-controls="maininstructors" role="tab" data-toggle="tab">INSTRUCTORS</div></li>
                       <li role="presentation"><div href="#mainadds" aria-controls="mainadds" role="tab" data-toggle="tab">ADVERTISEMENTS</div></li>
                      <li role="presentation"><div href="#mainnews" aria-controls="mainnews" role="tab" data-toggle="tab">NEWS</div></li>
                       </ul>
                </div>
               <div class="tab-content">
   <div role="tabpanel" class="tab-pane active img-shadow" id="mainevents">
       <div class="clearfix">
           <?php if( count($events) > 0): ?>
              <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-md-3 col-xs-6 col-sm-4 book-now-img">
      <a href="javascript:;">
                    <div class="book-img-thumb">
                      <?php if($event->ImagePath == "NA"): ?>
                      <img id="event_image" src="<?php echo e(url('public/images/event.jpg')); ?>" alt="event"/>
                      <?php else: ?>
                      <img id="event_image" src="<?php echo e($event->ImagePath); ?>" alt="event"/>
                         <?php endif; ?>
                       <div class="swim-curve">
                       <div class="swim-curve-img">
                       </div>
                       <div class="swim-rate swim-rate-orange" onclick="manageFavourites('<?php echo e(url('managefavourites/events/'.$event->EventId.'/'.Session::get('user_id'))); ?>','<?php echo e($event->EventId); ?>')">
                        <span id="fav_<?php echo e($event->EventId); ?>"><i class="fa fa-heart-o"></i></span>
                       </div>
                       <div class="swim-name">
                           <span class="m-name"><?php echo e($event->EventName); ?></span>

                       </div>
                       <div class="swim-lang">
                           <span id="favcount_<?php echo e($event->EventId); ?>"></span>
                       </div>
                   <div class="swim-det">
                       <div class="swim-genre">
                            <ul class="list-inline">
                               <li><?php echo e($event->ShortName); ?></li>
                           </ul>
                       </div>

                    </div>
                </div>

          <a href="<?php echo e(url('event/'.$event->ShortName.'/')); ?>"  class="view-btn">
              View Event
          </span>
            </a>
       </div>
   </div>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               <?php else: ?>
               <h4>No Events Available</h4>
               <?php endif; ?>
           </div>
       <?php if( count($events) == 8): ?>
       <div class="text-center">
                   <div class="load-btn wave-effect">
                       <a href="<?php echo e(url('events')); ?>" style="color:#000;"><span>+ load more</span></a>
                   </div>
               </div>
       <?php endif; ?>
           <br/>
       </div>
       <div role="tabpanel" class="tab-pane img-shadow" id="mainclubs">
           <div class="clearfix">
               <?php if( count($clubs) > 0): ?>
                  <?php $__currentLoopData = $clubs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $club): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-md-3 col-xs-6 col-sm-4 book-now-img">
      <a href="javascript:;">
                    <div class="book-img-thumb">
                      <?php if($club->ImagePath == "NA"): ?>
                       <img src="<?php echo e(url('public/images/club.jpg')); ?>"/>
                       <?php else: ?>
                           <img src="<?php echo e($club->ImagePath); ?>"/>
                           <?php endif; ?>
                   <div class="swim-curve">
                       <div class="swim-curve-img">
                       </div>
                       <div class="swim-rate swim-rate-orange" onclick="manageFavourites('<?php echo e(url('managefavourites/club/'.$club->ClubId.'/'.Session::get('user_id'))); ?>','<?php echo e($club->ClubId); ?>')">
                        <span id="fav_<?php echo e($club->ClubId); ?>"><i class="fa fa-heart-o"></i></span>
                       </div>
                       <div class="swim-name">
                           <span class="m-name"><?php echo e($club->ClubName); ?></span>

                       </div>
                       <div class="swim-lang">
                           <span id="favcount_<?php echo e($club->ClubId); ?>"></span>
                       </div>
                   <div class="swim-det">
                       <div class="swim-genre">
                            <ul class="list-inline">
                               <li><?php echo e($club->MobilePhone); ?></li>
                           </ul>
                       </div>

                    </div>
                </div>
          <a href="<?php echo e(url('club/'.$club->ShortName.'/')); ?>"  class="view-btn">
              View Club
          </span>
            </a>
       </div>
   </div>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               <?php else: ?>
               <h4>No Clubs Available</h4>
               <?php endif; ?>
               </div>
           <?php if( count($clubs) == 8): ?>
           <div class="text-center">
                   <div class="load-btn wave-effect">
                       <a href="<?php echo e(url('clubs')); ?>" style="color:#000;"><span>+ load more</span></a>
                   </div>
               </div>
           <?php endif; ?>
           <br/>
           </div>
       <div role="tabpanel" class="tab-pane img-shadow" id="mainvenues">
         <div class="clearfix">
             <?php if( count($venues) > 0): ?>
                <?php $__currentLoopData = $venues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $venue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-md-3 col-xs-6 col-sm-4 book-now-img">
      <a href="javascript:;">
                    <div class="book-img-thumb">
                      <?php if($venue->ImagePath == "NA"): ?>
                       <img src="<?php echo e(url('public/images/venue.jpg')); ?>"/>
                       <?php else: ?>
                       <img src="<?php echo e($venue->ImagePath); ?>"/>
                    <?php endif; ?>
                   <div class="swim-curve">
                       <div class="swim-curve-img">
                       </div>
                       <div class="swim-rate swim-rate-orange" onclick="manageFavourites('<?php echo e(url('managefavourites/venue/'.$venue->VenueId.'/'.Session::get('user_id'))); ?>','<?php echo e($venue->VenueId); ?>')">
                        <span id="fav_<?php echo e($venue->VenueId); ?>"><i class="fa fa-heart-o"></i></span>
                       </div>
                       <div class="swim-name">
                           <span class="m-name"><?php echo e($venue->VenueName); ?></span>

                       </div>
                       <div class="swim-lang">
                           <span id="favcount_<?php echo e($venue->VenueId); ?>"></span>
                       </div>
                   <div class="swim-det">
                       <div class="swim-genre">
                            <ul class="list-inline">
                               <li><?php echo e($venue->phone); ?></li>
                           </ul>
                       </div>

                    </div>
                </div>
          <a href="<?php echo e(url('venue/'.$venue->ShortName)); ?>" class="view-btn">
               View Venue

                </span>
            </a>
       </div>
   </div>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               <?php else: ?>
               <h4>No Venues Available</h4>
               <?php endif; ?>
             </div>
           <?php if( count($venues) == 8): ?>
           <div class="text-center">
                   <div class="load-btn wave-effect">
                       <a href="<?php echo e(url('venues')); ?>" style="color:#000;"><span>+ load more</span></a>
                   </div>
               </div>
           <?php endif; ?>
           <br/>
         </div>

       <div role="tabpanel" class="tab-pane img-shadow" id="maininstructors">
          <div class="clearfix">
        <?php if( count($instructors) > 0 ): ?>
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
                View Instructor
                </span>
            </a>
       </div>
   </div>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               <?php else: ?>
               <h4>No Clubs Available</h4>
               <?php endif; ?>
           </div>
           <?php if( count($instructors) == 8): ?>
           <div class="text-center">
                   <div class="load-btn wave-effect">
                       <a href="<?php echo e(url('instructors')); ?>" style="color:#000;"><span>+ load more</span></a>
                   </div>
               </div>
           <?php endif; ?>
           <br/>
       </div>
     <div role="tabpanel" class="tab-pane img-shadow" id="mainadds">
          <div class="clearfix text-center" >
             <?php if(count($adds)>0): ?>
         <?php $__currentLoopData = $adds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $add): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-md-3 col-xs-6 col-sm-4 book-now-img">
                  <div class="book-img-thumb">
                        <?php if($add->ImagePath == "NA"): ?>
                     <img src="<?php echo e(url('public/images/advertisement.png')); ?>"/>
                     <?php else: ?>
                     <img src="<?php echo e($add->ImagePath); ?>">
                     <?php endif; ?>
                      <div class="swim-curve">
                          <div class="">
                              </div>

                          <div class="swim-name">
                              <span class="m-name"><?php echo e($add->AdvertisementType); ?></span>


                          </div>

                          <div class="">
                              <div class="swim-genreh">
                                   <ul class="list-inline">
                                      <li style="background-color: none !important;"><a href="#" ><b>Subject : </b><?php echo e($add->Subject); ?></a></li>
                                      <li  style="background-color: none !important;"><a href="#"></b>Description :</b> <?php echo e($add->Message); ?></a></li>
                                      <li  style="background-color: none !important;"><a href="#"  style="background-color: none !important;"></b>Website :</b> <?php echo e($add->Url); ?></a></li>
                                  </ul>
                              </div>

                          </div>

                      </div>
                      <a href="#" class="view-btn">
                             VIEW

                          </span>
                      </a>
                  </div>
              </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <?php else: ?>
  <h4>No Adds</h4>
  <?php endif; ?>
</div>
</div>

  <div role="tabpanel" class="tab-pane img-shadow" id="mainnews">
          <div class="clearfix text-center" >
             <?php if(count($news)>0): ?>
         <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-md-3 col-xs-6 col-sm-4 book-now-img">
                  <div class="book-img-thumb">
                     <?php if($news1->ImagePath == "NA"): ?>
                      <img src="<?php echo e(url('public/images/defaultnews.png')); ?>"/>
                      <?php else: ?>
                     <img src="<?php echo e($news1->ImagePath); ?>"/>
                     <?php endif; ?>
                      <div class="swim-curve">
                          <div class="">
                              </div>

                          <div class="swim-name">
                              <span class="m-name"><?php echo e($news1->AdvertisementType); ?></span>


                          </div>

                          <div class="">
                              <div class="swim-genreh">
                                   <ul class="list-inline">
                                      <li style="background-color: none !important;"><a href="#" ><b>Subject :</b> <?php echo e($news1->Subject); ?></a></li>
                                      <li  style="background-color: none !important;"><a href="#"><b>Description :</b> <?php echo e($news1->Message); ?></a></li>
                                      <li  style="background-color: none !important;"><a href="#"  style="background-color: none !important;"><b>Website :</b> <?php echo e($news1->Url); ?></a></li>
                                  </ul>
                              </div>

                          </div>

                      </div>
                      <a href="#" class="view-btn">
                             VIEW

                          </span>
                      </a>
                  </div>
              </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <?php else: ?>
  <h4>No Adds</h4>
  <?php endif; ?>
</div>
</div>
</div>
   </div>
</div>
   </div>
 </div>
<!-- down slider starts here -->
<div class="owl-carousel owl-theme">
<?php $__currentLoopData = $pools; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pool): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="item clearfix">
    <a href="<?php echo e(url('venue/'.$pool->ShortName)); ?>" style="color:#000;">
      <div class="col-xs-12 col-sm-12 col-md-12 text-center pool_details" style="min-height:230px;max-height:230px;">
        <div style="width:auto;height:100px;overflow:hidden;display:block;">
        <img src="public/images/swimm6.jpg" class="img-responsive img_effect" alt="pool"/>
      </div>
          <b><?php echo e($pool->VenueName); ?></b><br>
        <?php echo e($pool->AddressLine2); ?>,<?php echo e($pool->AddressLine3); ?><br>
        <?php if($pool->ParaSwimmingFacilities == "yes"): ?>
        <div class="col-xs-2 col-sm-2">
      <img src="<?php echo e(url('public/images/paraswimming.jpg')); ?>" height="30px" width="30px" alt="paraswimming" title="Paraswimming"/>
        </div>
        <?php endif; ?>
        <?php if($pool->Parking == "yes"): ?>
      <div class="col-xs-2 col-sm-2">
          <img src="<?php echo e(url('public/images/parking.jpg')); ?>" height="30px" width="30px" alt="parking" title="Parking"/>
      </div>
      <?php endif; ?>
      <?php if($pool->LadiesOnlySwimming == 'yes'): ?>
        <div class="col-xs-2 col-sm-2">
          <img src="<?php echo e(url('public/images/swimpool.jpg')); ?>" height="30px" width="30px" alt="pool" title="Ladies Only Swimming"/>
         </div>
         <?php endif; ?>
         <?php if($pool->Shower == "yes"): ?>
          <div class="col-xs-2 col-sm-2">
              <img src="<?php echo e(url('public/images/shower.png')); ?>" height="30px" width="30px" alt="shower" title="Shower"/>
           </div>
           <?php endif; ?>
           <?php if($pool->PrivateHire == "yes"): ?>
            <div class="col-xs-2 col-sm-2">
                  <img src="<?php echo e(url('public/images/privatehire.png')); ?>" height="30px" width="30px" alt="food" title="Food Court"/>
             </div>
             <?php endif; ?>
           <?php if($pool->Gym == "yes"): ?>
               <div class="col-xs-2 col-sm-2">
                  <img src="<?php echo e(url('public/images/gym.jpg')); ?>" height="30px" width="30px" alt="gym" title="Gym"/>
                </div>
                <?php endif; ?>
                <?php if($pool->Diving == "yes"): ?>
                  <div class="col-xs-2 col-sm-2">
                    <img src="<?php echo e(url('public/images/diving.png')); ?>"  height="30px" width="30px"  alt="diving" title="Diving"/>
                  </div>
                  <?php endif; ?>
                  <?php if($pool->SwimForKids = "yes"): ?>
                    <div class="col-xs-2 col-sm-2">
                      <img src="<?php echo e(url('public/images/kidszone.png')); ?>"  height="30px" width="30px"  alt="Kids Zone" title="Kids Zone"/>
                    </div>
                    <?php endif; ?>
                    <?php if($pool->Teachers == "yes"): ?>
                      <div class="col-xs-2 col-sm-2">
                        <img src="<?php echo e(url('public/images/instructors.png')); ?>"  height="30px" width="30px"  alt="Instructors" title="instructors"/>
                      </div>
                      <?php endif; ?>
                      <?php if($pool->Toilets == "yes"): ?>
                      <div class="col-xs-2 col-sm-2">
                        <img src="<?php echo e(url('public/images/instructors.png')); ?>"  height="30px" width="30px"  alt="Instructors" title="instructors"/>
                      </div>
                      <?php endif; ?>
       <?php if($pool->VisitingGallery == "yes"): ?>
         <div class="col-xs-2 col-sm-2">
                  <img src="<?php echo e(url('public/images/VisitingGallery.png')); ?>" height="30px" width="30px" alt="gym" title="Gym"/>
                </div>
                <?php endif; ?>
                </div><br>
                      <div class="row">
              <?php if($pool->LadiesOnlySwimTimes == "yes"): ?>
                 <div class="col-xs-2 col-sm-2">
                  <img src="<?php echo e(url('public/images/ladiesonlyswimmtime.png')); ?>" height="30px" width="30px" alt="gym" title="Gym"/>
                </div>
                <?php endif; ?>
             <br/>
             <p>&nbsp;</p>
             <br/>
    </div>
    </a>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
    <!--down slider ends here -->
<script>
             <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             console.log('<?php echo e(url('getimages/event/'.$event->EventId)); ?>');
             $.ajax({
                 url: '<?php echo e(url('getimages/event/'.$event->EventId)); ?>',
                 success: function(html) {
                   if(html=="no") {
                   } else {
                     console.log(html);

                       $('#image_'+<?php echo e($event->EventId); ?>).attr("src",html);
                   }
                 },
                 async:true
               });
                               console.log('<?php echo e(url('getfavourites/event/'.$event->EventId.'/'.Session::get('user_id'))); ?>');
                               $.ajax({
                                   url: '<?php echo e(url('getfavourites/event/'.$event->EventId.'/'.Session::get('user_id'))); ?>',
                                   success: function(html) {
                                     if(html=="no") {
                                     } else {
                                         var temp = new Array();
                                         temp = html.split(",");
                                         console.log(temp[0]);
                                         if(temp[0] == 'yes') {
                                           $('#fav_'+<?php echo e($event->EventId); ?>).html('<i class="fa fa-heart">');
                                         } else {
                                           $('#fav_'+<?php echo e($event->EventId); ?>).html('<i class="fa fa-heart-o">');
                                         }
                                         $('#favcount_'+<?php echo e($event->EventId); ?>).text(temp[1]+' Favourites');
                                     }
                                   },
                                   async:true
                                 });
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php $__currentLoopData = $clubs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $club): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             console.log('<?php echo e(url('getimages/club/'.$club->ClubId)); ?>');
             $.ajax({
                 url: '<?php echo e(url('getimages/club/'.$club->ClubId)); ?>',
                 success: function(html) {
                   if(html=="no") {
                   } else {
                     console.log(html);

                       $('#image_'+<?php echo e($club->ClubId); ?>).attr("src",html);
                   }
                 },
                 async:true
               });
                               console.log('<?php echo e(url('getfavourites/club/'.$club->ClubId.'/'.Session::get('user_id'))); ?>');
                               $.ajax({
                                   url: '<?php echo e(url('getfavourites/club/'.$club->ClubId.'/'.Session::get('user_id'))); ?>',
                                   success: function(html) {
                                     if(html=="no") {
                                     } else {
                                         var temp = new Array();
                                         temp = html.split(",");
                                         console.log(temp[0]);
                                         if(temp[0] == 'yes') {
                                           $('#fav_'+<?php echo e($club->ClubId); ?>).html('<i class="fa fa-heart">');
                                         } else {
                                           $('#fav_'+<?php echo e($club->ClubId); ?>).html('<i class="fa fa-heart-o">');
                                         }
                                         $('#favcount_'+<?php echo e($club->ClubId); ?>).text(temp[1]+' Favourites');
                                     }
                                   },
                                   async:true
                                 });
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php $__currentLoopData = $venues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $venue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             console.log('<?php echo e(url('getimages/venue/'.$venue->VenueId)); ?>');
             $.ajax({
                 url: '<?php echo e(url('getimages/venue/'.$venue->VenueId)); ?>',
                 success: function(html) {
                   if(html=="no") {
                   } else {
                     console.log(html);

                       $('#image_'+<?php echo e($venue->VenueId); ?>).attr("src",html);
                   }
                 },
                 async:true
               });
                               console.log('<?php echo e(url('getfavourites/venue/'.$venue->VenueId.'/'.Session::get('user_id'))); ?>');
                               $.ajax({
                                   url: '<?php echo e(url('getfavourites/venue/'.$venue->VenueId.'/'.Session::get('user_id'))); ?>',
                                   success: function(html) {
                                     if(html=="no") {
                                     } else {
                                         var temp = new Array();
                                         temp = html.split(",");
                                         console.log(temp[0]);
                                         if(temp[0] == 'yes') {
                                           $('#fav_'+<?php echo e($venue->VenueId); ?>).html('<i class="fa fa-heart">');
                                         } else {
                                           $('#fav_'+<?php echo e($venue->VenueId); ?>).html('<i class="fa fa-heart-o">');
                                         }
                                         $('#favcount_'+<?php echo e($venue->VenueId); ?>).text(temp[1]+' Favourites');
                                     }
                                   },
                                   async:true
                                 });
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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