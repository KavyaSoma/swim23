<?php $__env->startSection('content'); ?>

<?php if(session()->has('message.level')): ?>
    <div class="alert alert-<?php echo e(session('message.level')); ?>" style="margin:13px;text-align: center;">
    <?php echo session('message.content'); ?>

    </div>
    <?php endif; ?>
    <!-- event code starts here -->
 <div class="container" id="main-code">
      
      <div id="old_events">
                
                </div><br>
                <h5 class="add_venue" style="padding:10px;"><span class="" style="font-size:17px;" ><i class="fa fa-calendar"> </i> </span> GALA</h5>
      <div class="row" style="border:1px solid #eee;margin-left:0px;margin-right:0px;box-shadow: 0 3px 8px #ddd;">
    <ul class="nav nav-tabs">
    <li ><a data-toggle="tab" class="" href="#home"><i class="fa fa-clock-o" id="info_fa"> </i> WHEN</a></li>
    <li><a class="" data-toggle="tab" href="#menu1"><i class="fa fa-map-marker" id="info_fa"> </i> WHERE</a></li>
    <li class="active " style="margin-bottom:2px;"><a class="" data-toggle="tab" href="#menu2"><i class="fa fa-calendar" aria-hidden="true" id="info_fa"></i> EVENT</a></li>
    <?php if(count($contacts)>0): ?>
    <li><a class="btn btn-primary" href="<?php echo e(url('edit-eventcontact/'.$event_id.'/'.$contacts[0]->ContactId)); ?>"> Edit Contact</a></li>
    <?php else: ?>
    <li><a class="btn btn-primary" href="<?php echo e(url('contact--event/'.$event_id)); ?>"> Add Contact</a></li>
    <?php endif; ?>
  </ul>

    <div id="menu2" class="tab-pane fade in active">
        <div class="board" id="board_height">
          <div class="board-inner event_iconlist" id="icons_align">
            <ul class="nav nav-tabs nav_info" id="myTab"  style="margin:40px 25%">
                <div class="liner"></div>
               
                 <li><a href="" title="Sub Events">
                   <span class="round-tabs">
                     <i class="fa fa-list"></i>
                   </span>
                 </a>
                    </li>
                  <li><a href="" title="Schedule">
                      <span class="round-tabs">
                           <i class="fa fa-calendar"></i>
                      </span> </a>
                      </li>

                      <li class="active"><a href="" title="Contacts">
                          <span class="round-tabs">
                               <i class="fa fa-phone"></i>
                          </span>
                      </a></li>
                    

                      <li><a href="" title="Conform">
                          <span class="round-tabs">
                               <i class="fa fa-check"></i>
                          </span> </a>
                      </li>


                      </ul></div>
 <div class="tab-content tab_details">
  
            <div class="tab-pane fade in active" id="eventcontact">
                <h5 style="color:#46A6EA"><b>Clubs</b></h5>
           <?php if(count($clubs)>0): ?>
                <form class="form-horizontal" style="background:#fff;" method="post" action="<?php echo e(url('edit-eventclub/'.$event_id.'/'.$clubid)); ?>">
                  <?php echo e(csrf_field()); ?>

                  <div class="event-clubs">
                  <?php $__currentLoopData = $clubs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $club): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div id="event-details">
                  <div class="row">
                    <div id="event-form-group">
                    <div class="form-group">
                      <label class="control-label col-xs-4 col-sm-4" for="txt">Club Name:</label>
                      <div class="col-xs-7 col-sm-6">
                        <input type="hidden" name="club_id[]" value="<?php echo e($club->ClubId); ?>">
                        <input type="text" class="form-control" id="event_club_name" name="club_name" pattern="([A-zÀ-ž\s]){3,25}" value="<?php echo e($club->ClubName); ?>" required>
                        <span class="eventclub" style="color: red;display: none">Club Name should contain 5-25 characters</span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-xs-4 col-sm-4" for="txt">Mobile:</label>
                      <div class="col-xs-7 col-sm-6">
                        <input type="text" class="form-control" id="event-mobile" name="club_mobile" pattern="([0-9]){10}" value="<?php echo e($club->MobilePhone); ?>" required>
                        <span class="clubmobile" style="color: red;display: none">Club Mobile should contain 10 Numbers</span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-xs-4 col-sm-4" for="email">Email:</label>
                      <div class="col-xs-7 col-sm-6">
                        <input type="email" class="form-control" id="email" name="club_email" value="<?php echo e($club->Email); ?>" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-xs-4 col-sm-4" for="txt">Website:</label>
                      <div class="col-xs-7 col-sm-6">
                        <input type="url" class="form-control" id="txt" name="club_website" value="<?php echo e($club->Website); ?>" required>
                      </div>
                    </div> 
                  </div>
                </div>
                </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                  </div>
                                 <center>
                                        <button class="btn btn-primary mybtn">Save Club</button>
                                      </center>
                                   </form>
                                    <hr> 
                                        <form class="form-horizontal" style="background:#fff;" method="post" action="<?php echo e(url('edit-eventclub/'.$event_id.'/'.$clubid)); ?>">
                  <?php echo e(csrf_field()); ?>

                  <div class="row">
                    <div id="event-form-group">
                    <div class="form-group">
                      <label class="control-label col-xs-4 col-sm-4" for="txt">Club Name:</label>
                      <div class="col-xs-7 col-sm-6">
                        <input type="text" class="form-control" id="eventclub" name="clubname" pattern="([A-zÀ-ž\s]){3,25}"  required>
                       </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-xs-4 col-sm-4" for="txt">Mobile:</label>
                      <div class="col-xs-7 col-sm-6">
                        <input type="text" class="form-control" id="clubmobile" name="clubmobile" pattern="([0-9]){10}" required>
                        <span class="clubmobile" style="color: red;display: none">Club Mobile should contain Numeric Characters</span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-xs-4 col-sm-4" for="email">Email:</label>
                      <div class="col-xs-7 col-sm-6">
                        <input type="email" class="form-control" id="clubemail" name="clubemail" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-xs-4 col-sm-4" for="txt">Website:</label>
                      <div class="col-xs-7 col-sm-6">
                        <input type="url" class="form-control" id="clubsite" name="clubwebsite" required>
                      </div>
                    </div> 
                  </div>
                </div>
                </div>
                  </div>
                                 <center>
                                        <button class="btn btn-primary mybtn">Save Club</button>
                                        </form>
                                      </center>
                                     <form method="get" action="<?php echo e(url('editpage/event/schedule/'.$event_id)); ?>">
                        <center><button type="submit" class="btn btn-primary mybtn">Back</button></center>
                      </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div id="old_entries">
                              </div>
                            </div>
