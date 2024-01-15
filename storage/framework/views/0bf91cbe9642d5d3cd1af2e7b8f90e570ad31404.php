<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Results of your test</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success" role="alert">
                                    <p><?php echo e(session('status')); ?></p>

                                    <a href="<?php echo e(route('client.test')); ?>" class="btn btn-primary">Start test again</a>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

        
           <?php if($result->total_points > 4): ?>
           <p>Total points: <?php echo e($result->total_points); ?> points</p>
          Congratulations you got the job <br>
           <a href="<?php echo e(route('client.results.send', $result->id)); ?>" class="btn btn-primary">GET EMPLOYMENT LETTER BY EMAIL</a>

         <?php else: ?>
        <p>Total points: <?php echo e($result->total_points); ?> points</p>
        
        <p>Unfortunately your resume and your score is not sufficient to get this job.</p>
        <?php endif; ?>

                    

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.client', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\AlexEkama\Downloads\finalyearproject\resources\views/client/results.blade.php ENDPATH**/ ?>