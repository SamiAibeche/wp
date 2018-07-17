<?php
/**
 * Displays footer widgets if assigned
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<?php
if ( is_active_sidebar( 'sidebar-2' ) ||
	 is_active_sidebar( 'sidebar-3' ) ) :
?>

	<aside class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'twentyseventeen' ); ?>">
		<?php
		if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
			<div class="col-xs-12 col-sm-6">
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
			</div>
		<?php }
		if ( is_active_sidebar( 'sidebar-3' ) ) { ?>
			<div class="col-xs-12 col-sm-6 text-center">
				<h2> </h2>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2520.337328903554!2d4.364715315659825!3d50.82491536819288!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c4f29a29cd03%3A0x6eeb1920c110e696!2sAvenue+Louise+264%2C+1000+Bruxelles!5e0!3m2!1sfr!2sbe!4v1512761033359"
					  width="450px" height="250px" frameborder="0"
					  style="border:0" class="map">
				</iframe>
			</div>
		<?php } ?>
	</aside><!-- .widget-area -->

<?php endif; ?>
