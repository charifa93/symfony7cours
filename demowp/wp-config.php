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
define( 'DB_NAME', 'demowp' );

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
define( 'AUTH_KEY',         'jO7EGBal[,#eCK}AGC7@`9$xx?Z#%6~.N$,kiKlMPa44k@ss)ANW;fbF4N;a=?Sg' );
define( 'SECURE_AUTH_KEY',  'JP_]O^wNx,,g.W(e~/|d3sY>^zx6~$:JNFaW2PP]l<Ki|=W98!1OOYdG`^6z>?50' );
define( 'LOGGED_IN_KEY',    '_L(0`!}eL{T@$c[^6]_!O)1=@ozc)/]&]hw};tXrFDgZZ[Ojq<J;jR B.=h&XC4q' );
define( 'NONCE_KEY',        '5k1vB~gn!2/JYyeEas<4%G>*1Pp< xJ9>}}V%f=ghOS0:+6X[.B(sH(S7+t<(DUV' );
define( 'AUTH_SALT',        'haEgRz|s.C#0+8@+zJmthGe!le4X>zcEUtT%Khq^Y&1|8wq^2oQwuw59<_:p`_>-' );
define( 'SECURE_AUTH_SALT', 'Q~R(-[4w/Unfeq-TMQRFMAR(`XKta09Ktd$i:a>$tDxf5W4,,^DZ`]h4i=!#q0Vp' );
define( 'LOGGED_IN_SALT',   '(PWv^=9DoI~d<5Rn0>v[X:#wC{RETT-]s6{#scYbSE0iNqx2Vg4@WSrokUh{|[|[' );
define( 'NONCE_SALT',       '?VhznmA9e>5pD?+x%~+K4NN?F<dE-`.jbzWkbeCdx>kyPN^*<;tj2T{_%3a H+mR' );

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
