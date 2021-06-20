<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package beautytemple
 */

?>

<footer class="site-footer">
    <div class="container site-footer__inner">

        <div class="footer-widget footer-nav-menu">

	        <?php
	        wp_nav_menu( array(
		        'theme_location'    => 'menu-2',
		        'menu_id'           => 'footer-menu',
		        'container'         => null,
		        'depth'             => 1,
                'fallback_cb'       => null,
	        ) );
	        ?>

        </div>
        <div class="footer-widget footer-branding">
             <div class="footer-logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo substr(get_bloginfo( 'name' ), 0, 1); ?></a>
            </div>
            <div class="site-info">
	            <?php do_action('footer_copyright'); ?>
            </div><!-- .site-info -->
        </div>
        <div class="footer-widget social-menu">
	        <?php do_action('footer_social_menu'); ?>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
