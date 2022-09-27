<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'writingportfolio_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '<E#U0iV!r4qHJ&*lpg0>rpfm9xe(Xp+j qZQMY:,GC]~DmiN9{6].x`TC.PH*##6' );
define( 'SECURE_AUTH_KEY',  ';!O0&)?8))=QWe&Xp/k&-/i#4R4mT/r+PJP5L>L/v&fwk?y+~ 1u@dD<_IH^!B%.' );
define( 'LOGGED_IN_KEY',    'U[XkhoV_!ee5!1wArXV}@y#;wy>u`ce~MM.~5N>&hT4]Lown% [k;>tW)jMQN#0X' );
define( 'NONCE_KEY',        '7Op_f{ryoo=Wc~Cy]lzUE#n-Dd`p[0l)5^ig5SA!#co?:4:LlV/hCXUA*829:7=4' );
define( 'AUTH_SALT',        '8w2xna0)&Pq~f=,|(rY4EQW-PhnOBo1(l6VY`=] IGF37WsI!6-(cblb9GY$V) L' );
define( 'SECURE_AUTH_SALT', '8c;_qXNL|0ah_q$vEE,& cM>G7O>&Q.1^n;4OrT)[k=(2IVD<`_&^mL-N*q#`0ZW' );
define( 'LOGGED_IN_SALT',   'FTP83;4VAY;`C2Qxy4x_I/UmSb<z_GZp92@Gn}~rWM5wcOGb3BK]b3y>MvW8=iD{' );
define( 'NONCE_SALT',       'D-3C|b?]-)r`vHHB07uK+A4$}Q/S%H#WG>A,cXb2VGG%Jmw`)+hxo<dm(yiVo)pf' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
