<?php $__env->startSection('email_css'); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('email_content'); ?>

    <div style="width: 100%; display: block; margin-bottom: 10px;">
        <div style="font-size: 25px;color: #000;font-weight: 900;">
            <p>We Market Research News Letter</p>
        </div>
    </div>
    <div style="width: 100%; margin-bottom: 30px;">
        <div style="font-size: 16px; color: #000;">
            <p style="margin-bottom: 0px;margin-top: 5px;">Hello ! <?php echo e($mailData['email']); ?>,</p>
            <p style="margin-bottom: 0px;margin-top: 5px;">Thank you for Subscribe News Letter of We Market Research. Your inquiry is valuable to us, and we'll be addressing it promptly.</p>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.mail_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wemarketresearch/public_html/resources/views/front/Mails/mailToUserNewsLetter.blade.php ENDPATH**/ ?>