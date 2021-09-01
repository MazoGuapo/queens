<?php get_header(); ?>
<main id="content" role="main">

    <div class="module module-block ">
        <div class="grid grid-cols-2 gap-96 gap">
            <div>OU</div>
            <div>MAMMA</div>
        </div>
    </div>

    <div class="module module-full">
        FULL
    </div>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php comments_template(); ?>
<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'below' ); ?>
</main>
<?php get_footer(); ?>