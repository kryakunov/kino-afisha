<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 align="center">Афиша</h1><br>
    <div class="row">
    <?php if(session('success')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <?php $__empty_1 = true; $__currentLoopData = $films; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $film): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="col-md-3">
            <h5><?php echo e($film->title); ?></h5>

            <small>
                Жанр: 
                <?php $__currentLoopData = $film->genres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($genre->title); ?> 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </small>
            <div>
                <img src="<?php echo e(($film->poster !== null) ? $film->poster : 'image.jpeg'); ?>" alt="" width="160" class="img-thumbnail">
            </div>
            <a href="<?php echo e(route('films.show', $film->id)); ?>" class='btn btn-info btn-sm mybutton'>Подробнее</a> 
            <a href="<?php echo e(route('films.edit', $film->id)); ?>" class='btn btn-warning btn-sm mybutton'>Редактировать</a> 
            <a href="<?php echo e(route('setpublic', $film->id)); ?>" class='btn btn-success btn-sm mybutton'>Опубликовать</a> 
            <form action="<?php echo e(route('films.destroy', $film->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" onclick="return confirm('Вы уверены?')" class='btn btn-danger btn-sm mybutton'>Удалить</button>
            </form>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        No Data.
    <?php endif; ?>


</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('films.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/host1380688/zebratarget.ru/htdocs/hh/resources/views/films/index.blade.php ENDPATH**/ ?>