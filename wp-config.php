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
define( 'DB_NAME', 'pingui' );

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

define('FS_METHOD', 'direct');

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
define( 'AUTH_KEY',         'F<WXdKR*xqufhH<X6H48{x6@1xj[ nSv~?oPG3,Q8>1v9sO0SK/2,<B8]BiRi=0w' );
define( 'SECURE_AUTH_KEY',  '[zt}jR)rGp$Fb|ClHu1o+v+o?hnVqDzz%94&d<>6pxk2:3urMhj(|i6[;=k-YO|A' );
define( 'LOGGED_IN_KEY',    '%@OptJ2>RUELZs:UN2S,AnSxYpf/hK<vg}%Z^)@I6SQB;wa+}WIq8 %IM V[@{|q' );
define( 'NONCE_KEY',        'nbQOI!!/(.unmt+O>+Hf576^I]?P})PIm[MLbDm3cljzcDvOS^;KuEN?iczRS1!i' );
define( 'AUTH_SALT',        'p@YO]A$zeC:hNjM5v?mvLz;>mtCNbVkO4k~~mc<.fBkGK<Cq58)w5Q_4=Qb?M(Q8' );
define( 'SECURE_AUTH_SALT', '}CG 0y`8og+(}S53:rtZ0J}`#N92ska7S+uMDB,4I^AKya+!eSdE!$*%5,p~)G|d' );
define( 'LOGGED_IN_SALT',   'Z&mT01P$oFzRjjUkTpLXs0^ QR?4iWUXI^^G33T <b#`R-p8<OJqa`:J$Xu&6>ms' );
define( 'NONCE_SALT',       'AR2_Y}J2(ic|J8-Y=&jHC0)YjP9{M`Txgo{,|#oUCPUy!SK19Y;lX~$_x`m+a_L&' );

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
