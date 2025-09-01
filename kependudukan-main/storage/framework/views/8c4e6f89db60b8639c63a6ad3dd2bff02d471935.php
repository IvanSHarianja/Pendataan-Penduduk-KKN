<?php $__env->startSection('container'); ?>
<?php if(session()->has('pesan')): ?>
<div class="alert alert-success" role="alert">
    <?php echo e(session('pesan')); ?>

</div>
<?php endif; ?>
<table class="table table-bordered">
    <center><h2>Data Kelurahan</h2></center>
<tr style="background-color: #789ec6;">
    <td>No</td>
    <td>Nama Kelurahan</td>
    <td>Jumlah Penduduk</td>
</tr>
<?php $__currentLoopData = $kelurahans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kelurahan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
    <td><?php echo e($loop->iteration); ?></td>
    <td><?php echo e($kelurahan->nama_kelurahan); ?></td>
    <td><?php echo e($kelurahan->jumlah_penduduk); ?></td>
    <td>
    
</form>
       
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\KKN\kependudukan-main\kependudukan-main\resources\views/kelurahan/index.blade.php ENDPATH**/ ?>