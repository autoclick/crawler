<div class="input-group custom-post-meta <?php echo e(isset($remove) ? 'remove' : ''); ?>"
     <?php if(isset($dataKey)): ?> data-key="<?php echo e($dataKey); ?>" <?php endif; ?>>
    <div class="input-container">
        <input type="checkbox" name="<?php echo e($name . '[multiple]'); ?>" id="<?php echo e($name . '[multiple]'); ?>" data-toggle="tooltip" title="<?php echo e(_wpcc('Multiple?')); ?>"
               <?php if(isset($value['multiple'])): ?> checked="checked" <?php endif; ?>>

        <input type="text" name="<?php echo e($name . '[key]'); ?>" id="<?php echo e($name . '[key]'); ?>" placeholder="<?php echo e(_wpcc('Post meta key')); ?>"
               value="<?php echo e(isset($value['key']) ? $value['key'] : ''); ?>" class="meta-key">

        <input type="text" name="<?php echo e($name . '[value]'); ?>" id="<?php echo e($name . '[value]'); ?>" placeholder="<?php echo e(_wpcc('Meta value')); ?>"
               value="<?php echo e(isset($value['value']) ? $value['value'] : ''); ?>">
    </div>
    <?php if(isset($remove)): ?>
        <?php echo $__env->make('form-items/remove-button', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?>
</div>