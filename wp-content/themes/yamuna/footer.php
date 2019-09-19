<?php
/**
 * The template for displaying the footer.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

	</div><!-- #content -->
</div><!-- #page -->

<?php
/**
 * yamuna_before_footer hook.
 *
 */
do_action( 'yamuna_before_footer' );
?>

<div <?php yamuna_footer_class(); ?>>
	<?php
	/**
	 * yamuna_before_footer_content hook.
	 *
	 */
	do_action( 'yamuna_before_footer_content' );

	/**
	 * yamuna_footer hook.
	 *
	 *
	 * @hooked yamuna_construct_footer_widgets - 5
	 * @hooked yamuna_construct_footer - 10
	 */
	do_action( 'yamuna_footer' );

	/**
	 * yamuna_after_footer_content hook.
	 *
	 */
	do_action( 'yamuna_after_footer_content' );
	?>
</div><!-- .site-footer -->

<?php
/**
 * yamuna_after_footer hook.
 *
 */
do_action( 'yamuna_after_footer' );

wp_footer();
?>

</body>
</html>
