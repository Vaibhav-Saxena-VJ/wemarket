<?php echo $__env->make('front.include.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent('content'); ?>

<?php echo $__env->make('front.include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent('script'); ?>

</body>

</html><?php /**PATH /home/wemarketresearch/public_html/resources/views/front/layout/layout.blade.php ENDPATH**/ ?>