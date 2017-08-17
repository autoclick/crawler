<div class="input-group text
    <?php echo e(isset($addon) ? ' addon ' : ''); ?>

    <?php echo e(isset($remove) ? ' remove ' : ''); ?>

    <?php echo e(isset($showDevTools) && $showDevTools ? ' dev-tools ' : ''); ?>

    <?php echo e(isset($class) ? ' ' . $class . ' ' : ''); ?>"
     <?php if(isset($dataKey)): ?> data-key="<?php echo e($dataKey); ?>" <?php endif; ?>
>
    <?php if(isset($addon)): ?>
        <?php echo $__env->make('form-items.partials.button-addon-test', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?>

    <?php if(isset($showDevTools) && $showDevTools): ?>
        <?php echo $__env->make('form-items.dev-tools.button-dev-tools', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?>
    <div class="input-container">
        <input type="<?php echo e(isset($type) ? $type : 'text'); ?>"
               <?php if(isset($min)): ?> min="<?php echo e($min); ?>" <?php endif; ?>
               id="<?php echo e(isset($name) ? $name : ''); ?>"
               name="<?php echo e(isset($name) ? $name : ''); ?>"
               value="<?php echo e(isset($value) ? $value : (isset($settings[$name]) ? (isset($isOption) && $isOption ? $settings[$name] : $settings[$name][0]) : '')); ?>"
               placeholder="<?php echo e(isset($placeholder) ? $placeholder : ''); ?>"
               <?php if(isset($required)): ?> required="required" <?php endif; ?>
               <?php if(isset($inputClass)): ?> class="<?php echo e($inputClass); ?>" <?php endif; ?>
        />
    </div>
    <?php if(isset($remove)): ?>
        <?php echo $__env->make('form-items/remove-button', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?>
</div>