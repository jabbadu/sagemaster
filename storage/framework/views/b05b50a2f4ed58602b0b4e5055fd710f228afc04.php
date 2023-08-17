<?php $__env->startSection('content'); ?>
    <?php if (empty($query)) : ?><?php global $wp_query; ?><?php $query = $wp_query; ?><?php endif; ?><?php if ($query->have_posts()) : ?>

        <?php echo $__env->first(['partials.single.content-' . get_post_type(), 'partials.single.content'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php wp_reset_postdata(); endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('sidebar'); ?>
    <?php if ($__env->exists('sections.sidebar')) echo $__env->make('sections.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.sidebar-right', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/olafparusel/_Sites/sagemaster/app/public/wp-content/themes/sagemaster/resources/views/page.blade.php ENDPATH**/ ?>