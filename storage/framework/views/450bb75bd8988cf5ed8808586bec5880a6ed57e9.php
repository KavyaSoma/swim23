<?php $__env->startSection('content'); ?>

  <!--New hari Modal content-->
<div class="modal fade" id="myModalh" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h3 style="color:#46A6EA;background-color:#fff;padding-left:9px;">Previous Entries</h3>
</div>
<div class="modal-body">
 <div id="old_events">
                
                </div>
</div>
<!--<div class="modal-footer">
    <button class="btn btn-primary col-sm-offset-5 col-sm-2 mybtn" type="submit">Post</button>

</div>--></div>
</div></div>

<!-- model popup ends here -->
    <div class="container mycntn">
   <ol class="breadcrumb" style="border:1px solid #46A6EA;color:#46A6EA;">
  <li class="breadcrumb-item"><a style="color:#777;" href="<?php echo e(url('/')); ?>">Home</a></li>
  <li class="breadcrumb-item"><a style="color:#777;" href="<?php echo e(url('/addvenue/'.$venue_id)); ?>">Add Venue</a></li>
  <li class="breadcrumb-item"><a style="color:#777;" href="<?php echo e(url('/venuepool/'.$venue_id)); ?>">Venue Pool</a></li>
  <li class="breadcrumb-item">Venue Contact</li>
  
 </ol>
 <?php if(session()->has('message.level')): ?>
    <div class="alert alert-<?php echo e(session('message.level')); ?>" style="margin:13px;text-align: center;">
    <?php echo session('message.content'); ?>

    </div>
    <?php endif; ?>
<?php if(count($contacts)>0): ?>
 <div class="row"><h4 class="col-sm-9 " style="color:green;text-align:center;"></h4>
 <button class="col-sm-2 btn btn-warning" data-toggle="modal" data-target="#myModalh"><i class="fa fa-bars"></i> Previous Entries</button></div>
 <?php endif; ?>
      <div class="row">
             <div class="col-xs-12 col-sm-3 kin_photo">
     <div class="fb-profile" style="margin-top:8%;">
     <?php if(count($venue_image)>0): ?>
 <img alt="Profile image" class="img-rounded profile_image" src="<?php echo e($venue_image[0]->ImagePath); ?>">
 <?php endif; ?>     
