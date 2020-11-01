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
define('DB_NAME', 'db752267030');

/** MySQL database username */
define('DB_USER', 'dbo752267030');

/** MySQL database password */
define('DB_PASSWORD', 'dMADsDESIGN@34');

/** MySQL hostname */
define('DB_HOST', 'db752267030.db.1and1.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');



// hardcoding site address!!!!!!

define('WP_HOME','http://dmadsdesign.com');
define('WP_SITEURL','http://dmadsdesign.com');



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'y~F!?#cr}=_384L&XfD+1RVKt@?OB:%13(z|x3u6@-*sGyiIWT=so+xI6f0~A]!;');
define('SECURE_AUTH_KEY',  'S!~y:oi$`-0Lg[n!uxyha-rU%PRc850G<I+O@6L)G3|H*?*L#d87xHQ yIdsnxP1');
define('LOGGED_IN_KEY',    'gfxq?;WLP$+1 Zl+}K(W(VPX+Sw^t0.RY)^%>6y)UlWY6Jty:*H|gH2(BR0&9K3<');
define('NONCE_KEY',        '?.Ge/ *ngBjJ@I3If`!6O/d-X0`0~),l;I4MPX[]t:O:VOWUE9#~]8 Q5|]t9QWx');
define('AUTH_SALT',        'Yw#SUXMkJZTZl=NY-+nYbB}F5Mj4[MK)&YA0$Nkr}+&SD(&HJR%E)V0d[y&%:dU-');
define('SECURE_AUTH_SALT', '4J|CCtGdN}KlkRS_a@tE.N+z|Eo&S.U :d23})05~Fu[&q9s^TOz#aOv-*Mj%7V6');
define('LOGGED_IN_SALT',   'ZM,(@Vl*Z84V2*9e.]t}XlfgqocL^.}`%xM$N&]ZWM`^OjjKI]`^*25_e~c1=9s}');
define('NONCE_SALT',       '.WJwcPh+;aFyqxQlh`[8?W~9+6T{@j1H+uO:k^aK8Z{me*wP7cc(W]~^z%A+!z6p');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dev_';

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
