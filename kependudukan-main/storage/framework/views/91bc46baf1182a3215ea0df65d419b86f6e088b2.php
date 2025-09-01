<?php $__env->startSection('container'); ?>

<div class=" row justify-content-center" >
	<div class="col-lg-6">
		<center><h3>Entri Data Kelurahan</h3></center><br>
	<form action ="/kelurahan" method="post">
		<?php echo csrf_field(); ?>
		<div class="mb-3">
		    <label for="exampleFormControlInput1" class="form-label">Nama Kelurahan</label>
		    <input type="text" class="form-control <?php $__errorArgs = ['nama_kelurahan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="nama_kelurahan" name="nama_kelurahan" value="<?php echo e(old('nama_kelurahan')); ?>">
		    <?php $__errorArgs = ['nama_kelurahan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
		        <div class="invalid-feedback">
		  	        <?php echo e($message); ?>

		        </div>
		    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
		</div>
		
		<div class="mb-3">
		    <label for="exampleFormControlInput1" class="form-label">Jumlah Penduduk</label>
		    <input type="text" class="form-control <?php $__errorArgs = ['jumlah_penduduk'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="jumlah_penduduk" name="jumlah_penduduk" value="<?php echo e(old('jumlah_penduduk')); ?>">
		    <?php $__errorArgs = ['jumlah_penduduk'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
		        <div class="invalid-feedback">
		  	        <?php echo e($message); ?>

		        </div>
		    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
		</div>

		<div class="mb-3">
            <label  class="form-label"></label>
            <button class="btn btn-primary" name="submit" type="submit">Create Kelurahan</button>
        </div>
     </form>
	</div>
</div>
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\KKN\kependudukan-main\kependudukan-main\resources\views/dashboard/kelurahan/create.blade.php ENDPATH**/ ?>