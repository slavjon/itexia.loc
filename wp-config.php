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
define( 'DB_NAME', 'itexia_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '`5WQN]#O`M d/dgx8P;,h!Lk78(Pod_n~8i&+IP(RW `>fx*N@{}_[sE,gjv/1s.' );
define( 'SECURE_AUTH_KEY',  'oXrb7WbTaL%L}[SeXk8LHkQ]ICS|P_y?6,P~Q@9>?]FD0&B}UHDJ(82S99MQ1.#*' );
define( 'LOGGED_IN_KEY',    'uW8Q`EP)N{})lwX$@w&ud24|_f[wjUO*nq#AhdXP^O{XMD}p5`d2w57C%~|`_<2 ' );
define( 'NONCE_KEY',        ':_4Krfa;3e]*wm@pC{X{$[op)Fb[|<Wx/Oo276<$bViW`;Pri@MzOja:wkj# vE|' );
define( 'AUTH_SALT',        '$f:H1r^tN*]8IPIdPf{I>1NyZ ;6IT?zha6i$d<wK}qa-f@~mCD1i:BN-zF112nd' );
define( 'SECURE_AUTH_SALT', '_ /?dq9+obmFA` Wl|).+kZ9x`|?HW/D9_alC]p!nh~QU=%/Q`%?$m_JKyG[YHcQ' );
define( 'LOGGED_IN_SALT',   'Gbe%L(/;7Fa:<:Ce1c`WKJuc$6j!wr=>]itP<3:R9DbJh=r&8PcfPRb]_RXvON%f' );
define( 'NONCE_SALT',       'j:+=uV_bzj l?NR~[2C/Icoyn<,Zk]=K8g6[nkAYZ1 L`X7k`{q(|3g:vp<&Ietj' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'itx_';

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
