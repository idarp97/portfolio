<?php
/**
 * The template for displaying the header.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php yamuna_body_schema();?> <?php body_class(); ?>>
	<?php
	/**
	 * yamuna_before_header hook.
	 *
	 *
	 * @hooked yamuna_do_skip_to_content_link - 2
	 * @hooked yamuna_top_bar - 5
	 * @hooked yamuna_add_navigation_before_header - 5
	 */
	do_action( 'yamuna_before_header' );

	/**
	 * yamuna_header hook.
	 *
	 *
	 * @hooked yamuna_construct_header - 10
	 */
	do_action( 'yamuna_header' );

	/**
	 * yamuna_after_header hook.
	 *
	 *
	 * @hooked yamuna_featured_page_header - 10
	 */
	do_action( 'yamuna_after_header' );
	?>

	<div id="page" class="hfeed site grid-container container grid-parent">
		<div id="content" class="site-content">
			<?php
			/**
			 * yamuna_inside_container hook.
			 *
			 */
			do_action( 'yamuna_inside_container' );
