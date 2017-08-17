<button
        class="button wcc-addon <?php echo e(isset($test) ? 'wcc-test' : ''); ?> <?php echo e(isset($addonClasses) ? $addonClasses : ''); ?>"
        title="<?php echo e(isset($addonTitle) ? $addonTitle : ''); ?>"
        <?php if(isset($data)): ?> data-wcc="<?php echo e(json_encode($data)); ?>" <?php endif; ?>
>
    <span class="<?php echo e($addon); ?>"></span>
</button>