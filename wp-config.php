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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'best-e-tutor' );

/** MySQL database username */
define( 'DB_USER', 'best-e-tutor' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ipd19ipd19' );

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
define( 'AUTH_KEY',         'C83ohznr~eLWIyS_H!;|6OHCq7?K 4< 7-Hf>a`P,$q:muv=&M>M3S,m?6i{Xg<9' );
define( 'SECURE_AUTH_KEY',  '#.+D$As,_P9`y2Y#S6RLY/i)7Qq5(a/5a]Zpl/{5]]8%ctjno.*AzX5Zp;/Ep`4I' );
define( 'LOGGED_IN_KEY',    'J=B)0t*<#)[l_6PPcR,M{zhZ 3R*5`[lKwnr,.@-vc*@wCoJ]*wXkf`AZpB}C;Y@' );
define( 'NONCE_KEY',        '}1/:ldY8o:5L`^Z9cYd|Ff?*6j.l+C{{s(EHZ)w[yGw1KgrVk1y0;pHfLI![|zlP' );
define( 'AUTH_SALT',        'fUhrx`)B276dlz;epeE%7Z1[X1l/Ue5h(:%]zUhsF0i87T4&mf~YAMs #QPhfMc{' );
define( 'SECURE_AUTH_SALT', 'fTB=+5Js.Z_dL#tBe2;9>%[3D4:q8wgm2Xbe-^t5V6LH=W6crLd},Wg>C(;,}(Lo' );
define( 'LOGGED_IN_SALT',   '?H+TRmCEVb+PFl^{*HMhjFXH!<aJ;J~CXczL[bz.WofW}eTO:[ui3[L tXn~czkz' );
define( 'NONCE_SALT',       '@JKp~LI$$>l4bw#=(BIA!0(=EWa,Xv3!uTX>%_XsgqDg?O$bWRR}xBKpW$[xuL{!' );

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
