<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- HEADER -->
    <header class="header_gracias">

        <!-- BRAND HEADER -->
        <div class="header_brand">
            <a href="<?php bloginfo('url') ?>">
                <img class="ipad:block hidden"
                    src="<?php bloginfo('template_url') ?>/src/assets/images/logo_gracias.png">
                <img class="ipad:hidden block"
                    src="<?php bloginfo('template_url') ?>/src/assets/images/logo_gracias_mobile.png">
            </a>
        </div>

    </header>

    <div id="wrap">