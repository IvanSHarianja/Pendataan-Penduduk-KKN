<?php $__env->startSection('container'); ?>
    <h3>Dashboard</h3>
    <?php if(session()->has('error_succes')): ?>
    <div class="alert alert-success" role="alert">
      <?php echo e(session ('error_succes')); ?>

    </div>    
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\KKN\kependudukan-main\resources\views/dashboard/index.blade.php ENDPATH**/ ?>