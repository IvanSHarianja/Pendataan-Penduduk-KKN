<?php $__env->startSection('container'); ?>
<?php if(session()->has('pesan')): ?>
<div class="alert alert-success" role="alert">
    <?php echo e(session('pesan')); ?>

</div>
<?php endif; ?>
<table class="table table-bordered">
    <center><h2>Data Penduduk</h2></center>
<tr style="background-color: #789ec6;">
    <td>No</td>
    <!-- <td>NIK</td> -->
    <td>Nama</td>
    <td>Jenis Kelamin</td>
    <!-- <td>Tanggal Lahir</td> -->
    <td>Agama</td>
    <td>Status</td>
    <td>Alamat</td>
    <!-- <td>Telp</td> -->
    <td>Kelurahan</td>
</tr>
<?php $__currentLoopData = $penduduks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $penduduk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
    <td><?php echo e($loop->iteration); ?></td>
    <!-- <td><?php echo e($penduduk->nik); ?></td> -->
    <td><?php echo e($penduduk->nama); ?></td>
    <td><?php echo e($penduduk->jenis_kelamin); ?></td>
    <!-- <td><?php echo e($penduduk->tanggal_lahir); ?></td> -->
    <td><?php echo e($penduduk->agama->nama_agama); ?></td>
    <td><?php echo e($penduduk->status_kawin->status); ?></td>
    <td><?php echo e($penduduk->alamat); ?> </td>
    <!-- <td><?php echo e($penduduk->telp); ?> </td> -->
    <td><?php echo e($penduduk->kelurahan->nama_kelurahan); ?> </td>
    <td>

</form>
       
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<?php echo e($penduduks->links('pagination::bootstrap-5')); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\KKN\kependudukan-main\kependudukan-main\resources\views/penduduk/index.blade.php ENDPATH**/ ?>