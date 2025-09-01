<?php $__env->startSection('container'); ?>

<div class=" row justify-content-center" >
	<div class="col-lg-6">
		<center><h3>Entri Data Kartu Keluarga</h3></center><br>
	<form action ="/kk" method="post">
		<?php echo csrf_field(); ?>
		<div class="mb-3">
		    <label for="exampleFormControlInput1" class="form-label">No KK</label>
		    <input type="text" class="form-control <?php $__errorArgs = ['no_kk'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="no_kk" name="no_kk" value="<?php echo e(old('no_kk')); ?>">
		    <?php $__errorArgs = ['no_kk'];
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
		    <label for="exampleFormControlInput1" class="form-label">Nama Kepala Keluarga</label>
		    <input type="text" class="form-control <?php $__errorArgs = ['nama_kepala'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="nama_kepala" name="nama_kepala" value="<?php echo e(old('nama_kepala')); ?>">
		    <?php $__errorArgs = ['nama_kepala'];
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
		    <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
		    <textarea class="form-control <?php $__errorArgs = ['alamat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="alamat" name="alamat" rows="3"><?php echo e(old('alamat')); ?></textarea>
		        <?php $__errorArgs = ['alamat'];
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
            <button class="btn btn-primary" name="submit" type="submit">Create KK</button>
        </div>
     </form>
	</div>
</div>
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\KKN\kependudukan-main\kependudukan-main\resources\views/dashboard/kartukeluarga/create.blade.php ENDPATH**/ ?>