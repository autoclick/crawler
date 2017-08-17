<div class="input-group find-replace-in-custom-short-code <?php echo e(isset($addon) ? 'addon' : ''); ?> <?php echo e(isset($remove) ? 'remove' : ''); ?>"
     <?php if(isset($dataKey)): ?> data-key="<?php echo e($dataKey); ?>" <?php endif; ?>>
    <?php if(isset($addon)): ?>
        <?php echo $__env->make('form-items.partials.button-addon-test', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?>
    <div class="input-container">
        <input type="checkbox" name="<?php echo e($name . '[regex]'); ?>" id="<?php echo e($name . '[regex]'); ?>" data-toggle="tooltip" title="<?php echo e(_wpcc('Regex?')); ?>"
            <?php if(isset($value['regex'])): ?> checked="checked" <?php endif; ?>>

        <input type="text" name="<?php echo e($name . '[short_code]'); ?>" id="<?php echo e($name . '[short_code]'); ?>" placeholder="<?php echo e(_wpcc('Short code')); ?>"
               value="<?php echo e(isset($value['short_code']) ? $value['short_code'] : ''); ?>" class="short-code">

        <input type="text" name="<?php echo e($name . '[find]'); ?>" id="<?php echo e($name . '[find]'); ?>" placeholder="<?php echo e(_wpcc('Find')); ?>"
            value="<?php echo e(isset($value['find']) ? $value['find'] : ''); ?>">

        <input type="text" name="<?php echo e($name . '[replace]'); ?>" id="<?php echo e($name . '[replace]'); ?>" placeholder="<?php echo e(_wpcc('Replace')); ?>"
               value="<?php echo e(isset($value['replace']) ? $value['replace'] : ''); ?>">
    </div>
    <?php if(isset($remove)): ?>
        <?php echo $__env->make('form-items/remove-button', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?>
</div>