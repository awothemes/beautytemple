<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package beautytemple
 */

get_header();
?>
    <section class="page-heading">

        <div class="container page-heading__inner">

            <?php the_archive_title('<h1>', '</h1>'); ?>

			<?php the_archive_description('<div class="archive-description page-meta">', '</div>'); ?>

        </div>

    </section>

    <section class="main-wrapper">

        <div class="container main-wrapper__inner">

            <section class="blog-posts">

				<?php if ( have_posts() ) : ?>


					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/*
						 * Include the Post-Type-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', get_post_type() );

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
