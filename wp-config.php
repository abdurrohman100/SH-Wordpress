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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'S}^z]#TtS-F&?1%T=dlE8CYF9F?;krzS/wysd,j.#)}Lni7Sw51<2]0UKbwc:XRw' );
define( 'SECURE_AUTH_KEY',  '~<@9UVNO$H6(&y7 0N?DS<<uL)^&$meW9)!+X9+08|/v{.yRMD-]vB&`HTannv&h' );
define( 'LOGGED_IN_KEY',    'hn~$j:m<#a,rO$V]7fSUp`bZ)wRy+Nl$8_83RH*QW:W,V3nD$%@`JDXi2<#?QE_a' );
define( 'NONCE_KEY',        'e|`_HCf?_FJz,~||`T-RU_++W^b-%rd?>T*wmhK.&:E%X@_Ja{7P:y5I%Sg7} 3p' );
define( 'AUTH_SALT',        'ws@AY&tc&Ul7Z`D#G7*s$Q;Uz`$V|BJ+y0fI(KOz_w{,.Oz<n<]i$rqBsO%+2lu+' );
define( 'SECURE_AUTH_SALT', 'vJv_&gF$2hb(oS@*a`4l*2})v8}#jetXu-]~m$J+}=%r</+&F5=T>eO-J[@whH&t' );
define( 'LOGGED_IN_SALT',   'QfdQ{%^vF@sRN+g`|]T&ualtg-UoL=D,l{e7UGk>HZS%ynAfx/6i.!qxyY% ;T|w' );
define( 'NONCE_SALT',       ';2P|.o~A8`X-@}0.!;7&n(XJqqUijwwI4_V=^n/O_A?MYsG,0C]q&6PBk({+z(DW' );

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
