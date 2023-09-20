<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'worldHeineken' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         ':<gJS;H..]`VxUcpqFTuuLcLRHZ;&I>;rB7_A?%GJh~bkQYPLH9Y(Iq_8tI7GwCZ' );
define( 'SECURE_AUTH_KEY',  '2g?NEOo2&(1Td/~JCow$BpAe_f]=q=6h[.y08xCC9 .M^:59-=?P~`NrA&tJ}N+3' );
define( 'LOGGED_IN_KEY',    'mx`&V_7%**>^C#BxOq9:fw;Ftc*~5ALTxXyX_w!?*}aO_nTH,[6E.|=;-5>ist:3' );
define( 'NONCE_KEY',        ';}+?J|n1ZhxUSB%iv9p@>Wa2[2<PZu+VbjyWgw07A?bXEj2$^@lxtLarK}nPps#K' );
define( 'AUTH_SALT',        'Y^nR<Tm/t|.La98&KF>YNe4h-=@NsJ}~N(HtSQyB$#L4`SwjZz<> zb4SUBY=/E4' );
define( 'SECURE_AUTH_SALT', '6.5N-9?qZxKfwDLq;)khr~0y`:ArqI]I/)^_0~{d_Fy7eAVgA&|UgZRu]x42c 0w' );
define( 'LOGGED_IN_SALT',   'ppet2I}U_f$m8PO.AYVXWE}JROM<(SV9Du]|b}SHf6,V_$]^p8CoE[ ~]XlvbO4f' );
define( 'NONCE_SALT',       'q:x~YQDXS5G>s];_fnKkW0CI%X}dF423x{.~+<v&kt/.yCxy*5AT?)3<X?9>q gN' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
