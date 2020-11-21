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
define( 'DB_NAME', 'wpdatabase' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Kesawan@1234' );

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
define( 'AUTH_KEY',         'O1=&vZ> zX:W51_2gf:O<djbFP!r2eZHDAmC^89n{`<_6 w!!]Dc(uDu4vk#<(12' );
define( 'SECURE_AUTH_KEY',  '#7Ff=A,>hm<8n{%*UFFaG73D}Gz=2Z*_@H1e o]3K(cJ/fIms)2k#u;r$G{bD;5Z' );
define( 'LOGGED_IN_KEY',    'D3(s8Gyub*IaNy iP(KCL;2of&GKDj% ?[:%]8t(j9S-x-Wxt_U|6*|*Xy$=Lxaf' );
define( 'NONCE_KEY',        'GqpT ,~Fflp>|N*MP@62Et NWOidXZUpZJi3hdawb,[1yAP 8PbbMV*}7:b^; 4T' );
define( 'AUTH_SALT',        '!lW{1SV/.*.$:`_(4VmN6dY^_yIFppO#f/L5J8g)6RQGA)m!tsrrA*Zw$9@a3p)-' );
define( 'SECURE_AUTH_SALT', 'a^BLkQ6RjupV0b>XFSSIINE|pVg1_,!b&x.lx6l/^}{3zR[/e&CV(;/X7HZZ5lP^' );
define( 'LOGGED_IN_SALT',   '!E4!~[7#ae 0fWi#3ah5[7r4i|d- 4>/V<wYUtb/4S<4XAAwaV?)sK^QU5vT+Tqw' );
define( 'NONCE_SALT',       'OE_1HrPtM`h1H_?/U&jy#L)k#%j5!JHrbFee[VteE10pFk#p]I;I/5!+kt{Q6sQ`' );

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
