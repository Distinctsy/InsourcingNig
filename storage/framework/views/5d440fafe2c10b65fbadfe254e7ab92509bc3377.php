<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Test No. <?php echo e($result->id); ?></title>
        <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet" type="text/css" />
        <style type="text/css">
            html {
                margin: 0;
            }
            body {
                background-color: #FFFFFF;
                font-size: 10px;
                margin: 36pt;
            }
        </style>
    </head>
    <body>
        <p class="mt-5">Total points: <?php echo e($result->total_points); ?> points</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Question Text</th>
                    <th>Points</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $result->questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($question->question_text); ?></td>
                        <td><?php echo e($question->pivot->points); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </body>
</html><?php /**PATH C:\Users\AlexEkama\Desktop\finalyearproject\resources\views/client/pdf.blade.php ENDPATH**/ ?>