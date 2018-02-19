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
define('DB_NAME', 'autire_db');

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
define('AUTH_KEY',         'lw)Q9c/tZ+ZM@7Fm.I25KA}0/cW8g+7.FZEQ6e=7N?0V+B<tlY?b[yu6t/qs`jzT');
define('SECURE_AUTH_KEY',  'D;}A~x.AyesR^Dmr7]J9qs5ISTkm?)~D3S)7^Al;=uhSA/Jowe&Rz0Q7H9DI])oq');
define('LOGGED_IN_KEY',    ' ATqB(MZ@2hUrx+oG=,j]$/JR#I+o%yNk}J$bXFP3@tov?2[>6?iN<W>>1HHhiE,');
define('NONCE_KEY',        '#a+_?Rvkz$AINaDv|t#se4|Z&_fk+N.RlxFB9;=(LM%_j9E#TbDto(d>uaVl2#o0');
define('AUTH_SALT',        'Y#JTn>m/:cMS55r*i~>g$l|KpKM<Ng[+S}WQ2zuF)jL6%=a>W&P:@+XaO:qD~-Xl');
define('SECURE_AUTH_SALT', '+@L;lsk6fMl9,adix>JIS1Wv4b9*>V%[AZvqs9*cm9 %vD[&fXZaSm2Ea{ZW^~:Q');
define('LOGGED_IN_SALT',   '~;(;(:]at_?=,]6KVU^]=4dc]@S67oSFAV^ci&?ul9(e! Ur)qvO|#>g.uH@cK+f');
define('NONCE_SALT',       't4uQ@g N:v]nQnK$)eG]/Lb{ku;ERB[4U2b)8VNrtk ImDLVz$Jg3#9;.O0VOTHE');

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
