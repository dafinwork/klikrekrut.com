<?php $__env->startSection('content'); ?>
<div class="mb-4">
    <a href="<?php echo e(route('admin.packages.index')); ?>" class="text-decoration-none text-muted"><i class="bi bi-arrow-left"></i> Back to Packages</a>
    <h3 class="mt-2"><?php echo e(isset($package) ? 'Edit Package' : 'Create New Package'); ?></h3>
</div>

<div class="card border-0 shadow-sm" style="max-width: 800px;">
    <div class="card-body p-4">
        <form action="<?php echo e(isset($package) ? route('admin.packages.update', $package->id) : route('admin.packages.store')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php if(isset($package)): ?>
                <?php echo method_field('PUT'); ?>
            <?php endif; ?>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Type</label>
                    <select name="type" class="form-select" required>
                        <option value="Live Class" <?php echo e((old('type', $package->type ?? '') == 'Live Class') ? 'selected' : ''); ?>>Live Class</option>
                        <option value="E-Learning" <?php echo e((old('type', $package->type ?? '') == 'E-Learning') ? 'selected' : ''); ?>>E-Learning</option>
                        <option value="Mentoring" <?php echo e((old('type', $package->type ?? '') == 'Mentoring') ? 'selected' : ''); ?>>Mentoring</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Badge Label (Optional)</label>
                    <input type="text" name="badge" class="form-control" placeholder="e.g. CONSULT, CAREER" value="<?php echo e(old('badge', $package->badge ?? '')); ?>">
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Title</label>
                <input type="text" name="title" class="form-control" required value="<?php echo e(old('title', $package->title ?? '')); ?>">
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Subtitle / Speaker (Optional)</label>
                <input type="text" name="subtitle" class="form-control" placeholder="e.g. Andi - Senior HR Google" value="<?php echo e(old('subtitle', $package->subtitle ?? '')); ?>">
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Price (Rp)</label>
                    <input type="number" name="price" class="form-control" required value="<?php echo e(old('price', $package->price ?? 0)); ?>">
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">YouTube Preview Link (Optional)</label>
                    <input type="url" name="preview_link" class="form-control" placeholder="https://www.youtube.com/watch?v=..." value="<?php echo e(old('preview_link', $package->preview_link ?? '')); ?>">
                </div>
            </div>

            <div class="mb-4">
                <label class="form-label fw-semibold">Image</label>
                <?php if(isset($package) && $package->image): ?>
                    <div class="mb-2">
                        <img src="<?php echo e(asset('storage/' . $package->image)); ?>" alt="Current Image" style="height: 100px; border-radius: 8px;">
                    </div>
                <?php endif; ?>
                <input type="file" name="image" class="form-control" accept="image/*">
            </div>

            <div class="text-end">
                <button type="submit" class="btn btn-primary px-4 fw-bold"><?php echo e(isset($package) ? 'Update Package' : 'Save Package'); ?></button>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\kliksoft\resources\views/admin/packages/form.blade.php ENDPATH**/ ?>