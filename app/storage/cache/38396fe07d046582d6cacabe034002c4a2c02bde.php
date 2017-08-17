<div class="input-group">
    <div class="input-container">
        <select name="<?php echo e($name); ?>" id="<?php echo e($name); ?>">
            <?php $selectedKey = isset($settings[$name]) ? (isset($isOption) && $isOption ? $settings[$name] : $settings[$name][0]) : false; ?>
            <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $optionName): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($key); ?>" <?php if($selectedKey && $key == $selectedKey): ?> selected="selected" <?php endif; ?>><?php echo e($optionName); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
</div>