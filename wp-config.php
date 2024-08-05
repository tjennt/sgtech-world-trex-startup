<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sgtech-wp-core' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'glohow' );

/** Database hostname */
define( 'DB_HOST', '192.168.0.100' );

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
define( 'AUTH_KEY',         'h,g3,b]DynDp`:4,(04lT1ABSL4N Loe/96>npaMO)Hi@N[K_Nc3T,d{)ETsp_aD' );
define( 'SECURE_AUTH_KEY',  'rr!m} ^SKBC[Iuz6,xX4=1gGRgEh@B4&T%a(E{H8#CZn(e_wFL[4+MP+KptW?I<I' );
define( 'LOGGED_IN_KEY',    'A`uzu%wZ4EQ&kD3.?~@jPrxsq:gevDYok1[=OCHza_D>Jc)E)T+Q|u8(6_4LoKNC' );
define( 'NONCE_KEY',        'ep_@6Cb%6g~ppOc(!/OSNokd@f~)sA%~0GObsw`?WfqK9D)ju-N?Ue|NZE;uyll;' );
define( 'AUTH_SALT',        'G*PalVspl_Pg28yu8+y{=ro](?EmZ^EW@N1@5lC!&;WTUr)r5:(n[]~3^eg*5@O}' );
define( 'SECURE_AUTH_SALT', 'K&h%M<4x8+,35UdL~??zN3_hCNGxsK>Xw}Php6=CI $aE}ok#Cws>cT[pAMF9bjl' );
define( 'LOGGED_IN_SALT',   '=sb5mEmd3Uq>(?2!GPXi+@a<~mA*k^b9#L1oznxGS&GW.@:C?L]2XW]f=aw;e(,;' );
define( 'NONCE_SALT',       '/?%8x%Y8,.&jj,MCVXO4j;w|/>qB*!R)=2PlHyQ}r(VuQ^`e9bnTLzE>64U^5!$U' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sgtech_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
// Kích hoạt chế độ debug
define('WP_DEBUG', true);

// Kích hoạt log debug để ghi vào file debug.log trong thư mục wp-content
define('WP_DEBUG_LOG', true);

// Hiển thị lỗi và cảnh báo trên trang web (không nên sử dụng trên môi trường production)
define('WP_DEBUG_DISPLAY', false);
@ini_set('display_errors', 0);

// Kích hoạt chế độ sửa lỗi script
define('SCRIPT_DEBUG', true);

// Kích hoạt chế độ lưu query
define('SAVEQUERIES', true);


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}


/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
