<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package beautytemple
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function beautytemple_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'beautytemple_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function beautytemple_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'beautytemple_pingback_header' );



function beautytemple_comment($comment, $args, $depth){

		$output = null;

		$output = '<li>';

		$output .= '<div class="comment-item comment-body" id="comment-' .get_comment_ID() . '">';
	        $output .= '<div class="comment-avatar">';
	           $output .= ' <a href="#">';
	                $output .= get_avatar( $comment, $args['avatar_size'] );
	            $output .= '</a>';
	        $output .= '</div>';
	        $output .= '<div class="comment-body">';
	            $output .= '<h5><span>'.get_comment_author_link().'</span><span class="comment-meta">'.get_comment_date().esc_html__(' at ','beautytemple') .get_comment_time().' </span></h5>';
				if ( $comment->comment_approved == '0' ) {
					$output .= '<em class="comment-awaiting-moderation">' . esc_html__( 'Your comment is awaiting moderation.', 'beautytemple' ) . '</em><br/>';
				}
				$output .= get_comment_text();
	            $output .= get_comment_reply_link(
		            array_merge(
			            $args,
			            array(
				            'depth'     => $depth,
				            'max_depth' => $args['max_depth']
			            )
		            )
	            );
	        $output .= '</div>';
	    $output .= '</div>';

        echo $output;
}

if ( ! function_exists( 'beautytemple_get_option' ) ) {

	function beautytemple_get_option( $name, $default = false ) {
		$options = get_theme_mod( $name );
		if ( isset( $options ) ) {
			return $options;
		}else{
			return $default;
		}


	}
}

if ( ! function_exists( 'beautytemple_social' ) ) {

	function beautytemple_social(){
		$social_mobile_links_instagram = beautytemple_get_option('social_links_instagram', false);
		$social_mobile_links_facebook = beautytemple_get_option('social_links_facebook', false);
		$social_mobile_links_vimeo = beautytemple_get_option('social_links_vimeo', false);


		$links = '<ul>';



		if($social_mobile_links_facebook){
			$links .= '<li>';
			$links .= '<a target="_blank" href="'.esc_url($social_mobile_links_facebook).'">';
			$links .= '<i class="fab fa-facebook-f"></i>';
			$links .= '</a>';
			$links .= '</li>';
		}
		if($social_mobile_links_instagram){
			$links .= '<li>';
			$links .= '<a target="_blank" href="'.esc_url($social_mobile_links_instagram).'">';
			$links .= '<i class="fab fa-instagram"></i>';
			$links .= '</a>';
			$links .= '</li>';
		}
		if($social_mobile_links_vimeo){
			$links .= '<li>';
			$links .= '<a target="_blank" href="'.esc_url($social_mobile_links_vimeo).'">';
			$links .= '<i class="fab fa-vimeo-square"></i>';
			$links .= '</a>';
			$links .= '</li>';
		}
		$links .= '</ul>';

		if(beautytemple_get_option('social_links_display') == 'enable'){
			echo wp_kses_post($links);
		}
	}

}
add_action('header_social_menu', 'beautytemple_social', 10);
add_action('footer_social_menu', 'beautytemple_social', 20);
add_action('sidemenu_social_menu', 'beautytemple_social', 30);


if ( ! function_exists( 'beautytemple_footer_copyright' ) ) {

	function beautytemple_footer_copyright(){
		$footer_copyright_text = beautytemple_get_option('footer_copyright', false);

		$footer_copyright = null;

		if(empty($footer_copyright_text)){
			$footer_copyright = '<a target="_blank" href="' . esc_url( __( 'https://wordpress.org/', 'beautytemple' ) ) .'">';

			$footer_copyright .= printf( esc_html__( 'Proudly powered by %s', 'beautytemple' ), 'WordPress' );

			$footer_copyright .= '</a>';

			$footer_copyright .= '<span class="sep"> | </span>';

			$footer_copyright .= printf( esc_html__( 'Theme: %1$s by %2$s', 'beautytemple' ), '<a target="_blank" href="https://awothemes.pro/themes/beautytemple">BeautyTemple</a>', 'AwoThemes' );

		}else{
			$footer_copyright = '<p>'.$footer_copyright_text.'</p>';
		}



	if(!empty($footer_copyright_text)){
			echo wp_kses_post($footer_copyright);
		}
	}

}
add_action('footer_copyright', 'beautytemple_footer_copyright', 10);



if ( ! function_exists( 'beautytemple_sidemenu_address' ) ) {

	function beautytemple_sidemenu_address() {
		$sidemenu_address = beautytemple_get_option( 'side_address', false );

		$sidemenu_text = null;

		if ( !empty( $sidemenu_address ) ) {
			$sidemenu_text = '<address>';

			$sidemenu_text .= $sidemenu_address;

			$sidemenu_text .= '</address>';

		} else {
			$sidemenu_text  = '<address>';
			$sidemenu_text .= '360 FULHAM ROAD, CHELSEA, LONDON, SW10 9UU';
			$sidemenu_text .= '</address>';
		}


		echo wp_kses_post( $sidemenu_text );
	}
}
add_action('sidemenu_address', 'beautytemple_sidemenu_address', 10);

