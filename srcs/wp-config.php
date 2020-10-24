<?php

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress_user' );

/** MySQL database password */
define( 'DB_PASSWORD', '123' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '^7^%9^@ku*{^gc.n5v#f4,6.V1+yW]fx`;&ll=H0RU|_0-bzU3qaU}%RcfJX&iS)');
define('SECURE_AUTH_KEY',  'j+@IB|Q5o ]i+*>i3*1vOp)-(_~RiGRO7o-NQ@AZ;b3|9>a|7:=n}G!%^49%P&kU');
define('LOGGED_IN_KEY',    'rEHk`4vOvaE>8l1j_BX+)[myCz3)QO25 O+/=GuH.ZTb=tu4XL5Dy;gR|9DS/^,u');
define('NONCE_KEY',        'c-d82+allw/7G=u+Hj&8YDaM=ign,KjY1 m-8S2/R90,h @={f3jz_JJLl_2M(Gw');
define('AUTH_SALT',        'F}RND|PCvDMdmb&MjF|YO}<T|&-ORS|er/h:X?*8+;ZC!UE}o=K=uk:(~)+CkL}|');
define('SECURE_AUTH_SALT', '8tbm7%-5ql&K!?O#Ox+h,?YlOLK ,f|kg*(-H6,|e!_zH{NXzj*o1E&sL/:3.7~S');
define('LOGGED_IN_SALT',   'x<bCN;^mta|.+y1J |J;> SyD/FN@c+z1NdCaM`k_-+Bb21`wl15-+dBN/u;:i$0');
define('NONCE_SALT',       '~eR<7|9a7jcT|%sMwG5-`iCN|:YePjTvcAZq/ezpB,lT4:^_+^_T)geT9cc/2K]B');

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