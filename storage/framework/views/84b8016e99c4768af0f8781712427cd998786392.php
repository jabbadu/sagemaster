<div <?php echo e($attributes->merge(['class' => 'dropdown'])); ?>>
    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        <?php echo $title ?? $slot; ?>

    </button>
    <ul class="dropdown-menu">
        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <a class="dropdown-item" href="<?php echo e(is_int($name) ? '#!' : $url); ?>">
                    <?php echo e(is_int($name) ? $url : $name); ?>

                </a>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div><?php /**PATH /Users/olafparusel/_Sites/sagemaster/app/public/wp-content/themes/sagemaster/resources/views/components/dropdown.blade.php ENDPATH**/ ?>