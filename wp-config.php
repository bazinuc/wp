<?php

if ((isset($_ENV["HTTPS"]) && ("on" == $_ENV["HTTPS"]))
|| (isset($_SERVER["HTTP_X_FORWARDED_SSL"]) && (strpos($_SERVER["HTTP_X_FORWARDED_SSL"], "1") !== false))
|| (isset($_SERVER["HTTP_X_FORWARDED_SSL"]) && (strpos($_SERVER["HTTP_X_FORWARDED_SSL"], "on") !== false))
|| (isset($_SERVER["HTTP_CF_VISITOR"]) && (strpos($_SERVER["HTTP_CF_VISITOR"], "https") !== false))
|| (isset($_SERVER["HTTP_CLOUDFRONT_FORWARDED_PROTO"]) && (strpos($_SERVER["HTTP_CLOUDFRONT_FORWARDED_PROTO"], "https") !== false))
|| (isset($_SERVER["HTTP_X_FORWARDED_PROTO"]) && (strpos($_SERVER["HTTP_X_FORWARDED_PROTO"], "https") !== false))
|| (isset($_SERVER["HTTP_X_PROTO"]) && (strpos($_SERVER["HTTP_X_PROTO"], "SSL") !== false))
) {
$_SERVER["HTTPS"] = "on";
}
 
# No ACM Public SSL Certificate
define('WP_SITEURL','https://' . $_SERVER['HTTP_HOST']);
define('WP_HOME','https://' . $_SERVER['HTTP_HOST']);


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
define( 'DB_NAME', 'wpcunizab' );

/** MySQL database username */
define( 'DB_USER', 'adminwpcunizab' );

/** MySQL database password */
define( 'DB_PASSWORD', 'saWpcunizab+123' );

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
define( 'AUTH_KEY',         'HI< &_g?ajR{wTU_MkU<++Mz@{` jD82zPn?:Ykt[uQ;TN_bf+Z&Lzk2:6AikWC2' );
define( 'SECURE_AUTH_KEY',  '|%YvpAksCvf9n; ,b/dF)C^0V3a`y/g?Is,+LJj-8d+xGb1X7NY+rZwvDmD*e}`8' );
define( 'LOGGED_IN_KEY',    'Ax hPYIHK{fp^ip$^s{pZ!8k@CPrW|8@d;M=#/z4|Cxz+<p]*3^0@qd$<,k ;Xxw' );
define( 'NONCE_KEY',        'L)`jI,U)HB(&[C9w[3, 8+?:`?c tC;)xW8l7vo7M#&-g]x>Y]Q+lvqk|[hkY6U8' );
define( 'AUTH_SALT',        'A>x0(8W*4n29!6-aE~o>#9zulrKoZ3J=C;{B{pE<=F__peW:RTABmJ^>/|X[5<h*' );
define( 'SECURE_AUTH_SALT', 'Ek}eG<h$ Fkv/GT0v{-kkk=$>>](cd8H(Z7hI4c3I5>|!WwTo|*U(u)W1!B *Vqx' );
define( 'LOGGED_IN_SALT',   '@2^h$79gio7Df5V.mc!?,zKm_)nM@KiXRG#[7CKsX<]Iy$&1#F@.;X)4}cQzfqwx' );
define( 'NONCE_SALT',       'l] 13<{!wM$m2O!IcqdtqLFG] kPB:(:fMaSWBOi6MScO#{nkCLD[Po`<Aww*dvD' );

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
