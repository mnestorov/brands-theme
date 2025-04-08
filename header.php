<?php
/**
 * Header template for the theme.
 *
 * This file is responsible for rendering the <head> section and the site header.
 * It includes the site logo and navigation elements.
 *
 * @package WordPress
 * @subpackage BrandsTheme
 * @version 1.0.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="site-header">
    <div class="header-inner">
        <div class="site-logo">
            <?php if (has_custom_logo()) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <h1>
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <?php bloginfo('name'); ?>
                    </a>
                </h1>
            <?php endif; ?>
        </div>
    </div>
</header>
