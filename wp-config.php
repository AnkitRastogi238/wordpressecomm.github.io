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
define( 'DB_NAME', 'wordpress-ecomm' );

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
define( 'AUTH_KEY',         'L,3(H`sX8]&JX5&?Ga_z81lHc*s] C|{;`ycc01};-33+D5?/|zMYWtFDx28/A6r' );
define( 'SECURE_AUTH_KEY',  '*ELNL<A3D>21Zbv*kg$-oXj6~q]&=<HXB )*d4#pIp0Ksw>n3:YR+,7?Q+(<sjj}' );
define( 'LOGGED_IN_KEY',    '~C!9?eu5$Lkm?TPQ1Lx}1uI$_jhWKBPLN=|a;l7M`<>8#nL}#X%1,&cPr@>/o Fw' );
define( 'NONCE_KEY',        'x{jf[Xq&hXH(e?|YN|YNFm[o@{E:+l7UZ/TT43S`24~+D4.{yToE]ERdfsC<@9{e' );
define( 'AUTH_SALT',        '!G;qbIKP!1Ys!^3JA{>xUe:#S@2%Kw;M_&16u8X6aWf8<DMxdnsa{>?]i<Iql;d1' );
define( 'SECURE_AUTH_SALT', 'aq}%)$FjA?<ZCwoTnv;[`k@$.:HyRERP3X48(xP:Q9HOkbT$o6sxiC>=G2 #j-~]' );
define( 'LOGGED_IN_SALT',   '=_8 8I|]5^.EP&Amg}M?os[,*N0e{q<8g)y1p.3Ui(pkSg`.9fcG!+.$&WA8:9[J' );
define( 'NONCE_SALT',       '_UC}q9FrGtpE_j6 [!6rH8o.wTk;8CM$*cBglz5)d6AOI//k:,)2PDjgY-,0Jkw ' );

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
