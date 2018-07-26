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
define('DB_NAME', 'aquatechsofalbuquerque.com');

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
define('AUTH_KEY',         ';%&nt43.=.!Aea7,2Ly.0]IvZ1^%O b/yFqf :$0Z@@Y@ub`(*B+`K0!oFyPR|bj');
define('SECURE_AUTH_KEY',  'xsL!de>[%k_R40(UY@,u=~bHJ*/Z2pBi#m*`K$-:ITrqz6(*wds%w`YJ{RAMSd1r');
define('LOGGED_IN_KEY',    '+Z=o^7ybrBGeEgJhpoGUZXjR+Dv2:sz#P+;MKc[6g^=}UK2!K&Vl(8x8oeiRHl=<');
define('NONCE_KEY',        '|Qaz~795Sb1=F(wUfK8Ab:+2VP[C!)F[SF4FSa61:t/@qN$tX]Bco6$2f9AJ7.gm');
define('AUTH_SALT',        'FuvS(5;=UvABJ*0z:dna2Kihd-TOKjQ2i?F5 ~XbGQkbKb*yF2u>NQPQCX)7>_6@');
define('SECURE_AUTH_SALT', 'E){;fO3REF} _EC-<D7=797[O(+0hWph[[@=_%5(jV2`CZ.f6cx/bM~Y5rZb?8DS');
define('LOGGED_IN_SALT',   'FEXr*5P|J>zDzReJC{uB7O(LzZEbNIZ@;EtsR~2or#jg:6#zl7|y7 ``ZhrsD?oV');
define('NONCE_SALT',       '= s)J[R`3sCA]Be$ob<Ehu?^G7$E$i$D_#3~;7tXL*cimwb85a6#oq_-X1k}fA^{');

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
