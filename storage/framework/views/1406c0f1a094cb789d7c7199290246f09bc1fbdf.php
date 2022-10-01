<?php if($errors->any()): ?>
    <div class="container">
    	<div class="row">
    		<div class="col-md-10">
    			<div class="alert alert-danger">
			        <ul>
			            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			                <li><?php echo e($error); ?></li>
			            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			        </ul>
			    </div>
    		</div>
    	</div>
    </div>
<?php endif; ?><?php /**PATH /home/host1380688/zebratarget.ru/htdocs/hh/resources/views/films/errors.blade.php ENDPATH**/ ?>