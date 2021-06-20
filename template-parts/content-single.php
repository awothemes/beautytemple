<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package beautytemple
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-single' ); ?>">

    <?php

        beautytemple_entry_category();

        the_title('<h1>', '</h1>');

        beautytemple_post_thumbnail();

        the_content();

        beautytemple_entry_tags();

        beautytemple_posted_on();
    ?>

</article>