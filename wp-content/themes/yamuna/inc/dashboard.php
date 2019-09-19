<?php
/**
 * Builds our admin page.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'yamuna_create_menu' ) ) {
	add_action( 'admin_menu', 'yamuna_create_menu' );
	/**
	 * Adds our "Yamuna" dashboard menu item
	 *
	 */
	function yamuna_create_menu() {
		$yamuna_page = add_theme_page( 'Yamuna', 'Yamuna', apply_filters( 'yamuna_dashboard_page_capability', 'edit_theme_options' ), 'yamuna-options', 'yamuna_settings_page' );
		add_action( "admin_print_styles-$yamuna_page", 'yamuna_options_styles' );
	}
}

if ( ! function_exists( 'yamuna_options_styles' ) ) {
	/**
	 * Adds any necessary scripts to the Yamuna dashboard page
	 *
	 */
	function yamuna_options_styles() {
		wp_enqueue_style( 'yamuna-options', get_template_directory_uri() . '/css/admin/admin-style.css', array(), YAMUNA_VERSION );
	}
}

if ( ! function_exists( 'yamuna_settings_page' ) ) {
	/**
	 * Builds the content of our Yamuna dashboard page
	 *
	 */
	function yamuna_settings_page() {
		?>
		<div class="wrap">
			<div class="metabox-holder">
				<div class="yamuna-masthead clearfix">
					<div class="yamuna-container">
						<div class="yamuna-title">
							<a href="<?php echo esc_url(YAMUNA_THEME_URL); ?>" target="_blank"><?php esc_html_e( 'Yamuna', 'yamuna' ); ?></a> <span class="yamuna-version"><?php echo esc_html( YAMUNA_VERSION ); ?></span>
						</div>
						<div class="yamuna-masthead-links">
							<?php if ( ! defined( 'YAMUNA_PREMIUM_VERSION' ) ) : ?>
								<a class="yamuna-masthead-links-bold" href="<?php echo esc_url(YAMUNA_THEME_URL); ?>" target="_blank"><?php esc_html_e( 'Premium', 'yamuna' );?></a>
							<?php endif; ?>
							<a href="<?php echo esc_url(YAMUNA_WPKOI_AUTHOR_URL); ?>" target="_blank"><?php esc_html_e( 'WPKoi', 'yamuna' ); ?></a>
                            <a href="<?php echo esc_url(YAMUNA_DOCUMENTATION); ?>" target="_blank"><?php esc_html_e( 'Documentation', 'yamuna' ); ?></a>
						</div>
					</div>
				</div>

				<?php
				/**
				 * yamuna_dashboard_after_header hook.
				 *
				 */
				 do_action( 'yamuna_dashboard_after_header' );
				 ?>

				<div class="yamuna-container">
					<div class="postbox-container clearfix" style="float: none;">
						<div class="grid-container grid-parent">

							<?php
							/**
							 * yamuna_dashboard_inside_container hook.
							 *
							 */
							 do_action( 'yamuna_dashboard_inside_container' );
							 ?>

							<div class="form-metabox grid-70" style="padding-left: 0;">
								<h2 style="height:0;margin:0;"><!-- admin notices below this element --></h2>
								<form method="post" action="options.php">
									<?php settings_fields( 'yamuna-settings-group' ); ?>
									<?php do_settings_sections( 'yamuna-settings-group' ); ?>
									<div class="customize-button hide-on-desktop">
										<?php
										printf( '<a id="yamuna_customize_button" class="button button-primary" href="%1$s">%2$s</a>',
											esc_url( admin_url( 'customize.php' ) ),
											esc_html__( 'Customize', 'yamuna' )
										);
										?>
									</div>

									<?php
									/**
									 * yamuna_inside_options_form hook.
									 *
									 */
									 do_action( 'yamuna_inside_options_form' );
									 ?>
								</form>

								<?php
								$modules = array(
									'Backgrounds' => array(
											'url' => YAMUNA_THEME_URL,
									),
									'Blog' => array(
											'url' => YAMUNA_THEME_URL,
									),
									'Colors' => array(
											'url' => YAMUNA_THEME_URL,
									),
									'Copyright' => array(
											'url' => YAMUNA_THEME_URL,
									),
									'Disable Elements' => array(
											'url' => YAMUNA_THEME_URL,
									),
									'Demo Import' => array(
											'url' => YAMUNA_THEME_URL,
									),
									'Hooks' => array(
											'url' => YAMUNA_THEME_URL,
									),
									'Import / Export' => array(
											'url' => YAMUNA_THEME_URL,
									),
									'Menu Plus' => array(
											'url' => YAMUNA_THEME_URL,
									),
									'Page Header' => array(
											'url' => YAMUNA_THEME_URL,
									),
									'Secondary Nav' => array(
											'url' => YAMUNA_THEME_URL,
									),
									'Spacing' => array(
											'url' => YAMUNA_THEME_URL,
									),
									'Typography' => array(
											'url' => YAMUNA_THEME_URL,
									),
									'Elementor Addon' => array(
											'url' => YAMUNA_THEME_URL,
									)
								);

								if ( ! defined( 'YAMUNA_PREMIUM_VERSION' ) ) : ?>
									<div class="postbox yamuna-metabox">
										<h3 class="hndle"><?php esc_html_e( 'Premium Modules', 'yamuna' ); ?></h3>
										<div class="inside" style="margin:0;padding:0;">
											<div class="premium-addons">
												<?php foreach( $modules as $module => $info ) { ?>
												<div class="add-on activated yamuna-clear addon-container grid-parent">
													<div class="addon-name column-addon-name" style="">
														<a href="<?php echo esc_url( $info[ 'url' ] ); ?>" target="_blank"><?php echo esc_html( $module ); ?></a>
													</div>
													<div class="addon-action addon-addon-action" style="text-align:right;">
														<a href="<?php echo esc_url( $info[ 'url' ] ); ?>" target="_blank"><?php esc_html_e( 'More info', 'yamuna' ); ?></a>
													</div>
												</div>
												<div class="yamuna-clear"></div>
												<?php } ?>
											</div>
										</div>
									</div>
								<?php
								endif;

								/**
								 * yamuna_options_items hook.
								 *
								 */
								do_action( 'yamuna_options_items' );
								?>
							</div>

							<div class="yamuna-right-sidebar grid-30" style="padding-right: 0;">
								<div class="customize-button hide-on-mobile">
									<?php
									printf( '<a id="yamuna_customize_button" class="button button-primary" href="%1$s">%2$s</a>',
										esc_url( admin_url( 'customize.php' ) ),
										esc_html__( 'Customize', 'yamuna' )
									);
									?>
								</div>

								<?php
								/**
								 * yamuna_admin_right_panel hook.
								 *
								 */
								 do_action( 'yamuna_admin_right_panel' );

								  ?>
                                
                                <div class="wpkoi-doc">
                                	<h3><?php esc_html_e( 'Yamuna documentation', 'yamuna' ); ?></h3>
                                	<p><?php esc_html_e( 'If You`ve stuck, the documentation may help on WPKoi.com', 'yamuna' ); ?></p>
                                    <a href="<?php echo esc_url(YAMUNA_DOCUMENTATION); ?>" class="wpkoi-admin-button" target="_blank"><?php esc_html_e( 'Yamuna documentation', 'yamuna' ); ?></a>
                                </div>
                                
                                <div class="wpkoi-social">
                                	<h3><?php esc_html_e( 'WPKoi on Facebook', 'yamuna' ); ?></h3>
                                	<p><?php esc_html_e( 'If You want to get useful info about WordPress and the theme, follow WPKoi on Facebook.', 'yamuna' ); ?></p>
                                    <a href="<?php echo esc_url(YAMUNA_WPKOI_SOCIAL_URL); ?>" class="wpkoi-admin-button" target="_blank"><?php esc_html_e( 'Go to Facebook', 'yamuna' ); ?></a>
                                </div>
                                
                                <div class="wpkoi-review">
                                	<h3><?php esc_html_e( 'Help with You review', 'yamuna' ); ?></h3>
                                	<p><?php esc_html_e( 'If You like Yamuna theme, show it to the world with Your review. Your feedback helps a lot.', 'yamuna' ); ?></p>
                                    <a href="<?php echo esc_url(YAMUNA_WORDPRESS_REVIEW); ?>" class="wpkoi-admin-button" target="_blank"><?php esc_html_e( 'Add my review', 'yamuna' ); ?></a>
                                </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
	}
}

if ( ! function_exists( 'yamuna_admin_errors' ) ) {
	add_action( 'admin_notices', 'yamuna_admin_errors' );
	/**
	 * Add our admin notices
	 *
	 */
	function yamuna_admin_errors() {
		$screen = get_current_screen();

		if ( 'appearance_page_yamuna-options' !== $screen->base ) {
			return;
		}

		if ( isset( $_GET['settings-updated'] ) && 'true' == $_GET['settings-updated'] ) {
			 add_settings_error( 'yamuna-notices', 'true', esc_html__( 'Settings saved.', 'yamuna' ), 'updated' );
		}

		if ( isset( $_GET['status'] ) && 'imported' == $_GET['status'] ) {
			 add_settings_error( 'yamuna-notices', 'imported', esc_html__( 'Import successful.', 'yamuna' ), 'updated' );
		}

		if ( isset( $_GET['status'] ) && 'reset' == $_GET['status'] ) {
			 add_settings_error( 'yamuna-notices', 'reset', esc_html__( 'Settings removed.', 'yamuna' ), 'updated' );
		}

		settings_errors( 'yamuna-notices' );
	}
}
