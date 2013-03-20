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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'robot');

/** MySQL database password */
define('DB_PASSWORD', 'raggssra1');

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
define('AUTH_KEY',         '9<Rld-qECh9mr_+(8V.DuPpTa4T2@?,s-SYKj[g8o~.`bB[/#O]Cu-%K5onHD6|@');
define('SECURE_AUTH_KEY',  'Wo*]KD0+hQK9V/]4vM+Xr$5C}+% A>:3%:cLbj.+^v,rE-<=5ywn<>])S=(MXwtg');
define('LOGGED_IN_KEY',    'Z->+GBK|:XIFQ=1CO(5i4Sb%vrVB`%S-}eb{k!-Z0+Y@?&-_y`pW}4OSVX|b{-M-');
define('NONCE_KEY',        'nR-H^uv85@pu,v^+3_Gc+nV::xBHoP;g]Y8`<*AdrtP}qPR}ApR*RsLyG?71_f:*');
define('AUTH_SALT',        '_k7viLUzMJ+,jv:k&cgd~FzHU:++9u4d#zNcqz:Qg_+d9<]o-(OvO1Qqq/m.S5wZ');
define('SECURE_AUTH_SALT', 'Q3+YBH xm*HLW0<&Qi9$}ak$ ~wkpK+(1t!ppei,-yRK`e?#Y[c>7*YLrG:X?+%#');
define('LOGGED_IN_SALT',   '9/?7fFsrh$aeaO*>GZS{ajVp^:G8jdA@X<f-w BmPV!;[5f.vbuSOYS=#AO2pE=>');
define('NONCE_SALT',       ':0d^5JD5`CJfsxLB?`[ ,f0+.[&*V@=Mu!pLIh~i{i+[B}Sx|xtgk1|:HhQ=xZ?v');

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
