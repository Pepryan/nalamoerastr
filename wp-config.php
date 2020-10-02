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
define( 'DB_NAME', 'nalamoerastr' );

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
define( 'AUTH_KEY',         'wbU+HkI|Gl[ #^0~bCM8D.f(OxJ&hejBqy(cfqfwWPg1 ,hx5A^Nfi`>k;%EC3O<' );
define( 'SECURE_AUTH_KEY',  'xaMUO u1v0r92KOOr{e^U1i=!/$mL6?F!q@ +zEoKeIA?Yg*RO0AlNy$nNC)$%(W' );
define( 'LOGGED_IN_KEY',    'm~W]I[$UhU#^GDg*ItxpX>AMM[k>;Q3`?=:weabyc&l.8j@[wR|8}U/@@{.`z7k)' );
define( 'NONCE_KEY',        'b={_j;Eu|>C+%}-?8R>vCk}+Ve8z}lB*lpy{3j+B6{OG/I<3o0.YycB{;/=A<ki_' );
define( 'AUTH_SALT',        '!a7:12ZA)T}*49&9$_N-b0i(%(Lry+kDh|SZ*,.!z[1@VI7%yvpql~05zko!D&TW' );
define( 'SECURE_AUTH_SALT', '*pxW*jvU{?o$%?:2g9j$<y}.0gsL,$1,l_N#Ai4IZ!;p8$:K/|vQquRg4S0O=XoL' );
define( 'LOGGED_IN_SALT',   '(j=UluhX{bLU85YMikJ[=cH7c)dqxO0<}QJea&^!|R,?0V8 Os^KsS.QNZp:c^:,' );
define( 'NONCE_SALT',       'bu O`gP6EMe_k~__L)6Xb`/;gc]G~Xuh{M{pTiO;.)%Q%.cIZ1;x_{{a~DS?ID]t' );

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
