<?php
Kirki::add_section( 'social_settings', array(
	'title'          => esc_attr__( 'Social settings', 'beautytemple' ),
	'panel'          => 'beautytemple_panel',
	'priority'       => 10,
) );
Kirki::add_section( 'sidemenu_settings', array(
	'title'          => esc_attr__( 'Side Menu settings', 'beautytemple' ),
	'panel'          => 'beautytemple_panel',
	'priority'       => 20,
) );
Kirki::add_section( 'footer_settings', array(
	'title'          => esc_attr__( 'Footer settings', 'beautytemple' ),
	'panel'          => 'beautytemple_panel',
	'priority'       => 30,
) );