<?php
/**
 * Footer template for the theme.
 *
 * This file is responsible for rendering the footer section of the site.
 * It includes the closing tags for the body and HTML elements.
 *
 * @package WordPress
 * @subpackage Brands_Theme
 * @version 1.0.0
 */
?>

<footer class="site-footer">
    <div class="footer-inner">
        <p>&copy; <?php echo date('Y'); ?> <?php _e('Brand Theme', 'mn-brands'); ?></p>
    </div>
</footer>

<?php wp_footer();  ?>
</body>
</html>
