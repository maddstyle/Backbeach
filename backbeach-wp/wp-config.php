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
define( 'DB_NAME', 'beach' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '?#!_0LU?ek#6L)m~yz/sR}C4rQc1Y$8taF!vyi5WFqTUGW_*b[q#[MX{w?(yAl2c' );
define( 'SECURE_AUTH_KEY',  '3`/*N|7TWzy(YRoJ)FG}oh!(b%W_NMS)A/m46;(fX,p=Tlt_k`|hFQlDNwX`gFA#' );
define( 'LOGGED_IN_KEY',    'G.T!rTjZnjm9/#FK-E;8DmL:0%6`os.OYw]{eWxaqq]@6-r(<}J1P>)<$r.T-Ax-' );
define( 'NONCE_KEY',        'gxy*50OSo^tz?8g&QS^T`hEDm I&#i(>3}ei#wZ_)g_IPL{N, h`/qoi`Y9)F;BC' );
define( 'AUTH_SALT',        '-_A7|[-4MD:}VtCp/4{a/poOM#xG;:i#Lg(|m*vclMnGWO1N~H)jmGUvA#K{4SmX' );
define( 'SECURE_AUTH_SALT', '@V$;w?ak,<Mi&)$,sa[Eh<jOn[B0JY3zMV;7D[dw9t8-h^Pph:|g~-0-sklr).iz' );
define( 'LOGGED_IN_SALT',   'OE^,~i1|R+kL&^#-X/n*E?`Y=zy4657(NNDu2Gcmh1Ng~>^g73pv)Q#dt#Z)tHPC' );
define( 'NONCE_SALT',       'b@uc2UuW[p~MMw{+lE|1C{eDnYF$.0iYkE*fi73RWf:V3|<.tR=z9XW{1Sd9Iun9' );

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
