<div class="wcc-settings-title">
    <h3><?php echo e(_wpcc('Post Page Settings')); ?></h3>
    <span><?php echo e(_wpcc('Selectors and options to be used when crawling post pages')); ?></span>
</div>

<table class="wcc-settings">
    
    <tr>
        <td>
            <?php echo $__env->make('form-items/label', [
                'for'   =>  '_test_url_post',
                'title' =>  _wpcc('Test Post URL'),
                'info'  =>  _wpcc('A full post URL to be used to perform the tests for post page CSS selectors.')
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
        <td><?php echo $__env->make('form-items/text', ['name' => '_test_url_post', 'type' => 'url'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?></td>
    </tr>

    
    <tr>
        <td>
            <?php echo $__env->make('form-items/label', [
                'for'   =>  '_post_title_selectors',
                'title' =>  _wpcc('Post Title Selectors'),
                'info'  =>  _wpcc('CSS selectors for post title. E.g. <span class="highlight selector">h1</span>. This
                    gets text of the specified element. If you give more than one selector, the first match will
                    be used.')
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
        <td>
            <?php echo $__env->make('form-items/multiple', [
                'include'       => 'form-items/text',
                'name'          => '_post_title_selectors',
                'addon'         =>  'dashicons dashicons-search',
                'data'          =>  [
                    'urlSelector'           =>  "#_test_url_post",
                    'testType'              =>  \WPCCrawler\objects\Test::$TEST_TYPE_TEXT,
                    'targetCssSelectors'    => ['h1']
                ],
                'test'          => true,
                'inputClass'    => 'css-selector',
                'showDevTools'  => true,
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('partials/test-result-container', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
    </tr>

    
    <tr>
        <td>
            <?php echo $__env->make('form-items/label', [
                'for'   =>  '_post_excerpt_selectors',
                'title' =>  _wpcc('Post Excerpt Selectors'),
                'info'  =>  _wpcc('CSS selectors for the post excerpt, if exists. E.g. <span class="highlight selector">p.excerpt</span>.
                    This gets html of the specified element. If you give more than one selector, the first match will
                    be used.')
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
        <td>
            <?php echo $__env->make('form-items/multiple', [
                'include'       => 'form-items/text',
                'name'          => '_post_excerpt_selectors',
                'addon'         =>  'dashicons dashicons-search',
                'data'          =>  [
                    'urlSelector'   =>  "#_test_url_post",
                    'testType'      =>  \WPCCrawler\objects\Test::$TEST_TYPE_HTML,
                ],
                'test'          => true,
                'inputClass'    => 'css-selector',
                'showDevTools'  => true,
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('partials/test-result-container', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
    </tr>

    
    <tr>
        <td>
            <?php echo $__env->make('form-items/label', [
                'for'   =>  '_post_content_selectors',
                'title' =>  _wpcc('Post Content Selectors'),
                'info'  =>  _wpcc('CSS selectors for the post content. This gets HTML of specified element. E.g.
                    <span class="highlight selector">.post-content > p</span>. If you give more than one selector,
                    each match will be crawled and the results will be merged.')
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
        <td>
            <?php echo $__env->make('form-items/multiple', [
                'include'       =>  'form-items/text',
                'name'          =>  '_post_content_selectors',
                'addon'         =>  'dashicons dashicons-search',
                'data'          =>  [
                    'urlSelector'   =>  "#_test_url_post",
                    'testType'      =>  \WPCCrawler\objects\Test::$TEST_TYPE_HTML,
                ],
                'test'          => true,
                'inputClass'    => 'css-selector',
                'showDevTools'  => true,
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('partials/test-result-container', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
    </tr>

    
    <tr>
        <td>
            <?php echo $__env->make('form-items/label', [
                'for'   =>  '_post_tag_selectors',
                'title' =>  _wpcc('Post Tag Selectors'),
                'info'  =>  _wpcc('CSS selectors for post tags. By default, this gets "text" of the specified
                    elements. You can also use any attribute of the elements. If you give more than one selector,
                    the results will be combined to create post tags.')
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
        <td>
            <?php echo $__env->make('form-items/multiple', [
                'include'       => 'form-items/selector-with-attribute',
                'name'          => '_post_tag_selectors',
                'addon'         =>  'dashicons dashicons-search',
                'data'          =>  [
                    'urlSelector'   =>  "#_test_url_post",
                    'testType'      =>  \WPCCrawler\objects\Test::$TEST_TYPE_SELECTOR_ATTRIBUTE,
                    'attr'          =>  'text'
                ],
                'test'          => true,
                'addKeys'       => true,
                'addonClasses'  => 'wcc-test-selector-attribute',
                'defaultAttr'   => 'text',
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('partials/test-result-container', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
    </tr>

    
    <?php echo $__env->make('partials.table-section-title', ['title' => _wpcc("Date")], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    
    <tr>
        <td>
            <?php echo $__env->make('form-items/label', [
                'for'   =>  '_post_date_selectors',
                'title' =>  _wpcc('Post Date Selectors'),
                'info'  =>  sprintf(_wpcc('CSS selectors for post date.
                    E.g. <span class="highlight selector">[itemprop="datePublished"]</span>. If you give more than one
                    selector, then the first match will be used. Found date will be parsed by %1$s function. So, if
                    the date found by the selectors cannot be parsed properly, you need to use find-and-replace options
                    to change the date into a suitable format. Generally, sites show the date via meta tags in a format
                    like %2$s. This format will be parsed without any issues.'),
                    '<a target="_blank" href="http://php.net/manual/en/function.strtotime.php">strtotime</a>',
                    '<b>2017-02-27T05:00:17-05:00</b>'
                )
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
        <td>
            <?php echo $__env->make('form-items/multiple', [
                'include'       => 'form-items/selector-with-attribute',
                'name'          => '_post_date_selectors',
                'addon'         =>  'dashicons dashicons-search',
                'data'          =>  [
                    'urlSelector'           =>  "#_test_url_post",
                    'testType'              =>  \WPCCrawler\objects\Test::$TEST_TYPE_SELECTOR_ATTRIBUTE,
                    'attr'                  =>  'content',
                    'targetCssSelectors'    =>  [
                        'meta[itemprop="datePublished"]',
                        'meta[itemprop="dateCreated"]',
                        'time.published',
                        'time.entry-date'
                    ],
                ],
                'test'          => true,
                'addKeys'       => true,
                'addonClasses'  => 'wcc-test-selector-attribute',
                'defaultAttr'   => 'content',
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('partials/test-result-container', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
    </tr>

    
    <tr>
        <td>
            <?php echo $__env->make('form-items/label', [
                'for'   =>  '_test_find_replace_date',
                'title' =>  _wpcc('Test Date'),
                'info'  =>  _wpcc('A date to be used to perform tests for the find-replace settings for dates.')
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
        <td><?php echo $__env->make('form-items/text', ['name' => '_test_find_replace_date'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?></td>
    </tr>

    
    <tr>
        <td>
            <?php echo $__env->make('form-items/label', [
                'for'   => '_post_find_replace_date',
                'title' => _wpcc("Find and replace in dates"),
                'info'  => _wpcc('If you want some things to be replaced with some other things in <b>found post dates</b>,
                    this is the place. The replacement will be done before parsing the date.') . " " . _wpcc_trans_regex()
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
        <td>
            <?php echo $__env->make('form-items/multiple', [
                'include'       =>  'form-items/find-replace',
                'name'          =>  '_post_find_replace_date',
                'addKeys'       =>  true,
                'remove'        =>  true,
                'addon'         =>  'dashicons dashicons-search',
                'data'          =>  [
                    'subjectSelector'   =>  "#_test_find_replace_date",
                    'testType'          =>  \WPCCrawler\objects\Test::$TEST_TYPE_FIND_REPLACE,
                ],
                'test'          => true,
                'addonClasses'  => 'wcc-test-find-replace'
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('partials/test-result-container', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
    </tr>

    
    <tr>
        <td>
            <?php echo $__env->make('form-items/label', [
                'for'   =>  '_post_date_add_minutes',
                'title' =>  _wpcc('Minutes that should be added to the final date'),
                'info'  =>  sprintf(_wpcc('How many minutes should be added to the final date of the post. If the final date
                    becomes greater than now, the post will be scheduled. If you write a negative number, it will be
                    subtracted from the date. Write comma-separated numbers to randomize. You can write the same number
                    multiple times to increase its chance to be selected. <b>This setting will be applied even if you do
                    not supply any date selectors.</b> Example values: <b>%1$s</b> or <b>%2$s</b>'),
                        "10",
                        "10, -10, 25, 25, 25"
                )
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
        <td><?php echo $__env->make('form-items/text', ['name' => '_post_date_add_minutes'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?></td>
    </tr>

    
    <?php echo $__env->make('partials.table-section-title', ['title' => _wpcc("Meta")], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    
    <tr>
        <td>
            <?php echo $__env->make('form-items/label', [
                'for'   =>  '_post_meta_keywords',
                'class' =>  'label-meta',
                'title' =>  _wpcc('Save meta keywords?'),
                'info'  =>  _wpcc('Check this if you want to save meta keywords of the target post.')
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
        <td>
            <div class="inputs">
                <?php echo $__env->make('form-items/checkbox', [
                    'name'          => '_post_meta_keywords',
                    'dependants'    => '["#meta-keywords-as-tags"]'
                ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </td>
    </tr>

    
    <tr id="meta-keywords-as-tags">
        <td>
            <?php echo $__env->make('form-items/label', [
                'for'   =>  '_post_meta_keywords_as_tags',
                'class' =>  'label-meta',
                'title' =>  _wpcc('Add meta keywords as tags?'),
                'info'  =>  _wpcc('Check this if you want each meta keyword should be added as tag to the crawled post.')
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
        <td>
            <div class="inputs">
                <?php echo $__env->make('form-items/checkbox', [
                    'name'          => '_post_meta_keywords_as_tags',
                ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </td>
    </tr>

    
    <tr>
        <td>
            <?php echo $__env->make('form-items/label', [
                'for'   =>  '_post_meta_description',
                'class' =>  'label-meta',
                'title' =>  _wpcc('Save meta description?'),
                'info'  =>  _wpcc('Check this if you want to save meta description of the target post.')
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
        <td>
            <div class="inputs">
                <?php echo $__env->make('form-items/checkbox', [
                    'name'          => '_post_meta_description',
                ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </td>
    </tr>

    
    <?php echo $__env->make('partials.table-section-title', ['title' => _wpcc("Featured Image")], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    
    <tr>
        <td>
            <?php echo $__env->make('form-items/label', [
                'for'   =>  '_post_save_thumbnails_if_not_exist',
                'class' =>  'label-thumbnail',
                'title' =>  _wpcc('Save featured image, if it is not found in category page?'),
                'info'  =>  _wpcc('If you want to save an image from post page as featured image, when there is no
                    featured image found in category page, check this.')
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
        <td>
            <div class="inputs">
                <?php echo $__env->make('form-items/checkbox', [
                    'name'          => '_post_save_thumbnails_if_not_exist',
                    'dependants'    => '[
                        "#post-thumbnail-selectors",
                        "#post-thumbnail-test-url",
                        "#post-thumbnail-find-replace"
                    ]'
                ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </td>
    </tr>

    
    <tr id="post-thumbnail-selectors">
        <td>
            <?php echo $__env->make('form-items/label', [
                'for'   =>  '_post_thumbnail_selectors',
                'class' =>  'label-thumbnail',
                'title' =>  _wpcc('Featured Image Selectors'),
                'info'  =>  _wpcc('CSS selectors for featured image <b>in HTML of the post page</b>. This gets the "src"
                    attribute of <b>the first found element</b>. If you give more than one selector, the first match will
                    be used. E.g. <span class="highlight selector">img.featured</span>')
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
        <td>
            <?php echo $__env->make('form-items/multiple', [
                'include'       => 'form-items/text',
                'name'          => '_post_thumbnail_selectors',
                'addon'         =>  'dashicons dashicons-search',
                'data'          =>  [
                    'urlSelector'   =>  "#_test_url_post",
                    'testType'      =>  \WPCCrawler\objects\Test::$TEST_TYPE_SRC,
                    'targetTag'     =>  'img',
                ],
                'test'          => true,
                'inputClass'    => 'css-selector',
                'showDevTools'  => true,
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('partials/test-result-container', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
    </tr>

    
    <tr id="post-thumbnail-test-url">
        <td>
            <?php echo $__env->make('form-items/label', [
                'for'   =>  '_test_find_replace_thumbnail_url',
                'class' =>  'label-thumbnail',
                'title' =>  _wpcc('Test Featured Image URL'),
                'info'  =>  _wpcc('A full image URL to be used to perform tests for the find-replace settings
                    for featured image URL.')
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
        <td><?php echo $__env->make('form-items/text', ['name' => '_test_find_replace_thumbnail_url'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?></td>
    </tr>

    
    <tr id="post-thumbnail-find-replace">
        <td>
            <?php echo $__env->make('form-items/label', [
                'for'   => '_post_find_replace_thumbnail_url',
                'class' =>  'label-thumbnail',
                'title' => _wpcc("Find and replace in featured image URL"),
                'info'  => _wpcc('If you want some things to be replaced with some other things in <b>URL of the
                    featured image</b>, this is the place. The replacement will be done before saving the image.') . " " . _wpcc_trans_regex()
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
        <td>
            <?php echo $__env->make('form-items/multiple', [
                'include'       =>  'form-items/find-replace',
                'name'          =>  '_post_find_replace_thumbnail_url',
                'addKeys'       =>  true,
                'remove'        =>  true,
                'addon'         =>  'dashicons dashicons-search',
                'data'          =>  [
                    'subjectSelector'   =>  "#_test_find_replace_thumbnail_url",
                    'testType'          =>  \WPCCrawler\objects\Test::$TEST_TYPE_FIND_REPLACE,
                ],
                'test'          => true,
                'addonClasses'  => 'wcc-test-find-replace'
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('partials/test-result-container', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
    </tr>

    
    <?php echo $__env->make('partials.table-section-title', ['title' => _wpcc("Images")], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    
    <tr>
        <td>
            <?php echo $__env->make('form-items/label', [
                'for'   =>  '_post_save_all_images_in_content',
                'class' =>  'label-save-images',
                'title' =>  _wpcc('Save all images in the post content?'),
                'info'  =>  sprintf(_wpcc('If you want all the images in the post content to be saved as media and included in
                    the post from your server, check this. <b>This is the same as checking "save images as media" and
                    writing %1$s to the image selectors. </b>'),
                        '<b><span class="highlight selector">img</span></b>'
                    ) . " " . _wpcc_trans_save_image_note()
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
        <td>
            <div class="inputs">
                <?php echo $__env->make('form-items/checkbox', [
                    'name' => '_post_save_all_images_in_content',
                ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </td>
    </tr>

    
    <tr>
        <td>
            <?php echo $__env->make('form-items/label', [
                'for'   =>  '_post_save_images_as_media',
                'class' =>  'label-save-images',
                'title' =>  _wpcc('Save images as media?'),
                'info'  =>  _wpcc('If you want the images in the post content to be saved as media and included in
                    the post from your server, check this.') . " " .  _wpcc_trans_save_image_note()
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
        <td>
            <div class="inputs">
                <?php echo $__env->make('form-items/checkbox', [
                    'name'          => '_post_save_images_as_media',
                    'dependants'    => '[
                        "#post-save-images-as-gallery",
                        "#post-image-selectors",
                        "#post-image-add-link"
                    ]'
                ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </td>
    </tr>

    
    <tr id="post-save-images-as-gallery">
        <td colspan="2">

            
            <table class="wcc-settings">
                
                <tr>
                    <td>
                        <?php echo $__env->make('form-items/label', [
                            'for'   =>  '_post_save_images_as_gallery',
                            'class' =>  'label-gallery',
                            'title' =>  _wpcc('Save images as gallery?'),
                            'info'  =>  _wpcc('If you want to save specific images as a gallery, check this.')
                        ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </td>
                    <td>
                        <div class="inputs">
                            <?php echo $__env->make('form-items/checkbox', [
                                'name'          => '_post_save_images_as_gallery',
                                'dependants'    => '[
                                    "#post-gallery-image-selectors",
                                    "#post-gallery-save-as-woocommerce-gallery"
                                ]'
                            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        </div>
                    </td>
                </tr>

                
                <tr id="post-gallery-image-selectors">
                    <td>
                        <?php echo $__env->make('form-items/label', [
                            'for'   =>  '_post_gallery_image_selectors',
                            'class' =>  'label-gallery',
                            'title' =>  _wpcc('Gallery Image URL Selectors'),
                            'info'  =>  _wpcc('CSS selectors for <b>image URLs in the HTML of the page</b>. This gets the
                                "src" attribute of specified element by default. If you give more than one selector, each
                                match will be used when saving images and creating the gallery. Note that these elements
                                will be removed from the HTML after URL is acquired from them.')
                        ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </td>
                    <td>
                        <?php echo $__env->make('form-items/multiple', [
                            'include'       => 'form-items/selector-with-attribute',
                            'name'          => '_post_gallery_image_selectors',
                            'addon'         =>  'dashicons dashicons-search',
                            'data'          =>  [
                                'urlSelector'   =>  "#_test_url_post",
                                'testType'      =>  \WPCCrawler\objects\Test::$TEST_TYPE_SELECTOR_ATTRIBUTE,
                                'attr'          =>  'src',
                                'targetTag'     =>  'img',
                            ],
                            'test'          => true,
                            'addKeys'       => true,
                            'addonClasses'  => 'wcc-test-selector-attribute',
                            'defaultAttr'   => 'src',
                        ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <?php echo $__env->make('partials/test-result-container', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </td>
                </tr>

                
                <?php if(class_exists("WooCommerce")): ?>
                    <tr id="post-gallery-save-as-woocommerce-gallery">
                        <td>
                            <?php echo $__env->make('form-items/label', [
                                'for'   =>  '_post_save_images_as_woocommerce_gallery',
                                'class' =>  'label-gallery',
                                'title' =>  _wpcc('Save images as WooCommerce product gallery?'),
                                'info'  =>  _wpcc("If you set post type as WooCommerce product and you want to save
                                    the gallery as the product's gallery, check this.")
                            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        </td>
                        <td>
                            <div class="inputs">
                                <?php echo $__env->make('form-items/checkbox', [
                                    'name'          => '_post_save_images_as_woocommerce_gallery'
                                ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            </div>
                        </td>
                    </tr>
                <?php endif; ?>
            </table>
        </td>

    </tr>

    
    <tr id="post-image-selectors">
        <td>
            <?php echo $__env->make('form-items/label', [
                'for'   =>  '_post_image_selectors',
                'class' =>  'label-save-images',
                'title' =>  _wpcc('Image URL Selectors'),
                'info'  =>  _wpcc('CSS selectors for images <b>in the post content</b>. This gets the "src" attribute of
                    specified element. If you give more than one selector, each match will be used when saving
                    images. E.g. <b><span class="highlight selector">img</span> will save all images in the post content.</b>')
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
        <td>
            <?php echo $__env->make('form-items/multiple', [
                'include'       => 'form-items/text',
                'name'          => '_post_image_selectors',
                'addon'         =>  'dashicons dashicons-search',
                'data'          =>  [
                    'urlSelector'   =>  "#_test_url_post",
                    'testType'      =>  \WPCCrawler\objects\Test::$TEST_TYPE_SRC,
                    'targetTag'     =>  'img',
                ],
                'test'          => true,
                'inputClass'    => 'css-selector',
                'showDevTools'  => true,
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('partials/test-result-container', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
    </tr>

    
    <tr id="post-image-test-url">
        <td>
            <?php echo $__env->make('form-items/label', [
                'for'   =>  '_test_find_replace_image_urls',
                'class' =>  'label-save-images',
                'title' =>  _wpcc('Test Image URL'),
                'info'  =>  _wpcc('A full image URL to be used to perform tests for the find-replace settings for image URLs.')
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
        <td><?php echo $__env->make('form-items/text', ['name' => '_test_find_replace_image_urls'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?></td>
    </tr>

    
    <tr id="post-image-find-replace">
        <td>
            <?php echo $__env->make('form-items/label', [
                'for'   => '_post_find_replace_image_urls',
                'class' =>  'label-save-images',
                'title' => _wpcc("Find and replace in image URLs"),
                'info'  => _wpcc('If you want some things to be replaced with some other things in <b>URLs of the
                    found images</b>, this is the place. The replacement will be done before saving the image.') . " " . _wpcc_trans_regex()
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
        <td>
            <?php echo $__env->make('form-items/multiple', [
                'include'       =>  'form-items/find-replace',
                'name'          =>  '_post_find_replace_image_urls',
                'addKeys'       =>  true,
                'remove'        =>  true,
                'addon'         =>  'dashicons dashicons-search',
                'data'          =>  [
                    'subjectSelector'   =>  "#_test_find_replace_image_urls",
                    'testType'          =>  \WPCCrawler\objects\Test::$TEST_TYPE_FIND_REPLACE,
                ],
                'test'          => true,
                'addonClasses'  => 'wcc-test-find-replace'
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('partials/test-result-container', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
    </tr>

    
    <?php echo $__env->make('partials.table-section-title', ['title' => _wpcc("Custom Short Codes")], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    
    <tr>
        <td>
            <?php echo $__env->make('form-items/label', [
                'for'   =>  '_post_custom_content_shortcode_selectors',
                'title' =>  _wpcc('Custom Content Selectors for Shortcodes'),
                'info'  =>  _wpcc('CSS selectors for HTML elements whose contents can be used in post template
                    by defined shortcode. If more than one element is found, their content will be merged. If
                    you do not want them merged, check the "single" checkbox to get the first found result.
                    By default, this gets HTML of the found element. If you want the text of the target element,
                    write "text" for attribute. You can also use any other attribute of the found element, such
                    as "src", "href"... Write your shortcodes without brackets, e.g. <b>"item-price"</b>. Next, you
                    can use it <b>in the main post template by writing [item-price]</b>')
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
        <td>
            <?php echo $__env->make('form-items/multiple', [
                'include'       =>  'form-items/selector-custom-shortcode',
                'name'          =>  '_post_custom_content_shortcode_selectors',
                'addon'         =>  'dashicons dashicons-search',
                'data'          =>  [
                    'urlSelector'   =>  "#_test_url_post",
                    'testType'      =>  \WPCCrawler\objects\Test::$TEST_TYPE_SELECTOR_ATTRIBUTE,
                    'attr'          =>  'html'
                ],
                'test'          => true,
                'addKeys'       => true,
                'addonClasses'  => 'wcc-test-selector-attribute',
                'defaultAttr'   => 'html',
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('partials/test-result-container', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
    </tr>

    
    <tr>
        <td>
            <?php echo $__env->make('form-items/label', [
                'for'   => '_post_find_replace_custom_short_code',
                'title' => _wpcc("Find and replace in custom short codes"),
                'info'  => _wpcc('If you want some things to be replaced with some other things in <b>custom short code
                    contents</b>, this is the place. <b>The replacements will be applied after custom short code
                    contents are retrieved</b>.') . " " . _wpcc_trans_regex()
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
        <td>
            <?php echo $__env->make('form-items/multiple', [
                'include'       =>  'form-items/find-replace-in-custom-short-code',
                'name'          =>  '_post_find_replace_custom_short_code',
                'addKeys'       =>  true,
                'remove'        =>  true,
                'addon'         =>  'dashicons dashicons-search',
                'data'          =>  [
                    'urlSelector'       =>  "#_test_url_post",
                    'subjectSelector'   =>  "#_test_find_replace_first_load",
                    'testType'          =>  \WPCCrawler\objects\Test::$TEST_TYPE_FIND_REPLACE_IN_CUSTOM_SHORT_CODE,
                ],
                'test'          => true,
                'addonClasses'  => 'wcc-test-find-replace-in-custom-short-code'
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('partials/test-result-container', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
    </tr>

    
    <?php echo $__env->make('partials.table-section-title', ['title' => _wpcc("List Type Posts")], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    
    <tr>
        <td>
            <?php echo $__env->make('form-items/label', [
                'for'   =>  '_post_is_list_type',
                'class' =>  'label-list',
                'title' =>  _wpcc('Posts are list type?'),
                'info'  =>  _wpcc('If the target post is list type, and you want to import it as a list, check this.')
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
        <td>
            <div class="inputs">
                <?php echo $__env->make('form-items/checkbox', [
                    'name'          => '_post_is_list_type',
                    'dependants'    => '[
                            "#list-title-selector",
                            "#list-content-selector",
                            "#list-item-number-selectors",
                            "#list-items-start-after-selectors",
                            "#list-insert-reversed",
                            "#list-item-auto-number"
                        ]'
                ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </td>
    </tr>

    
    <tr id="list-items-start-after-selectors">
        <td>
            <?php echo $__env->make('form-items/label', [
                'for'   =>  '_post_list_item_starts_after_selectors',
                'class' =>  'label-list',
                'title' =>  _wpcc('List Items Start After Selectors'),
                'info'  =>  _wpcc("CSS selectors for the elements come just before the first list item. This will be used
                    to detect list item contents accurately. The position of the first match of any given selector
                    will be compared to others and the greatest position will be used. You can give a selector
                    for the first item. It'll do the job. E.g. <span class='highlight selector'>.entry > .list-item</span>")
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
        <td>
            <?php echo $__env->make('form-items/multiple', [
                'include'       => 'form-items/text',
                'name'          => '_post_list_item_starts_after_selectors',
                'addon'         =>  'dashicons dashicons-search',
                'data'          =>  [
                    'urlSelector'   =>  "#_test_url_post",
                    'testType'      =>  \WPCCrawler\objects\Test::$TEST_TYPE_FIRST_POSITION,
                ],
                'test'          => true,
                'inputClass'    => 'css-selector',
                'showDevTools'  => true,
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('partials/test-result-container', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
    </tr>

    
    <tr id="list-item-number-selectors">
        <td>
            <?php echo $__env->make('form-items/label', [
                'for'   =>  '_post_list_item_number_selectors',
                'class' =>  'label-list',
                'title' =>  _wpcc('List Item Number Selectors'),
                'info'  =>  _wpcc("CSS selectors for each list item's number, if the target post is list type. This gets
                    the text of specified element. If you give more than one selector, the first match will
                    be used.")
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
        <td>
            <?php echo $__env->make('form-items/multiple', [
                'include'       => 'form-items/text',
                'name'          => '_post_list_item_number_selectors',
                'addon'         =>  'dashicons dashicons-search',
                'data'          =>  [
                    'urlSelector'   =>  "#_test_url_post",
                    'testType'      =>  \WPCCrawler\objects\Test::$TEST_TYPE_TEXT,
                ],
                'test'          => true,
                'inputClass'    => 'css-selector',
                'showDevTools'  => true,
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('partials/test-result-container', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
    </tr>

    
    <tr id="list-item-auto-number">
        <td>
            <?php echo $__env->make('form-items/label', [
                'for'   =>  '_post_list_item_auto_number',
                'class' =>  'label-list',
                'title' =>  _wpcc('Insert list item numbers automatically?'),
                'info'  =>  _wpcc('If you want to insert list item numbers automatically when there is no item number,
                    then check this. The items will be numbered starting from 1.')
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
        <td>
            <div class="inputs">
                <?php echo $__env->make('form-items/checkbox', [
                    'name'          => '_post_list_item_auto_number',
                ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </td>
    </tr>

    
    <tr id="list-title-selector">
        <td>
            <?php echo $__env->make('form-items/label', [
                'for'   =>  '_post_list_title_selectors',
                'class' =>  'label-list',
                'title' =>  _wpcc('List Item Title Selectors'),
                'info'  =>  _wpcc("CSS selectors for each list item's title, if the target post is list type. This gets
                    the text of specified element. If you give more than one selector, the first match will
                    be used.")
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
        <td>
            <?php echo $__env->make('form-items/multiple', [
                'include'       => 'form-items/text',
                'name'          => '_post_list_title_selectors',
                'addon'         =>  'dashicons dashicons-search',
                'data'          =>  [
                    'urlSelector'   =>  "#_test_url_post",
                    'testType'      =>  \WPCCrawler\objects\Test::$TEST_TYPE_TEXT,
                ],
                'test'          => true,
                'inputClass'    => 'css-selector',
                'showDevTools'  => true,
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('partials/test-result-container', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
    </tr>

    
    <tr id="list-content-selector">
        <td>
            <?php echo $__env->make('form-items/label', [
                'for'   =>  '_post_list_content_selectors',
                'class' =>  'label-list',
                'title' =>  _wpcc('List Item Content Selectors'),
                'info'  =>  _wpcc("CSS selector for each list item's content, if the target post is list type. This gets
                    the HTML of specified element. If you give more than one selector, the results will be
                    combined when creating each list item's content.")
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
        <td>
            <?php echo $__env->make('form-items/multiple', [
                'include'       =>  'form-items/text',
                'name'          =>  '_post_list_content_selectors',
                'addon'         =>  'dashicons dashicons-search',
                'data'          =>  [
                    'urlSelector'   =>  "#_test_url_post",
                    'testType'      =>  \WPCCrawler\objects\Test::$TEST_TYPE_HTML,
                ],
                'test'          => true,
                'inputClass'    => 'css-selector',
                'showDevTools'  => true,
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('partials/test-result-container', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
    </tr>

    
    <tr id="list-insert-reversed">
        <td>
            <?php echo $__env->make('form-items/label', [
                'for'   =>  '_post_list_insert_reversed',
                'class' =>  'label-list',
                'title' =>  _wpcc('Insert list in reverse order?'),
                'info'  =>  _wpcc('If you want to insert the list into the post in reverse order, then check this.')
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
        <td>
            <div class="inputs">
                <?php echo $__env->make('form-items/checkbox', [
                    'name'          => '_post_list_insert_reversed',
                ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </td>
    </tr>

    
    <?php echo $__env->make('partials.table-section-title', ['title' => _wpcc("Pagination")], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    
    <tr>
        <td>
            <?php echo $__env->make('form-items/label', [
                'class' =>  'label-paginate',
                'for'   =>  '_post_paginate',
                'title' =>  _wpcc('Paginate Posts'),
                'info'  =>  _wpcc('If the target post is paginated, and you want it imported as paginated, check this.')
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
        <td>
            <div class="inputs">
                <?php echo $__env->make('form-items/checkbox', [
                    'name'          => '_post_paginate',
                    'dependants'    => '["#post-next-page-url-selector", "#post-all-page-urls-selectors"]'
                ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </td>
    </tr>

    
    <tr id="post-next-page-url-selector">
        <td>
            <?php echo $__env->make('form-items/label', [
                'class' =>  'label-paginate',
                'for'   =>  '_post_next_page_url_selectors',
                'title' =>  _wpcc('Post Next Page URL Selectors'),
                'info'  =>  _wpcc('CSS selector for next page URL, used to get "href" attribute of "a" tag. E.g.
                    <span class="highlight selector">.pagination > a.next</span>. If you give more than one selector,
                    the first match will be used.')
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
        <td>
            <?php echo $__env->make('form-items/multiple', [
                'include'       => 'form-items/selector-with-attribute',
                'name'          => '_post_next_page_url_selectors',
                'addon'         =>  'dashicons dashicons-search',
                'data'          =>  [
                    'urlSelector'           =>  "#_test_url_post",
                    'testType'              =>  \WPCCrawler\objects\Test::$TEST_TYPE_SELECTOR_ATTRIBUTE,
                    'attr'                  =>  'href',
                    'targetTag'             =>  'a',
                    'targetCssSelectors'    => ['link[rel="next"]']
                ],
                'test'          => true,
                'addKeys'       => true,
                'addonClasses'  => 'wcc-test-selector-attribute',
                'defaultAttr'   => 'href',
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('partials/test-result-container', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
    </tr>

    
    <tr id="post-all-page-urls-selectors">
        <td>
            <?php echo $__env->make('form-items/label', [
                'class' =>  'label-paginate',
                'for'   =>  '_post_next_page_all_pages_url_selectors',
                'title' =>  _wpcc('Post All Page URLs Selectors'),
                'info'  =>  _wpcc('CSS selectors for all page URLs. Sometimes there is no next page URL. Instead, the
                    post page has all of the post pages (or parts) in one place. If this is the case, you should
                    use this. This is used to get "href" attribute of "a" tag. E.g. <span class="highlight selector">.post > .parts > a</span>.
                    If you give more than one selector, then the first match will be used.')
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
        <td>
            <?php echo $__env->make('form-items/multiple', [
                'include'       => 'form-items/selector-with-attribute',
                'name'          => '_post_next_page_all_pages_url_selectors',
                'addon'         =>  'dashicons dashicons-search',
                'data'          =>  [
                    'urlSelector'   =>  "#_test_url_post",
                    'testType'      =>  \WPCCrawler\objects\Test::$TEST_TYPE_SELECTOR_ATTRIBUTE,
                    'attr'          =>  'href',
                    'targetTag'     =>  'a',
                ],
                'test'          => true,
                'addKeys'       => true,
                'addonClasses'  => 'wcc-test-selector-attribute',
                'defaultAttr'   => 'href',
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('partials/test-result-container', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
    </tr>

    
    <?php echo $__env->make('partials.table-section-title', ['title' => _wpcc("Post Meta")], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    
    <tr>
        <td>
            <?php echo $__env->make('form-items/label', [
                'for'   => '_post_custom_meta_selectors',
                'title' => _wpcc('Custom Meta Selectors'),
                'info'  => _wpcc('CSS selectors for custom meta values. You can use this to save anything from
                    target post as post meta of to-be-saved post. You can write "html", "text", or an attribute
                    of the target element for attribute input.')
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
        <td>
            <?php echo $__env->make('form-items/multiple', [
                'include'       => 'form-items/selector-custom-post-meta',
                'name'          => '_post_custom_meta_selectors',
                'addon'         =>  'dashicons dashicons-search',
                'data'          =>  [
                    'urlSelector'   =>  "#_test_url_post",
                    'testType'      =>  \WPCCrawler\objects\Test::$TEST_TYPE_SELECTOR_ATTRIBUTE,
                    'attr'          =>  'text'
                ],
                'test'          => true,
                'addKeys'       => true,
                'addonClasses'  => 'wcc-test-selector-attribute',
                'defaultAttr'   => 'text',
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('partials/test-result-container', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
    </tr>

    
    <tr>
        <td>
            <?php echo $__env->make('form-items/label', [
                'for'   => '_post_custom_meta',
                'title' => _wpcc('Custom Meta'),
                'info'  => _wpcc('You can save any value as a post meta. Just write a post meta key and its value.')
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
        <td>
            <?php echo $__env->make('form-items/multiple', [
                'include'       => 'form-items/custom-post-meta',
                'name'          => '_post_custom_meta',
                'addKeys'       => true,
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('partials/test-result-container', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
    </tr>

    
    <tr>
        <td>
            <?php echo $__env->make('form-items/label', [
                'for'   => '_post_find_replace_custom_meta',
                'title' => _wpcc("Find and replace in custom meta"),
                'info'  => _wpcc('If you want some things to be replaced with some other things in <b>custom meta
                    values</b>, this is the place. <b>The replacements will be applied after
                    find-and-replaces for element HTMLs are applied</b>.') . " " . _wpcc_trans_regex()
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
        <td>
            <?php echo $__env->make('form-items/multiple', [
                'include'       =>  'form-items/find-replace-in-custom-meta',
                'name'          =>  '_post_find_replace_custom_meta',
                'addKeys'       =>  true,
                'remove'        =>  true,
                'addon'         =>  'dashicons dashicons-search',
                'data'          =>  [
                    'urlSelector'       =>  "#_test_url_post",
                    'subjectSelector'   =>  "#_test_find_replace_first_load",
                    'testType'          =>  \WPCCrawler\objects\Test::$TEST_TYPE_FIND_REPLACE_IN_CUSTOM_META,
                    'requiredSelectors' =>  "#_test_url_post | #_test_find_replace_first_load"
                ],
                'test'          => true,
                'addonClasses'  => 'wcc-test-find-replace-in-custom-meta'
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('partials/test-result-container', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
    </tr>

    
    <?php echo $__env->make('site-settings.partial.html-manipulation-inputs', [
        "keyTestUrl"                        => "_test_url_post",
        "keyTestFindReplace"                => "_test_find_replace_first_load",
        "keyFindReplaceFirstLoad"           => "_post_find_replace_first_load",
        "keyFindReplaceElementAttributes"   => "_post_find_replace_element_attributes",
        "keyExchangeElementAttributes"      => "_post_exchange_element_attributes",
        "keyRemoveElementAttributes"        => "_post_remove_element_attributes",
        "keyFindReplaceElementHtml"         => "_post_find_replace_element_html"
    ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    
    <?php echo $__env->make('partials.table-section-title', ['title' => _wpcc("Unnecessary Elements")], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    
    <tr>
        <td>
            <?php echo $__env->make('form-items/label', [
                'title' =>  _wpcc('Unnecessary Element Selectors'),
                'info'  =>  _wpcc('CSS selectors for unwanted elements in the post page. Specified elements will be
                    removed from the HTML of the page. Content extraction will be done after the page is cleared
                    from unnecessary elements.')
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
        <td>
            <?php echo $__env->make('form-items/multiple', [
                'include'       => 'form-items/text',
                'name'          => '_post_unnecessary_element_selectors',
                'addon'         =>  'dashicons dashicons-search',
                'addonTitle'    =>  'test',
                'data'          =>  [
                    'urlSelector'   =>  "#_test_url_post",
                    'testType'      =>  \WPCCrawler\objects\Test::$TEST_TYPE_HTML,
                ],
                'test'          => true,
                'inputClass'    => 'css-selector',
                'showDevTools'  => true,
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('partials/test-result-container', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
    </tr>

    
    <?php echo $__env->make('partials.table-section-title', ['title' => _wpcc("Notifications")], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    
    <tr>
        <td>
            <?php echo $__env->make('form-items/label', [
                'for'   => '_post_notify_empty_value_selectors',
                'title' => _wpcc('CSS selectors for empty value notification'),
                'info'  => _wpcc('Write CSS selectors and their attributes you want to retrieve. If the retrieved value
                        is empty, you will be notified via email. These CSS selectors will be tried to be retrieved
                        after all replacements are applied.')
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
        <td>
            <?php echo $__env->make('form-items/multiple', [
                'include'       => 'form-items/selector-with-attribute',
                'name'          => '_post_notify_empty_value_selectors',
                'addon'         =>  'dashicons dashicons-search',
                'data'          =>  [
                    'urlSelector'   =>  "#_test_url_post",
                    'testType'      =>  \WPCCrawler\objects\Test::$TEST_TYPE_SELECTOR_ATTRIBUTE,
                    'attr'          =>  'text'
                ],
                'test'          => true,
                'addKeys'       => true,
                'addonClasses'  => 'wcc-test-selector-attribute',
                'defaultAttr'   => 'text',
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('partials/test-result-container', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </td>
    </tr>

</table>