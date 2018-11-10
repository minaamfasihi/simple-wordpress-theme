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
define('DB_NAME', 'wpthemes');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'bugs123');

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
define('AUTH_KEY',         '*K9.wvcCjYC.]eFS1X<5|2#b/P<?L>Pi~~@?PWC+ZTuO=r1O&A!#+ +:JV}.2kGY');
define('SECURE_AUTH_KEY',  '}YW;_SFlTg%lPhVgok!r3g(ZsjX0ANQ_!EQO;aY^fQx)WI^Xon7oDtq%1Mfo7GSf');
define('LOGGED_IN_KEY',    '(SnpnL%iqd J;ZUS88y8xGQ`YBA[MZ0Tf:D-.L`cj[gE=#8qq_E9$7DP%3cfzA7.');
define('NONCE_KEY',        'skqcW(HiV?jkf=j7YajM8Hl8T!!)ttiio#<~bFp=xMvg4~>J)slH%x0%V b>L}tO');
define('AUTH_SALT',        '+Ig|5y=K?}w;Q{5IUFa6!p)M?}_53>t0|fxG#|ey/NX*Y%RgiA<~O77-_v9>./PE');
define('SECURE_AUTH_SALT', 'XV+SX;!p7MbW|PyBFfFIL$*jN(nq;#}GYRs_R-lKfh26hU_FeIDy5Ms>/>d?uC,,');
define('LOGGED_IN_SALT',   '.PMJxj*I(xq1:Ukf@QA,:jIf lr#e5wnZ1ulb2 wl!}P<z,h-E`Sl4@$hhgPY-iM');
define('NONCE_SALT',       '0Kwq$}Xu_M+ZnU Z,7R1?,A ~VGvKK3l[-hUz-_w_{d.cBnmWk;x;}e/4a:?[@d/');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
