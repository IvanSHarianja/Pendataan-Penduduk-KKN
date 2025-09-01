<?php $__env->startSection('container'); ?>
<?php if(session()->has('pesan')): ?>
<div class="alert alert-success" role="alert">
    <?php echo e(session('pesan')); ?>

</div>
<?php endif; ?>
<table class="table table-bordered">
    <center><h3>Data Status</h3></center>
    <a href="/status/create" class="btn btn-primary">Tambah Data Status</a>
    <br>
    <br>
<tr>
    <td>No</td>
    <td>Nama Status</td>
</tr>
<?php $__currentLoopData = $status_kawin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
    <td><?php echo e($loop->iteration); ?></td>
    <td><?php echo e($status->status); ?></td>
    <td>

        <form action="/status/<?php echo e($status->id); ?>" method="post" class="d-inline">
            <?php echo method_field('DELETE'); ?>
            <?php echo csrf_field(); ?>
            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data?')">Delete</button>
</form>
       
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\KKN\kependudukan-main\kependudukan-main\resources\views/dashboard/status/index.blade.php ENDPATH**/ ?>