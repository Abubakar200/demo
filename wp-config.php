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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'demo_db' );

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
define( 'AUTH_KEY',         'AR|NBud<8(VP2!|4TOM)r&f0!ouGGRONb9E/px^Iw8KbZ0Awn(mBM-$f5Yw:ZLDi' );
define( 'SECURE_AUTH_KEY',  '7x^-)7PTtE;,#(s9!:L;GBv<>}>jld0#k=rc ~u205J*1&M{#t]q?aZy`G~)v}LS' );
define( 'LOGGED_IN_KEY',    'Tt@Cim<(N1.>0r2VI{GyS%+hH%nD5.FZ>2xWVWMZp<7-k+AhweP00/G4}+SIc8yy' );
define( 'NONCE_KEY',        '4gm0- fjh(9vq.vWPgvdOx:F-^xQd@KtlfM0bUpCddZ!bBn&y+]OUQG.e`aZNqAW' );
define( 'AUTH_SALT',        '-}[%6{PQCK1b^_lkkie:QN{ZW]/;tPuD~+SJ)B@@xSYO!f@v,1Drghm3XEftBbH9' );
define( 'SECURE_AUTH_SALT', '}_jy7!37!e$6zLC69`[5`WD=#2=F^EyW=^~J,>I2>%%UV{qg1-%%RI *mgll<01<' );
define( 'LOGGED_IN_SALT',   'PSGf]AMX9[Yhe:_`f[*C2or`7 F=)KFY%~!Iyp1ys3f&^D<@ru[e^$pK3[)i7G~|' );
define( 'NONCE_SALT',       '[.#dzTbdK{=bfD-iUYEazu~JJ 0dF.^Ug2gh.4m( rAUxRV/`]AZ2,?hI.Cx,j{L' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
