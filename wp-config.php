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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sura' );

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
define( 'AUTH_KEY',         'l&C^B:Bm.TEKB8Tuy-.z[RK|V63P=fp5z{gCr*Mp43QkL#Fx$ixyJ6I+ey:*uq~N' );
define( 'SECURE_AUTH_KEY',  'ElAppg3+t8v#AxpXxQuh@zs4A$HFsInVoG!`Zn1a4/~Q O.$w2OwYPGCegT*V(CS' );
define( 'LOGGED_IN_KEY',    '6DS~aXm#uA3gqZ&.AYvGf80AgM)31m:C`AQGM&LjII^UsEivMQ(6 O:{~3wWM&NS' );
define( 'NONCE_KEY',        'F2n5{f,w%{J@o%7%z.dou7K)7Y2DL[8lc%f/&T%]wro:5!tbhILKED*]p%stW4}e' );
define( 'AUTH_SALT',        ']pKBpC=&VVw0`dd4kqZlYcMmtt%Dmze$2$(WmO&3:vw Hl1N,aTdE[+h!_WktOG!' );
define( 'SECURE_AUTH_SALT', 'LF1,[OY5$Z4@wDZD*qHjz!)3/w.+xUN{k)M?3 /6|4YY*pQ!AM#ul.:W,&jb^+$a' );
define( 'LOGGED_IN_SALT',   'G6B?A9xSq^8y(DtKHM@igp)83] -hqKKB{MVo(g7JQf* .*mSeTW3fN ,[W!ECZ%' );
define( 'NONCE_SALT',       'm{_id.#`o4Vly^4+LI@35qRhl!gq@y:)l$e|`>WWlwcv([I,cVtvI}0dbfS$Sbc1' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
