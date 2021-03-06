<?php
/**
* Template Name: Blog
*/

get_header();

// OBETENER ULTIMO POST
$args = array(
    'post_type'       => 'post',
    'sort_column'     => 'menu_order',
    'orderby'         => 'date',
    'order'           => 'DESC',
    'posts_per_page'  => 1
);

$posts = get_posts( $args );

// ULTIMO POST
if($posts):
	foreach ($posts as $post) {
		// IMAGEN
		$thumb_id = get_post_thumbnail_id($post->ID);
		$large_image_url = wp_get_attachment_image_src( $thumb_id, 'theme_small');
		?>
<section class="module module_blog bg-secondary">

    <div class="wrapper_featured flex ipadH:flex-row flex-col">

        <div class="wrapper_image ipadH:w-2/4 w-full">
            <img src="<?php echo $large_image_url[0]; ?>">
        </div>

        <div class="wrapper_content flex items-center justify-center ipadH:w-2/4 w-full ipadH:pt-0 pt-20">

            <div class="text-left ipadH:w-3/5 w-full">
                <div class="fecha ipad:pb-10 pb-8">
                    <p class="text-h4 text-primary font-thin font-primary italic"><?php echo get_the_date('d/m/Y'); ?>
                    </p>
                </div>

                <div class="titulo ipad:pb-10 pb-5">
                    <p class="ipad:uppercase ipad:text-h1 text-h3 text-primary ipad:font-thin font-light font-primary">
                        <?php echo get_the_title($post->ID) ?></p>
                </div>

                <a href="<?php echo get_permalink($post->ID) ?>" class="btn_dark_line ipad:inline-block hidden">Leer más</a>
            </div>
        </div>
    </div>

</section>
<?php } ?>
<?php endif; ?>

<section class="module module_blog_grid bg-secondary">
    <div class="wrapper">
        <div class="grid_cards">
            <?php echo do_shortcode('[ajax_load_more container_type="div" post_type="post" posts_per_page="4" offset="1"]'); ?>
        </div>
    </div>
</section>



<?php

wp_reset_postdata();

if(have_rows('modules')):
    while (have_rows('modules')): the_row();

        if(get_row_layout() == 'module_form'):
            require('views/modules/module_form.php');

        endif;

    endwhile;
endif;

get_footer(); ?>