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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'WP1' );

/** Database username */
define( 'DB_USER', 'wpu' );

/** Database password */
define( 'DB_PASSWORD', 'tpmv' );

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
define( 'AUTH_KEY',         'F3RWHm743%)!Dtt$l;pAAD0$L.g8YTRvy.hr.up=i;Z:V.bEW{}l][9DT,*gqX?S' );
define( 'SECURE_AUTH_KEY',  '+cIybAsrH&.ErhrVt?m&e9NyZ!JQYj<OEv8K2l@--i+mc2v/]$O2-neM&T`HF.jK' );
define( 'LOGGED_IN_KEY',    '(`1:~yv4~miS@JSpFaTuUYZ4P 5sa{$*<v)P(#Wa$36X.S|8Y*xNJWeQ7Mi+15[{' );
define( 'NONCE_KEY',        'vR]t@4,1~DJ`p1u7DAp|Z}l[Oc*mHJsVnryfa$~.;`su^-GGHHir -E)-|:sjgdk' );
define( 'AUTH_SALT',        'P>;(WxCR<+YG#s%;Ln+0N5D<5Ck$6{,S5ycf06F|%mjp8OJq0v8U}>Z]]T!rH`T*' );
define( 'SECURE_AUTH_SALT', 'Tt=aq&H[bD,3%-tWU`[m2T3EjkM 9=<=5AsDhB5Z<svw7&?-f;!hVV11]wa7fX^H' );
define( 'LOGGED_IN_SALT',   '8yI#$5X9<4sTAgeo)Kj FE7d24>h0}`llYInAH:L;7%z0;L%SeVvk=B@@]4EmQ;]' );
define( 'NONCE_SALT',       '95f=eO.8<V91:v<6$&//HH!kDlTB,9@M$>TeI6(*ANmle,gyc]ihs^<To/@Lbhqe' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
