<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

define('FS_METHOD','direct');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'irp_design_dk_db' );

/** MySQL database username */
define( 'DB_USER', 'irp_design_dk' );

/** MySQL database password */
define( 'DB_PASSWORD', 'EyT88hWp' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql77.unoeuro.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '2-MCSG<9m`8{Q<Hlf`bOUDOG:_cv^n2a0;oKI0lrv2~64B}@_o~[Jq>e!F)Muxj[');
define('SECURE_AUTH_KEY',  '*h[3|9~>m:1^za%T8-B=0Mnk2lD$-}<})v:|5eoQ_+DLJ2Lt-0F<R;1?JZ1]m-md');
define('LOGGED_IN_KEY',    '9]|?$P`|+!B|niH-XWbu90@~1:T!9Lu*oKV|Fdh~VB~#?D_$c)~&H-/27B6{2 E3');
define('NONCE_KEY',        'n+S&M`4)+i>3nGucJ^cps#y?][zLuubRs~-hp4zX5TZDWT@A?I8zs.#Q{?D+`U~S');
define('AUTH_SALT',        '{Q:]Iu4WR,B-J_E)5l)Hp?FOEL/--ahJCW$,0Eh+RV/6FR~V8$,=I&3M11%]O,}W');
define('SECURE_AUTH_SALT', '4*3-Y{uwRK=C#<psM}A#V~sV-8.S=$hR?Fej&&oGL:uM_kqR0sy{g[m[f2D<]C&r');
define('LOGGED_IN_SALT',   'Kj3)p1;nGD,hv&4-;XkQ_X l:F`14xQfF.9I=Stn.b_q/0xmDT3}WqRI3gAYDgfJ');
define('NONCE_SALT',       'U9X!d@P~4+Cc`kNLTz+CNgdtSR^|+x-=,@n-gH)0qdj>Gm)G%;j@upi+.c{nEzM&');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'portfoliowp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
