<?php

    $menu_items = wp_get_nav_menu_items('Footer');
    $footer = get_field('footer', 'options');
    $redes = $footer['social_footer'];

?>

<!-- DEL #WRAP -->
</div>

<footer>

    <div class="background">
        <img src="<?php bloginfo('template_url')?>/src/assets/images/footer_bg.jpg">
    </div>

    <div class="grid_footer gap-y-24">

        <div class="grid_logo flex justify-start items-start">
            <img class="mr-10" src="<?php bloginfo('template_url')?>/src/assets/images/footer_logo_white.png">
            <p class="font-primary font-thin text-primary text-h1 max-w-40"><?php echo $footer['title_footer']?></p>
        </div>

        <div class="grid_contact flex flex-col justify-between">
            <p class="font-secondary font-light text-primary">Oficina de Ventas</p>
            <div class="address">
                <?php echo $footer['contact_footer']; ?>
            </div>
        </div>

        <div class="grid_legal flex flex-col justify-between">
            <p class="font-secondary font-light text-primary">Legal</p>
            <ul class="menu">

                <?php foreach( $menu_items as $menu_item ) {
				$link = $menu_item->url;
				$title = $menu_item->title;
				?>
                <li class="font-primary font-light text-primary text-h4 pb-1">
                    <a href="<?php echo $link; ?>">
                        <?php echo $title?>
                    </a>
                </li>
                <?php } ?>
            </ul>
        </div>

        <div class="grid_copyright">
            <p class="flex font-thin text-primary">
                <span class="pr-2">Managed by</span>
                <img class="object-contain pr-2" src="<?php bloginfo('template_url')?>/src/assets/images/logo_asg.png">
                <span class="pr-2">|</span>
                <span class="pr-2">Design & Marketing by</span>
                <img class="object-contain pr-2" src="<?php bloginfo('template_url')?>/src/assets/images/logo_weplan.png">
            </p>

        </div>

        <div class="grid_social flex">
            <?php foreach($redes as $red) { ?>
            <a class="pr-4" href="<?php echo $red['link']['sizes']['theme_full']?>">
                <img src="<?php echo $red['icono']['sizes']['theme_full']?>">
            </a>
            <?php } ?>
        </div>
    </div>

</footer>

<?php wp_footer(); ?>
</body>

</html>