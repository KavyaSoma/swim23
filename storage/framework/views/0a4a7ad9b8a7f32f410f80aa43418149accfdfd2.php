<?php $__env->startSection('content'); ?>

<?php if(session()->has('message.level')): ?>
    <div class="alert alert-<?php echo e(session('message.level')); ?>" style="margin:13px;text-align: center;">
    <?php echo session('message.content'); ?>

    </div>
    <?php endif; ?>
    <!-- event code starts here -->
  <div class="container" id="main-code">
      <h5 class="add_venue" style="padding:10px;"><span class="" style="font-size:17px;" ><i class="fa fa-calendar"> </i> </span> GALA</h5>
      
      <div class="row" style="border:1px solid #eee;margin-left:0px;margin-right:0px;box-shadow: 0 3px 8px #ddd;">
    <ul class="nav nav-tabs">
    <li><a data-toggle="tab" class="" href="#home"><i class="fa fa-clock-o" id="info_fa"> </i> WHEN</a></li>
    <li><a class="" data-toggle="tab" href="#menu1"><i class="fa fa-map-marker" id="info_fa"> </i> WHERE</a></li>
    <li class="active " style="margin-bottom:2px;"><a class="" data-toggle="tab" href="#menu2"><i class="fa fa-calendar" aria-hidden="true" id="info_fa"></i> EVENT</a></li>
    
  </ul>

    <div id="menu2" class="tab-pane fade in active">
        <div class="board" id="board_height">
          <div class="board-inner event_iconlist" id="icons_align">
            <ul class="nav nav-tabs nav_info" id="myTab"  style="margin:40px 25%">
                <div class="liner"></div>
               
                 <li><a href="<?php echo e(url('/subevent')); ?>" title="Sub Events">
                   <span class="round-tabs">
                     <i class="fa fa-list"></i>
                   </span>
                 </a>
                    </li>
                  <li><a href="<?php echo e(url('/schedule-event/'.$event_id)); ?>" title="Schedule">
                      <span class="round-tabs">
                           <i class="fa fa-calendar"></i>
                      </span> </a>
                      </li>

                      <li class="active"><a href="<?php echo e(url('/contact-event')); ?>" title="Contacts">
                          <span class="round-tabs">
                               <i class="fa fa-phone"></i>
                          </span>
                      </a></li>
                    

                      <li><a href="<?php echo e(url('/confirm-event')); ?>" title="Conform">
                          <span class="round-tabs">
                               <i class="fa fa-check"></i>
                          </span> </a>
                      </li>


                      </ul></div>
 <div class="tab-content tab_details">
  
            <div class="tab-pane fade in active" id="eventcontact">
                <h5  style="color:#46A6EA;text-align: center;width: 57%;"><b>Clubs</b></h5>
                <form class="form-horizontal" style="background:#fff;" method="post" action="<?php echo e(url('contact-event/club/'.$event_id)); ?>">
                    <?php echo e(csrf_field()); ?>

                  <div class="row">
                    <div class="form-group">
                      <label class="control-label col-xs-4 col-sm-4" for="txt">Club:</label>
                      <div class="col-xs-7 col-sm-6">
                        <div class="easy-autocomplete">
                        <input type="text" class="form-control" id="eventclub" name="club_name" required>
                        <div class="easy-autocomplete-container" id="eac-container-provider-remote" ><ul style="display: none;"></ul></div></div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-xs-4 col-sm-4" for="txt">Mobile:</label>
                      <div class="col-xs-7 col-sm-6">
                        <input type="text" class="form-control" id="clubmobile" name="club_mobile" required>
                        <div class="mobile-error" style="color: red;display: none">Mobile Number Should Contain 10 Numeric Characters</div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-xs-4 col-sm-4" for="email">Email:</label>
                      <div class="col-xs-7 col-sm-6">
                        <input type="email" class="form-control" id="clubemail" name="club_email" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-xs-4 col-sm-4" for="txt">Website:</label>
                      <div class="col-xs-7 col-sm-6">
                        <input type="url" class="form-control" id="clubsite" name="club_website" required>
                      </div>
                    </div>
                    <center>
                                        
                                        <button class="btn btn-primary mybtn">Save Club</button>
                                       
                                      </center>
                                    </form>  
                    <hr/>
                              <h5 style="color:#46A6EA;text-align: center;width: 57%;"><b>Contact</b></h5>
                    <form class="form-horizontal" style="background:#fff;" method="post" action="<?php echo e(url('contact-event/contact/'.$event_id)); ?>">    
                        <?php echo e(csrf_field()); ?>

                              <div class="row">
                                <div class="form-group">
                                  <label class="control-label col-xs-4 col-sm-4" for="txt">Contact:</label>
                                  <div class="col-xs-7 col-sm-6">
                                    <input type="text" class="form-control" id="econtact" name="event_contact" required>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="control-label col-xs-4 col-sm-4" for="txt">Mobile:</label>
                                  <div class="col-xs-7 col-sm-6">
                                    <input type="text" class="form-control" id="eventmobile" name="event_mobile" required>
                                    <div id="mobile-error" style="color: red;display: none">Mobile Number Should Contain 10 Numeric Characters</div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="control-label col-xs-4 col-sm-4" for="email">Email:</label>
                                  <div class="col-xs-7 col-sm-6">
                                    <input type="email" class="form-control" id="contactemail" name="event_email" required>
                                  </div>
                                </div>
                                <center>
                                        
                                        <button class="btn btn-primary mybtn">Save Contact</button>
                                       
                                      </center>
                                    </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              </div>
                              </div>
                            </div>
                            <div id="old_clubs">
                            </div>
                              <div id="old_events">
                
                </div><br>
                              </div>
    <script>

$(document).ready(function() {
var $regexname = /^([0-9]{10})$/;
  $("#clubmobile").on('keypress keydown keyup',function(){
    if(!$(this).val().match($regexname)){
      $('.mobile-error').show();
    }
    else{
      $('.mobile-error').hide();
    }
  });
  $("#eventmobile").on('keypress keydown keyup',function(){
    if(!$(this).val().match($regexname)){
      $('#mobile-error').show();
    }
    else{
      $('#mobile-error').hide();
    }
  });
  console.log('<?php echo e(url('getoldevents/clubs/'.$event_id)); ?>');
$.ajax({
    url: '<?php echo e(url('getoldevents/clubs/'.$event_id)); ?>',
    success: function(html) {
      if(html=="no") {
      } else {
        console.log(html);
        //$('#old_events').attr("src",html);
        $('#old_clubs').html(html);
      }
    },
    async:true
  });
console.log('<?php echo e(url('getoldevents/contacts/'.$event_id)); ?>');
$.ajax({
    url: '<?php echo e(url('getoldevents/contacts/'.$event_id)); ?>',
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
$(document).ready(function() {
  var options = {
    data:[
      {"FirstName": "FirstName",
       "Phone":"Phone",
       "Email":"Email"}
    ],
  url: function(phrase) {
    return "<?php echo e(url('eventcontact/')); ?>/"+phrase;
  },
  getValue: "FirstName",
   list: {
    onSelectItemEvent: function() {
      var value = $("#econtact").getSelectedItemData().Phone;
      var email = $("#econtact").getSelectedItemData().Email;
      
      $("#eventmobile").val(value).trigger("change");
      $("#contactemail").val(email).trigger("change");
     }
  }
  };
  $("#econtact").easyAutocomplete(options); 
});
</script>
                      <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>