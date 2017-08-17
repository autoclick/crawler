<div class="input-group exchange-element-attributes <?php echo e(isset($addon) ? 'addon dev-tools' : ''); ?> <?php echo e(isset($remove) ? 'remove' : ''); ?>"
     <?php if(isset($dataKey)): ?> data-key="<?php echo e($dataKey); ?>" <?php endif; ?>>
    <?php if(isset($addon)): ?>
        <?php echo $__env->make('form-items.partials.button-addon-test', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('form-items.dev-tools.button-dev-tools', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?>
    <div class="input-container">
        <input type="text" name="<?php echo e($name . '[selector]'); ?>" id="<?php echo e($name . '[selector]'); ?>" placeholder="<?php echo e(_wpcc('Selector')); ?>"
               value="<?php echo e(isset($value['selector']) ? $value['selector'] : ''); ?>"
               class="css-selector">

        <input type="text" name="<?php echo e($name . '[attr1]'); ?>" id="<?php echo e($name . '[attr1]'); ?>" placeholder="<?php echo e(_wpcc('Attribute 1')); ?>"
               value="<?php echo e(isset($value['attr1']) ? $value['attr1'] : ''); ?>">

        <input type="text" name="<?php echo e($name . '[attr2]'); ?>" id="<?php echo e($name . '[attr2]'); ?>" placeholder="<?php echo e(_wpcc('Attribute 2')); ?>"
               value="<?php echo e(isset($value['attr2']) ? $value['attr2'] : ''); ?>">
    </div>
    <?php if(isset($remove)): ?>
        <?php echo $__env->make('form-items/remove-button', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?>
</div>