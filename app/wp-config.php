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
define('DB_NAME', 'crossover');

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
define('AUTH_KEY',         '@AEew4#Cf887hNIA7[h()hnx?3n@6L| 4SzW11&19z>m+ckLG_oc1hV19!Ap?<RN');
define('SECURE_AUTH_KEY',  'x4uQ4Q6@iKvi.^.L/Y2p(Y= 0kquSd5-/dt.D|GUG7.<RI4TJW_>zO3<`ZZ3t>]Y');
define('LOGGED_IN_KEY',    '7cX{dgK=~>s<Z(8j}H?we`[{|2worAi9nG32m4fa[O:g)1x]&7H)4Cp$AUTgS$f{');
define('NONCE_KEY',        'KeLJA[wbV~#):9b#S@ycK,iY:qMyyzEG7kt2Z-VZU`mN)FlnSrdFF9V6B[WdZg8}');
define('AUTH_SALT',        'RZiCc2C@;=:$)sh-.VGr.1pY9S7+Anf-5D_v8/Ct$4b|hd!A8gvR|^42<K_;{_r[');
define('SECURE_AUTH_SALT', '7NJpT_1N8@/|%Y()u|/Hv ^Kf{WB,B5z()j[v(BZf7iz/IItPjc+Q$5z-*P7,%Ud');
define('LOGGED_IN_SALT',   'qX!NE0URef8k@;!K&xNS2- Qx Jzz#C>?X[}WkWy_}-ZK&b|iJX(IL0#a;qi?XnE');
define('NONCE_SALT',       'ky8CB/=EI%:az0*iS=dWUj+Bz!f([cd=iOdnvidz5o9AA>*|bpxWI%@y0G(-g|MD');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '2017_';

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
