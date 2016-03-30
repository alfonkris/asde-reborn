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
define('DB_NAME', 'p2cdb');

/** MySQL database username */
define('DB_USER', 'admin');

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
define('AUTH_KEY',         'KQ~sb*lRD3x&)}q{TBrYHYI^-C0<X_8@A7K%f~ke_rdJ%y55;-gb#1K|AL%|AT]y');
define('SECURE_AUTH_KEY',  'EopF#`LT8u.}d$XSQ(Viu |}PXVrQyC`n]Rf;L@?s5xP~>1+zN8b]Pq-dQ-#;Y$v');
define('LOGGED_IN_KEY',    'T75ZO@m:f$EWa3|`-x 1udloASzU([^kE2YG91(u(QH|7*JRBmwz>VrU+|Z/d11[');
define('NONCE_KEY',        '9RNJ5Sej.FfpR}%Ctvy/:Qu/q(_GBNk0^%};rk)f)k7<10l.>h&8LrVldR6||)s3');
define('AUTH_SALT',        ']/)kAeR,QI*FZ*{ZORqneC8WBu78V`Vaj_]|b0+1-_[!MgXT+#_l-x 093b7 2|8');
define('SECURE_AUTH_SALT', '{+69>$q1 -x$AKrlAuK|Rstu3Z}@Fk_PwXL|9KC^F6P.G~ASV;<;,yr7S<GU(I0b');
define('LOGGED_IN_SALT',   '5`^kdh78)OIzd=6:)|=3+Og8#HN@FwD:/7KdK9n$cG&>QfAQj4QTIH+Qjs$V4IHd');
define('NONCE_SALT',       ']0d{ojW~#DnuJSQAa%5_Z^:&^PFf*vA QCw|1hiBGz=h(QnR`Cd=aW}Exr$>U3#C');

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
