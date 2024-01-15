<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.create')); ?> <?php echo e(trans('cruds.question.title_singular')); ?>

    </div>

    <div class="card-body">
        <form method="POST" action="<?php echo e(route("admin.questions.store")); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label class="required" for="category_id"><?php echo e(trans('cruds.question.fields.category')); ?></label>
                <select class="form-control select2 <?php echo e($errors->has('category') ? 'is-invalid' : ''); ?>" name="category_id" id="category_id" required>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($id); ?>" <?php echo e(old('category_id') == $id ? 'selected' : ''); ?>><?php echo e($category); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if($errors->has('category_id')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('category_id')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.question.fields.category_helper')); ?></span>
            </div>
            <div class="form-group">
                <label class="required" for="question_text"><?php echo e(trans('cruds.question.fields.question_text')); ?></label>
                <textarea class="form-control <?php echo e($errors->has('question_text') ? 'is-invalid' : ''); ?>" name="question_text" id="question_text" required><?php echo e(old('question_text')); ?></textarea>
                <?php if($errors->has('question_text')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('question_text')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.question.fields.question_text_helper')); ?></span>
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\AlexEkama\Downloads\finalyearproject\resources\views/admin/questions/create.blade.php ENDPATH**/ ?>