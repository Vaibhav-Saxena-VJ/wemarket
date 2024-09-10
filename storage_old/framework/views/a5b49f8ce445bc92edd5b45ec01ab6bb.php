<?php $__env->startSection('email_css'); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('email_content'); ?>
    
    <h3>User <?php echo e($mailData['email']); ?> is Subscribe Your News Letter</h3>
    <h4>User IP is <?php echo e($mailData['ip_address']); ?></h4>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.mail_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wemarketresearch/public_html/resources/views/front/Mails/mailToAdminNewsLetter.blade.php ENDPATH**/ ?>