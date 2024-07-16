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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '_@C689[,04!.j1uDSMco59h$+b.#h#b|{nBgdJ=9NuGYX3m1Sw&TaPA6+RG(O*1j' );
define( 'SECURE_AUTH_KEY',  'G{.n=xVDT|AaY] p]Y)<tZ-LS8glIfhq j-bV`!T;Gn;Rb@#_2sdsV)k`@$it//1' );
define( 'LOGGED_IN_KEY',    'm=yr`VOTZ~L5zmcK;NJ-)(hJX #FfdD8iMhaC0.TIeBkT8X(I5$i<mZD_d9MZ+IM' );
define( 'NONCE_KEY',        '#b,@,{i#LlIX3i2qSUAXV;^}0xeJcD:}Dc`STiAE%_#$PJonWA_XS#Uzif48Z|I,' );
define( 'AUTH_SALT',        '6+U1^%!W7B]&t@&4Tki qHQC/LvxsxXYow@;a|eyf`hR/=Dqu2rdeI7u|HHE3{e)' );
define( 'SECURE_AUTH_SALT', 'g4<SK$~D|3^uv/+?M@(HT(eU9juemT|C!nKr}E(V*Tlv=mY<N[CuaZ:i8gOT&gcj' );
define( 'LOGGED_IN_SALT',   'VS/{^7#&_.AsTb+@{-,:lvriaH1E)|qIt[]]~<zm *o-;|VPuZRKaKG_O*@h;]h9' );
define( 'NONCE_SALT',       'Xc/n53y$LA*P[l=5T[i9WzE/@k#t87?z:a9hW8hc50`<FnLD4u>/<k{gd+;xusKV' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
