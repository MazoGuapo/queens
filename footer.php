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

    <div class="grid ipad:grid-cols-4 grid-cols-1">
        <div class="grid_logo">
            <img src="<?php bloginfo('template_url')?>/src/assets/images/footer_logo_white.jpg">
            <p></p>
        </div>
        <div class="grid_contact">
            <p class="title"></p>
            <p class=""></p>
        </div>
        <div class="grid_legal">
            <ul class="menu">
                <li class="title">Legal</li>
                <?php foreach( $menu_items as $menu_item ) {
				$link = $menu_item->url;
				$title = $menu_item->title;
				?>
                <li>
                    <a href="<?php echo $link; ?>">
                        <?php echo $title?>
                    </a>
                </li>
                <?php } ?>
            </ul>
        </div>
        <div class="grid_copyright"></div>
        <div class="grid_social">
            <?php foreach($redes as $red) { ?>
                <a href="<?php echo $red['link']?>">
                    <img src="<?php echo $red['icono']?>">
                </a>
            <?php } ?>
        </div>
    </div>

</footer>

<?php wp_footer(); ?>
</body>
</html>