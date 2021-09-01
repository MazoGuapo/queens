<?php
/**
* Template Name: Legal */
get_header('legal');

?>

<section class="module_legal">
    <div class="wrapper">
        <div class="title pb-24">
            <h1 class="text-white text-h1 font-primary"><?php echo the_title(); ?></h1>
        </div>
        <div class="content">
            <?php echo the_content(); ?>
        </div>
    </div>
</section>

<?php
if(have_rows('modules')):
    while (have_rows('modules')): the_row();

        if (get_row_layout() == 'module_form'):
            require('views/modules/module_form.php');

        endif;

    endwhile;
endif;

get_footer(); ?>