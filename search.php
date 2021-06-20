<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package beautytemple
 */

get_header();
?>
    <section class="page-heading">
        <div class="container page-heading__inner">
			<?php
			/* translators: %s: search query. */
			printf( __( '<span class="page-meta">Search Results for:</span> %s', 'beautytemple' ), '<h1>&laquo;' . get_search_query() . '&raquo;</h1>' );
			?>
        </div>
    </section>

    <section class="main-wrapper">
        <div class="container main-wrapper__inner">
            <section class="blog-posts search-page">


				<?php if ( have_posts() ) : ?>
					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'search' );

					endwhile;

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>

            </section>
			<?php get_sidebar(); ?>
        </div>
    </section>

<?php

get_footer();
