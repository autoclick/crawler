<div class="panel-wrap wcc-settings-meta-box">
    <?php echo wp_nonce_field('wcc-settings-metabox', \WPCCrawler\Constants::$NONCE_NAME); ?>


    <?php echo $__env->make('partials.form-error-alert', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    
    <h2 class="nav-tab-wrapper">
        <a href="#" data-tab="#tab-main"        class="nav-tab nav-tab-active"><?php echo e(_wpcc('Main')); ?></a>
        <a href="#" data-tab="#tab-category"    class="nav-tab"><?php echo e(_wpcc('Category')); ?></a>
        <a href="#" data-tab="#tab-post"        class="nav-tab"><?php echo e(_wpcc('Post')); ?></a>
        <a href="#" data-tab="#tab-templates"   class="nav-tab"><?php echo e(_wpcc('Templates')); ?></a>
        <a href="#" data-tab="#tab-notes"       class="nav-tab"><?php echo e(_wpcc('Notes')); ?></a>
        
        <a href="#" data-tab="#tab-general-settings"
           class="nav-tab <?php echo e(isset($settings["_do_not_use_general_settings"]) && $settings["_do_not_use_general_settings"][0] ? '' : 'hidden'); ?> nav-tab-highlight-on"
        >
            <?php echo e(_wpcc('Settings')); ?>

        </a>

        
        <a href="#" data-tab="#tab-import-export-settings" class="nav-tab">
            <span class="dashicons dashicons-upload"></span>
            <span class="dashicons dashicons-download"></span>
        </a>
        <?php echo $__env->make('partials.button-toggle-info-texts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </h2>

    
    <div id="tab-main" class="tab">
        <?php echo $__env->make('site-settings.tab-main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>

    
    <div id="tab-category" class="tab hidden">
        <?php echo $__env->make('site-settings.tab-category', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>

    
    <div id="tab-post" class="tab hidden">
        <?php echo $__env->make('site-settings.tab-post', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>

    
    <div id="tab-templates" class="tab hidden">
        <?php echo $__env->make('site-settings.tab-templates   ', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>

    
    <div id="tab-notes" class="tab hidden">
        <?php echo $__env->make('site-settings.tab-notes', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>

    
    <div id="tab-import-export-settings" class="tab hidden">
        <?php echo $__env->make('site-settings.tab-import-export', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>

    
    <div id="tab-general-settings" class="tab hidden">
        <?php echo $__env->make('general-settings.settings', ['isPostPage' => true], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>

</div>
<?php echo $__env->make('form-items.dev-tools.dev-tools-content-container', [
    'data' => [
        'postId' => $postId
    ]
], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>