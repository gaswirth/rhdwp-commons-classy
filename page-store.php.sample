<?php
/**
 * The Store page template file.
 *
 * @package WordPress
 * @subpackage rhd
 */

get_header(); ?>

	<section id="primary" class="site-content">
		<div id="content" role="main">

			<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php rhd_page_feed( 'rhd_product' ); ?>

				<?php endwhile; ?>

			<?php endif; ?>

			</div><!-- #content -->
		</section><!-- #primary -->

<?php get_footer(); ?>