</div>
</div>
<div class="col-sm-8 col-xs-12">
                 <!-- <h2>Welcome to IGHALO!<sup>™</sup></h2>-->
                 <div class="board-inner">
                 <ul class="nav nav-tabs nav_info" id="myTab">
                 <div class="liner"></div>
                  <li>
                  <a href="" class="tab-one" title="Venue Summary">
                   <span class="round-tabs">
                           <i class="fa fa-list"></i>
                   </span>
               </a></li>

               <li><a href="" title="Pool Information">
                  <span class="round-tabs">
                      <i class="fa fa-info"></i>
                  </span>
        </a>
              </li>

                  <li class="active"><a href="<?php echo e(url('venueaddress/'.$venue_id)); ?>" data-toggle="tab" title="Contact">
                  <span class="round-tabs">
                       <i class="fa fa-phone"></i>
                  </span> </a>
                  </li>

                  <li><a href="" title="Open hours & Facilities">
                      <span class="round-tabs">
                           <i class="fa fa-clock-o"></i>
                      </span>
                  </a></li>
                  <li><a href="" title="Web site & Social Links">
                      <span class="round-tabs">
                           <i class="fa fa-share-alt"></i>
                      </span>
                  </a></li>

                  <li><a href="" data-toggle="tab" title="Confirm Venue">
                      <span class="round-tabs">
                           <i class="fa fa-check"></i>
                      </span> </a>
                  </li>

                  </ul></div>
                   <div class="tab-pane fade in active" id="venuecontact">

                      <form class="form-horizontal" style="background:#fff;padding:35px;" method="post" action="<?php echo e(url('venuecontact/'.$venue_id)); ?>">
                        <?php echo e(csrf_field()); ?>

                                      <h5 style="color:#46A6EA"><b>Contact</b></h5><hr>
                                      <?php if($show=="yes"): ?>
                                      <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="row">
                                      <div class="form-group">
                                           <label class="control-label col-xs-4 col-sm-3" for="txt">Contact Name:</label>
                                        <div class="col-xs-8 col-sm-8">
                                          <input type="hidden" id="show" value="<?php echo e($show); ?>">
                                          <input type="hidden" name="contact_id" value="<?php echo e($contact->ContactId); ?>">
                                        <input type="text" class="form-control" id="venue-contact" name="contact" value="<?php echo e($contact->FirstName); ?>"required>
                                        <div id="contact-error"></div>
                                       </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="control-label  col-xs-4 col-sm-3" for="email">Mobile:</label>
                                      <div class="col-xs-8 col-sm-8">
                                        <input type="text" class="form-control" id="venue-mobile" name="mobile" value="<?php echo e($contact->Phone); ?>" required>
                                       <div id="mobile-error"></div>
                                      </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="control-label  col-xs-4 col-sm-3" for="email">Email:</label>
                                      <div class="col-xs-8 col-sm-8">
                                          <input type="email" class="form-control" id="venue-email" name="email" value="<?php echo e($contact->Email); ?>" required>
                                      </div>
                                      </div>
                                       <!-- <button class="btn btn-primary pull-right"><i class="fa fa-plus"></i>Add Another Contact</button><br>-->
 
                               
                                 </div>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                 <?php else: ?>
                                 <div class="row">
                                      <div class="form-group">
                                           <label class="control-label col-xs-4 col-sm-3" for="txt">Contact Name:</label>
                                        <div class="col-xs-8 col-sm-8">
                                          <input type="hidden" id="show" value="<?php echo e($show); ?>">
                                        <input type="text" class="form-control" id="venue-contact" name="contact" value="<?php echo e(old('contact')); ?>"required>
                                        <div id="contact-error"></div>
                                       </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="control-label  col-xs-4 col-sm-3" for="email">Mobile:</label>
                                      <div class="col-xs-8 col-sm-8">
                                        <input type="text" class="form-control" id="venue-mobile" name="mobile" value="<?php echo e(old('mobile')); ?>" required>
                                       <div id="mobile-error"></div>
                                      </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="control-label  col-xs-4 col-sm-3" for="email">Email:</label>
                                      <div class="col-xs-8 col-sm-8">
                                          <input type="email" class="form-control" id="venue-email" name="email" value="<?php echo e(old('email')); ?>" required>
                                      </div>
                                      </div>
                                       <?php endif; ?>
                                       <!-- <button class="btn btn-primary pull-right"><i class="fa fa-plus"></i>Add Another Contact</button><br>-->
                              <div class="col-sm-offset-5 col-xs-offset-3">
                                <?php if(count($pools)>0): ?>
              <a href="<?php echo e(url('/venuepool/'.$venue_id)); ?>" class="btn btn-primary mybtn" >Back</a>
              <?php else: ?>
               <a href="<?php echo e(url('/venuepool/'.$venue_id)); ?>" class="btn btn-primary mybtn" >Back</a>
               <?php endif; ?>
         <button class="btn btn-primary mybtn" id="savecontact">Save</button>
       </form>
       
       <?php if(count($contacts)>0): ?>
         <a href="<?php echo e(url('venuetimings/'.$venue_id)); ?>" class="btn btn-primary mybtn" >Next</a>
         <?php else: ?>
         <a href="javascript:;" class="btn btn-primary mybtn disabled">Next</a>
         <?php endif; ?>

</div>
                               
                                 </div>
                                
                                 </form>
                           </div>
                         </div>
                       </div>
  
                     </div>
  <script>
$('#savecontact').ready(function() {

$(document).ready(function() {
console.log('<?php echo e(url('getoldvenues/address/'.$venue_id)); ?>');
$.ajax({
    url: '<?php echo e(url('getoldvenues/address/'.$venue_id)); ?>',
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

$("#venue-mobile").ready(function(){
  var $regexname = /^([0-9]{7,15})$/;
  $("#venue-mobile").on('keypress keydown keyup',function(){
    if(!$(this).val().match($regexname)){
      $('#mobile-error').html("<span style='color:red'>Mobile Number should contain only digits.</span>");
      $('#savecontact').attr('disabled', 'disabled');
    }
    else{
      $('#mobile-error').html("");
      $("#savecontact").removeAttr('disabled');
    }
  });
});
$(document).ready(function() {
  var options = {
    data:[
      {"FirstName": "FirstName",
       "Phone":"Phone",
       "Email":"Email"}
    ],
  url: function(phrase) {
    return "<?php echo e(url('contactvenue/contact')); ?>/"+phrase;
  },
  getValue: "FirstName",
   list: {
    onSelectItemEvent: function() {
      var value = $("#venue-contact").getSelectedItemData().Phone;
      var email = $("#venue-contact").getSelectedItemData().Email;
      
      $("#venue-mobile").val(value).trigger("change");
      $("#venue-email").val(email).trigger("change");
     }
  }
  };
  $("#venue-contact").easyAutocomplete(options); 
});
});
</script> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>