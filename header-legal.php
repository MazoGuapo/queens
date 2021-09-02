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
	?>

    <!-- MENU MOBILE -->
    <div class="menu__wrap"
        style="background: url(<?php bloginfo('template_url')?>/assets/img/fondo_menu_wrap.jpg) no-repeat center center fixed;">

        <!-- MENU MOBILE > BRAND -->
        <div class="menu__brand logo_menu_wrap">
            <img src="<?php bloginfo('template_url') ?>/assets/img/logo_menu_wrap.png">
        </div>

        <!-- MENU MOBILE > MENU -->
        <nav class="menu">
            <div class="icon-list">
                <ul>
                    <?php foreach( $menu_items as $menu_item ) {
					$link = $menu_item->url;
					$title = $menu_item->title;
					$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
					if( $actual_link == $link):
						$clase = 'current';
					else:
						$clase= '';
					endif;
					?>
                    <li class="<?php echo $clase; ?>">
                        <a href="<?php echo $link; ?>">
                            <?php echo $title; ?>
                        </a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </nav>

        <!-- MENU MOBILE > CLOSE -->
        <button class="close-button" id="close-button">Close Menu</button>

    </div>

    <!-- HEADER -->
    <header class="header_legal">

        <!-- BRAND HEADER -->
        <div class="header_brand">
            <a href="<?php bloginfo('url') ?>">
                <img class="ipad:block hidden" src="<?php bloginfo('template_url') ?>/src/assets/images/logo_gracias.png">
                <img class="ipad:hidden block" src="<?php bloginfo('template_url') ?>/src/assets/images/logo_gracias_mobile.png">
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