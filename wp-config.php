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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', '14df1d3686f7ab9f39f5d23f7069527d159d2f75cf5a0c07' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         '*}jMU.?ypOv,utz$!si3W>Lz]weyb[_^7B}z6G|KjXK~AWuGhRR+J$DRi<>Cd@8=' );
define( 'SECURE_AUTH_KEY',  '!Tb`;Er3?MW2l=m65;>.cyaGLa_@*`77~K@+F6]D/ObH$4E=j6q8AWOwoB_jK=am' );
define( 'LOGGED_IN_KEY',    'kel[AH#WH#N_K.;,9Yl@p+CD-~b)G>-lqGR_3:*NbtbFPj)e6j`8hD]]yl:*w^+%' );
define( 'NONCE_KEY',        ':5H{J<GGX7[niOG@cI&bjeP&H0yf(b-TqX5?)9jS/_V2l&tmv77U;R [(*Hpd.T-' );
define( 'AUTH_SALT',        'iXOzY7E(w[jK#,O=K PJ@Me}H<c6ryIP XP1BnYSt:;8$JTQQBFAPB>iIxy-a^_`' );
define( 'SECURE_AUTH_SALT', 'K8cSrG$C #DZGFT?])_anxxr|:3jGG7 LB^VP+qL]r*i]3:Ox`a!TsJihkv?FLdS' );
define( 'LOGGED_IN_SALT',   '&>(xx#QrD[)c/)uXhia+T( +|+!:Vl2=BBJu~%fW}~:Gc3vkAKb2v359{Jcj(SV ' );
define( 'NONCE_SALT',       '>TU4u@Za1K(iOdaC!|dg8*o0B+xNT*hG]-(d@B5x{:TZj~<~TdM<p]B/Ajx&HyTb' );

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
