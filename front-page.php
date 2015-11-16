<?php
get_header(); ?>
<div class="col-xs-12">
    <div class="row">
        <div class="col-xs-12">
            <?php
            Awl\arc_image_carousel_by_grid_name('test_carousel', 'ALBUM');
            ?>
        </div>
        <div class="col-xs-12">
            <?php
            Awl\arc_image_grid_add_grid('ALBUM', 200, 200, 4, '<p style="color: white;">{name}{url}</p>', 'See Details', true, true, 20, 100);
            ?>
        </div>
        <div class="col-xs-12">
            <?php
            $testArray = array();
            
            function arc_test_push($currentObj){
                global $testArray;
                array_push($testArray, $currentObj);
            }
            
            Awl\arc_get_posts_by_category('news', 'arc_test_push', false, 3);
            
            Awl\arc_image_carousel('test_news', $testArray, '{$data->metadata["_arc_image_grid_img"]}', '$data->name', 'TODO: Obtain page data');
            ?>
        </div>
        <div class="col-xs-12">
            <?php
            Awl\arc_section_by_category('test_sections', 'news', true, '', 3);
            ?>
        </div>
    </div>

</div>

<?php
get_footer();
