<?php /* Template Name: Головна */ 
get_header();
if( have_rows('modules') ):
    while ( have_rows('modules') ) : the_row();
        if( get_row_layout() == 'hero' ):
            echo get_template_part('template-parts/hero') ;
        elseif( get_row_layout() == 'products' ): 
            echo get_template_part('template-parts/products') ;
        endif;
    endwhile;
else :
endif;
get_footer();