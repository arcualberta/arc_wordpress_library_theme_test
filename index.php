<?php

get_header(); ?>

<div id="primary" class="col-xs-12">
    <div id="content" class="site-content" role="main">
        <?php /*<div id="page-header" class="row">
            <h1><?php the_title() ?></h1>
        </div> */?>
        <?php /* The loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>
        <div class="row">
            <div class="col-xs-12">
                <?php the_content() ?>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</div><!-- #main-content -->

<?php
get_footer();
