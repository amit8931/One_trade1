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
define('DB_NAME', 'one_trade');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '>UmL-5Jz1em-G1LP+19^U<`eeI),Tck|Ep]k?&I(OG[u$2QrHO/;MZle}P2`i,ZK');
define('SECURE_AUTH_KEY',  'hk>/C-jNw(](=nBJyTIg W2X* ]XR7EW7v.FCOucJtm#a,FG2,6avHP{&SJ22>@B');
define('LOGGED_IN_KEY',    'Cpe)mq-zB1NS!y0k0a2P&5YwRhtv/uGH/pMX7o*4g4RS /#zhFRQXf=I<`-cYxoL');
define('NONCE_KEY',        'TL,+2tlmDBcY<D4W+&pKnl{VXXAi$D#B$3x)&^N3%pWX1pA#z|UvE[#04}6Lvqyz');
define('AUTH_SALT',        '.fK%)#;wPFcJV_wPTfbzGOZ|q~+ 6-dU,&22ZK!&b~{>n}F]BQdOw#,bxhxomYxD');
define('SECURE_AUTH_SALT', '*eq^SlLdB=N60Ic(sBA 1IcSoliQ&&$BN3RIi#.]O35K(Lc.fo0 sgIF4m~(YR4_');
define('LOGGED_IN_SALT',   'DJAh@w,UL% e2-TB^A]}f&qE,&7G`e:WC|m~auc[=4GMIe6bUlWX|[&}xCw,ro;;');
define('NONCE_SALT',       '6d%%!a5F:C/b=t9!l&>.54WrK5L|nlNv 1*p6sgo1%f#)%lJVH*- VN6^E#^$6Kw');

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
