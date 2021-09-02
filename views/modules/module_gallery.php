
<?php
$tipo = get_sub_field('tipo');
?>

<div class="module module-gallery">

    <?php
    if( $tipo == 'carrusel'):
        include('module_gallery_carousel.php');
    elseif( $tipo == 'expand'):
        include('module_gallery_expand.php');
    elseif( $tipo == 'regular'): 
        include('module_gallery_normal.php');
    endif; ?> 

</div>