<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.js"></script>
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

<script>


  <?php if(Session::has('success')): ?>
  		toastr.success("<?php echo e(Session::get('success')); ?>");
  <?php endif; ?>


  <?php if(Session::has('info')): ?>
  		toastr.info("<?php echo e(Session::get('info')); ?>");
  <?php endif; ?>


  <?php if(Session::has('warning')): ?>
  		toastr.warning("<?php echo e(Session::get('warning')); ?>");
  <?php endif; ?>


  <?php if(Session::has('error')): ?>
  		toastr.error("<?php echo e(Session::get('error')); ?>");
  <?php endif; ?>

</script><?php /**PATH /home/wemarketresearch/public_html/resources/views////////front/layout/notifications.blade.php ENDPATH**/ ?>