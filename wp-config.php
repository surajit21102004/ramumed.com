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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'angullia' );

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
define( 'AUTH_KEY',         'k:3i=C%fMKkW8L9++;{I[5jn7wW@$5]][}oJp(p<Ly+Sk0*j7]r7<1O2Y]c_x?[E' );
define( 'SECURE_AUTH_KEY',  'SdKu[e_-g8^ca;bub~U^eImAW7hE%:^E|a<pifg4!Jx~w3Hb&CXX0uDQ4-0n@H*j' );
define( 'LOGGED_IN_KEY',    'rEG%WsS<B<<BNr^uCc^Q,M+k~fh(&s`HgR2l?N![d%9|l/X-k5&mzoc)zU8?Y(^9' );
define( 'NONCE_KEY',        'P,e$f:s(>@E4=[iN2kPSe8i>C]ONaS-od_=WuFUR-@/Y^v`9Z)U`km0IX13g3g2p' );
define( 'AUTH_SALT',        '0FrW8}(Ac3P#ty9UI@Iz(%yrU<p1G3kE&n@l7A+uL_kSzmMFOgP8cGNmI|W1ipVN' );
define( 'SECURE_AUTH_SALT', '<5,jv%s8yj>:iDVve+mh*4N/s8Tfi><X[EI}<G~P7%l)]C%_(cT{LGqHh`NM;a|A' );
define( 'LOGGED_IN_SALT',   ';V$vpxntp8&f-paD9tq|NV?_qb]05^NH/[gl*l!` NB/P`n<~n(z}0=+(@0s?b8j' );
define( 'NONCE_SALT',       'V;~>`u^m}@pvO/TGSm*8wYlh;M:x])BeNvPb^fF|Bd3]D|63[LtniV,woQ?34JlD' );

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
