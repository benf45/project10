<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

/** MySQL settings - You can get this info from your web host **/
/** The name of the database for WordPress */
define('DB_NAME', 'project10');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost' . ':' . '3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** Disable WordPress file editor */
define( 'DISALLOW_FILE_EDIT', true );

define( 'COOKIEHASH', md5($_SERVER['WORDPRESS_DB_PASSWORD'] . 'secure cookies' .$_SERVER['WORDPRESS_DB_PASSWORD'] ) );	// Cookies hardening

define( 'WP_MEMORY_LIMIT', '256M' );

// Disable OP Cache mu-plugin feature
define('HIDE_CACHE_CLEAR',false);

// Disable SSO mu-plugin feature
define('HIDE_SSO_LINK',false);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ')D9SX#tF6ixD?><;7iwzx$x1F0Bm58#$`*?;2[5>E+*<1Y6gU:4HxO^WO@em,6jZ');
define('SECURE_AUTH_KEY',  'k-bXHLotjpm;l/54Jg|lX`z<g/XW(VzRW!580V9-|=IW06:mpopX3:4Z}F^VQiwx');
define('LOGGED_IN_KEY',    '*9]}B;sFF69)+Rk&$l<RO11higt?3JR0mN3,_iA]0>-_@8*<UwUDK+W 8R_?T9C:');
define('NONCE_KEY',        'Mkw,E1/S*a_n/ PNs&PCj]Cgk/Bzh(9#] cJ#^X9l|O)#c}4~dIS_8FsY/^g%Vm,');
define('AUTH_SALT',        'EP1_UWSL&QKFy_3DUvMW(3~s#m~sc.jMj]52-(coX+!T3+zZtq7<l$3s@H]8-N*+');
define('SECURE_AUTH_SALT', 'xmICS>mx5![gS73[`j.I!i;UbTFP#LSVciv=xAYA%8Ne[2T(.j7_z5-}svSgDnaE');
define('LOGGED_IN_SALT',   '4v`Gt6?9?=7da7|cKSM,W$GGT?|R~T0H:ej,6a<,mRs @3b{YbgInsr]&::|F&dI');
define('NONCE_SALT',       'y+}}J!F5d%~(@;|.njp{0rclFp^#7[[uDzp(a<{P]`Kq =>c~!SBifz*;]]uP*M6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);
define('WP_DEBUG_DISPLAY', true);
define('WP_DEBUG_LOG', true);
$sapi_type = php_sapi_name();
if ( $sapi_type == 'cli' ) {
    define( 'WP_DEBUG', false );
    error_reporting(0);
    @ini_set('display_errors', 0);
}
// @ini_set('log_errors', 'On');

define( 'WPMU_PLUGIN_DIR', '/mu-plugin' );
define( 'DOCKET_CACHE_CONTENT_PATH', '/tmp/docket_cache' );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/** change permisssions for plugin installation */
define("FS_METHOD","direct");
