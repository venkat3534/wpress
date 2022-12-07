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
define( 'DB_NAME', 'venkatdb' );

/** Database username */
define( 'DB_USER', 'venkat' );

/** Database password */
define( 'DB_PASSWORD', 'Gvr@12345' );

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
define( 'AUTH_KEY',         'mOF:fl[Z#G<3A3Oq8wA<f-$rmB6f!F96n:.RkvhzsCHfaxMizJ|?h%gX,{;J)tJk' );
define( 'SECURE_AUTH_KEY',  'u-/+[AEY7iL r3eXT>f*haS7TROGp&k(($PM kKI683cQvR|-/Hp@ZiHmIz$f=@c' );
define( 'LOGGED_IN_KEY',    'bD;:^_]!e4pi$E>w|FiNoBcl>);/~4]ngTM*4Is:R-#LlA{SqjyOIDlbE#BI:|_a' );
define( 'NONCE_KEY',        '|ARfJY- j<x4J2h!0Kt{Od?Cv-Vs:>`McjAA!{r4x3GXeAs)S]$*?76S![SFKoM>' );
define( 'AUTH_SALT',        'a$9>((-H D%(p4Nnd-x<@IJ#ei-hJ41W;MDk_wT7n:DBEB1iQ{YDa;h3I_saE:V=' );
define( 'SECURE_AUTH_SALT', '/>E}:(`V~YJ[^N:y3_xW~O&O$6~.yT$!}pY`G;|#Vz;FNu2o}4JDcoIhl:WJr]G-' );
define( 'LOGGED_IN_SALT',   'Mj:gRQP|F13^:C&cYY>i(as#bj1?XEnV;9.!AZk/?0{(1ncfIvyuJ>T+b!cms{2q' );
define( 'NONCE_SALT',       'FA{{,NSzV2IEWA<ueShb^`n`SVfaSSF_F@GHg5Rf$/k$H.4`r%ZajDV8]j^0gRyW' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp';

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
