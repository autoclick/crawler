<div class="wcc-settings-title">
    <h3><?php echo e(_wpcc('Post Settings')); ?></h3>
    <span><?php echo e(_wpcc('Set post settings')); ?></span>
</div>

<table class="wcc-settings">
    
    <tr>
        <td>
            <?php echo $__env->make('form-items/label', [
                'for'   =>  '_wpcc_allow_comments',
                'title' =>  _wpcc('Allow Comments'),
                'info'  =>  _wpcc('If you want to allow comments for automatically inserted posts,
                    check this.')
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
        <td>
            <?php echo $__env->make('form-items/checkbox', [
                'name'      =>  '_wpcc_allow_comments',
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
    </tr>

    
    <tr>
        <td>
            <?php echo $__env->make('form-items/label', [
                'for'   =>  '_wpcc_post_status',
                'title' =>  _wpcc('Post Status'),
                'info'  =>  _wpcc('Set the status of automatically inserted posts.')
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
        <td>
            <?php echo $__env->make('form-items/select', [
                'name'      =>  '_wpcc_post_status',
                'options'   =>  $postStatuses,
                'isOption'  =>  $isOption,
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
    </tr>

    
    <tr>
        <td>
            <?php echo $__env->make('form-items/label', [
                'for'   =>  '_wpcc_post_type',
                'title' =>  _wpcc('Post Type'),
                'info'  =>  _wpcc('Set the type of automatically inserted posts.')
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
        <td>
            <?php echo $__env->make('form-items/select', [
                'name'      =>  '_wpcc_post_type',
                'options'   =>  $postTypes,
                'isOption'  =>  $isOption,
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
    </tr>

    
    <tr>
        <td>
            <?php echo $__env->make('form-items/label', [
                'for'   =>  '_wpcc_post_author',
                'title' =>  _wpcc('Post Author'),
                'info'  =>  _wpcc('Set the author of automatically inserted posts.')
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
        <td>
            <?php echo $__env->make('form-items/select', [
                'name'      =>  '_wpcc_post_author',
                'options'   =>  $authors,
                'isOption'  =>  $isOption,
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
    </tr>

    
    <tr>
        <td>
            <?php echo $__env->make('form-items/label', [
                'for'   =>  '_wpcc_post_tag_limit',
                'title' =>  _wpcc('Maximum number of tags'),
                'info'  =>  _wpcc('How many tags at maximum can be added to a post? Set this <b>0</b> if you do not
                    want to set a limit and get all available tags. The default value is 0.')
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
        <td>
            <?php echo $__env->make('form-items/text', [
                'name'      =>  '_wpcc_post_tag_limit',
                'isOption'  =>  $isOption,
                'type'      =>  'number',
                'min'       =>  0,
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
    </tr>

    
    <tr>
        <td>
            <?php echo $__env->make('form-items/label', [
                'for'   =>  '_wpcc_change_password',
                'title' =>  _wpcc('Change Password'),
                'info'  =>  _wpcc('If you want to change post password, check this.')
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
        <td>
            <?php echo $__env->make('form-items/checkbox', [
                'name'          =>  '_wpcc_change_password',
                'dependants'    =>  '["#post-password"]'
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
    </tr>

    
    <tr id="post-password">
        <td>
            <?php echo $__env->make('form-items/label', [
                'for'   =>  '_wpcc_post_password',
                'title' =>  _wpcc('Post Password'),
                'info'  =>  _wpcc('Set the password for automatically inserted posts. The value you
                    enter here will be stored as raw text in the database, without encryption.
                    If anyone accesses your database, he/she will be able to see your password.
                    <br /><br />
                    If you want to delete the password, just leave the new password fields empty.
                    When you change the password, new password will be effective for new posts,
                    and passwords for old posts will not be changed.
                    <br /><br />
                    <b>Leave old password field empty if you did not set any password before.</b>')
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
        <td>
            <?php echo $__env->make('form-items/password-with-validation', [
                'name'      =>  '_wpcc_post_password',
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
    </tr>
</table>