<?php
$carrusel = get_sub_field('carrusel');
?>

<div class="module-full module-gallery-carousel">

    <div class="flex flex-col ipad:none items-center">
        <div class="font-primary mb-10 text-h4 ipad:text-<?php echo $carrusel['tamano_titulo'] ?>"><?php echo $carrusel['titulo'] ?></div>
        <div><?php echo $carrusel['contenido'] ?></div>
    </div>                
    
    <div class="swiper swiper-carousel">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="mr-48 h-100 flex flex-col items-center">
                    <div class="font-primary mb-10 text-<?php echo $carrusel['tamano_titulo'] ?>"><?php echo $carrusel['titulo'] ?></div>
                    <div><?php echo $carrusel['contenido'] ?></div>
                </div>
            </div>
            <?php $n = 1; foreach ($carrusel['categorias'] as $imagen) { ?>
                <div class="swiper-slide">
                    <a
                    data-gallery="normal_lg_open_<?php echo $n ?>"
                    class="button_lg">
                        <span class="image_baget text-white flex items-center text-h5" ><img class="mr-4" src="<?php bloginfo('template_url') ?>/src/assets/images/icon_play.png" alt=""><?php echo $imagen['titulo'] ?></span>
                        <img src="<?php echo $imagen['galeria'][0]['sizes']['theme_xlarge'] ?>" alt="" class="carousel_bg">
                    </a>
                </div>
            <?php $n++; } ?>
            <!-- Slides -->
        </div>
        <!-- If we need navigation buttons -->
        <div class="swiper-buttons">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>        
    </div>

</div>