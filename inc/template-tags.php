<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package beautytemple
 */

if ( ! function_exists( 'beautytemple_posted_on' ) ) {
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function beautytemple_posted_on() {


		$time_string = '<span class="post-meta post-date published">'. esc_html__('Published: ','beautytemple').'%2$s</span>';

		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<span class="post-meta post-date published">'. esc_html__('Published: ','beautytemple').'%2$s</span><span class="post-meta post-date updated">'. esc_html__('Updated: ','beautytemple').'%4$s</span>';
		}

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);

		echo $time_string; // WPCS: XSS OK.


	}
}


if ( ! function_exists( 'beautytemple_entry_category' ) ){
	/**
	 * Prints HTML with meta information for the categories.
	 */
	function beautytemple_entry_category() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ' / ', 'beautytemple' ) );
			if ( $categories_list ) {
				echo '<span class="post-meta category">';
				/* translators: 1: list of categories. */
					printf( esc_html__( '%1$s', 'beautytemple' ), $categories_list ); // WPCS: XSS OK.
				echo '</span>';
			}
		}

	}
}

if ( ! function_exists( 'beautytemple_entry_tags' ) ){
	/**
	 * Prints HTML with meta information for the categories.
	 */
	function beautytemple_entry_tags() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html_x( ' / ', 'list item separator', 'beautytemple' ) );
			if ( $tags_list ) {
				echo '<span class="post-meta tags">';
				/* translators: 1: list of tags. */
				printf( esc_html__( 'Tags: %1$s', 'beautytemple' ), $tags_list ); // WPCS: XSS OK.
				echo ' </span>';
			}
		}


	}
}
if ( ! function_exists( 'beautytemple_post_thumbnail' ) ){
	/**
	 * Prints HTML with meta information for the categories.
	 */
	function beautytemple_post_thumbnail() {

		$output = null;

		if(has_post_thumbnail()){
			$output = '<div class="post-thumbnail">';
			$output .= get_the_post_thumbnail();
			$output .= '</div>';
		}
		echo $output;
	}
}
