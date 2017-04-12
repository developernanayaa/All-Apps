<!--Content to serve-->
<?php $__env->startSection('killer'); ?>

    <p>Welcome to our task app!!</p>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.parent', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>