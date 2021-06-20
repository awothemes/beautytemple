<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package beautytemple
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('post-preview'); ?>>

    <?php beautytemple_entry_category(); ?>

    <h1><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h1>

    <?php

    beautytemple_post_thumbnail();

	the_content( sprintf(
		wp_kses(
		/* translators: %s: Name of current post. Only visible to screen readers */
			__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'beautytemple' ),
			array(
				'span' => array(
					'class' => array(),
				),
			)
		),
		get_the_title()
	) );
	?>

</article>
