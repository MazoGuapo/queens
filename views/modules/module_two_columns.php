<?php
    $content = get_sub_field('contenido_2col');
    $layout = get_sub_field('layout_2col');
    $media = get_sub_field('media_2col');
    $buttons = get_sub_field('botones_2col');
    $options = get_sub_field('opciones');
    $alineacion = get_sub_field('alineacion_2col');
    $align_type = $alineacion['alineacion_tipo'];
    $full_height = $options['full_height'];
    $decoration = get_sub_field('decoration');

    unset($output_imagen);
    unset($output_bottom);

    // DECORATION
    if( $decoration['activado'][0] == 'on'):
        if($decoration['tipo'] == 'imagen'):
            $output_imagen .= '<div class="decoration decoration_image"><img src="'.$decoration['imagen']['sizes']['theme_full'].'"></div>';
        endif;
        if($decoration['tipo'] == 'bottom'):
            $output_bottom .= '<div class="decoration"><img src="'.$decoration['imagen']['sizes']['theme_full'].'"></div>';
        endif;
    endif;

?>

<section class="module module-<?php echo $layout['lateral_paddings']; ?> module_two_columns min-h-<?php echo $full_height; ?> w-full bg-<?php echo $options['bg_color']; ?>">

    <div class="wrapper flex ipadH:flex-<?php echo $layout['flex_direction']; ?> flex-col-reverse">

        <div class="wrapper_image">

            <?php echo $output_imagen; ?>

            <?php if($media['imagen_2col']) { ?>
                <img src="<?php echo $media['imagen_2col']['sizes']['theme_full'] ?>" alt="" class="" >
            <?php } ?>

            <?php if($media['video_2col']) { ?>
                <video src="<?php echo $media['video_2col'] ?>" autoplay="true" loop="true" muted="true"></video>
            <?php } ?>

            <?php if($media['carrusel_2col']) {
                $images = $media['carrusel_2col'];  ?>
                <div class="carousel">
                    <?php foreach($images as $image) { ?>
                    <img src="<?php echo $image['sizes']['theme_full']; ?>">
                    <?php } ?>
                </div>
            <?php } ?>

            <?php if($media['pie_media']): ?>
                <div class="w-full text-right mt-5 ">
                    <p class="text-h6"><?php echo $media['pie_media']; ?></p>
                </div>
            <?php endif; ?>

        </div>

        <div class="wrapper_content flex flex-col <?php echo $alineacion; ?>">

            <?php if($content['sobretitulo']) { ?>
                <div class="surtitle w-full mb-20 transition">
                    <p class="text-primary ipad:text-h5 text-h6 text-h6italic"><?php echo $content['sobretitulo']; ?></p>
                </div>
            <?php } ?>

            <?php if($content['titulo']) { ?>
            <div class="title w-4/5 pb-20">
                <p class="ipad:text-<?php echo $content['tamano_titulo']; ?> text-h3 font-primary font-thin text-primary">
                    <?php echo $content['titulo']; ?>
                </p>
            </div>
            <?php } ?>

            <?php if($content['cuerpo']) { ?>
            <div class="body w-full pb-20">
                <p class="text-primary ipad:text-h5 text-h7"><?php echo $content['cuerpo']; ?></p>
            </div>
            <?php } ?>

            <?php if($content['subtitulo']) { ?>
            <div class="subtitle w-full pb-20 ipad:block hidden">
                <p class="text-primary text-h3"><?php echo $content['subtitulo']; ?></p>
            </div>
            <?php } ?>

            <?php if($buttons !== false) { ?>
            <div class="buttons">

                <?php foreach($buttons as $button) { ?>

                <?php if($button['link_externo']) { ?>
                <a href="<?php echo $button['link_externo']; ?>" class="">
                    <?php if($button['icono']) { ?>
                    <img src="<?php echo $button['icono']['sizes']['theme_full']; ?>">
                    <?php } ?>
                    <p><?php echo $button['titulo']; ?></p>
                </a>
                <?php } ?>

                <?php if($button['link_lg_video']) { ?>
                <a href="<?php echo $button['link_lg_video']; ?>" class="">
                    <?php if($button['icono']) { ?>
                    <img src="<?php echo $button['icono']['sizes']['theme_full']; ?>">
                    <?php } ?>
                    <p><?php echo $button['titulo']; ?></p>
                </a>
                <?php } ?>

                <?php if($button['link_lg_imagen']) { ?>
                <a href="<?php echo $button['link_lg_imagen']; ?>" class="">
                    <?php if($button['icono']) { ?>
                    <img src="<?php echo $button['icono']['sizes']['theme_full']; ?>">
                    <?php } ?>
                    <p><?php echo $button['titulo']; ?></p>
                </a>
                <?php } ?>

                <?php } ?>

            </div>
            <?php } ?>

            <?php echo $output_bottom; ?>

        </div>

    </div>

</section>