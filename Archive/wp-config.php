<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'gazoleanblog');

/** MySQL database username */
define('DB_USER', 'gazoleanblog');

/** MySQL database password */
define('DB_PASSWORD', 'mImXrmX9');

/** MySQL hostname */
define('DB_HOST', 'mysql51-92.perso');

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
define('AUTH_KEY',         '*eRW=A|c:`/{.Vc.-KIqG#0ViI!AG-FU0OX-DH~&{2}/#t3=N(&WNDp/^+fVKve[');
define('SECURE_AUTH_KEY',  'L)0U-kS&1u(pdsG+fJ8dzv _-1X]Or=|`h/`+%^=TNY1RaId)3:{)#(`i*DiQ-g8');
define('LOGGED_IN_KEY',    'EgJsfdjL#p-be$jEaH+rMU*h|r&mvV=Kv;Q.lY3JtH{EF2fiK9tM[<.*-XSy& 18');
define('NONCE_KEY',        '9?-$aXLh%F_a*G0a4-J;!Cs *S^[tK+-a>LoI8A[z[I+E>B_ cU5ZGKQ@})] R<*');
define('AUTH_SALT',        'R(e%^4f[fO?F?|)%[zs D~7RLs^NQ+3x2|xPLj#A8-o2|-,kK<?XmGzus/r&p?Cl');
define('SECURE_AUTH_SALT', 'Cn8-f@A1S)~QS3/c-e3`0J#l8F+gi]0Xc#^-le5[.!JZ?/%Km7T, Ot|o6(m6]JW');
define('LOGGED_IN_SALT',   '|70oHYG-bi26w0O[~SXgOe{vlyXmQA/1SJGkaV Q@q3?!m+nS*vvC(~<S|R>H5pm');
define('NONCE_SALT',       'JGt/(Hm[g4b43C{l`R>Fb`7$iGtX.@J*C[65w&2S]m%6S?-e7Sgd?#yKb$dkOr%&');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
