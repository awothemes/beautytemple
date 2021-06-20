<?php
/**
 * BeautyTemple Theme Customizer
 *
 * @package The_orchid
 */
if ( ! class_exists( 'Kirki' ) ) {
	return;
}

/*  Add Config
/* ------------------------------------ */
Kirki::add_config( 'beautytemple', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

require get_template_directory() . '/inc/customizer/panels.php';
require get_template_directory() . '/inc/customizer/sections.php';
require get_template_directory() . '/inc/customizer/controls.php';
