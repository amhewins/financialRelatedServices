<?php

define('FORCE_SSL_ADMIN', true);
define('WP_HOME', 'https://www.frsbookkeeping.com');
define('WP_SITEURL', 'https://www.frsbookkeeping.com');

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
define('DB_NAME', 'FRSBookkeeping');
// define('DB_NAME', 'frsfinancial');

/** MySQL database username */
define('DB_USER', 'FRSBookkeeping');
// define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Bookkeeping#1');
// define('DB_USER', 'root');

/** MySQL hostname */
define( 'DB_HOST', 'FRSBookkeeping.db.9060007.e6d.hostedresource.net' );
// define('DB_HOST', 'localhost');

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
 define( 'AUTH_KEY',         '>QlUP,uREMg95-/qDkc;_fOw$6YH<N Kss`u8R5Ix|Lp.d~*quUkZa-_QcT<?>K7' );
 define( 'SECURE_AUTH_KEY',  'e(.4TM =+IGK y|9JOv9o?Y:ycO@PB74~X%4u5e-U%a~>ZlL+%4b<qIdz/F1cuO ' );
 define( 'LOGGED_IN_KEY',    '?Cp^>MA0C/9Q=8Ku2mp`UBtXk|GjgxSE.cPP%Mg>;il+QG5c++Q741Ld)azX(l[s' );
 define( 'NONCE_KEY',        'a7iKCIWpGT]=?!x_CWgGuh<xOE4XSYX[Qo$i@|EA`a6K0mJ)<yOI*>7a_yiB>LB8' );
 define( 'AUTH_SALT',        'l]f4.SY}~l_Bfopbr/h`Crz?G[/5.<&]_HAP@Z^``1+}no5GYi .;]6^_>25`l4.' );
 define( 'SECURE_AUTH_SALT', 'dN(!!6Zm77_ZQ>_0%>+okK+)rX$^>TXHU$NzY-6^=*6=,[lOt%|@t&*=/{SIR)p]' );
 define( 'LOGGED_IN_SALT',   'Ausu(DnW+zr6e>Ah<$a&LwWYstEM`v`TH&$Zxo/))Wi{iK04>J~tXb}ws<W][zga' );
 define( 'NONCE_SALT',       'B]oWiTT1O%sDGS{ThRygG{r;,tt%k(wy]1n,ML!dV7Rr[E?.KQ2WJ-C-0aHi{s6W' );

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
define('WP_MEMORY_LIMIT', '64M');
@ini_set( 'upload_max_filesize' , '128M' );
@ini_set( 'post_max_size', '128M');
@ini_set( 'memory_limit', '256M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );