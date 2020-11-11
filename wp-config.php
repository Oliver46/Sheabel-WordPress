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
define( 'DB_NAME', 'sheabel' );

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
define( 'AUTH_KEY',         ' j.=~_eSV/v`uqpHhH/BAz6<5^/ IH[eE9!Rjom`Yt,_Zc#1b!-bBmYgX;>&W|P?' );
define( 'SECURE_AUTH_KEY',  'N|GnaVw3%v45 ]%a1u<re< _,gv/G:|f|@BPnhaCP`J?l&7N{bOpl#gb]81Aw{#!' );
define( 'LOGGED_IN_KEY',    ']=zc73d9)-iIF$`&2>hKST|fnD>lJbS!`A5F {Qb#YT1L_la43+uG}6Wh0c}#$J.' );
define( 'NONCE_KEY',        'NAVz/ w<sGdaBR?}]X&HGA7]#_^yD3Lpda=084X#g8oqXdp:+?V0lqy!;*vUp(~~' );
define( 'AUTH_SALT',        '}?0uc_#FS13zy$C^}pOg7C_J6D<v&,3v?tz>aZmfC@}B h%?sl!_.0<d(UXWW78T' );
define( 'SECURE_AUTH_SALT', '~3`=vo$2ptgA##m;~os8P?N`@%L8t5)g$p9,omWXVdp}S+XN{>za@4vb<=bC8}|`' );
define( 'LOGGED_IN_SALT',   '7XjWq&WXeD4hHxG038n>K{[/[vqu2(W@[?7j+;iEKWU_0p!@,F(>%$a?9B*/4e_6' );
define( 'NONCE_SALT',       'ipOkv CHQUAS3Ra#6l@bGvBQn%t{=h19VYoHILpOlR3zWd:ovxkaNJVH`uVf1[IP' );

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
