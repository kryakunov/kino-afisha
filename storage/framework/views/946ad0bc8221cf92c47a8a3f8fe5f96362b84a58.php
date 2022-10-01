<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">

        <?php echo $__env->make('films.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <br>
        <form action="<?php echo e(route('films.update', $film->id)); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            Название: <input type="text" name="title" value="<?php echo e($film->title); ?>" class="form-control"><br>

                Постер: <input type="file" name="poster" value="<?php echo e($film->poster); ?>">
            <br><br>
            <button type="submit" class='btn btn-warning'>Submit</button>
        </form>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('films.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/host1380688/zebratarget.ru/htdocs/hh/resources/views/films/edit.blade.php ENDPATH**/ ?>