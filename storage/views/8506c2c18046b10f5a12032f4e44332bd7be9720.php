<?php $__env->startSection('content'); ?>
    <?php foreach($users as $user): ?>
        <h2><?php echo e($user); ?></h2>
    <?php endforeach; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>