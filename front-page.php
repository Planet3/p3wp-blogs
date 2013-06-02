<?php
/**
 * The is the template file for displaying the front page. 
 *
 * @package Planet3.0
 * @since Planet3.0 3.0
 */

get_header(); ?>

	<div id="primary" class="content-area" role="main">
		<div class="row">

			<div class="posts-area blogs large-12 columns">
				<?php if ( have_posts() ) : ?>
					<div id="blogs">
						<ul class="large-block-grid-3">
							<?php while ( have_posts() ) : the_post(); ?>
								<?php get_template_part( 'content', 'blogs' ); ?>
							<?php endwhile; ?>
						</ul><!-- .large-block-grid-3 -->
					</div><!-- #blogs -->
					<?php planet3_0_content_nav( 'nav-below' ); ?>
				<?php endif; ?>
			</div><!-- posts-area large-6 columns -->

		</div><!-- row -->
	</div><!-- #primary -->

<?php get_footer(); ?>