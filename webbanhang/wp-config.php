<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'webbanhang_wp' );

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
define( 'AUTH_KEY',         'iK+.04p|Nsq$Zn-SqfBi]I@}V*lWpqdWh[1u/Evks4*HMVb/K`S,e+(^A+J#U[{{' );
define( 'SECURE_AUTH_KEY',  '$KxH[Ht0Jh_8%BZNX_y 4`B|)GZg>6gS^fG<7!~Fj_GjY{s+zY:nj!xPk,XSdCW;' );
define( 'LOGGED_IN_KEY',    '=)pEF4(oL=Y2/CPq6o4xpR?ll.HD??d5cW4 Uj@LNffW7dE}`+!X3=z;hDT>CJPs' );
define( 'NONCE_KEY',        'B?E@,-O5=BkH,kxaqf|N:.qf_ gxZ%Aw3:;7K<!R#+;VIcgzNb7UB(SGgJHo,Mzk' );
define( 'AUTH_SALT',        'F8j}>Op{QqOs`?Bn_D}I`6h/TrA8u=.4wa+zXe_e<Lp|r$8|H@> ML+]$ydrbK8<' );
define( 'SECURE_AUTH_SALT', '%6NR/,GE}w)fDb>[lu#JYNa$dZx[L2Eg!NJ:+Hk$Wf0k?@eCB9xA,1yF&>F?$&yL' );
define( 'LOGGED_IN_SALT',   'mr<V;=qlxLr0m2 .m;,Ti|nWmR ]z+Jw-)%^7h0lPr-AL<BD#Hei4/rWITH.m>Zu' );
define( 'NONCE_SALT',       '=1ZZ~)F;k6.D=(,34Zy7T< Cv7fGEsu*R>Ki$c&/&8|RMi1(c+R&D5D@:&5kBWTO' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
