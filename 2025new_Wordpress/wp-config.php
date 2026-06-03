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
define( 'DB_NAME', 'xs386898_funkojisan' );

/** Database username */
define( 'DB_USER', 'xs386898_funk' );

/** Database password */
define( 'DB_PASSWORD', 'guitarmonkey1027' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'YJtiYFiCJvU^5t0~x!Ggd_#L2*]umnI$|n#3F@W&+nx6ch$eM-4puyo>s|A00VJT');
define('SECURE_AUTH_KEY',  'GX(y):AK<Gn{D$tjlcZmuOtSJ3IM`^NieFV<U8~G%GTM@~y**>!{8(^S~>Lzz-Fh');
define('LOGGED_IN_KEY',    '#(| |xa4l/(x`iJ 1##x b-mz|DU`LANn<*o85:/wF-n@9b-Fpz@&e(=pF3iC;y.');
define('NONCE_KEY',        'sUBkK?q]0x)K{k4Z>`S)?=2Kp]38AMJzf:N2b/N#prf$18X!NZ}E5-Pv ]U<`[*I');
define('AUTH_SALT',        '|x_sX<^EKi|,wEh;AeyQYTQ<b>Rp-Jv{Ztf#H)g-u-@)Y%EkR=:+eqiMbBu#s>)6');
define('SECURE_AUTH_SALT', '<*9]OYI E]1:8&vzdP(LWi*>SC5:+`F@5:wVV:[sc&}51;2C~DgUQE-X!X,%I9nj');
define('LOGGED_IN_SALT',   'w^ZCv^$G2~3dG4O{wwk|Bk_N}L,x:j; 7.BWJJY3C=Vn-%,`#Gr+!Z`^TqI!>fxz');
define('NONCE_SALT',       'Y2XOsUG3Q454G/AgwS(..D|;Wol~)R F-pUmXyS!L6zdK@B_]dz|L_GD|<8Ki;$1');

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
$table_prefix = 'wp1_';

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
