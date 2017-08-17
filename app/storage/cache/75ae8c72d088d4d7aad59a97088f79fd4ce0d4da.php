<div class="input-group selector-custom-shortcode <?php echo e(isset($addon) ? 'addon dev-tools' : ''); ?> <?php echo e(isset($remove) ? 'remove' : ''); ?>"
     <?php if(isset($dataKey)): ?> data-key="<?php echo e($dataKey); ?>" <?php endif; ?>>
    <?php if(isset($addon)): ?>
        <?php echo $__env->make('form-items.partials.button-addon-test', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('form-items.dev-tools.button-dev-tools', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?>
    <div class="input-container">
        <input type="checkbox" name="<?php echo e($name . '[single]'); ?>" id="<?php echo e($name . '[single]'); ?>" data-toggle="tooltip" title="<?php echo e(_wpcc('Single?')); ?>"
               <?php if(isset($value['single'])): ?> checked="checked" <?php endif; ?>>

        <input type="text" name="<?php echo e($name . '[selector]'); ?>" id="<?php echo e($name . '[selector]'); ?>" placeholder="<?php echo e(_wpcc('Selector')); ?>"
               value="<?php echo e(isset($value['selector']) ? $value['selector'] : ''); ?>"
               class="css-selector">

        <input type="text" name="<?php echo e($name . '[attr]'); ?>" id="<?php echo e($name . '[attr]'); ?>" placeholder="<?php echo e(sprintf(_wpcc('Attribute (default: %s)'), $defaultAttr)); ?>"
               value="<?php echo e(isset($value['attr']) ? $value['attr'] : ''); ?>" class="css-selector-attr">

        <input type="text" name="<?php echo e($name . '[short_code]'); ?>" id="<?php echo e($name . '[short_code]'); ?>" placeholder="<?php echo e(_wpcc('Shortcode without brackets')); ?>"
               value="<?php echo e(isset($value['short_code']) ? $value['short_code'] : ''); ?>" class="short-code">
    </div>
    <?php if(isset($remove)): ?>
        <?php echo $__env->make('form-items/remove-button', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?>
</div>