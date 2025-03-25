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
define( 'DB_NAME', 'practicas1' );

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
define( 'AUTH_KEY',         'I9/ZRWRi|1DQY.,$/@cdt&MKwBn?r4i:+(:,i;c5>f|8%ekR@,M~<Myop_ZANTDA' );
define( 'SECURE_AUTH_KEY',  ';a<9)TYE|+Jcsly+Xf<pYVq&0nW6d,{8PM#8-LQA0kr]yiVZP0@)O[bh< `;5ECT' );
define( 'LOGGED_IN_KEY',    'lrMQLdyfpV$M7C@A0.aji{J%dCax-[+vg>-[7%835f1#t?9dC_$O<+A(N2~@P~K.' );
define( 'NONCE_KEY',        'zo7$[~>_{+p4WNw$4nUlT7eMG_r|2~oO?A%Z8Lnb;OlS9p%iMYGb8:%Y$k93swc|' );
define( 'AUTH_SALT',        '*b|oSqy=Sy/mTPMG&.U0_5-$Yy,?KWj~rnd`)&v_1pE,UC$7h<r(+AU@[<f~9./F' );
define( 'SECURE_AUTH_SALT', '-CGXrm3fPE>}SYgb|}@&XGm[rosuDKj$C,]j0f;Q`dixVFu5-pt5FU!OY wv>cQL' );
define( 'LOGGED_IN_SALT',   'xgQ.YOJCUZS$j#I?yxx?[GCTmnywIKZ@ A|?+!b8U^90e6wW(RCh^p`ZjQo@7Xe_' );
define( 'NONCE_SALT',       '0I-S<DxGX1cY%0J||1a#nYxQ7{+,G]dd-#v%-6g/MIjuw`A)f7(GHkobGeRO]/1+' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
