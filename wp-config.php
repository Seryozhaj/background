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
define( 'DB_NAME', 'background' );

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
define( 'AUTH_KEY',         'FDY0Fu7L[CWDfxL3CfH*?kmxli]s5ckccCqLw9k5Y|4$G:V1%%H9v>@GH`H{,D+5' );
define( 'SECURE_AUTH_KEY',  'zm1*,`vbGruzMgpX@g:l;b%;f(LG>91u7Y-(;wb(S,k E|Lm;:1WQnW!D}OulPw)' );
define( 'LOGGED_IN_KEY',    ':8 `7?fjC[nukY7#ivCfZ:C*W 95`x;+1~hI,,M%M~(css.CUK fU9P89wB<G{KX' );
define( 'NONCE_KEY',        '<.Pr+py`R[ev^.[!c4;nO3hy9xa-UkKE+Z4_t|pTyPfY@Uby!?verP1W?PR9<),!' );
define( 'AUTH_SALT',        '2dSQ,fx<v,&61]OmWSUKI*oD}kw6R06CaJd<94HweWdDoC-CEaA_F(<(fdd}|um]' );
define( 'SECURE_AUTH_SALT', 'eJJr)noY}/Z,RDFYi]t/0K5 CHU5~Z1rQ]Mjhh^Q[OQ S^PhsG-fa5oTGz|lQ#FM' );
define( 'LOGGED_IN_SALT',   '$W9{/x.~8#*=tcpH7AZcD[BEEbB< zx4A2;d$qiT3gCol}ktq;RJDLpMExGi~NoF' );
define( 'NONCE_SALT',       'L%GqT.{&/2zOjE`>B7) Oem2zgv{Oqlyk$^-Iw!>g2b@IZyqSqO9>R1F@xNa7eE?' );

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
