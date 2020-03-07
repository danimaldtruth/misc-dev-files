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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpressuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'YREs-E*eJx[Mg93-Z:)fIDw1w14d82FLv+;-}:}i#=wD!&o)2A;xX{1V[h~[nY]*');
define('SECURE_AUTH_KEY',  'ZDC5lubm?*T<J)NjGwicX;e{&cBP$hz{%CjpgaP@sTbN&-rtU4OR7E9oi80k%Th|');
define('LOGGED_IN_KEY',    '@+h=z&3QisPH?j7}O4w:-x Um20]9S&pPQ4&<P5=-OJEjNq`vcKEe+R-SXM%s![7');
define('NONCE_KEY',        '_DD~z^Lr*J Hu@:|P+lG)b])y&I`Umfi;t):HFPdu`]Auk7KH)0^EnKiOS_,$GzY');
define('AUTH_SALT',        '~?`/T+YAgYy[A+28G%%#KO*c?KK2mE19[n!`c7v!2?rR] ^-.{MH3rWk(]@ln5rf');
define('SECURE_AUTH_SALT', '|i|4*sagIv~WG8$5Bhqe.c%>:ABeLo*iE+EA;3V/C$9TI0|c`_F7VtMl{Mu&P(A9');
define('LOGGED_IN_SALT',   'O9^*/4_o9@f%[0vP0yLDEI<n-QzZ-/z.l^~_hcEc#84p*@+mX-wu10%.;mDD~LS@');
define('NONCE_SALT',       '7;i>N6^3nT]MT64-:yJ>ya&5a;u2}HV2]t3$rB-d+I|.TAO+64q,D+S^]dup8r+Q');

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

define('FS_METHOD', 'direct');
