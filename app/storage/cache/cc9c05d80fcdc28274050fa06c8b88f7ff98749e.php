<?php
    // Define a variable to understand if this is the general page. If not, this settings is in post settings page.
    // Take some actions according to this.
    $isGeneralPage = !isset($isPostPage) || !$isPostPage;
    $isOption = !isset($isOption) ? ($isGeneralPage ? true : false) : $isOption;
?>


<?php if($isGeneralPage): ?>
    <h2 class="nav-tab-wrapper">
        <a href="#" data-tab="#tab-gs-scheduling" class="
            nav-tab nav-tab-active
            <?php echo e(isset($settings['_wpcc_is_scheduling_active']) && !empty($settings['_wpcc_is_scheduling_active']) && $settings['_wpcc_is_scheduling_active'][0] ? 'nav-tab-highlight-on' : 'nav-tab-highlight-off'); ?>

        ">
            <?php echo e(_wpcc('Scheduling')); ?>

        </a>
        <a href="#" data-tab="#tab-gs-post" class="nav-tab"><?php echo e(_wpcc('Post')); ?></a>
        <a href="#" data-tab="#tab-gs-seo" class="nav-tab"><?php echo e(_wpcc('SEO')); ?></a>
        <a href="#" data-tab="#tab-gs-notifications" class="nav-tab"><?php echo e(_wpcc('Notifications')); ?></a>
        <a href="#" data-tab="#tab-gs-advanced" class="nav-tab"><?php echo e(_wpcc('Advanced')); ?></a>
        <?php echo $__env->make('partials/button-toggle-info-texts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </h2>


<?php else: ?>
    <div class="section-header-button-container">
        <button class="button" id="btn-load-general-settings"><?php echo e(_wpcc("Load General Settings")); ?></button>
        <button class="button" id="btn-clear-general-settings"><?php echo e(_wpcc("Clear General Settings")); ?></button>
    </div>
<?php endif; ?>


<div id="tab-gs-scheduling" class="tab<?php echo e($isGeneralPage ? '' : '-inside'); ?>">
    <?php echo $__env->make('general-settings.tab-scheduling', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>


<div id="tab-gs-post" class="tab<?php echo e($isGeneralPage ? '' : '-inside'); ?> <?php echo e($isGeneralPage ? 'hidden' : ''); ?>">
    <?php echo $__env->make('general-settings.tab-post', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>

<?php if($isGeneralPage): ?>
    
    <div id="tab-gs-seo" class="tab hidden">
        <?php echo $__env->make('general-settings.tab-seo', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>

    
    <div id="tab-gs-notifications" class="tab hidden">
        <?php echo $__env->make('general-settings.tab-notifications', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
<?php endif; ?>


<div id="tab-gs-advanced" class="tab<?php echo e($isGeneralPage ? '' : '-inside'); ?> <?php echo e($isGeneralPage ? 'hidden' : ''); ?>">
    <?php echo $__env->make('general-settings.tab-advanced', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>