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
define( 'DB_NAME', 'herinaflorist' );

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
define( 'AUTH_KEY',         'swlyo#vQ&#TJI:jyV&dt2.Ce<>7Ur_1rK^s7lMD8a%^GW?Z8V>`hC1:}*wvWpKP~' );
define( 'SECURE_AUTH_KEY',  '[OoMpTCc*f0S;&A-GtuUG>ksBw-,E&&J|J u1`t=F6UKy_,`qn4le9,6SzrTA{@-' );
define( 'LOGGED_IN_KEY',    '~@oW6i/<*UmTnN`Vqb-k`g38w)~+4)JMf}-?Y)M$1ac1PhMB1[N@iRi)!^*:|EGa' );
define( 'NONCE_KEY',        '8GyA`Uu0G@.R`st1Sh#uN(MhWv;uVo+>*LG3F$#}82[[[N04-%?KT(H&V !>ye21' );
define( 'AUTH_SALT',        'p2a=&iov<~LR%E.Z:O3Tjh}y/AP%@.9]31rX>J}Gw#`=0u)X!5SJIo:pR=;4+J#!' );
define( 'SECURE_AUTH_SALT', 'V]/X&If*Z8)uNd<]kuXaOrkR;U>(I{:;;t2-8p[$d3943c[NDU%D[,*T<a`d+`%I' );
define( 'LOGGED_IN_SALT',   'l~TL6,L3U9^9Q]!xdIdf9D1^,SJUr-D=L/q15;f)!d4)N(Kut7O&>;kTr*26q)H.' );
define( 'NONCE_SALT',       '^bJkhOr-Vz@A7X#^{K7CU:>a@.8%2e,LYq2u lUanX7 s=b%zp{K9H Fm#Vo:a!e' );

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
