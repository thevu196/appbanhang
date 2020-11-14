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
define( 'DB_NAME', 'appbanhang' );

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
define( 'AUTH_KEY',         '^NTW[vy,6MjKONxPqw(Lb9p^,drAan8b4$t;O00sa}Z$[HUL3Sn%VN,~D=T[y;by' );
define( 'SECURE_AUTH_KEY',  'q_cAi~ZVbokt5k#4zvZb`bM5, ;Ir{S|Lw3_XX($?gGRs(:=^68hsp9ESK{`iEIj' );
define( 'LOGGED_IN_KEY',    '&edbe]u1ca7dG/A<81CgCdZ$+S [$j/`-*|Izt06uH|2ty~yY5CCc%8pwtJL6!(c' );
define( 'NONCE_KEY',        '2A_{rYO/Zxp!F<Qc(sXY(NH=-%0>r6WjrFY^pz|HiH5$+;Q5z&%Usx+5S#map=!A' );
define( 'AUTH_SALT',        '$KngX7JnOSKlP`MEn69i;]cy<D^dMcud@lw|5pULPe1^EtPX`X^kys+3Q!9*4yH`' );
define( 'SECURE_AUTH_SALT', 'eJ.MG3CIp_xrhOU=2A%GbZGZO2=>5W/5caCHx7{%JMKi>6/zW:5uY?*P~dG2z)bB' );
define( 'LOGGED_IN_SALT',   'LSx0Z#C7(?!5VqvswaFD$ID(z,CE|NkCRIA+{vsTiMdwo$he~*x_cS50*rncz+7~' );
define( 'NONCE_SALT',       'm.Xu)CA-gAYIz&@n2=3u~.C2!QN:Zh&s{vHx1tY*]QV>X+a #]/6/>b`3z94GzIk' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ap_';

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
