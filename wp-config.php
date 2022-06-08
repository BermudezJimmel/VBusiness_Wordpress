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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/var/www/vhosts/vbusiness.ph/httpdocs/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'admin_VBusiness_Web_2022' );

/** MySQL database username */
define( 'DB_USER', 'admin_wp_WebDev' );

/** MySQL database password */
define( 'DB_PASSWORD', 'zn26#txAyVkX2yrq' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql-box-01.vbusiness.ph:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', ']bkgc0f0H5|/#[72TgQvRc)z5q3K*wD#dL0VIL8)-7IA2c7Dg7ctZbS/-!:RD(U;');
define('SECURE_AUTH_KEY', 'rH4-x55;9-8(~EA3Pd9Hk~|p%umNZ7W%H1D-468/!j4f3Gxx;S5S)Jc|#]4Qp9:#');
define('LOGGED_IN_KEY', '#k)P6(|dN]nc77G:]h+hS(G9NVH+()%b&0T(2-392r;06S)qVJ1LiPth73Q&Tc+V');
define('NONCE_KEY', '7ebL9gEXyhWN2[;75U-otnZn3/1Y1yB#2(5s/Wf|&(2!U/sdrwv;QTg28X*:02qF');
define('AUTH_SALT', '-(]OBl4)&(H2x!D3[QO3:m(6:~qm0K8Uda2k&1Pi4VmM4Uh2i;/O25w93!80#xdT');
define('SECURE_AUTH_SALT', '!4Q#t@p#TbrTT3qI_-H*A/%-Y66Z[265]l0Sj5**:KMW#gf/P4b#370+dg[Gad4E');
define('LOGGED_IN_SALT', 'VCT-+&aQY#C%@T%4A4fDMIV1u*q_X84rxqIKs/660%UJ7)|zOU_E6q18~98TdB&y');
define('NONCE_SALT', '(n7tJ14su%w4R()ME9:Fndd]#M!w-zz7-A5YNL6tr_#;fXf*6vFY(%yeqof~R29V');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '0dZWA5zt_';


define('WP_ALLOW_MULTISITE', true);
define( 'WP_DEBUG', true );
define( 'DISABLE_WP_CRON', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) { 
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


