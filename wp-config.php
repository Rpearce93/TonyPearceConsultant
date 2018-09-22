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
define('DB_NAME', 'tonypearceconsultant');

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
define('AUTH_KEY',         'D+Mca 7V5l7dpv@Vb[ziE||%!@)^al1hlvZ)qY?rg`7<M&jT,v%g%Yq5h,;8;{:l');
define('SECURE_AUTH_KEY',  'MP+Q;xb=+G<ze7=yI|aTDHkY{15zad?osxFeZ6j-X<9CJ&oSajl ,gftMf@`n?&2');
define('LOGGED_IN_KEY',    'a~;4=NaxV(7;|;GFkj<kmzwM4LcO[VmhBM#dG8dNMB};`)wp<z7E&j*FG]^D3lOd');
define('NONCE_KEY',        'Z_5 zag9T64qMTqq@5AxHD2~E^hHEs|0@{P_C)I1ukm9P%vac)PDfXSD_O>V@c!!');
define('AUTH_SALT',        'f55[QCm#e-Fm)l(J5oTSby(ZC9<_&S-:b!oa+4&d}$$Iq%-@xv`j ze kZ;U.z1=');
define('SECURE_AUTH_SALT', '!wiCXN)?IE>0=E0Ot__Dnd$PpCNX9Os:>+DdKRa/{/S89]`r{,-2]FlAUW.>VQN;');
define('LOGGED_IN_SALT',   'RJs_)e`_i/H814mdR}MBshVC)Mw#L#.}F}^yED@Q5kg*IlKELCYznfI},v5]lUvJ');
define('NONCE_SALT',       'vlo$4VBC^kLs8=drAKhWO=t=#YTRgvgOL9QY5}~UwXWVEWf(EkUq`5adxzo7BWDg');

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
