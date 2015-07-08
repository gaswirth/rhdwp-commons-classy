<?php
/**
 * The default template for displaying static "Biography" page content.
 *
 * @package WordPress
 * @subpackage rhd
 */
?>

<?php
	$thumb_id = get_post_thumbnail_id();
	$thumb = wp_get_attachment_image_src( $thumb_id, 'full', false );
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div id="about-content-container">
			<div id="about-image" style="background-image: url(<?php echo $thumb[0]; ?>);"></div>

			<div id="about-content">
				<header class="entry-header invisible">
					<h2 class="page-title"><?php the_title(); ?></h2>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'rhd' ) ); ?>
					<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'rhd' ), 'after' => '</div>' ) ); ?>

				</div><!-- .entry-content -->

				<footer class="entry-meta">
					<?php edit_post_link( __( 'Edit', 'rhd' ), '<span class="edit-link">', '</span>' ); ?>
				</footer><!-- .entry-meta -->
			</div>
		</div>
	</article><!-- #post -->
