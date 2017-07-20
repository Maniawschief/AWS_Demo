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
define('DB_NAME', 'Manibalan');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'B(|-%Fo8@4IBJd<?$.x>X$]?hx!5jsTh5~y4@]vS[oXRJgI;&W%mA_4Xuw`BJ:gy');
define('SECURE_AUTH_KEY',  '-l4p*2$|)e_Lx}R:K-0Ads@3!i|72IOCY%fv^V*C[@b8/<}k~{lnO%,0)Euj#D2&');
define('LOGGED_IN_KEY',    ']ZZ$8&78?.IU0@&k 0-%z~8,XHIZ0S:7ompe:e,}yHezp_W^ZST(p=V;~wQO+js ');
define('NONCE_KEY',        '$;#F;t6Shh[V({h92[Tf?pWFb(A)I?UbB1CRO 9[$z4D0V~Y,Yl@:1-kRmQhLtvs');
define('AUTH_SALT',        'b%p]V0>ds3$7?E*;a,8v&AaAc%9F8lAc:_k^s02*OOj{8Y)?fb:&WKZxkRsdkpKs');
define('SECURE_AUTH_SALT', '!O_t*Zxsqjf7o]a]~e!,g=D_/t=N9sr6cD|UGisLo=@+Ig<ydw=Of%it}HmO#fYb');
define('LOGGED_IN_SALT',   'D70}qO60VLJHJkJinxrw(PJV;}U#p),Jsf+ lC)a=>(@e0[nryAkjH<)[k4Ao9UV');
define('NONCE_SALT',       'mNcqpHP6ES<tbP[3!,!{GOP:,ebKdG`c)<jD,/{z6-QK<h*2V3L*5hPYo(_%DtC>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
