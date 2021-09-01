<?php
/**
* Template Name: Modules */
get_header();


// SECCIONES
if(have_rows('modules')):
    while (have_rows('modules')): the_row();

        if(get_row_layout() == 'module_banner'):
            require('views/modules/module_banner.php');

        elseif(get_row_layout() == 'module_two_columns'):
            require('views/modules/module_two_columns.php');

        elseif(get_row_layout() == 'module_form'):
            require('views/modules/module_form.php');

        elseif(get_row_layout() == 'module_maps'):
            require('views/modules/module_maps.php');

        elseif(get_row_layout() == 'module_icons'):
            require('views/modules/module_icons.php');
        endif;

    endwhile;
endif;

get_footer(); ?>