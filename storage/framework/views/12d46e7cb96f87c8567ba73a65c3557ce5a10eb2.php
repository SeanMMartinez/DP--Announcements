<?php $__env->startSection('content'); ?>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><?php echo e(__('Create Announcements')); ?></div>
    
                    <div class="card-body">
                            
                        <form method="POST" action="<?php echo e(action('AnnouncementController@store')); ?>">
                                <?php echo csrf_field(); ?> 
    
                            <div class="form-group">
                                    <label for="announcement_title">Announcement Title</label>
                                    <input type="text" name="announcement_title" value="" class="form-control">
                                </div>
  
    
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        <?php echo e(__('Create')); ?>

                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>