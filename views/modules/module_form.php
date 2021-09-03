<?php
    $content = get_sub_field('contenido_form');
    $layout = get_sub_field('layout_form');
    $image = get_sub_field('image_form');
    $dossier = get_sub_field('dossier');
    $options = get_sub_field('opciones');
    $alineacion = get_sub_field('alineacion_form');
?>

<section
    class="module module-<?php echo $layout['lateral_paddings']; ?> module_form h-full w-full bg-<?php echo $options['bg_color']; ?>">

    <div class="wrapper flex flex-row">

        <div class="wrapper_image">

            <div class="dossier_text"><?php echo $dossier['texto']; ?></div>

            <a class="dossier_link" href="<?php echo $dossier['archivo']; ?>">
                <img src="<?php bloginfo('template_url') ?>/src/assets/images/arrow_left.png" alt="">
            </a>

            <?php if($image) { ?>
                <img src="<?php echo $image['sizes']['theme_full'] ?>" alt="">
            <?php } ?>

        </div>

        <div class="wrapper_content  flex flex-col <?php echo $alineacion; ?>">

            <?php if($content['titulo']) { ?>
            <div class="title pb-20">
                <p class="text-<?php echo $content['tamano_titulo']; ?> font-primary font-light text-primary">
                    <?php echo $content['titulo']; ?>
                </p>
            </div>
            <?php } ?>

            <div class="formulario">
                <?php echo do_shortcode('[contact-form-7 id="5" title="Form"]'); ?>
            </div>

        </div>

    </div>

</section>