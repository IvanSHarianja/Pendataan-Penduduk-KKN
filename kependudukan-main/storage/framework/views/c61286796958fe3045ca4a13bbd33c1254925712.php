<?php $__env->startSection('container'); ?>

<div class=" row justify-content-center">
    <div class="col-lg-6">
        <center>
            <h3>Entri Data Penduduk</h3>
        </center><br>
        <form action="/penduduk" method="post">
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
                <label class="form-label">Jenis Kelamin</label>
                <div class="d-flex">
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="jenis_kelamin" id="jenis_kelamin" value="L">
                        <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="P" }}>
                        <label class="form-check-label" for="inlineRadio2">Perempuan</label>
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

                <div class="form-row row mb-3">
                    <div class="col-md-12">
                        <label class="form-label">Tanggal Lahir</label>
                        <input type="date" placeholder="Enter Tanggal Lahir" class="form-control <?php $__errorArgs = ['tanggal_lahir'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('tanggal_lahir')); ?>" id="tanggal_lahir" name="tanggal_lahir">
                    </div>
                
                    <?php $__errorArgs = ['tanggal_lahir'];
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
                        <label class="form-label">Agama</label>
                        <select class="form-select" name="agama_id" aria-label="Default select example">
                            <option selected></option>
                            <?php $__currentLoopData = ['Islam', 'Kristen', 'Katholik', 'Budha', 'Hindu', 'Konghucu']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $agama): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(old('agama_id') == $key): ?>
                                    <option value="<?php echo e($key); ?>" selected><?php echo e($agama); ?></option>
                                <?php else: ?>
                                    <option value="<?php echo e($key); ?>"><?php echo e($agama); ?></option>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>                    

                    <div class="mb-3">
                     <label class="form-label">Status</label>
                        <select class="form-select" name="status_kawin_id" aria-label="Default select example">
                            <option selected></option>
                            <?php $__currentLoopData = $status_kawins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(old('jurusan_id')== $status->id): ?>
                                    <option value="<?php echo e($status->id); ?>" selected><?php echo e($status->status); ?></option>
                                <?php else: ?>
                                    <option value="<?php echo e($status->id); ?>"><?php echo e($status->status); ?></option>    
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
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

                <div class="form-row row">
                    <div class="col-md-12">
                        <label class="form-label">Telepon</label>
                        <input type="text" placeholder="Enter Telepon" class="form-control <?php $__errorArgs = ['telp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('telp')); ?>" id="telp" name="telp">
                    </div>
                </div>
                <?php $__errorArgs = ['telp'];
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
                     <label class="form-label">Kelurahan</label>
                        <select class="form-select" name="kelurahan_id" aria-label="Default select example">
                            <option selected></option>
                            <?php $__currentLoopData = $kelurahans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kelurahan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(old('jurusan_id')== $kelurahan->id): ?>
                                    <option value="<?php echo e($kelurahan->id); ?>" selected><?php echo e($kelurahan->nama_kelurahan); ?></option>
                                <?php else: ?>
                                    <option value="<?php echo e($kelurahan->id); ?>"><?php echo e($kelurahan->nama_kelurahan); ?></option>    
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                <div class="mb-3">
                    <label class="form-label"></label>
                    <button class="btn btn-primary" name="submit" type="submit">Create Penduduk</button>
                </div>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\KKN\kependudukan-main\resources\views/dashboard/penduduk/create.blade.php ENDPATH**/ ?>