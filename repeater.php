<?php
// IMAGEN
$thumb_id = get_post_thumbnail_id($item->ID);
$large_image_url = wp_get_attachment_image_src( $thumb_id, 'theme_small');
?>

<article class="card">
    <a href="<?php the_permalink(); ?>">
        <img src="<?php echo $large_image_url[0]; ?>">
        <div class="content">
            <p class="date">
				<?php echo get_the_date('d/m/Y'); ?>
			</p>
            <p class="title">
                <?php the_title(); ?>
            </p>
        </div>
    </a>
</article>