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
define( 'DB_NAME', 'alura' );

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
define( 'AUTH_KEY',         '7Oo#lS1*sLI0jocUMv16#ULcpius%VnqQN?)l4{:%oaDmsX<WKZgo}Inv=eI~2RO' );
define( 'SECURE_AUTH_KEY',  'Vt!%r4_Bx[@S8XM!=W9e!T`}y?#[NL#7lmM5!gTPP;R#>[9ydYuQ7G=Ysg6LU5*Q' );
define( 'LOGGED_IN_KEY',    '-caZ#g:f-&Px(3/0VG{> u|$B4]8Q-})ZZ7iE>c9N@JH#~q%(`inTl}#<b2? TSa' );
define( 'NONCE_KEY',        '0=@zT:k.vv/~*LRy&m1fe6nUaV:~U?gV^#CZm}Z&K ov.OA7|rF,fhCRy`~dn,*L' );
define( 'AUTH_SALT',        'c)^iL=e,+l7!Xok#@+bn4V)oqq,te+s>niMW^<*l>i=+4Xg9`DIY_}-4j9I8/iO}' );
define( 'SECURE_AUTH_SALT', '5T/bC;EZJRF9PcaD(&,%mm15`$D,7#vt${Bd(q1?-y+Z[|T .x?4%3F3c2LLx9-(' );
define( 'LOGGED_IN_SALT',   'e^sX0;:HGm0f2yndw18A!(|4H7,A`=CN7z+X]dy$xA#35:*d8OcRh2!].r>N-PY.' );
define( 'NONCE_SALT',       'AZ40,uE[iW6Bw7.OGvD9$<o9/?_9?xR2$LPB@E6kLD!cJA=9l2[[jn-o7f(lHP@W' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
