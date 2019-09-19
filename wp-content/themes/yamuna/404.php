<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

	<div id="primary" <?php yamuna_content_class(); ?>>
		<main id="main" <?php yamuna_main_class(); ?>>
			<?php
			/**
			 * yamuna_before_main_content hook.
			 *
			 */
			do_action( 'yamuna_before_main_content' );
			?>

			<div class="inside-article">

				<?php
				/**
				 * yamuna_before_content hook.
				 *
				 *
				 * @hooked yamuna_featured_page_header_inside_single - 10
				 */
				do_action( 'yamuna_before_content' );
				?>

				<header class="entry-header">
					<h1 class="entry-title" itemprop="headline"><?php echo esc_html( apply_filters( 'yamuna_404_title', __( 'Oops! That page can&rsquo;t be found.', 'yamuna' ) ) ); // WPCS: XSS OK. ?></h1>
				</header><!-- .entry-header -->

				<?php
				/**
				 * yamuna_after_entry_header hook.
				 *
				 *
				 * @hooked yamuna_post_image - 10
				 */
				do_action( 'yamuna_after_entry_header' );
				?>

				<div class="entry-content" itemprop="text">
					<?php
					echo '<p>' . esc_html( apply_filters( 'yamuna_404_text', __( 'It looks like nothing was found at this location. Maybe try searching?', 'yamuna' ) ) ) . '</p>'; // WPCS: XSS OK.

					get_search_form();
					?>
				</div><!-- .entry-content -->

				<?php
				/**
				 * yamuna_after_content hook.
				 *
				 */
				do_action( 'yamuna_after_content' );
				?>

			</div><!-- .inside-article -->

			<?php
			/**
			 * yamuna_after_main_content hook.
			 *
			 */
			do_action( 'yamuna_after_main_content' );
			?>
		</main><!-- #main -->
	</div><!-- #primary -->

	<?php
	/**
	 * yamuna_after_primary_content_area hook.
	 *
	 */
	 do_action( 'yamuna_after_primary_content_area' );

	 yamuna_construct_sidebars();

get_footer();
