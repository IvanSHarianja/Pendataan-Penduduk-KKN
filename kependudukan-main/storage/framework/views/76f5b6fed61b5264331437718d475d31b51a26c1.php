<?php $__env->startSection('container'); ?>
<?php if(session()->has('pesan')): ?>
<div class="alert alert-success" role="alert">
    <?php echo e(session('pesan')); ?>

</div>
<?php endif; ?>
<table class="table table-bordered">
    <center><h2>Data Kematian</h2></center>
<tr style="background-color: #789ec6;">
    <td>No</td>
    <!-- <td>NIK</td> -->
    <td>Nama</td>
    <td>Umur</td>
    <td>Jenis Kelamin</td>
    <td>Tanggal Lahir</td>
    <td>Tanggal Meninggal</td>
    <td>Jam Meninggal</td>
    <td>Keterangan</td>
</tr>
<?php $__currentLoopData = $kematians; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kematian): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
    <td><?php echo e($loop->iteration); ?></td>
    <!-- <td><?php echo e($kematian->nik); ?></td> -->
    <td><?php echo e($kematian->nama); ?></td>
    <td><?php echo e($kematian->umur); ?></td>
    <td><?php echo e($kematian->jenis_kelamin); ?></td>
    <td><?php echo e($kematian->tanggal_lahir); ?></td>
    <td><?php echo e($kematian->tanggal_meninggal); ?></td>
    <td><?php echo e($kematian->jam); ?></td>
    <td><?php echo e($kematian->keterangan); ?></td>
    <td>
       
</form>
       
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\KKN\kependudukan-main\kependudukan-main\resources\views/kematian/index.blade.php ENDPATH**/ ?>