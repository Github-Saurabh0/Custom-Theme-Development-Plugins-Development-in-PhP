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
define( 'DB_NAME', 'firstapp' );

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
define( 'AUTH_KEY',         'iTFrk^_(vQE*D(:2>65A8bqoqGALQ>>.i-?9#g~sQH}9&D-V-b(.5LZw;:p3K(#)' );
define( 'SECURE_AUTH_KEY',  '$v}<rh>XFMP*FtB|~/Eb_eK(h 0/k9h[;}zA^p S+eTz2iM=5}Eu@QP0&i#Mk^Kk' );
define( 'LOGGED_IN_KEY',    'LMF{F{.RFQb,`;dt}VsszMPxqPnvL$>~CrS(wSeao3khPilJ$y#bD|6.elP==2u`' );
define( 'NONCE_KEY',        '2]fQ%Za):liJiP^qZ)0a8a(c}P;EWWc2]#-O*I;K@CZs@M%5WmPXJ]fj/5R6Hxpm' );
define( 'AUTH_SALT',        'kWbe)LWz[-JdQ`%K#E33[/iDSt47zVcoFExi2UW!prNL|J-! m>a;e27xr+[K+n*' );
define( 'SECURE_AUTH_SALT', '3;rE:Zi:sX5Wo@1L>S.!_zY%h0S qwSg$&+T<JTVwY(V7`]]l3AmG~Z0yE8%Gks@' );
define( 'LOGGED_IN_SALT',   'DNO&/]wCnPz%tE<y<R:f7p|,ccy_[(W@yd]jpOaY/=hkV~SRce*/y_/YNF2$npvJ' );
define( 'NONCE_SALT',       'bS|nP#>mIA7_g#{8!%hSWSv:IU0TP__>sK}dfd 9*fEP@Bhb:em*f-KBb]tG~QbA' );

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
