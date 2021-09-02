<?php
    $bg = get_sub_field('fondo_banner');
    $content = get_sub_field('contenido');
    $buttons = get_sub_field('botones');
    $options = get_sub_field('opciones');
    $alineacion = get_sub_field('alineacion_banner');
    $align_type = $alineacion['alineacion_tipo'];
    $full_height = $options['full_height'];
?>

<section class="module module_banner flex h-<?php echo $full_height; ?> w-full <?php echo $alineacion['horizontal'];?> <?php echo $alineacion['vertical'];?> <?php if($align_type !== 'custom'){echo $align_type; };?>">

    <!-- BACKGROUND -->
    <div class="background">

        <!-- BG - IMAGEN -->
        <?php if($bg['fondo_imagen']) { ?>
            <img src="<?php echo $bg['fondo_imagen']['sizes']['theme_full'] ?>" alt="">
        <?php } ?>

        <!-- BG - VIDEO -->
        <?php if($bg['fondo_video']) { ?>
            <video src="<?php echo $bg['fondo_video'] ?>" autoplay="true" loop="true" muted="true"></video>
        <?php } ?>

        <!-- BG - CARRUSEL -->
        <?php if($bg['fondo_carrusel']) {
            $images = $bg['fondo_carrusel']; ?>
            <div class="swiper swiper-banner">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <?php foreach($images as $image) { ?>
                        <div class="swiper-slide">
                            <img src="<?php echo $image['sizes']['theme_full']; ?>">
                        </div>
                    <?php $n++; } ?>
                    <!-- Slides -->
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
            </div>
        <?php } ?>

    </div>

    <!-- CONTENIDOS -->
    <div class="wrapper_content flex flex-col items-center text-center w-2/5">

        <!-- sobretitulo -->
        <?php if($content['sobretitulo']) { ?>
            <div class="surtitle pb-10">
                <p class="text-white"><?php echo $content['sobretitulo']; ?></p>
            </div>
        <?php } ?>

        <!-- titulo -->
        <?php if($content['titulo']) { ?>
            <div class="title pb-10">
                <p class="text-<?php echo $content['tamano_titulo']; ?> font-primary font-thin text-white">
                    <?php echo $content['titulo']; ?>
                </p>
            </div>
        <?php } ?>

        <!-- subtitulo -->
        <?php if($content['subtitulo']) { ?>
            <div class="subtitle pb-16">
                <p class="text-white"><?php echo $content['subtitulo']; ?></p>
            </div>
        <?php } ?>

        <!-- cuerpo -->
        <?php if($content['cuerpo']) { ?>
            <div class="body pb-10">
                <?php echo $content['cuerpo']; ?>
            </div>
        <?php } ?>

        <!-- botones -->
        <?php if($buttons !== false) { ?>
            <div class="buttons">

                <?php foreach($buttons as $button) { ?>

                    <?php if($button['link_tipo'] == 'externo') { ?>
                        <a class="<?php echo $button['estilo']; ?>" href="<?php echo $button['link_externo']; ?>">
                            <?php if($button['icono']) { ?>
                                <img class="mr-3" src="<?php echo $button['icono']['sizes']['theme_full']; ?>">
                            <?php } ?>
                            <?php echo $button['titulo']; ?>
                        </a>
                    <?php } ?>

                    <?php if($button['link_tipo'] == 'lg_video') { ?>
                        <a class="<?php echo $button['estilo']; ?> button_lg_iframe" href="<?php echo $button['link_lg_video']; ?>" >
                            <?php if($button['icono']) { ?>
                                <img class="mr-3" src="<?php echo $button['icono']['sizes']['theme_full']; ?>">
                            <?php } ?>
                            <p><?php echo $button['titulo']; ?></p>
                        </a>
                    <?php } ?>

                    <?php if($button['link_tipo'] == 'lg_gallery') { ?>
                        <a class="<?php echo $button['estilo']; ?> button_lg_iframe" href="<?php echo $button['link_lg_imagen']; ?>">
                            <?php if($button['icono']) { ?>
                                <img class="mr-3" src="<?php echo $button['icono']['sizes']['theme_full']; ?>">
                            <?php } ?>
                            <p><?php echo $button['titulo']; ?></p>
                        </a>
                    <?php } ?>

                <?php } ?>

            </div>
        <?php } ?>

    </div>
    
    <!-- BANNER SCROLL -->
    <?php if($options['scroll_check'] == 'active') { ?>
        <div class="banner_scroll">
            <div class="b-text">scroll</div>
            <div class="b-scrolldown">			
                <div class="b-line"></div>
            </div>
        </div>
    <?php } ?>

</section>