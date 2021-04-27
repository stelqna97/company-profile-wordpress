<?php
/**

define('WP_HOME','https://localhost/wp2');
define('WP_SITEURL','https://localhost/wp2');

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'J@UVm&i3$;}G_))w*RkUkqM9F+YQTdhrh0T6P8LKe=1EUofYR7.mItU5$?9+PNWQ' );
define( 'SECURE_AUTH_KEY',  '~_@X`!?quV7 )o?HOtu)%6rBMzQ*E}?1CqEl@J_V{`usj z~k: VxJDX32JbJ?/Z' );
define( 'LOGGED_IN_KEY',    'yAmE4t/5Q>Zv;FOxxOW~gd)V|L>X`SA$@ugsc51WXrP|A^H!#?f*H%!A&>/0sliu' );
define( 'NONCE_KEY',        ':}bI;gu6kK,#<ngHNGF:~I!Lm8[d2.Sni^Iey/>,@BWseV2:7e%x>j;?HnL$zzII' );
define( 'AUTH_SALT',        '0!E{qM933$3#z@3{oZ-AhQ00;Qv]w]nwAkO0#DlsR9{%|19M QiNOjl}Zjb?t`+d' );
define( 'SECURE_AUTH_SALT', 'pE+Fh0@#J*gsb.I[41+TC/1-NY*dLuCeIP:yVlcMMa08:J]k< I#KXT7>J[/YVst' );
define( 'LOGGED_IN_SALT',   'jZL46/2k0{)h8iGlk)Di6OPdv/]6|Y*H(q$IB,*m-?Et-~3TYWfmWCR{U${Eu}AZ' );
define( 'NONCE_SALT',       ']^.8Aqv}lXwn1IoCZRCYgc_0CB@b!ocx( CorB2~NAb.1D/qxSb+YvY{AbIE3<Ep' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
