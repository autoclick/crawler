<div class="wcc-settings-title">
    <h3><?php echo e(_wpcc('Import/Export Settings')); ?></h3>
    <span><?php echo e(_wpcc('Import settings from another site or copy the settings to import for another site')); ?></span>
</div>

<table class="wcc-settings">
    
    <tr>
        <td>
            <?php echo $__env->make('form-items/label', [
                'for'   => '_post_import_settings',
                'title' => _wpcc('Import Settings'),
                'info'  => _wpcc('Paste the settings exported from another site to import. <b>Current settings
                    will be overridden.</b>')
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
        <td>
            <?php echo $__env->make('form-items/textarea', [
                'name'          =>  '_post_import_settings',
                'placeholder'   =>  _wpcc('Paste settings and update. Note: This will override all settings.')
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
    </tr>

    
    <tr>
        <td>
            <?php echo $__env->make('form-items/label', [
                'for'   => '_post_export_settings',
                'title' => _wpcc('Export Settings'),
                'info'  => _wpcc('You can copy the settings here and use the copied code to export settings to
                    another site.')
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
        <td>
            <?php echo $__env->make('form-items/textarea', [
                'name'          =>  '_post_export_settings',
                'value'         =>  $settingsForExport,
                'readOnly'      =>  true,
                'noName'        =>  true,
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
    </tr>
</table>