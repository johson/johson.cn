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
define('DB_NAME', 'johson');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '~a123$%^');

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
define('AUTH_KEY',         'c8nuy{*?&E|6p%&GcSCT^+=3eq+OuC=V4F)j?U37?aMp^/,DtijJ!<f=L#BU(BZ.');
define('SECURE_AUTH_KEY',  '@CNF+?,<bpI>RNBb8;:Yx{@5}p-2PY.Tw7ZHWn7Dd#c^^R.I qX#MlG3hO4_5^*t');
define('LOGGED_IN_KEY',    'W6eg0j~) BhL7wp=7PFW0}0%qTF!/]mT;5`mS[,zh~XWp|d2N:WKqSzZ>UX<*f+M');
define('NONCE_KEY',        'f5<(>urI<yR+gbY2_6,h3n3Tt~(%;DEDZ,k`HW+@]gZg{}U$*>wcgoP^{e/uPEst');
define('AUTH_SALT',        '$MYWgLEuu&s,Y-~=@:5[k**QS|i4@5^(eb:Zx@`|xv?pPzxZbbRG{u,k |2]{sJ:');
define('SECURE_AUTH_SALT', '6yEd/P$V[74he-n6YNcrX[{pcT?SMOz)}v?s^~SAE@M5v1sUnzEp3.!:x|y4[:~c');
define('LOGGED_IN_SALT',   'ehP:YF>T*%d{G6z@@V6*]7qp(Q=]S%-xTsb*F=qw7kf=kQ%psQ/mkntZ>hl1hx^4');
define('NONCE_SALT',       'Hohudo-_t+*)XfNlx@@MOvBy`$.Bv?feA1{ip]Y]k_:RqI#g(DJ^b?If1_jrdVgC');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'j_';

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
