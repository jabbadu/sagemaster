<a class="visually-hidden visually-hidden-focusable" href="#app">
    <?php echo e(__('Skip to content')); ?>

</a>

<main id="app">

    <?php echo $__env->make('sections.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="main-content my-5">
        <div class="container">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>

</main>

<?php echo $__env->make('sections.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /Users/olafparusel/_Sites/sagemaster/app/public/wp-content/themes/sagemaster/resources/views/layouts/fullwidth.blade.php ENDPATH**/ ?>