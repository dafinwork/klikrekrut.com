<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-between align-items-center mb-4">
    <h3 class="mb-0">Manage Packages</h3>
    <a href="<?php echo e(route('admin.packages.create')); ?>" class="btn btn-primary"><i class="bi bi-plus-lg"></i> Add New Package</a>
</div>

<div class="card border-0 shadow-sm">
    <div class="card-body p-0">
        <table class="table table-hover mb-0">
            <thead class="table-light">
                <tr>
                    <th class="px-4 py-3">Image</th>
                    <th class="py-3">Title</th>
                    <th class="py-3">Type</th>
                    <th class="py-3">Price</th>
                    <th class="py-3 text-end px-4">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td class="px-4 align-middle">
                        <?php if($package->image): ?>
                            <img src="<?php echo e(asset('storage/' . $package->image)); ?>" alt="<?php echo e($package->title); ?>" style="width: 50px; height: 50px; object-fit: cover; border-radius: 8px;">
                        <?php else: ?>
                            <div style="width: 50px; height: 50px; background-color: #e9ecef; border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                                <i class="bi bi-image text-muted"></i>
                            </div>
                        <?php endif; ?>
                    </td>
                    <td class="align-middle fw-semibold"><?php echo e($package->title); ?></td>
                    <td class="align-middle"><span class="badge bg-secondary"><?php echo e($package->type); ?></span></td>
                    <td class="align-middle">Rp <?php echo e(number_format($package->price, 0, ',', '.')); ?></td>
                    <td class="align-middle text-end px-4">
                        <a href="<?php echo e(route('admin.packages.edit', $package->id)); ?>" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i></a>
                        <form action="<?php echo e(route('admin.packages.destroy', $package->id)); ?>" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this package?');">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="5" class="text-center py-4 text-muted">No packages found. Click "Add New Package" to create one.</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\kliksoft\resources\views/admin/packages/index.blade.php ENDPATH**/ ?>