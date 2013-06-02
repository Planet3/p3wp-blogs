<?php
/**
 * @package Planet3.0
 * @since Planet3.0 3.0
 */
?>

<li>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( 'Permalink to %s', the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<p>by <?php planet3_0_posted_by(); ?></p>
		</header><!-- .entry-header -->
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
	</article><!-- #post-## -->
</li>
