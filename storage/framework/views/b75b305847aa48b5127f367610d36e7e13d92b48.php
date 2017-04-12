<!Doctype>
<html>
    <head>
        <title>Task App</title>
        <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('css/font-awesome.min.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('css/bootstrap.min.css')); ?>">
    </head>
<body>

    <div class="container">
        <div class="col-md-12">
            <!--Place navigation bar-->
        <?php echo $__env->make('partials.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-3">
                <?php if(Session::has('success')): ?>
                    <div class="alert alert-success"><?php echo e(Session::get('success')); ?></div>
                <?php endif; ?>
                <?php if(Session::has('danger')): ?>
                    <div class="alert alert-danger"><?php echo e(Session::get('danger')); ?></div>
                <?php endif; ?>
                <?php if(Session::has('info')): ?>
                    <div class="alert alert-info"><?php echo e(Session::get('info')); ?></div>
                <?php endif; ?>
                <?php if(Session::has('warning')): ?>
                    <div class="alert alert-warning"><?php echo e(Session::get('warning')); ?></div>
                <?php endif; ?>
            </div>

            <div class="col-md-12">
                <!--Content Area-->
                <?php echo $__env->make('shared.noty', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                <?php echo $__env->yieldContent('killer'); ?>
            </div>
        </div>


    </div>


</body>

<script src="<?php echo e(URL::asset('js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('js/custom.js')); ?>"></script>
</html>