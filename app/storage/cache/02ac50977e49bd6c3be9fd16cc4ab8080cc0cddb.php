<div class="inputs">
    <?php echo $__env->make('form-items.partials.short-code-buttons', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="input-group textarea <?php echo e(isset($addon) ? ' addon ' : ''); ?>">
        <?php if(isset($addon)): ?>
            <?php echo $__env->make('form-items.partials.button-addon-test', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php endif; ?>

        <div class="input-container">
            <textarea <?php if(!isset($noName) || !$noName): ?> name="<?php echo e($name); ?>" <?php endif; ?> id="<?php echo e($name); ?>"
                      <?php if(isset($cols)): ?> cols="<?php echo e($cols); ?>" <?php endif; ?>
                      rows="<?php echo e(isset($rows) ? $rows : '10'); ?>"
                      <?php if(isset($placeholder)): ?> placeholder="<?php echo e($placeholder); ?>" <?php endif; ?>
                      <?php if(isset($disabled)): ?> disabled <?php endif; ?>
                      <?php if(isset($readOnly)): ?> readonly="readonly" <?php endif; ?>
            ><?php echo isset($value) ? $value : (isset($settings[$name]) ? (is_array($settings[$name]) ? $settings[$name][0] : $settings[$name]) : ''); ?></textarea>
        </div>
    </div>
</div>