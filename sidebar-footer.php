<?php
/**
 * The sidebar containing the main widget area.
 *
 * If no active widgets in sidebar, let's hide it completely.
 *
 * @package WordPress
 * @subpackage rhd
 */
?>

<?php if ( is_active_sidebar( 'footer-widget-area' ) ) : ?>
	<aside id="footer-widget-area" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'footer-widget-area' ); ?>
	</aside><!-- #secondary -->
<?php endif; ?>
