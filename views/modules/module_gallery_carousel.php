<?php
$carrusel = get_sub_field('carrusel');
?>

<div class="module-full  module-gallery-carousel">
    
    <div class="swiper swiper-carousel">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="font-primary text-h2"><?php echo $carrusel['titulo'] ?></div>
                <div><?php echo $carrusel['contenido'] ?></div>
            </div>
            <?php $n = 1; foreach ($carrusel['categorias'] as $imagen) { ?>
                <div class="swiper-slide">
                    <a
                    data-gallery="normal_lg_open_<?php echo $n ?>"
                    class="button_lg">
                        <span><?php echo $imagen['titulo'] ?></span>
                        <img src="<?php echo $imagen['galeria'][0]['sizes']['theme_xlarge'] ?>" alt="">
                    </a>
                </div>
            <?php $n++; } ?>
            <!-- Slides -->
        </div>
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>

</div>