<?php $__env->startSection('killer'); ?>

    <div class="col-md-offset-3">
        <div class="col-md-9">
           <table class="table table-responsive table-striped">
               <thead>
                <th>Name</th>
                <th>Status</th>
                <th>Time Elapsed</th>
                <th>Edit</th>
                <th>Delete</th>
               </thead>
               <tbody>
            <?php if(!empty($tasks)): ?>
                <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <tr>
                    <td><?php echo e($task->name); ?></td>
                    <td><?php echo e($task->status); ?></td>
                    <td><?php echo e($task->created_at->diffForHumans()); ?></td>
                    <td><a href="<?php echo e(route('add_task.edit',$task->id)); ?>" class="btn btn-primary fa fa-edit"></a></td>
                       <?php echo Form::open(array("route"=>["add_task.destroy",$task->id],'method'=>'delete')); ?>

                    <td><button  type="submit" class="btn btn-danger" ><span class="fa fa-trash-o fa-2x"></span></button></td>

                    <?php echo Form::close(); ?>



                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
             <?php endif; ?>
               </tbody>
           </table>
<?php echo e(Session::get('error')); ?>

        </div>

    </div>



    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.parent', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>