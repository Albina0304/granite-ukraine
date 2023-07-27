<?php /* Template Name: Головна */ 
get_header();
if( have_rows('modules') ):
    while ( have_rows('modules') ) : the_row();
        if( get_row_layout() == 'hero' ):
            // $text = get_sub_field('text');
            echo get_template_part('template-parts/hero') ;
        elseif( get_row_layout() == 'product' ): 
            $file = get_sub_field('file');
        endif;
    endwhile;
else :
endif;
get_footer();