<?php
    $content = get_sub_field('contenido_form');
    $layout = get_sub_field('layout_form');
    $image = get_sub_field('image_form');
    $options = get_sub_field('opciones_form');
    $alineacion = get_sub_field('alineacion_form');
?>

<section
    class="module module-<?php echo $layout['lateral_paddings']; ?> module_form h-full w-full bg-<?php echo $options['bg_color_form']; ?>">

    <div class="wrapper flex flex-row">

        <div class="wrapper_image w-2/4">

            <?php if($image) { ?>
            <img src="<?php echo $image['sizes']['theme_full'] ?>" alt="">
            <?php } ?>

        </div>

        <div class="wrapper_content w-2/4 flex flex-col <?php echo $alineacion; ?>">

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