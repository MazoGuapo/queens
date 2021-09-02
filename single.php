<?php get_header();

    // GET VARIABLES
    $thumb_id = get_post_thumbnail_id($item->ID);
    $large_image_url = wp_get_attachment_image_src( $thumb_id, 'full');
?>

<section class="module module_banner flex h-screen w-full justify-center items-center">

    <div class="background">
        <img src="<?php echo $large_image_url[0]; ?>">
    </div>

    <div class="wrapper_content flex flex-col text-center w-2/5">

        <div class="surtitle pb-10">
            <p class="text-white"><?php echo get_the_date('d/m/Y'); ?></p>
        </div>

        <div class="title pb-10">
            <p class="text-h1 font-primary font-thin text-white">
                <?php the_title(); ?>
            </p>
        </div>


        <div class="buttons">
            <a class="btn" href="">Seguir Leyendo</a>
        </div>

    </div>

    <?php if($options['scroll_check'] == 'active') { ?>
    <div class="scroll">
        <span class="texto"><?php echo $options['scroll']['texto']; ?></span>
        <span class="linea"></span>
        <?php echo $content['titulo']; ?>
        hello
    </div>
    <?php } ?>

</section>

<!-- SINGLE -->
<section class="module module_blog_single">
    <div class="module_blog_single_wrap">

        <!-- META -->
        <div class="wrapper">
            <span class="fecha"><?php echo get_the_date('d/m/Y'); ?></span>
        </div>

        <!-- SINGLE -->
        <div class="titulo">
            <p><?php the_title(); ?></p>
        </div>

        <!-- CONTENT -->
        <div class="content">
            <?php the_content(); ?>
        </div>

    </div>

</section>

<?php get_footer(); ?>