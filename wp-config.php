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
define( 'DB_NAME', 'theicthub' );

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
define( 'AUTH_KEY',         '3:Fa.J4nHZnqn56HkJPHVLA[pmSmV3;`u_`E##I{esj?Ayi1f<WBmf,F}:AB*?SN' );
define( 'SECURE_AUTH_KEY',  '|Vi2 dBSdBqKM8{=G(]8@s/6#m{x2aB~Kn/;CNzPt?xRw*p(!s,-$6~E$jBj 1EG' );
define( 'LOGGED_IN_KEY',    '[@m_k4=/`8>fV,x{D3gIX|]ghgV;IDA([h+*PQgX?N:xtdSijX:(@qG-?kj0M{%W' );
define( 'NONCE_KEY',        'astj;XiG%X@SZeWZK;P$N10/WAGuHKmJqaQIus9%r8cJwY#,0~Z)+BDPSHL-6U:q' );
define( 'AUTH_SALT',        '&YH=sNZGP$s*@I%V|]Zs2U*;YriLB^Cq(ybKy}p<!1qKnJ,C;SSDMXJ22ih >%**' );
define( 'SECURE_AUTH_SALT', '/?0q9_7~Da.?_vYTBhJ-.5 BVZDlnn^[23N+hzU>ieZQ[f2#0,&p,U}&`NUVI .n' );
define( 'LOGGED_IN_SALT',   'Sq/}-fe>ik</S=WBpW+*~tw!|Ou=D7z82T*l+ABL9VQzWGuJx)94Eb@taN8KkAuI' );
define( 'NONCE_SALT',       '@H.vi$@M3@19i,QNc/b[LKX)IVNx_U~Y{7$1u8Me/Nd}fF;t3<h`PTib@?DoGTkJ' );

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
