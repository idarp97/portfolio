<?php
/**
 * The template for displaying single posts.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> <?php yamuna_article_schema( 'CreativeWork' ); ?>>
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
			<?php
			/**
			 * yamuna_before_entry_title hook.
			 *
			 */
			do_action( 'yamuna_before_entry_title' );

			if ( yamuna_show_title() ) {
				the_title( '<h1 class="entry-title" itemprop="headline">', '</h1>' );
			}

			/**
			 * yamuna_after_entry_title hook.
			 *
			 *
			 * @hooked yamuna_post_meta - 10
			 */
			do_action( 'yamuna_after_entry_title' );
			?>
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
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'yamuna' ),
				'after'  => '</div>',
			) );
			?>
		</div><!-- .entry-content -->

		<?php
		/**
		 * yamuna_after_entry_content hook.
		 *
		 *
		 * @hooked yamuna_footer_meta - 10
		 */
		do_action( 'yamuna_after_entry_content' );

		/**
		 * yamuna_after_content hook.
		 *
		 */
		do_action( 'yamuna_after_content' );
		?>
	</div><!-- .inside-article -->
</article><!-- #post-## -->
