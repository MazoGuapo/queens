<?php
    $options = get_sub_field('opciones_icons');
    $layout = get_sub_field('layout_icons');
    $grid = $layout['columnas_grid'];
    $side = $layout['lateral_paddings'];
    $align = get_sub_field('align_title');
    $content = get_sub_field('content_icons');
    $icons = get_sub_field('icons');
    $align_text = $align['align_text_title'];
    $full_height = $options['full_height'];
?>

<section class="module module-block module_icons flex flex-col min-h-<?php echo $full_height; ?> w-full bg-<?php echo $options['bg_color_icons']; ?> <?php echo $align_text; ?> <?php echo $align['horizontal_title']; ?>">

    <!-- CONTENIDOS -->
    <div class="wrapper_content pb-40 flex flex-col <?php echo $align_text; ?> <?php echo $align['horizontal_title']; ?>  items-center text-center  w-2/5">

        <?php if($content['sobretitulo']) { ?>
            <div class="surtitle pb-20">
                <p class="font-primary text-secondary italic"><?php echo $content['sobretitulo']; ?></p>
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
            <div class="subtitle pb-16">
                <p class="text-white"><?php echo $content['subtitulo']; ?></p>
            </div>
        <?php } ?>

        <?php if($content['cuerpo']) { ?>
        <div class="body">
            <p class=""><?php echo $content['cuerpo']; ?></p>
        </div>
        <?php } ?>

    </div>

    <!-- ICONOS -->
    <div class="wrapper_icons w-full">
        <div class="icons grid grid-cols-<?php echo $grid['grid_col_mobile']; ?> ipad:grid-cols-<?php echo $grid['grid_col_ipad']; ?> laptop:grid-cols-<?php echo $grid['grid_col']; ?> grid-flow-row gap-y-40">
            <?php foreach($icons as $icon) { ?>
            <div class="icon flex flex-<?php echo $layout['flex_dir_icon'];?> items-center justify-center">
                <img src="<?php echo $icon['symbol']['sizes']['theme_full']; ?>" alt="" class="p-4">
                <div class="content_icon <?php echo $layout['alineacion_texto'];?> flex justify-center">
                    <p class="title text-white font-primary text-h4"><?php echo $icon['content_icon']['title']; ?></p>
                    <p class="body"><?php echo $icon['content_icon']['body']; ?></p>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>


</section>