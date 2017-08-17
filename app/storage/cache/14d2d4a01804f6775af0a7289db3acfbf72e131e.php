<div class="input-group category-map <?php echo e(isset($addon) ? 'addon' : ''); ?> <?php echo e(isset($remove) ? 'remove' : ''); ?>" <?php if(isset($dataKey)): ?> data-key="<?php echo e($dataKey); ?>" <?php endif; ?>>
    <?php if(isset($addon)): ?>
        <?php echo $__env->make('form-items.partials.button-addon-test', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?>
    <div class="input-container">
        <select name="<?php echo e($name . '[cat_id]'); ?>" id="<?php echo e($name . '[select]'); ?>">
            <?php $selectedId = isset($value["cat_id"]) ? $value["cat_id"] : null; ?>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $categoryName): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($id); ?>" <?php if($selectedId && $id == $selectedId): ?> selected="selected" <?php endif; ?>><?php echo e($categoryName); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <input type="text" id="<?php echo e(isset($name) ? $name . '[url]' : ''); ?>" name="<?php echo e(isset($name) ? $name . '[url]' : ''); ?>" value="<?php echo e(isset($value["url"]) ? $value['url'] : ''); ?>" placeholder="<?php echo e(isset($placeholder) ? $placeholder : ''); ?>" />
    </div>
    <?php if(isset($remove)): ?>
        <?php echo $__env->make('form-items/remove-button', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?>
</div>