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
define( 'DB_NAME', 'baro09061' );

/** MySQL database username */
define( 'DB_USER', 'baro09061' );

/** MySQL database password */
define( 'DB_PASSWORD', 'qkfh48951@' );

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
define( 'AUTH_KEY',         'IQ[PhfjJXew]9#IjBFq0pI]*`.Cpp+}^Fru~Y=/YzI}e|P%+N9Sv.sDBg${yu>s=' );
define( 'SECURE_AUTH_KEY',  'YZ4|[GaOI;V[wMZ_b5x}jeE]=;9T!uA>d)R ,e#w$fYO@4R=?49%B~8f{_Y]SDa{' );
define( 'LOGGED_IN_KEY',    'try#~;[;ujEWtF2gkb]rA.;G;&=8+d#b}e:tt)0+vDc.(>oUCv{~;@2$}m(`$1rf' );
define( 'NONCE_KEY',        '2LMvMkbmFb}aj;k}FH2A|=B4S-{OCqY=</((UH1<$)~yIJDztHsjBoS44zFlEI]d' );
define( 'AUTH_SALT',        ';l#QbO:/W8=j|ULpO[rfD}F0Ws.Y(jt*O}gw*$cc`mpO#a<]n/5hw5igDFK0V,18' );
define( 'SECURE_AUTH_SALT', 'ayT^H@i-+}{[OvvUNT(2k5<b2reiC>45Sx^0Z(,/y$<~|Da{lmWJw[bqcrTX*WBE' );
define( 'LOGGED_IN_SALT',   'Hhv5GSt6YVFpn &Gep+dD|y(V^HK<sm+0Mj/MDpdxM{EEIs/ijRjt0 zB[3ATNsX' );
define( 'NONCE_SALT',       '/D{J;g6ngniJBHP_<Dd0$J) W~6&F+E3 2U@Zoo#!yE&CQ+K7eqofbyv?w?^2F>~' );

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
