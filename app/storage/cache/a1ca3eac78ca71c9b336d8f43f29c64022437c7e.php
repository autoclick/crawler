<div class="input-group key-value <?php echo e(isset($remove) ? 'remove' : ''); ?> <?php echo e(isset($class) ? $class : ''); ?>"
     <?php if(isset($dataKey)): ?> data-key="<?php echo e($dataKey); ?>" <?php endif; ?>>
    <div class="input-container">
        <input type="text" name="<?php echo e($name . '[key]'); ?>" id="<?php echo e($name . '[key]'); ?>" placeholder="<?php echo e($keyPlaceholder); ?>"
               value="<?php echo e(isset($value['key']) ? $value['key'] : ''); ?>">

        <input type="text" name="<?php echo e($name . '[value]'); ?>" id="<?php echo e($name . '[value]'); ?>" placeholder="<?php echo e($valuePlaceholder); ?>"
               value="<?php echo e(isset($value['value']) ? $value['value'] : ''); ?>">
    </div>
    <?php if(isset($remove) && $remove): ?>
        <?php echo $__env->make('form-items/remove-button', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?>
</div>