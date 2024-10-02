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
define( 'DB_NAME', 'university' );

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
define( 'AUTH_KEY',         '!%e>=r2JQZKLTxoH}D;4{4Sw[6&,9P0`U5Y*MLc $%7u4c8KFHTcX]Q>rXyhUZ1*' );
define( 'SECURE_AUTH_KEY',  '[hlwwjnG,g,0v43n]G@^3,><ot?fmtDGZPj=DQGF/o|O-PSbS|{-Y*1vCiycV9rN' );
define( 'LOGGED_IN_KEY',    'iKcj%F-*gFU5C<QDg_GIP%^:1eS1FSFHF/ol+/I15Nif:FYs>/^C=PYlEI2`Lxq2' );
define( 'NONCE_KEY',        '8)ar#KU1b{*|P.[kC^ ;KME|/.~/GPB_-2p/?g/zoeV?7;upD8^?mSf%3oO3br^<' );
define( 'AUTH_SALT',        'wb<1TO)Jzs}ZB%F{JXVo>a^83w|$HVJ=*2Vo!-i|@j#?bSUfZr*4LLYHG|Mw#nZ ' );
define( 'SECURE_AUTH_SALT', '=l6mW`|hW:&M_`{ivA*QPm@{8+5s68.qnJY.N+;4<RN>SH;e#=;7}$f;oP&,P@v{' );
define( 'LOGGED_IN_SALT',   'Z#zSG8+[^`<4dL8rR#ey+&Y4j<[$+xWM[O<RgC`]~i>mG|T1LsBk;oC{fu*B+E%u' );
define( 'NONCE_SALT',       '5XzNUMA|j$swJR{vlgreQed#UKUjf*Hpc-,/T~a1jzpgS2Bq]^SY.)-YM3gr;xfK' );

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
