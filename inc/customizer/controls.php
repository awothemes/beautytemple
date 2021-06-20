<?php
/**
* Social profile settings controls
*/
Kirki::add_field( 'beautytemple', array(
	'type'        => 'radio',
	'settings'    => 'social_links_display',
	'label'       => esc_html__( 'Social Links Display', 'beautytemple' ),
	'section'     => 'social_settings',
	'default'     => 'enable',
	'priority'    => 10,
	'choices'     => array(
	'enable'   => esc_attr__( 'Enable', 'beautytemple' ),
		'disable' => esc_attr__( 'Disable', 'beautytemple' ),
	),
) );

Kirki::add_field( 'beautytemple', array(
	'type'     => 'text',
	'settings' => 'social_links_instagram',
	'label'    => esc_html__( 'Instagram', 'beautytemple' ),
	'section'  => 'social_settings',
	'priority' => 20,
) );

Kirki::add_field( 'beautytemple', array(
	'type'     => 'text',
	'settings' => 'social_links_facebook',
	'label'    => esc_html__( 'Facebook', 'beautytemple' ),
	'section'  => 'social_settings',
	'priority' => 30,
) );
Kirki::add_field( 'beautytemple', array(
	'type'     => 'text',
	'settings' => 'social_links_vimeo',
	'label'    => esc_html__( 'Vimeo', 'beautytemple' ),
	'section'  => 'social_settings',
	'priority' => 50,
) );



/**
 * Side menu settings
 */
Kirki::add_field( 'beautytemple', array(
	'type'     => 'text',
	'settings' => 'side_address',
	'label'    => esc_html__( 'Address', 'beautytemple' ),
	'section'  => 'sidemenu_settings',
	'priority' => 10,
) );

/**
 * Footer copyright
 */
Kirki::add_field( 'beautytemple', array(
	'type'     => 'text',
	'settings' => 'footer_copyright',
	'label'    => esc_html__( 'Copyright', 'beautytemple' ),
	'section'  => 'footer_settings',
	'priority' => 50,
) );
