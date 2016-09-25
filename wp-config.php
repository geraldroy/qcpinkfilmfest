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
define('DB_NAME', 'qcpinkfilmfest');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         'p9Q5 Y5TS.h3)bINZ_pSQZWZ.7xP? +h@Uq`?:%8,c-/392:~*+E*~qt,f U.W[C');
define('SECURE_AUTH_KEY',  '>:]R4gBl?>)^AG*p(`er Q&mG/+o$NhQ>^c`K!WDX|S&x&*j/bM4o6-%#m_z]Y:+');
define('LOGGED_IN_KEY',    'C7>q$wWAOk6/v(;3Cck; ZDtLj*7qB<;0U[ Wi5}+PI)$>}M]I2Aa3vlg&^~+{kW');
define('NONCE_KEY',        '>5T|Q53wq{u:e^$r7=zZT,84b%-x2wEo+iMJZHkD%IJl!*RZ]~bX}zl>K3mUe^f+');
define('AUTH_SALT',        'uYl[W(g*7IXzb}IY1^;5<aF0C7NH;YLphBchE~AXt.)WgtCKn7Fl >`diTa`$bxH');
define('SECURE_AUTH_SALT', ' l&}y8w$/OWt)|*g)f9y1-{l_>r:Wm3DYK]>[Cz?l~+}#([T$:pGf`nWUxII,x$E');
define('LOGGED_IN_SALT',   '(z$/8Wga-z4yfV_DenD=wnH[~4I31n8*;^uoDK<pX_f2hXXVkby;f#2*R]ZSyVPy');
define('NONCE_SALT',       '70QY;:wjuJ|96:*}~kTK;eI^4J6(H,Qhq{O^+}s/X,Xg4<Ok&EQLIZy}(?bQ4cxa');

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
