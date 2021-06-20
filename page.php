<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package beautytemple
 */

get_header();
$object_id = get_queried_object_id();
?>
    <section class="page-heading">
        <div class="container page-heading__inner">
            <h1><?php echo get_the_title($object_id);?></h1>
        </div>
    </section>

    <section class="main-wrapper">
        <div class="container main-wrapper__inner">
            <section class="page-wrapper">

                <?php
                while ( have_posts() ) :
                    the_post();

                    get_template_part( 'template-parts/content', 'page' );


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
