<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package beautytemple
 */

get_header();
?>
    <section class="page-heading">
        <div class="container page-heading__inner">
            <h1><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'beautytemple' ); ?></h1>
        </div>
    </section>


    <section class="main-wrapper">
        <div class="container main-wrapper__inner">
            <section class="page-wrapper 404-page">
               <div class="page__description">
                   <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'beautytemple' ); ?></p>
               </div>

                <div class="widget widget_search">
					<?php get_search_form(); ?>
                </div>

				<?php
				the_widget( 'WP_Widget_Recent_Posts' );
				?>

                <div class="widget widget_categories">
                    <h5 class="widget-heading"><?php esc_html_e( 'Most Used Categories', 'beautytemple' ); ?></h5>
                    <ul>
						<?php
						wp_list_categories( array(
							'orderby'    => 'count',
							'order'      => 'DESC',
							'show_count' => 1,
							'title_li'   => '',
							'number'     => 10,
						) );
						?>
                    </ul>
                </div><!-- .widget -->

				<?php
				the_widget( 'WP_Widget_Tag_Cloud' );
				?>
            </section>

			<?php get_sidebar(); ?>
        </div>
    </section>

<?php
get_footer();
