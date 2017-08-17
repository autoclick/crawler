<div class="wcc-settings-title">
    <h3><?php echo e(_wpcc('Advanced')); ?></h3>
    <span><?php echo e(_wpcc('Advanced settings for crawler')); ?></span>
</div>

<table class="wcc-settings">
    
    <tr>
        <td>
            <?php echo $__env->make('form-items/label', [
                'for'   =>  '_wpcc_make_sure_encoding_utf8',
                'title' =>  _wpcc('Always use UTF8 encoding?'),
                'info'  =>  _wpcc('If you want to crawl all pages in UTF-8 encoding, check this.')
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
        <td>
            <?php echo $__env->make('form-items/checkbox', [
                'name'      =>  '_wpcc_make_sure_encoding_utf8',
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
    </tr>

    
    <tr>
        <td>
            <?php echo $__env->make('form-items/label', [
                'for'   =>  '_wpcc_http_user_agent',
                'title' =>  _wpcc('HTTP User Agent'),
                'info'  =>  _wpcc('The user agent to be used when crawling, i.e.
                <span class="highlight variable">HTTP_USER_AGENT</span>. If you leave this empty, the default value
                will be used. You can find user agent strings
                <a target="_blank" href="http://www.useragentstring.com/pages/useragentstring.php">here</a>.')
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
        <td>
            <?php echo $__env->make('form-items/text', [
                'name'      =>  '_wpcc_http_user_agent',
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
    </tr>

    
    <tr>
        <td>
            <?php echo $__env->make('form-items/label', [
                'for'   =>  '_wpcc_http_accept',
                'title' =>  _wpcc('HTTP Accept'),
                'info'  =>  _wpcc('HTTP accept value to be used when crawling, i.e.
                    <span class="highlight variable">HTTP_ACCEPT</span>. If you leave this empty, the default value
                    will be used.')
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
        <td>
            <?php echo $__env->make('form-items/text', [
                'name'      =>  '_wpcc_http_accept',
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
    </tr>

    
    <tr>
        <td>
            <?php echo $__env->make('form-items/label', [
                'for'   =>  '_wpcc_http_allow_cookies',
                'title' =>  _wpcc('Allow cookies?'),
                'info'  =>  _wpcc('If you want to allow cookies when crawling, check this.')
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
        <td>
            <?php echo $__env->make('form-items/checkbox', [
                'name'      =>  '_wpcc_http_allow_cookies',
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
    </tr>

    
    <tr>
        <td>
            <?php echo $__env->make('form-items/label', [
                'for'   =>  '_wpcc_connection_timeout',
                'title' =>  _wpcc('Connection timeout (in seconds)'),
                'info'  =>  _wpcc('Maximum number of seconds in which target server should response. Write 0 to disable.
                        Default: 0')
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
        <td>
            <?php echo $__env->make('form-items/text', [
                'name'      =>  '_wpcc_connection_timeout',
                'type'      =>  'number',
                'min'       =>  0
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
    </tr>

    
    <tr>
        <td>
            <?php echo $__env->make('form-items/label', [
                'for'   =>  '_wpcc_use_proxy',
                'title' =>  _wpcc('Use proxy?'),
                'info'  =>  _wpcc('If you want to use a proxy when the target page cannot be opened, check this.')
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
        <td>
            <?php echo $__env->make('form-items/checkbox', [
                'name'          =>  '_wpcc_use_proxy',
                'dependants'    =>  '["#proxy-test-url", "#proxies", "#proxy-try-limit"]',
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
    </tr>

    
    <tr id="proxy-test-url">
        <td>
            <?php echo $__env->make('form-items/label', [
                'for'   =>  '_wpcc_test_url_proxy',
                'title' =>  _wpcc('URL for proxy testing'),
                'info'  =>  _wpcc('A URL to be used to perform the proxy test.')
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
        <td><?php echo $__env->make('form-items/text', ['name' => '_wpcc_test_url_proxy', 'type' => 'url'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?></td>
    </tr>

    
    <tr id="proxies">
        <td>
            <?php echo $__env->make('form-items/label', [
                'for'   =>  '_wpcc_proxies',
                'title' =>  _wpcc('Proxies'),
                'info'  =>  _wpcc('You can write your proxies here. Write every proxy in a new line. If you want to
                        use a proxy specifically with a protocol, write the proxy with its protocol. E.g.
                        <span class="highlight proxy">https://192.168.16.1:10</span>, or
                        <span class="highlight proxy">http://192.168.16.1:10</span>. You can also provide proxies
                        that contain a scheme, username and password. E.g.
                        <span class="highlight proxy">http://username:password@192.168.16.1:10</span>. If you do not
                        specify the protocol, TCP will be used. The proxies will be ordered randomly before they are
                        used.')
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
        <td>
            <?php echo $__env->make('form-items/textarea', [
                'name'          =>  '_wpcc_proxies',
                'placeholder'   =>  _wpcc('New line-separated proxies...'),
                'data'          =>  [
                    'urlSelector'   =>  "#_wpcc_test_url_proxy",
                    'testType'      =>  \WPCCrawler\objects\Test::$TEST_TYPE_PROXY,
                ],
                'addon'         =>  'dashicons dashicons-search',
                'test'          =>  true,
                'addonClasses'  => 'wcc-test-proxy',
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('partials/test-result-container', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
    </tr>

    
    <tr id="proxy-try-limit">
        <td>
            <?php echo $__env->make('form-items/label', [
                'for'   =>  '_wpcc_proxy_try_limit',
                'title' =>  _wpcc('Proxy try limit'),
                'info'  =>  _wpcc('Maximum number of proxies that can be tried for one request. Write 0 for no limitation.
                        Default: 0')
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
        <td>
            <?php echo $__env->make('form-items/text', [
                'name'      =>  '_wpcc_proxy_try_limit',
                'type'      =>  'number',
                'min'       =>  0
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
    </tr>

</table>