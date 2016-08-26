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
define('DB_NAME', 'bearcosmetics');

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
define('AUTH_KEY',         'BXL#HtR^_rWZ{;wC7S=b[_SZS&__WTKYaS-NJ^_5$9rFCd98s2[fk5k_?8{AJ~wD');
define('SECURE_AUTH_KEY',  'b@18Qy14>5Ny8`919}(:a;re$wd%Ni}:FG))d_J7B%SmPLrG&_KICY]|$|d1~4tF');
define('LOGGED_IN_KEY',    'K)ZCK(9gx4!k95J@P,yS1Kf0dqfP+7BiQwf>QB@Yk1}U6YT6I1/|DXZLeR;[p6r4');
define('NONCE_KEY',        'w:(d*[>RY,?oX3{9zy*2Tn`?f4m_,}pdH?8dbm$gNK8X4Qbg129ajlQF47J6%LiG');
define('AUTH_SALT',        '~izY&(3:q@]mwL&y>[dCMDZJ f|^g{CbZt7D7WIg>yykB!6YZ,hnI]=TY9gUw,#:');
define('SECURE_AUTH_SALT', 'Ey6ey%7Dp3$K7f^`p@G;_]uG<BF6VUlslHG8-~6!U2%cZ:bulW-I~G*5HCY=f#55');
define('LOGGED_IN_SALT',   '-EpSoWyw,cHr]3CNKZV0pAru!rIbjUL|U3M%T*(#_|N4XoX2CF7d9s3Z_r(si{g>');
define('NONCE_SALT',       '!:;-W^L^/8FCduWQ%k?cU8=|K4n$Q6pihSK&<<do:c0e](8<Z,[BwFp#jdu` 0J/');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'bc_';

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
