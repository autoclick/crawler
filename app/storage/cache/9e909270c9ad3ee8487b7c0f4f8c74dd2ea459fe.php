<div class="wcc-settings-title">
    <h3><?php echo e(_wpcc('Notes')); ?></h3>
    <span><?php echo e(_wpcc('You can write your notes about this site here. It is just for you to keep notes.')); ?></span>
</div>

<table class="wcc-settings">
    
    <tr>
        <td>
            <?php echo $__env->make('form-items/label', [
                'for'   => '_notes',
                'title' => _wpcc('Notes'),
                'info'  => _wpcc('Write anything...')
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
        <td><?php echo $__env->make('form-items/template-editor', ['name' => '_notes', 'height' => 450], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?></td>
    </tr>
</table>