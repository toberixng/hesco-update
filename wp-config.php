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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hesco_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define('AUTH_KEY',         'ZBn.;c7c5OT|-GYST(z/ot;aK|40y+@]-m (apxTBrh6v@a|w-.{:A9(Wqs:VWtC');
define('SECURE_AUTH_KEY',  '-+tZc[xUWuM6<]:[L.@62?{>PU1]@K9MstVux**3xNgT|Gz:b ia6r#oRi^Kk&) ');
define('LOGGED_IN_KEY',    ']--Tn/X|zI%tQFL&Z$LTc59t%{!5oJ&y!-+ls~%_t#g3W&M-mX3$UFHmB-D5^N@F');
define('NONCE_KEY',        'kxzc$l~+77H2*M$%C(&5&1Qu;|/:eVl>lQ;&.OWtAz)8R>8`MjpFDMkZ/FL*qJ7G');
define('AUTH_SALT',        'h~:CO 0?Aw.)B<-5^~g-CMO!| |gMmIkVH@+:orvBG-:7MRG7~$O@aELP&.tcq-a');
define('SECURE_AUTH_SALT', 'PKiyp9)`UbM,v^q4ng]]`oonk?#6RT$2-1`&GAjG/`]Q:LwsN+*x7iunq-vT0F:<');
define('LOGGED_IN_SALT',   'q+2SLZR7|0Fdls~mp.mb#o~BcrRM^p+im*lbBn~oNYLkf/dia{.-d5!dxB(Vt$X ');
define('NONCE_SALT',       'XPY1VO2-Jhr}U3J-LHF% 6H-5exN-vP(#=k:#C5|8j%N&6MYq`o]le;xN.i}NI9p');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
