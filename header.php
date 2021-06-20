<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package beautytemple
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header" style="background-image: url('<?php header_image(); ?>');" >
    <div class="container">
        <div class="site-header__inner">
            <div class="header-widget nav-wrapper">
                <div class="side-nav">

                    <div class="side-nav__top">
                        <button class="main-nav__toogle">
                            <span class="main-nav__toogle__inner">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </span>
                        </button>

                        <nav class="main-nav">
				            <?php
				            wp_nav_menu( array(
					            'theme_location' => 'menu-1',
					            'menu_id'        => 'primary-menu',
					            'container'       => null,
				            ) );
				            ?>
                        </nav>

                    </div>
                    <div class="side-nav__bottom">
                        <nav class="social-nav">
	                        <?php do_action('sidemenu_social_menu'); ?>

                        </nav>

                        <?php do_action('sidemenu_address'); ?>

                    </div>

                </div>
                <div class="content-overlay"></div>
                <button class="main-nav__toogle" id="main-nav__toogle">
                        <span class="main-nav__toogle__inner">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </span>
                </button>
            </div>

            <div class="header-widget site-branding">

	                <?php
	                $custom_logo_id = get_theme_mod( 'custom_logo' );
	                $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
	                if (!$image[0]):?>
                <div class="logo">

                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <span class="logo__mobile"><?php echo substr(get_bloginfo( 'name' ), 0, 1); ?></span>
                            <span class="logo__desktop"><?php bloginfo( 'name' ); ?></span>
                        </a>
                </div>

	                <?php else :?>
                        <div class="logo custom-logo">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                    <img src="<?php echo $image[0]; ?>">
                                </a>
                        </div>
                    <?php endif ;?>


                <?php
                    $beautytemple_description = get_bloginfo( 'description', 'display' );
                    if ( $beautytemple_description || is_customize_preview() ) :
                ?>
                    <div class="description">
                        <p><?php echo $beautytemple_description; /* WPCS: xss ok. */ ?></p>
                    </div>
                <?php endif; ?>

            </div>

            <div class="header-widget social-menu">
                <?php do_action('header_social_menu'); ?>
            </div>
        </div>
    </div>
</header>