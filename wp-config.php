<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'tuongviet');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '?~nm3Twp+|u|i{~na~s,wa^BS.]rV]._Vq-Y-}3X45)+~#|oU7)3-pMpRY.g$g50');
define('SECURE_AUTH_KEY',  'pjKn|HV1W|ed/XS<5v/7%a&H>`V$G/w{~nIDNIZcR`%^dcQW*O )-%k<Ih/3$V7b');
define('LOGGED_IN_KEY',    'J?ob1fLU{{dHI5+LXfaya~*=L@?qFHRyX5W9k&^??Z*zXcG>|cSd:{Phi4&W_lhz');
define('NONCE_KEY',        'tzh{EsSWritl1.i^0{cW%mnnO6{^sb[%vm/+I^zZ9Z$tgjtkrEk1@ojMVuwgqw/h');
define('AUTH_SALT',        'f^v]8W$nD/uXE> ~y|zHtS.>?W8E<Ek4FU2%ttT5pkfZn7*OkA.hX(}aX(pRf{@O');
define('SECURE_AUTH_SALT', ';d:(rRILFD:&=(T`5<5XrQF7X>)/%$h2}t8W93l=c3q[f-l1=o%r-N(A7hz.Q%:q');
define('LOGGED_IN_SALT',   '.6AgtncOY|j;0e]X4Og*e|Y!Ia-|Gl#1o**txK#!a[!UX{tHoT0}O*;LGmu)^lnn');
define('NONCE_SALT',       '%k>+Q`!fL*{*`5w<r6T_`+9#K:QBs5A PAnF1?A-/!G!1tZy. !N2ePf}TO|(hfZ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
