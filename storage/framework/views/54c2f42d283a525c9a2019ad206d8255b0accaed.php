<?php $__env->startSection('content'); ?>

    <?php if (empty($query)) : ?><?php global $wp_query; ?><?php $query = $wp_query; ?><?php endif; ?><?php if (! $query->have_posts()) : ?>
        <?php if (isset($component)) { $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975 = $component; } ?>
<?php $component = App\View\Components\Alert::resolve(['type' => 'warning'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Alert::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            <?php echo __('Sorry, no results were found.', 'sage'); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975)): ?>
<?php $component = $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975; ?>
<?php unset($__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975); ?>
<?php endif; ?>

        <?php echo get_search_form(false); ?>

    <?php wp_reset_postdata(); endif; ?>

    <?php if (empty($query)) : ?><?php global $wp_query; ?><?php $query = $wp_query; ?><?php endif; ?> <?php if ($query->have_posts()) : ?><?php $__currentLoopData = range(1, $query->post_count); $__env->addLoop($__currentLoopData); while ($query->have_posts()) : $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $query->the_post(); ?>
        <?php if ($__env->exists('loops.content')) echo $__env->make('loops.content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endwhile; wp_reset_postdata(); $__env->popLoop(); $loop = $__env->getLastLoop(); endif; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('sidebar'); ?>
    <?php echo $__env->make('sections.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.fullwidth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/olafparusel/_Sites/sagemaster/app/public/wp-content/themes/sagemaster/resources/views/index.blade.php ENDPATH**/ ?>