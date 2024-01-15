<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Take test to help us determine if you are fit for the role</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success" role="alert">
                                    <?php echo e(session('status')); ?>

                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <form method="POST" action="<?php echo e(route('client.test.store')); ?>">
                        <?php echo csrf_field(); ?>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="card mb-3">
                                <div class="card-header"><?php echo e($category->name); ?></div>
                
                                <div class="card-body">
                                    <?php $__currentLoopData = $category->categoryQuestions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="card <?php if(!$loop->last): ?>mb-3 <?php endif; ?>">
                                            <div class="card-header"><?php echo e($question->question_text); ?></div>
                        
                                            <div class="card-body">
                                                <input type="hidden" name="questions[<?php echo e($question->id); ?>]" value="">
                                                <?php $__currentLoopData = $question->questionOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="questions[<?php echo e($question->id); ?>]" id="option-<?php echo e($option->id); ?>" value="<?php echo e($option->id); ?>"<?php if(old("questions.$question->id") == $option->id): ?> checked <?php endif; ?>>
                                                        <label class="form-check-label" for="option-<?php echo e($option->id); ?>">
                                                            <?php echo e($option->option_text); ?>

                                                        </label>
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                <?php if($errors->has("questions.$question->id")): ?>
                                                    <span style="margin-top: .25rem; font-size: 80%; color: #e3342f;" role="alert">
                                                        <strong><?php echo e($errors->first("questions.$question->id")); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <div class="form-group row mb-0">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">
                                    Submit
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
<?php echo $__env->make('layouts.client', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\AlexEkama\Desktop\finalyearproject\resources\views/client/test.blade.php ENDPATH**/ ?>