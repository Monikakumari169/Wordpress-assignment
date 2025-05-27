<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test-assignment' );

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
define( 'AUTH_KEY',         'BJi{3,LXWiMM`XBSq,x^tkkHs>T%Ysmk`.H3E)T#Q@Qtv]7,H$rtE|TAE(=~7&N`' );
define( 'SECURE_AUTH_KEY',  'W:E4X`1ZB)Du}hoN&Gr$r/vhM(w2@rc;6.C J}g|:y9epO[R)8 >;2Kh2-ql2W$S' );
define( 'LOGGED_IN_KEY',    'U9ue;pnWowo+2-#_p2>M3hIGb^ 7e*<VK>/nG0uN>6M_Ul_7+f-p}*rU;.RO~>Sy' );
define( 'NONCE_KEY',        'P/Pg4?kZ/dkbYqV<)@JSARqJLJ6-h$)d,(uZd0o:^+PWu.:Q(D)J+D-+>?L6`OaJ' );
define( 'AUTH_SALT',        '0Y:2Mb(%)v:l}#6@&MQpF0}AQ+7j4ydT]ArT7nk55ouf4m}jT#j)y1KB7c]7Rgn-' );
define( 'SECURE_AUTH_SALT', 'gX~f)d;6E*o-<wR[e=b@kG8~bBC{B6&r:#pwl<H//kK,dp(#Cipm1vX&Wsag97WO' );
define( 'LOGGED_IN_SALT',   '+sPE8(?5K,q=&&>W@O$I 9*o/Mf=0Cy8w=~M0xChJ?kK98?v^)%5*Z2Or|]KQR]O' );
define( 'NONCE_SALT',       'o} |t#(+9G,ci(7W!H4Q~OIK-2A>e8#-<I>;LD6|Y6Ai*$J_z|OC a9rV8YOyq~7' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */
define('FS_METHOD', 'direct');



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
