<?php

/* @Recreate the default filters on the_content so we can pull formated content with get_post_meta
-------------------------------------------------------------- */
add_filter( 'meta_content', 'wptexturize'       );
add_filter( 'meta_content', 'convert_smilies'   );
add_filter( 'meta_content', 'convert_chars'     );
add_filter( 'meta_content', 'wpautop'           );
add_filter( 'meta_content', 'shortcode_unautop' );
add_filter( 'meta_content', 'do_shortcode'      );

/*--- Ocultar barra Wordpress ---*/
add_filter( 'show_admin_bar', '__return_false' );

/*--- Desactivar Gutenberg ---*/
add_filter('use_block_editor_for_post_type', '__return_false', 100);