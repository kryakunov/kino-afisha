<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-5">
        <h3>Добавить фильм</h3>

        <?php echo $__env->make('films.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <form action="<?php echo e(route('films.store')); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            Название: <input type="text" name="title"><br>
            <div class="form-control">
                Постер: <input type="file" name="poster">
            </div><br>
            <button type="submit" class='btn btn-success'>Отправить</button>
        </form>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('films.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/host1380688/zebratarget.ru/htdocs/hh/resources/views/films/create.blade.php ENDPATH**/ ?>