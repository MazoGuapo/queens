
<?php
$tipo = get_sub_field('tipo');
$options = get_sub_field('opciones');
?>

<div class="module module-gallery bg-<?php echo $options['bg_color']; ?>">

    <?php
    if( $tipo == 'carrusel'):
        include('module_gallery_carousel.php');
    elseif( $tipo == 'expand'):
        include('module_gallery_expand.php');
    elseif( $tipo == 'regular'): 
        include('module_gallery_normal.php');
    endif; ?> 

</div>