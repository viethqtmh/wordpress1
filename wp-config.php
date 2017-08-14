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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wpdb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '100101051');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'cI-)j6gp_NRu<zt4~1T!-^<[HA|B)KzkA)?dU9cu_Ul{Bwv~|x5QP8}d]t`eK}cC');
define('SECURE_AUTH_KEY',  ')UEEH^<QUX`O;-8s4oSkD;Eyhoh,nyrHr;WJjwSS{Eb-0v$P<h? 4xf3xg7OrON@');
define('LOGGED_IN_KEY',    '7lZ]>1<33G<E}5&37tAM;1UGzPa?.~;}uF3~aaT1,c`M>UZ-(tXYTdTqy)R;Oc#G');
define('NONCE_KEY',        'q=$ e1?`@W6jgPrJM|n77LSg8/s[E*kbbk86y8*1g$+gTa)=GF*0Eh+]a OK)@aM');
define('AUTH_SALT',        ':@&epz.FU:>nVD<d~61BGwSnZL6sLy]8/-f$?IG9xg)$r!haiz7Wbe6PoOUdmx<P');
define('SECURE_AUTH_SALT', 'Hn:JxY]e3.|AW/znF--D}Fs4-=D=DYgae.1o*Ti0<<N-%]L;~m2!{!LTmvIx6Z?)');
define('LOGGED_IN_SALT',   '.e*0xk9GG{NK9hoh{</-wn7I`l:T-?nX$HWbC|Wj:kmYzgy[l,AQbx&B,HR67_b@');
define('NONCE_SALT',       'm2jYKJ#C6GY!mdWsVukpAE(U.=aYQ(oTe: <I%e|;3&n}v_B&Bma{G}Oo [8V~YX');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
