<?php $__env->startSection('container'); ?>
<?php if(session()->has('pesan')): ?>
<div class="alert alert-success" role="alert">
    <?php echo e(session('pesan')); ?>

</div>
<?php endif; ?>
<table class="table table-bordered">
    <center><h3>Data Kelahiran</h3></center>
    <a href="/kelahiran/create" class="btn btn-primary">Tambah Data Kelahiran</a>
    <br><br>
<tr>
    <td>No</td>
    <td>Nama</td>
    <td>Jenis Kelamin</td>
    <td>Tanggal Lahir</td>
    <td>Tempat Lahir</td>
    <td>Nama Ayah</td>
    <td>Nama Ibu</td>
    <td>Alamat</td>
</tr>
<?php $__currentLoopData = $kelahirans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kelahiran): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
    <td><?php echo e($loop->iteration); ?></td>
    <td><?php echo e($kelahiran->nama); ?></td>
    <td><?php echo e($kelahiran->jenis_kelamin); ?></td>
    <td><?php echo e($kelahiran->tanggal); ?></td>
    <td><?php echo e($kelahiran->tempat); ?></td>
    <td><?php echo e($kelahiran->nama_ayah); ?></td>
    <td><?php echo e($kelahiran->nama_ibu); ?></td>
    <td><?php echo e($kelahiran->alamat); ?></td>
    <td>
        <a href="/kelahiran/<?php echo e($kelahiran->id); ?>/edit" class="btn btn-warning btn-sm">Edit</a>
        <form action="/kelahiran/<?php echo e($kelahiran->id); ?>" method="post" class="d-inline">
            <?php echo method_field('DELETE'); ?>
            <?php echo csrf_field(); ?>
            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data?')">Delete</button>
</form>
       
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\KKN\kependudukan-main\resources\views/dashboard/kelahiran/index.blade.php ENDPATH**/ ?>