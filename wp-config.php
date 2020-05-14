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
define('DB_NAME', 'testwordpress_db');

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
define('AUTH_KEY',         'JhOidaUNg50ZRGqcN7pBT(rTqvEavXBMMIrpw[8MnnrMgqbb cJy-c^&LWc;`H30');
define('SECURE_AUTH_KEY',  ':t>In]?ah:_lP{s^HI=+&iZP;L-1)[m Jsa`g=?F?i k/.Y#B<Ky|xOdcR:dVjVG');
define('LOGGED_IN_KEY',    'b6}@@=7;4AX)r$Kz6jSpVab|M>jT&9]G0tV%$?lSx;Jk-UqlTXQ-}X/(B8o*-T%N');
define('NONCE_KEY',        '+v1:(C,[WaL#)/^fnv d/-}FP6) HD>{$wuA#e&;mWx&{FZH;tM0nunEL?<N 8R|');
define('AUTH_SALT',        'qt:j$Vq(/VHhJ3|o|m9|#I%-oI%9fcCo~lbAQrmz[rR& %)*mjv?0&(QD=2P 6!H');
define('SECURE_AUTH_SALT', ':MW>r/nZo?OX0}IJPeoP~^}XE]P!R7H5gB^vn=B>zr:Ki=J!:,r8to|TyTJxaQOW');
define('LOGGED_IN_SALT',   '2x&G-KdcoQP%~4suyq&WW|h=ul#(UL-&-?PrZ$HSrK?(Ms1J]!t@.o[x}~^*?wwK');
define('NONCE_SALT',       '9fPq-u>%GKZn0nyc>V?wTmNf @!k`&GRC+>SN[?Z!(^ZdLzt/?Y=Q2W1nN*Bhtp9');

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
