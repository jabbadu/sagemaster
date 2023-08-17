<a href="<?php echo $link; ?>" <?php echo e($attributes->merge([
            'class' => 'btn ' . $type, 
            'target' => $target,
            'disabled'  => $disabled,
            'tab-index' => $tabIndex
        ])); ?>>
    <?php echo $title ?? $slot; ?>

    <?php if($icon): ?>
        <i class="bi bi-<?php echo e($iconType); ?>"></i>
    <?php endif; ?>
</a>
<?php /**PATH /Users/olafparusel/_Sites/sagemaster/app/public/wp-content/themes/sagemaster/resources/views/components/button.blade.php ENDPATH**/ ?>