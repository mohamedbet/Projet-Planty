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
define( 'DB_NAME', 'P6Planty' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'J0@C~gDCo[Ct} s`pk%um}KmECAS;4nV-xFxzbccC-g~BLiX9T;C^RLo5>k6)*x!' );
define( 'SECURE_AUTH_KEY',  ')CjZ}89m4m(N^kYncZnE_%+0>d(L?IAs7yn]#z`vv+{fe(mJc:fS&W@W_|J^bz8h' );
define( 'LOGGED_IN_KEY',    '3YzT|kk~`2;K5&,Ee#ySiG%a9<A</o^Vlq~;6Kv*8}CZh}Ke0-wF2rn{{jVj][4K' );
define( 'NONCE_KEY',        'OGiTnHGGVlFd$@Cj&Qw !h+hbdH}|k;85Q(CDj9K}KLha%|.%RL{z]~y/|sVCyX+' );
define( 'AUTH_SALT',        'DX@xVu8s<G4#x<js11)&MF{pSDDXVD,R_uK@Iz(&!`Ms0`E6RL1Bvn:`94Z~xn,;' );
define( 'SECURE_AUTH_SALT', 'K]X3d=j:PlaY^Iv7z((0y44u`+M/4tKJ](6_X&[<(+cVO9<+CVi,D=FB3n/c[0ym' );
define( 'LOGGED_IN_SALT',   'BRyjHzYk+Y].X91>3$3g-W2TkALvXD5HC+]|~|8M(Fk8&hK)HG;z.&^0~$B:rwQi' );
define( 'NONCE_SALT',       'ng1S+v<}.HsZ(U{.6w%782oY|6L`aLKSo(<fqq3j88*Wj0V#5`DEo^x~B`CSuzw3' );

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

@ini_set( 'upload_max_filesize' , '128M' );
@ini_set( 'post_max_size', '128M');
@ini_set( 'memory_limit', '256M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );
