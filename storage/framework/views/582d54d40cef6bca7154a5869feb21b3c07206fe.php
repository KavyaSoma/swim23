<div class="col-xs-12 col-sm-4">
<img class="img-responsive event_image" id="event_image" src="<?php echo e(url('public/images/event.jpg')); ?>" alt="event"/>
<?php if(count($eventsubscriptions)>0): ?>
<?php if($eventsubscriptions[0]->Status == 'pending'): ?>
<center><a href="<?php echo e(url('subscribed/'.$events[0]->ShortName)); ?>"><button class="btn btn-primary" style="margin-top: 20px">Subscribed</button></a>
<?php elseif($eventsubscriptions[0]->Status == 'rejected'): ?>
<a href="<?php echo e(url('subscribed/'.$events[0]->ShortName)); ?>"><button class="btn btn-primary" style="margin-top: 20px">Rejected</button></a>
 <?php elseif($eventsubscriptions[0]->Status == 'accepted'): ?>
 <a href="<?php echo e(url('subscribed/'.$events[0]->ShortName)); ?>"><button class="btn btn-primary" style="margin-top: 20px">Accepted</button></a></center>
<?php endif; ?>
<?php else: ?>
 <center><a href="<?php echo e(url('subscribed/'.$events[0]->ShortName)); ?>"><button class="btn btn-primary" style="margin-top: 20px">Subscribe</button></a>
<?php endif; ?>
&nbsp;

<?php if(count($flag)>0): ?>
 <div class="col-sm-3"><center><a href="<?php echo e(url('event/'.$events[0]->ShortName)); ?>"><button class="btn btn-primary" style="margin-top: 20px"><i class = "fa fa-flag"></i> Flaged</button></a></div>
     <?php else: ?>
      <div class="col-sm-3"><center><a href="<?php echo e(url('event/'.$events[0]->ShortName.'/flag')); ?>"><button class="btn btn-primary" style="margin-top: 20px"><i class = "fa fa-flag"></i> Flag</button></a></div>
          <?php endif; ?>
</div>

<script>
           
            console.log('<?php echo e(url('getimages/event/'.$events[0]->EventId)); ?>');
            $.ajax({
                url: '<?php echo e(url('getimages/event/'.$events[0]->EventId)); ?>',
                success: function(html) {
                  if(html=="no") {
                  } else {
                    console.log(html);

                      $('#évent_image').attr("src",html);
                  }
                },
                async:true
              });
</script>