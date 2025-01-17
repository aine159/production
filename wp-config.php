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
define( 'DB_NAME', 'programmer' );

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
define( 'AUTH_KEY',         '6s3*v~vJr)nSC/o=$%a4po%H37}@|,Ezy1AOXz&H?5x`ip0b;;WMJ5WF3s]^AC`G' );
define( 'SECURE_AUTH_KEY',  '9|rM=11r_+%0$PBecqW!#}]ST;s@$^]M{|qQ#e uOMP:;}~rq)ou^74a#VNSnyA;' );
define( 'LOGGED_IN_KEY',    'K+1`#4??Z6y-J}`FU><k>4r&RICcy-ZO|oN0h9*^XH/$c;t]>mdbZ$|YmIM<9kVU' );
define( 'NONCE_KEY',        'c]oEl$zw92GQv<#|Q1wQsc%:oPt,|,2+4rAFh}AiT kO;]x}/fF,/?Ib7U&$0Inx' );
define( 'AUTH_SALT',        'fk]P/5DmE6ps)YM9keD0.ca4M #3[26(Ls0*R1HM=CmDaq2dBLF/[5Jq#!}lIFM?' );
define( 'SECURE_AUTH_SALT', 'cNeez*+c<0ep nCnR}_hz%6GN[}:5I_nPj(s7=r%ngCF9P5$p>K[j{ufR s}W~;)' );
define( 'LOGGED_IN_SALT',   '1g(`)}K!-9Vi@{xW>M*}>/4l{^@j.gE.pL3:-&TeRxx|(ZnO=eaw=[?vQgNv]$hH' );
define( 'NONCE_SALT',       'z[|/>pF$@``<RmF}:U+MWym?(,rn6Ron:!Xjf.loud 2#3FTS>VK^7mj&9/<{ROa' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
