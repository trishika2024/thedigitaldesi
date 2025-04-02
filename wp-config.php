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
define( 'DB_NAME', 'digitaldesi' );

/** Database username */
define( 'DB_USER', 'ravikaushikk' );

/** Database password */
define( 'DB_PASSWORD', 'ravikaushik@1997#' );

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
define( 'AUTH_KEY',         'W0mORkC}m;=`|2<K[fVFt*i4L4Jd<@Y*f/;)x>(UMn*ltH4g6*sI#>&UBD <p<qk' );
define( 'SECURE_AUTH_KEY',  'C&}^K+d=mH1/ jp_h~~1u=p1]kGU922Z[haaU<i&e33IyMF[CXPANi=McxL.==I%' );
define( 'LOGGED_IN_KEY',    ',<,k9M<`t7@#Ya#Z4! bd}R(]|.EbEe:L}gAK2muCMF`V5N$JpfOGxN#q=,@c+F+' );
define( 'NONCE_KEY',        '6hgRDvGMrNVef,Pz4`I@o?z[]V9 8U,SG]{) $J W%8dv%LS9|kpg$~2,+|xhH{,' );
define( 'AUTH_SALT',        'I [to_OM@6UPzcxiu~C-8s)_%e=]&z&[_gg.:/Jf,T^Q]!}|it&G%fcMcgLjaO3S' );
define( 'SECURE_AUTH_SALT', '?+?Y}vM~3@riI3ebT#?2B,5]hxLN!4`ptNm{ _=/&t4bs~j=;D5#9rLql8kQbh$7' );
define( 'LOGGED_IN_SALT',   'f_epyL,<(|Xa@=w)?xBea4D}B|G!-_!0_9d4+PpXRM6fm6z&^[)yD~u P`mnyg1R' );
define( 'NONCE_SALT',       '3SsolvaN1jJArV2NpA!&z-=uUU-tc2>bePrgr40$N%x/R:rznHx.}M?5e76_$Q3Y' );

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
$table_prefix = 'dd';

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
