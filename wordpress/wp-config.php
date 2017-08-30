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
define('DB_NAME', 'data_choriza');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'p)P4U$AjU,<-l@W*qjDH_mH ep9gH/9G/mBMwNq!;eKWC%ZI 2,H_V! ZO]+FvM=');
define('SECURE_AUTH_KEY',  '^_}}`.*rNc0z@[e=q{vM3Ipxxc@GYs6RVShkQq>,JK%Q5Lu]|]6u.QKHkXW`NygR');
define('LOGGED_IN_KEY',    'Rr7Z33zExm{.-<C*lVoX{(>9m2E}F<-:#2u>jS@K]Jm-@6571b3oRr4dC9 Pp%?l');
define('NONCE_KEY',        'ZA^G5)Uu?e]l:6X7@e<.VS5w`)/&8+.^~Et.C9$m.icwy,*y#(^|nyjS^ti;JdH_');
define('AUTH_SALT',        'D#?!JFc?k99k&W*>Y5}h&AC,XiBe1{}~.t.R.0X: `0n&1}njvS1tUZgWE}}+spP');
define('SECURE_AUTH_SALT', 'reux`m )hzGj9<|kDd@*yUg9,<8g6PSm_::>zm6r&DY@*Pra.Rd4 G<pw?<a<vr[');
define('LOGGED_IN_SALT',   'q%*3Kdu5D%hSmG9OH0+t*uDd`qWo9NZ60*N#7jp:,xd@Sb%?{Gl2&dCS>xjC:SkP');
define('NONCE_SALT',       '#]&aVmqA`c{+VnLcN*M%t/~Qoee#o%z2Q0_*8T0}.~A}D/+LZj5yb &*XuaKJhV@');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dl_';

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
