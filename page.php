<?php
/**
 * Default Page Template
 *
 * This template is used to display a single page in the theme.
 * It outputs the page title and content, or a message if no content is found.
 *
 * @package WordPress
 * @subpackage Brands_Theme
 * @since 1.0.0
 */

get_header(); 

if (have_posts()) :
    while (have_posts()) : the_post();
        the_title('<h1>', '</h1>');
        the_content();
    endwhile;
else :
    echo '<p>' . __('No content found.', 'mn-brands') . '</p>';
endif;

get_footer();