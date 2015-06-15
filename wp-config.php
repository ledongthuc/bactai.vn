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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'vdavlqnh_bactai');

/** MySQL database username */
define('DB_USER', 'vdavlqnh_bactai');

/** MySQL database password */
define('DB_PASSWORD', '!b$3aP^hBs7+');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '<{??$*&5Y-%y-Yc:X,kM{Ub0 AUEPr)NnBweq/x3JG&C#p-_M4gD!]GEh$--BKN-');
define('SECURE_AUTH_KEY',  '-G|e$HBj}154-7.~-Q,e%Y:{^dxYUt64Ml1N4<Jgi@P|0%bJO21|mUJ2XI.vP}g$');
define('LOGGED_IN_KEY',    'Nc7}Kl|6=N}-AUP><o}s!0ueCzyRQRQl1ZZgx`=o0UQo92(#|(x|4BNiY?Q=?l}-');
define('NONCE_KEY',        '#(C4Z@C];XRVjRxW/pv0-%/h^X<botnR-&@{qy+sQh;.,C-1-W>h)3,TQehiqFP6');
define('AUTH_SALT',        'S?y1_|3VZVc(Wt~Q)&:#4_|p5L?K-La4SRv>ljjiF198=K;BrBCM>]2jaL/:Y!+f');
define('SECURE_AUTH_SALT', '(Xt4PFQ%IcW+{)Z[kO$/HBz7z|`zL}+xg4Op1O(P-3wlAp(xH_EZ:S97TkF1B=Dp');
define('LOGGED_IN_SALT',   ', ee(C8pAjAg+;A#LV#Al*@k;o]:JVB)l,Sy,pdbXnH+$mJakFIl%636lEvLu9eQ');
define('NONCE_SALT',       '?I4w)ar-C^6d@UC*{>1jttL|d/2gOayz)-y;|t?#a|N4>HB#FFSG*+hyo1!sUnof');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

