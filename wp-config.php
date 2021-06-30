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
define( 'DB_NAME', 'word2' );

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
define( 'AUTH_KEY',         'M{vV^z{g5=^%=KWNhAi@NT^GL*,9dUK]wOP$^=r#Q: ?g-gBevMbdR9ZtR95l~0a' );
define( 'SECURE_AUTH_KEY',  '3*KT}?co:^3cw~P{W]>TW-@1vsgzLyxx|MrhX@.dpUFphh&}|l:!n5J&dL;*[0D`' );
define( 'LOGGED_IN_KEY',    '5s-(HKbkHyl.DfFbpTa4SLR]WU@]~P<H+MLNm)Z1]En1erRD.`>ZfEQ4jdk`aeUk' );
define( 'NONCE_KEY',        'kge.8~O^s5O%~!&GgkqHgO{Sr,{q1+sa!($(hHDXh{$dOjLR7Pd[mk<8xZyLq8zF' );
define( 'AUTH_SALT',        '6A}/+Dj[5!{s ]5E6E<4G-`}jN9-bhDL,E{-g5cQlmOBi&bi?`>uywoA1qngJP)W' );
define( 'SECURE_AUTH_SALT', 'C%-Z]CCe@C2U&;;Af|mVt![:fTbhXN{sb2@@*)~al`(/m}^<5*kY:rK9>K,2@ Z8' );
define( 'LOGGED_IN_SALT',   '?J(AlH/-Qur/QMTTh[P}la%uDKbt4AVE=#xIRMi%o1O}0v.4_D4l]gvV&=QN0hyh' );
define( 'NONCE_SALT',       '|/2bE]&9jajo%Iy5Io3>?jTWgH7YCfTJ# M%DTEeuU0nLi<KW^f?;%~!5B1O@9Ye' );

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
