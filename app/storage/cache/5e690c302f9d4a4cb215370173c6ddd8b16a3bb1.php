<?php if(isset($buttons)): ?>
    <div class="input-group">
        <div class="input-container input-button-container">
            <?php $__currentLoopData = $buttons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $button): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <button class="button"
                        data-clipboard-text="<?php echo e($button["code"]); ?>"
                        data-toggle="tooltip"
                        data-placement="top"
                        id="<?php echo e($button["code"]); ?>"
                        title="<?php echo e($button["description"]); ?>">
                    <?php echo e($button["code"]); ?>

                </button>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php endif; ?>