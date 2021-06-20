<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package beautytemple
 */

get_header();
?>


    <section class="main-wrapper">
        <div class="container main-wrapper__inner">
            <section class="post-wrapper">

                    <?php
                    while ( have_posts() ) :
                        the_post();

                        get_template_part( 'template-parts/content-single', get_post_type() );

                        the_post_navigation();

                    endwhile; // End of the loop.
                    ?>

            </section>

            <?php get_sidebar(); ?>
        </div>
    </section>

<?php
// If comments are open or we have at least one comment, load up the comment template.
if ( comments_open() || get_comments_number() ) :
	comments_template();
endif;

get_footer();
