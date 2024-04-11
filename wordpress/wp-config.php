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
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         'o,k%P8!h|lGyl`94$eXjfL&^g$98g^=k;`@rrFq UKWvVLamW]YnwcWrG7;wU?uy' );
define( 'SECURE_AUTH_KEY',  'NcD1c&+R,^p<}|X;+D?1O++|ntR)ZD5JNN,RXF,;ohYPz;W()$LS)qmU;F%>Au!O' );
define( 'LOGGED_IN_KEY',    ':r{uA&u2z[`y<4OVC@nSmJ*7!Hp~3@o]yKM47>x~>!$I>4WKH%6:val@8R[~-f(W' );
define( 'NONCE_KEY',        'P<{}$*/X7{YcoXMDQt,M=Z?^/)H!y`0qN+26Yo*yYzTW$?btiO4R2^38gyW8h7SC' );
define( 'AUTH_SALT',        't&G-A4I0IZhmRt4O3D)qJ)>Pcni_@[s-Q^HpNs},Z^tI F(QiB%~K@jP}&}<i)Bn' );
define( 'SECURE_AUTH_SALT', 'y0=H}[R|:(#ck?Lt6m7TEkRUJp]sAU2F|%2$ffM]9>px9X~l)o3-{:-MM nMn0f&' );
define( 'LOGGED_IN_SALT',   '!w $H_ t:jk^nv:HhRg-/<9.Wo+6-}*3?;0=jI-|,9ffx%}[4~{yfk3s4bh=-2B}' );
define( 'NONCE_SALT',       ' A5}_}?^&I4%p%.]_Snu/c(!g?$rJ} <g8$:>#mm:SqLr9,80T45IyY*H0!_nWh.' );

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
