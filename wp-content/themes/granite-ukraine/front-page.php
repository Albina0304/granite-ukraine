<?php
/* Template Name: Головна */ 
get_header();
if( have_rows('modules') ):
    while ( have_rows('modules') ) : the_row();
        if( get_row_layout() == 'hero' ):
            echo get_template_part('template-parts/hero');
        elseif( get_row_layout() == 'products' ): 
            echo get_template_part('template-parts/products');
        elseif( get_row_layout() == 'advantages' ): 
            echo get_template_part('template-parts/advantages');
        elseif( get_row_layout() == 'about' ): 
            echo get_template_part('template-parts/about');
        elseif( get_row_layout() == 'labors' ): 
            echo get_template_part('template-parts/labors');
        elseif( get_row_layout() == 'form' ): 
            echo get_template_part('template-parts/form');
        elseif (get_row_layout() == 'map'):
           echo get_template_part('template-parts/map');
        elseif (get_row_layout() == 'modal'):
            echo get_template_part('template-parts/modal');
        endif;
    endwhile;
endif;
get_footer();

