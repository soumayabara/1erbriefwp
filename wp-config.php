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
define( 'DB_NAME', '1erwordpress' );

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
define( 'AUTH_KEY',         'D,4w2D4s~+2ab*YU*jfL#UcS$<3dHEB.t>C2%Q|`JU&*E}v7qAb~F6|SAa,NXmYq' );
define( 'SECURE_AUTH_KEY',  '??T@Bog^EPqnH=Aos@lpk*ny*_6u@g1_%_<)$X$L+YARn4x9d)Qt.^g?<egHaq#+' );
define( 'LOGGED_IN_KEY',    '/oa 9MR/;HnMfjSDhPea_&`}`<PP:J80nFn2fR+PL1|W_Q8[N]`wy7vECtrGsz>c' );
define( 'NONCE_KEY',        'nzW]m,;cY8I2:V?lA6I@BBkl*23t91[3M;kRh@0hs<zTMz~=!&=rT3<R{1xL@t*s' );
define( 'AUTH_SALT',        'D!e{Cf4|q(bvj@R^u5zX@a8f/w/k$vR]6n{G=HSInWzhu%9bI-=mfMA*?rVJ2uAe' );
define( 'SECURE_AUTH_SALT', 'Ztj4QSG ?K^cTUfo#fNW-9,=;*dVih0-dP*nb-}fH;IX%L*{t `#:Z5B_#DJ3fa.' );
define( 'LOGGED_IN_SALT',   'dKkeY^!3|>o:k=fDbo*h(H6<v1Zt-iEI22$U7Ce!D Mo+pUaLqPmpym}7G3~pI~P' );
define( 'NONCE_SALT',       'wJM354stQ3%9r2n,)`Y+&W^vR$mS5U<<Nf`7shZ]Je9{!n3hI_`WQK~85$Ta|6DS' );

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
