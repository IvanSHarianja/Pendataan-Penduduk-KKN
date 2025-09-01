<?php $__env->startSection('container'); ?>
<?php if(session()->has('pesan')): ?>
<div class="alert alert-success" role="alert">
    <?php echo e(session('pesan')); ?>

</div>
<?php endif; ?>
<table class="table table-bordered">
    <center><h3>Data Kartu Keluarga</h3></center>
    <a href="/kk/create" class="btn btn-primary">Tambah Data Kartu Keluarga</a>
    <br><br>
<tr>
    <td>No</td>
    <td>No KK</td>
    <td>Nama Kepala Keluarga</td>
    <td>Alamat</td>
</tr>
<?php $__currentLoopData = $kartu_keluargas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
    <td><?php echo e($loop->iteration); ?></td>
    <td><?php echo e($kk->no_kk); ?></td>
    <td><?php echo e($kk->nama_kepala); ?></td>
    <td><?php echo e($kk->alamat); ?></td>
    <td>

        <a href="/kk/<?php echo e($kk->id); ?>/edit" class="btn btn-warning btn-sm">Edit</a>
        <form action="/kk/<?php echo e($kk->id); ?>" method="post" class="d-inline">
            <?php echo method_field('DELETE'); ?>
            <?php echo csrf_field(); ?>
            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data?')">Delete</button>
</form>
       
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\KKN\kependudukan-main\kependudukan-main\resources\views/dashboard/kartukeluarga/index.blade.php ENDPATH**/ ?>