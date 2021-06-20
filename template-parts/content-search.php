<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package beautytemple
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-preview'); ?>>
    <span class="post-meta category">
        <?php beautytemple_entry_category(); ?>
    </span>
    <h1><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h1>
	<?php if(has_post_thumbnail()):?>
        <div class="post-thumbnail">
			<?php the_post_thumbnail(); ?>
        </div>
	<?php endif; ?>
	<?php
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