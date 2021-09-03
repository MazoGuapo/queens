<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php
	// GET MENU
	$menu_items = wp_get_nav_menu_items('Header');
    $header = get_field('header', 'options');
    $link_dossier = $header['enlace_dossier'];
	?>

    <!-- LOADING -->
    <!-- <div class="cargador">
    	<div class="brand">
    		<img src="<?php //bloginfo( 'template_url' ); ?>/src/assets/images/loading_brand.png" class="img-fluid">
    	</div>
    </div>  -->

    <!-- MENU MOBILE -->
    <div class="menu__wrap">

        <!-- MENU MOBILE > BRAND -->
        <div class="menu__brand logo_menu_wrap">
            <img class="hidden ipad:block" src="<?php bloginfo('template_url') ?>/src/assets/images/logo_menu_wrap.png">
            <img class="ipad:hidden block" src="<?php bloginfo('template_url') ?>/src/assets/images/logo_menu_wrap_mobile.png">
        </div>

        <!-- MENU MOBILE > MENU -->
        <nav class="menu">
            <div class="icon-list">
                <ul>
                    <?php foreach( $menu_items as $menu_item ) {
					$link = $menu_item->url;
					$title = $menu_item->title;?>

                    <li class="pb-5">
                        <a href="<?php echo $link; ?>">
                            <p class="font-primary ipad:text-h3 text-h4 font-light">
                                <?php echo $title; ?>
                            </p>
                        </a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </nav>

        <!-- MENU MOBILE > CLOSE -->
        <button class="close-button font-secondary font-light text-h7 text-primary" id="close-button">Cerrar</button>

        <a class="dossier_button btn_dark" href="<?php echo $link_dossier; ?>">
            Descargar dossier
        </a>

    </div>

    <!-- HEADER -->
    <header>

        <!-- BRAND HEADER -->
        <div class="header_brand">
            <a href="<?php bloginfo('url') ?>">
                <img class="ipad:block hidden" src="<?php bloginfo('template_url') ?>/src/assets/images/logo_desktop.png">
                <img class="ipad:hidden block" src="<?php bloginfo('template_url') ?>/src/assets/images/logo_mobile.png">
            </a>
        </div>

        <!-- MENU LIST -->
        <ul class="menu ipadH:flex hidden">
            <?php foreach( $menu_items as $menu_item ) {
				$link = $menu_item->url;
				$title = $menu_item->title;
				?>
                <li class="">
                    <a href="<?php echo $link; ?>">
                        <?php echo $title; ?>
                    </a>
                </li>
            <?php } ?>
        </ul>

        <!-- MENU BUTTON -->
        <button class="menu-button ipadH:hidden" id="open-button">
            <span></span>
            <span></span>
        </button>

    </header>

    <div id="wrap">