<script>
  console.log('<?php echo e(url('getoldevents/clubs/'.$event_id)); ?>');
$.ajax({
    url: '<?php echo e(url('getoldevents/clubs/'.$event_id)); ?>',
    success: function(html) {
      if(html=="no") {
      } else {
        console.log(html);
        //$('#old_events').attr("src",html);
        $('#old_events').html(html);
      }
    },
    async:true
  });
               
  $(document).ready(function() {
  var options = {
     data:[
      {"ClubName": "ClubName",
       "MobilePhone":"MobilePhone",
       "Email":"Email",
       "Website":"Website"}
    ],
  url: function(phrase) {
    return "<?php echo e(url('eventclub/')); ?>/"+phrase;
  },
  getValue: "ClubName",
   list: {
    onSelectItemEvent: function() {
      var value = $("#eventclub").getSelectedItemData().MobilePhone;
      var email = $("#eventclub").getSelectedItemData().Email;
      var web = $("#eventclub").getSelectedItemData().Website;
     
      $("#clubmobile").val(value).trigger("change");
      $("#clubemail").val(email).trigger("change");
      $("#clubsite").val(web).trigger("change");
    }
  }
  };
  $("#eventclub").easyAutocomplete(options); 
});
</script>
<?php $__env->stopSection(); ?>                  

<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>