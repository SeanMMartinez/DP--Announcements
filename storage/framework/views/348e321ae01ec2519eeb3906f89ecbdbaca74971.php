<?php $__env->startSection('content'); ?>
<h3>Announcements</h3>
<?php if(count($announcements)>0): ?>
<?php $__currentLoopData = $announcements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $announcement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="well">
    <h5>Title:   .  <?php echo e($announcement->announcement_title); ?></h5>
    <h5>Creator:    . <?php echo e($announcement->name); ?></h5>
    <h5>Role:  .   <?php echo e($announcement->role_name); ?></h5>
    <p></p>
</br>
</div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?> <p>No Announcement found</p>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>