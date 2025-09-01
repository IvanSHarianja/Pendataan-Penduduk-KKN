<?php $__env->startSection('container'); ?>
<?php if(session()->has('pesan')): ?>
<div class="alert alert-success" role="alert">
    <?php echo e(session('pesan')); ?>

</div>
<?php endif; ?>
<table class="table table-bordered">
    <center><h2>Data Kartu Keluarga</h2></center>
<tr style="background-color: #789ec6;">
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

</form>
       
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\KKN\kependudukan-main\resources\views/kartukeluarga/index.blade.php ENDPATH**/ ?>