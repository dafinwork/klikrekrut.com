<?php $__env->startSection('title', 'Klik Rekrut - Layanan Asisten Rekrutmen'); ?>
<?php $__env->startSection('description', 'Temukan pekerjaan impianmu di Klik Rekrut'); ?>
<?php $__env->startSection('keywords', 'find job, lowongan kerja, klik rekrut'); ?>

<?php $__env->startSection('content'); ?>
  <link href="<?php echo e(asset('assets/css/talent.css')); ?>?v=<?php echo e(time()); ?>" rel="stylesheet">

  <!-- TALENT VIEW -->
  <div id="view-talent" style="display: block;">
      <?php echo $__env->make('partials.home-talent', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
  </div>

  <!-- BUSINESS VIEW -->
  <div id="view-business" style="display: none;">
      <?php echo $__env->make('partials.home-business', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\kliksoft\resources\views/home.blade.php ENDPATH**/ ?>