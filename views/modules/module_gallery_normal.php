<?php
    // VARIABLES
    $normal = get_sub_field('normal');
?>

<div class="module-full module-gallery-normal">

    <!-- INTRO -->
    <div class="module-width mb-40">
        <div class="grid ipad:grid-cols-2 gap-96 items-<?php echo $normal['alineacion_intro'] ?>">
            <!-- titulo -->
            <div class="font-primary text-<?php echo $normal['tamano_titulo'] ?> text-primary flex items-center">
                <?php if($normal['icono']): ?><img src="<?php echo $normal['icono'] ?>" alt="" class="mr-4"><?php endif; ?>
                <?php echo $normal['titulo'] ?>
            </div>
            <!-- contenido -->
            <div class="text-<?php echo $normal['tamano_contenido'] ?> font-<?php echo $normal['estilo_contenido'] ?>">
                <?php echo $normal['contenido'] ?>
            </div>
        </div>
    </div>

    <?php if($normal['tipo'] == 'simple'): ?>
        <div class="module-width grid grid-cols-4 gap-32">
            <?php foreach ($normal['galeria_simple'] as $imagen) { ?>
                <img src="<?php echo $imagen['sizes']['theme_xlarge'] ?>" alt="">
            <?php } ?>
        </div>
    <?php elseif($normal['tipo'] == 'categorias'): ?>

        <div class="swiper swiper-normal">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <div class="swiper-slide"></div>
                <?php $n = 1; foreach ($normal['categorias'] as $imagen) { ?>
                    <div class="swiper-slide">
                        <a
                        data-gallery="normal_lg_open_<?php echo $n ?>"
                        class="button_lg">
                            <span class="image_baget text-white flex items-center text-h5" ><img class="mr-4" src="<?php bloginfo('template_url') ?>/src/assets/images/icon_play.png" alt=""><?php echo $imagen['titulo'] ?></span>
                            <img src="<?php echo $imagen['galeria'][0]['sizes']['theme_xlarge'] ?>" alt="" class="carousel_bg"class="carousel_bg">
                        </a>
                    </div>
                <?php $n++; } ?>
                <!-- Slides -->
            </div>
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>

        <?php $n = 1; foreach ($normal['categorias'] as $cat) {  ?>
            <div class="gallery_lg" id="normal_lg_open_<?php echo $n ?>">
                <?php foreach ($cat['galeria'] as $imagen) { ?>
                    <div class="gallery_lg_item"  data-src="<?php echo $imagen['sizes']['theme_xlarge'] ?>"></div>
                <?php } ?>
            </div>
        <?php $n++;  } ?>

    <?php elseif($normal['tipo'] == 'tour'): ?>

        <div class="swiper swiper-normal">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <div class="swiper-slide"></div>
                <?php $n = 1; foreach ($normal['tour_virtuales'] as $imagen) { ?>
                    <div class="swiper-slide">
                        <a
                        data-iframe="true"
                        data-src="<?php echo $imagen['link'] ?>"
                        data-iframe-title="All new time tracking. Greater insight."
                        class="button_lg_iframe">
                            <span class="image_baget text-white flex items-center text-h5" ><img class="mr-4" src="<?php bloginfo('template_url') ?>/src/assets/images/icon_play.png" alt=""><?php echo $imagen['titulo'] ?></span>
                            <img src="<?php echo $imagen['imagen']['sizes']['theme_xlarge'] ?>" alt="" class="carousel_bg">
                        </a>
                    </div>
                <?php $n++; } ?>
                <!-- Slides -->
            </div>
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>

    <?php endif; ?>

</div>