<input type="hidden" name="_dev_tools_state" value='<?php echo isset($settings['_dev_tools_state']) ? $settings['_dev_tools_state'][0] : ''; ?>'>
<div class="dev-tools-content-container" data-wcc="<?php echo e(isset($data) && $data ? json_encode($data) : json_encode([])); ?>">
    
    <div class="dev-tools-content" tabindex="-1">
        
        <div class="lightbox-title">Hi</div>

        
        <div class="toolbar">
            
            <div class="address-bar">
                <div class="button-container">
                    
                    <span class="dashicons dashicons-arrow-left-alt button-option back disabled"
                          title="<?php echo e(_wpcc("Click to go back")); ?>"></span>

                    
                    <span class="dashicons dashicons-arrow-right-alt button-option forward disabled"
                          title="<?php echo e(_wpcc("Click to go forward")); ?>"></span>

                    
                    <span class="dashicons dashicons-update button-option refresh disabled"
                          title="<?php echo e(_wpcc("Click to refresh")); ?>"></span>
                </div>

                <?php echo $__env->make('form-items.text', [
                    'name' => '_dt_toolbar_url',
                    'class' => 'toolbar-input-container url-input',
                    'placeholder' => _wpcc('URL starting with http...'),
                ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                <div class="button-container">
                    
                    <span class="dashicons dashicons-admin-collapse button-option go"
                          title="<?php echo e(_wpcc("Click to go to the URL")); ?>"></span>

                    
                    <span class="dashicons dashicons-menu button-option sidebar-open"
                          title="<?php echo e(_wpcc("Click to open the sidebar")); ?>"></span>
                </div>
            </div>

            
            <div class="css-selector-tools">
                <div class="button-container">
                    
                    <?php echo $__env->make('form-items.partials.button-icon', [
                        'buttonClass' => 'css-selector-clear-highlights',
                        'iconClass' => 'dashicons dashicons-editor-removeformatting',
                        'title' => _wpcc('Clear the highlights'),
                    ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                    
                    <?php echo $__env->make('form-items.partials.button-icon', [
                        'buttonClass' => 'css-selector-show-alternatives',
                        'iconClass' => 'dashicons dashicons-image-rotate-right',
                        'title' => _wpcc('Show alternative selectors'),
                    ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                    
                    <?php echo $__env->make('form-items.partials.button-icon', [
                        'buttonClass' => 'css-selector-use',
                        'iconClass' => 'dashicons dashicons-yes',
                        'title' => _wpcc('Use the selector'),
                    ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>

                <?php echo $__env->make('form-items.text', [
                    'name' => '_dt_toolbar_css_selector',
                    'class' => 'toolbar-input-container css-selector-input',
                    'placeholder' => _wpcc('CSS selector'),
                ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                <div class="button-container">
                    
                    <?php echo $__env->make('form-items.partials.button-icon', [
                        'buttonClass' => 'css-selector-test',
                        'iconClass' => 'dashicons dashicons-search',
                        'title' => _wpcc('Test the selector'),
                        'data' => [
                            'urlSelector' => '#_dt_toolbar_url',
                            'testType' => \WPCCrawler\objects\Test::$TEST_TYPE_HTML,
                            'url' => 0
                        ]
                    ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                    
                    <?php echo $__env->make('form-items.partials.button-icon', [
                        'buttonClass' => 'css-selector-remove-elements',
                        'iconClass' => 'dashicons dashicons-trash',
                        'title' => _wpcc('Remove the elements from current page'),
                    ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
            </div>

            
            <div class="options">
                
                <div class="left">
                    
                    <span class="dashicons dashicons-external button-option toggle-hover-select active"
                          title="<?php echo e(_wpcc("Toggle hover select")); ?>"></span>

                    
                    <label for="_dt_target_html_tag">
                        <?php echo e(_wpcc("Target HTML Tag ")); ?>:
                        <input type="text" name="_dt_target_html_tag" class="target-html-tag">
                    </label>

                </div>

                
                <div class="right">
                    
                    <label for="test_button_behavior">
                        <?php echo e(_wpcc("Test via")); ?>

                        <select name="test_button_behavior" id="test_button_behavior" class="test-button-behavior">
                            <option value="php"><?php echo e(_wpcc("PHP")); ?></option>
                            <option value="js"><?php echo e(_wpcc("JavaScript")); ?></option>
                            <option value="both" selected="selected"><?php echo e(_wpcc("Both")); ?></option>
                        </select>
                    </label>

                    
                    <label for="use-immediately">
                        <input type="checkbox" id="use-immediately" class="use-immediately" name="use_immediately" tabindex="-1"> <?php echo e(_wpcc("Use immediately when clicked")); ?>

                    </label>

                    
                    <label for="remove-scripts">
                        <input type="checkbox" id="remove-scripts" class="remove-scripts" name="remove_scripts" tabindex="-1" checked="checked"> <?php echo e(_wpcc("Remove scripts")); ?>

                    </label>

                    
                    <label for="remove-styles">
                        <input type="checkbox" id="remove-styles" class="remove-styles" name="remove_styles" tabindex="-1"> <?php echo e(_wpcc("Remove styles")); ?>

                    </label>
                </div>
            </div>

            <?php echo $__env->make('partials/test-result-container', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>

        
        <iframe frameborder="0" class="source"></iframe>

        
        <div class="sidebar">
            
            <span class="dashicons dashicons-no-alt sidebar-close"></span>

            <?php echo $__env->make('form-items.dev-tools.sidebar-section', [
                'title' => _wpcc('History'),
                'class' => 'history',
                'buttons' => [
                    'dashicons dashicons-trash clear-history'
                ]
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <?php echo $__env->make('form-items.dev-tools.sidebar-section', [
                'title' => _wpcc('Alternative Selectors'),
                'class' => 'alternative-selectors'
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <?php echo $__env->make('form-items.dev-tools.sidebar-section', [
                'title' => _wpcc('All Used Selectors'),
                'class' => 'used-selectors'
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        </div>

        
        <div class="iframe-status hidden"></div>
    </div>
</div>


<style id="iframe-style">
    img.wpcc-element-hovered {
        border: 2px solid #ff4400 !important;
    }

    a.wpcc-element-hovered, .wpcc-element-hovered a {
        color: #fff !important;
        display: inline-block;
    }

    .wpcc-element-hovered {
        top: 0 !important;
        left: 0 !important;
        right: 0 !important;
        bottom: 0 !important;
        background-color: rgba(255, 68, 0, 0.8) !important;
        color: #fff !important;
        z-index: 9999 !important;
        /*-webkit-box-shadow: inset 0 0 2px 2px rgba(255, 0, 0, 1) !important;
           -moz-box-shadow: inset 0 0 2px 2px rgba(255, 0, 0, 1) !important;
                box-shadow: inset 0 0 2px 2px rgba(255, 0, 0, 1) !important;*/

        -webkit-box-shadow: 0 0 10px rgba(255, 0, 0, 1);
           -moz-box-shadow: 0 0 10px rgba(255, 0, 0, 1);
                box-shadow: 0 0 10px rgba(255, 0, 0, 1);
    }

    .wpcc-element-hovered.glow {
        -webkit-animation: glow .5s infinite alternate;
    }

    @-webkit-keyframes glow {
        to {
                          border-color: rgba(255, 0, 0, 1);
            -webkit-box-shadow: 0 0 10px rgba(255, 0, 0, 1);
               -moz-box-shadow: 0 0 10px rgba(255, 0, 0, 1);
                    box-shadow: 0 0 10px rgba(255, 0, 0, 1);
        }
    }
</style>