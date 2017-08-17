<div class="inputs">
    <?php if(!isset($settings[$name]) || !$settings[$name] || !$settings[$name][0]): ?>
        <?php echo $__env->make($include, [
            'name'      => $name . '[' . (isset($addKeys) ? 0 : '') . ']',
            'remove'    => true,
            'value'     => '',
            'dataKey'   => isset($addKeys) ? 0 : ''
        ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php else: ?>
        <?php $__currentLoopData = unserialize($settings[$name][0]); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $__env->make($include, [
                'name'      => $name . '[' . (isset($addKeys) ? $key : '') . ']',
                'remove'    => true,
                'value'     => $value,
                'dataKey'   => $key,
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
</div>
<?php if(!isset($max) || $max != 1): ?>
    <div style="clear: both;"></div>
    <div class="actions">
        <button class="button wcc-add-new" data-max="<?php echo e(isset($max) ? $max : 0); ?>"><?php echo e(_wpcc('Add New')); ?></button>
    </div>
<?php endif; ?>