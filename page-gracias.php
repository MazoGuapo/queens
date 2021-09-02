<?php
/**
* Template Name: Gracias */
get_header('gracias');


// SECCIONES
if(have_rows('modules')):
    while (have_rows('modules')): the_row();

        if(get_row_layout() == 'module_banner'):
            require('views/modules/module_banner.php');
        endif;

    endwhile;
endif;