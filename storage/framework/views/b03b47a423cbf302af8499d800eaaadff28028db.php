<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">

        <h3><?php echo e($film->title); ?></h3>
        <div>
            <img src="/<?php echo e(($film->poster !== null) ? $film->poster : 'image.jpeg'); ?>" alt="" width="200" class="img-thumbnail">
        </div>

        Жанр: 
            <?php $__currentLoopData = $film->genres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo e($genre->title); ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('films.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/host1380688/zebratarget.ru/htdocs/hh/resources/views/films/show.blade.php ENDPATH**/ ?>