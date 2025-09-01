<?php $__env->startSection('container'); ?>

<div class=" row justify-content-center" >
	<div class="col-lg-6">
		<center><h3>Entri Data Kematian</h3></center><br>
	<form action ="/kematian" method="post">
		<?php echo csrf_field(); ?>
		<div class="mb-3">
		    <label for="exampleFormControlInput1" class="form-label">NIK</label>
		    <input type="text" class="form-control <?php $__errorArgs = ['nik'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="nik" name="nik" value="<?php echo e(old('nik')); ?>">
		    <?php $__errorArgs = ['nik'];
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
		    <label for="exampleFormControlInput1" class="form-label">Nama</label>
		    <input type="text" class="form-control <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="nama" name="nama" value="<?php echo e(old('nama')); ?>">
		    <?php $__errorArgs = ['nama'];
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
		    <label for="exampleFormControlInput1" class="form-label">Umur</label>
		    <input type="text" class="form-control <?php $__errorArgs = ['umur'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="umur" name="umur" value="<?php echo e(old('umur')); ?>">
		    <?php $__errorArgs = ['umur'];
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
		
		<div class="mb-2">
			<label class="form-label">Jenis Kelamin</label>
			<div class="d-flex">
				<div class="form-check me-3">
					<input type="radio" class="form-check-input" name="jenis_kelamin" value="L" <?php echo e(old('jenis_kelamin')=='L' ? 'checked' : ''); ?> checked>Laki-laki
				</div>
				<div class="form-check me-3">
					<input type="radio" class="form-check-input" name="jenis_kelamin" value="P" <?php if(old('jenis_kelamin')=='P'): echo 'checked'; endif; ?>>Perempuan
				</div>
			</div>
			<?php $__errorArgs = ['jenis_kelamin'];
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
		    <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
		    <input type="date" placeholder="Masukan Tanggal Lahir" class="form-control <?php $__errorArgs = ['tanggal_lahir'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="tanggal_lahir" name="tanggal_lahir" value="<?php echo e(old('tanggal_lahir')); ?>">
		    <?php $__errorArgs = ['tanggal'];
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
		    <label for="exampleFormControlInput1" class="form-label">Tanggal Meninggal</label>
		    <input type="date" placeholder="Masukan Tanggal Meninggal" class="form-control <?php $__errorArgs = ['tanggal_meninggal'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="tanggal_meninggal" name="tanggal_meninggal" value="<?php echo e(old('tanggal_meninggal')); ?>">
		    <?php $__errorArgs = ['tanggal_meninggal'];
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
		    <label for="exampleFormControlInput1" class="form-label">Jam Meninggal</label>
		    <input type="time" class="form-control <?php $__errorArgs = ['jam'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="jam" name="jam" value="<?php echo e(old('jam')); ?>">
		    <?php $__errorArgs = ['jam'];
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
		    <label for="exampleFormControlTextarea1" class="form-label">Keterangan</label>
		    <textarea class="form-control <?php $__errorArgs = ['keterangan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="keterangan" name="keterangan" rows="3"><?php echo e(old('keterangan')); ?></textarea>
		        <?php $__errorArgs = ['keterangan'];
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
            <button class="btn btn-primary" name="submit" type="submit">Create Kematian</button>
        </div>
     </form>
	</div>
</div>
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\KKN\kependudukan-main\kependudukan-main\resources\views/dashboard/kematian/create.blade.php ENDPATH**/ ?>