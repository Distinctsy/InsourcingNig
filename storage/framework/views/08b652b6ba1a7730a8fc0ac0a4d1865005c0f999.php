<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.create')); ?> <?php echo e(trans('cruds.option.title_singular')); ?>

    </div>

    <div class="card-body">
        <form method="POST" action="<?php echo e(route("admin.options.store")); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label class="required" for="question_id"><?php echo e(trans('cruds.option.fields.question')); ?></label>
                <select class="form-control select2 <?php echo e($errors->has('question') ? 'is-invalid' : ''); ?>" name="question_id" id="question_id" required>
                    <?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($id); ?>" <?php echo e(old('question_id') == $id ? 'selected' : ''); ?>><?php echo e($question); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if($errors->has('question_id')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('question_id')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.option.fields.question_helper')); ?></span>
            </div>
            <div class="form-group">
                <label class="required" for="option_text"><?php echo e(trans('cruds.option.fields.option_text')); ?></label>
                <textarea class="form-control <?php echo e($errors->has('option_text') ? 'is-invalid' : ''); ?>" name="option_text" id="option_text" required><?php echo e(old('option_text')); ?></textarea>
                <?php if($errors->has('option_text')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('option_text')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.option.fields.option_text_helper')); ?></span>
            </div>
            <div class="form-group">
                <label for="points"><?php echo e(trans('cruds.option.fields.points')); ?></label>
                <input class="form-control <?php echo e($errors->has('points') ? 'is-invalid' : ''); ?>" type="number" name="points" id="points" value="<?php echo e(old('points')); ?>" step="1">
                <?php if($errors->has('points')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('points')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.option.fields.points_helper')); ?></span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    <?php echo e(trans('global.save')); ?>

                </button>
            </div>
        </form>
    </div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\AlexEkama\Downloads\finalyearproject\resources\views/admin/options/create.blade.php ENDPATH**/ ?>