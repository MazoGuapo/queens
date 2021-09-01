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

    <div class="background">

        <?php if($bg['fondo_imagen']) { ?>
        <img src="<?php echo $bg['fondo_imagen']['sizes']['theme_full'] ?>" alt="">
        <?php } ?>

        <?php if($bg['fondo_video']) { ?>
        <video src="<?php echo $bg['fondo_video'] ?>" autoplay="true" loop="true" muted="true"></video>
        <?php } ?>

        <?php if($bg['fondo_carrusel']) {
            $images = $bg['fondo_carrusel'];
        ?>
        <div class="carousel">
            <?php foreach($images as $image) { ?>
            <img src="<?php echo $image['sizes']['theme_full']; ?>">
            <?php } ?>
        </div>
        <?php } ?>

    </div>

    <div
        class="wrapper_content flex flex-col text-center w-2/5">

        <?php if($content['sobretitulo']) { ?>
        <div class="surtitle pb-10">
            <p class="text-white"><?php echo $content['sobretitulo']; ?></p>
        </div>
        <?php } ?>

        <?php if($content['titulo']) { ?>
        <div class="title pb-10">
            <p class="text-<?php echo $content['tamano_titulo']; ?> font-primary font-thin text-white">
                <?php echo $content['titulo']; ?>
            </p>
        </div>
        <?php } ?>

        <?php if($content['subtitulo']) { ?>
        <div class="subtitle pb-10">
            <p class="text-white"><?php echo $content['subtitulo']; ?></p>
        </div>
        <?php } ?>

        <?php if($content['cuerpo']) { ?>
        <div class="body pb-10">
            <?php echo $content['cuerpo']; ?>
        </div>
        <?php } ?>

        <?php if($buttons !== false) { ?>
        <div class="buttons">

            <?php foreach($buttons as $button) { ?>

            <?php if($button['link_externo']) { ?>
            <a class="btn" href="<?php echo $button['link_externo']; ?>" class="">
                <?php if($button['icono']) { ?>
                <img src="<?php echo $button['icono']['sizes']['theme_full']; ?>">
                <?php } ?>
                <?php echo $button['titulo']; ?>
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