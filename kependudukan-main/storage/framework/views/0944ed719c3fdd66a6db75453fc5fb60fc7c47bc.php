

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="mb-4">Daftar Rumah</h1>
    <a href="<?php echo e(route('rumah.create')); ?>" class="btn btn-primary mb-3">Tambah Rumah</a>

    <?php if(session()->has('pesan')): ?>
        <div class="alert alert-success">
            <?php echo e(session()->get('pesan')); ?>

        </div>
    <?php endif; ?>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Alamat</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $rumahs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rumah): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($rumah->alamat); ?></td>
                        <td>
                            <?php if($rumah->foto): ?>
                                <img src="<?php echo e(asset('storage/' . $rumah->foto)); ?>" alt="Foto Rumah" width="100">
                            <?php else: ?>
                                Tidak ada foto
                            <?php endif; ?>
                        </td>
                        <td>
                            <a href="<?php echo e(route('rumah.edit', $rumah->id)); ?>" class="btn btn-warning btn-sm">Edit</a>
                            <form action="<?php echo e(route('rumah.destroy', $rumah->id)); ?>" method="POST" class="d-inline">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-center">
        <?php echo e($rumahs->links()); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\KKN\kependudukan-main\kependudukan-main\resources\views/rumah/index.blade.php ENDPATH**/ ?>