<?php $__env->startSection('killer'); ?>

    <div class="col-md-offset-3">
        <div class="col-md-6">
            <?php echo Form::open(['route'=>'add_task.store','class'=>'form']); ?>

            <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
            <?php echo Form::label('Name of Task'); ?>


            <?php echo Form::text('name',null,['class'=>'form-control']); ?>

                <?php if($errors->has('name')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('name')); ?></strong>
                    </span>
                <?php endif; ?>
            </div>
            <?php echo Form::label('Status'); ?>


            <?php echo Form::select('status',['completed'=>'Completed','uncompleted'=>'Un-completed'],'uncompleted',['class'=>'form-control']); ?>

            <br>
            <?php echo Form::submit('Save',['class'=>'btn btn-primary btn-block']); ?>

            <?php echo Form::close(); ?>


        </div>

    </div>



    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.parent', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>