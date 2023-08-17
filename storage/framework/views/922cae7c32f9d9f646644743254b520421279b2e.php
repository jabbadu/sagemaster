<?php if($button): ?>
    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#<?php echo e($id); ?>" aria-controls="<?php echo e($id); ?>">
        <?php echo e($button); ?>

    </button>
<?php endif; ?>

<div
    <?php echo e($attributes->merge(['class' => 'offcanvas '. $align, 'id' => $id])); ?>

    tabindex="-1" 
    aria-labelledby="<?php echo e($id); ?>Label">

    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="<?php echo e($id); ?>Label"><?php echo $title; ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <?php echo $slot; ?>

    </div>
</div><?php /**PATH /Users/olafparusel/_Sites/sagemaster/app/public/wp-content/themes/sagemaster/resources/views/components/offcanvas.blade.php ENDPATH**/ ?>