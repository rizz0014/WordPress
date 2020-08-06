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
define( 'DB_NAME', 'wordpress_inlearning' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'S5`C,:d(]6n9%@]w<PW$bXYC;,gb4h,!lcjXovtf_LKu7=0)@nK#_^ 7-!yV8)2$' );
define( 'SECURE_AUTH_KEY',  '6WbBN;Kt$16lW<9PYYksxp5MU(*1- x9}y7{L vWB|@=()mNFn:{;e5q_ UXVYL9' );
define( 'LOGGED_IN_KEY',    '|y@wL6G`kUM^S^ ;6agDscj^x{<04@UO^L1q&JCb]wN4G9*-6eQ-TSx)B`lzH(nP' );
define( 'NONCE_KEY',        'm*&lrte0rkzV&Lz)ScD`#.1jj=Mv7z:9BnO<*#;MvS0Z*-Su}9{ vJ9g3kr&W~<3' );
define( 'AUTH_SALT',        'C5Qmjce?K5kTz% Lw%v)5fX2zSg#r+I&;H(3SDds<VM[[jpOKei[LK?/a ``<&==' );
define( 'SECURE_AUTH_SALT', '67f_NjN#JYuGm#%F}yAXN.fc`gB7|r=4J^-4:4$@4q:8Gf:hNVZ5>#Gm*_B/RJFI' );
define( 'LOGGED_IN_SALT',   '#[qU.amvW:?`r$ yX|x?.ZR}25QB5i(bi215vUmkrM%|^SfHMR[aX4535ov^UMk>' );
define( 'NONCE_SALT',       '(sjwBu{Ty>fv1|`hBmJ$L@]]S{E=^/ZE=_fH[>jtWjh8&vLN#A$*Zn7Ig3MUi#N$' );

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
