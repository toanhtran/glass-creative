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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'TTWP');

/** MySQL database password */
define('DB_PASSWORD', 'fy2KJWGpoDnYFTeL');

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
define('AUTH_KEY',         'Pg>V)L gVS7xe2Mb5*mwHeq}Ldvhg>7nh8[p~5VLrKZ(!`W&i9Qop2u$_aFt411C');
define('SECURE_AUTH_KEY',  'C}.WaM%8J7%m>9;n_iGy(f#[|3=T%lsU7BakHXHR`LQ~NA4d3_`~(/6>-ff?Q8+:');
define('LOGGED_IN_KEY',    'kB*cu.mb_JT]x`$8@+k)!wPFkJ%Ottc[|BIHW|!Y!Od2q%;bJB!T#:}7}2zPP/I1');
define('NONCE_KEY',        '3Fl!E$1{aa~<:5RRuP9V{[PWtDobJ3V`t+qzCqm`CsGon/pZPIK)b#}=o~rCG@eX');
define('AUTH_SALT',        'lRiZTK>`.IdI+K_!f?QHqaHawvv$TlcLe$-g;rrAmJ/h$pN= CoNU:56c0JV][zV');
define('SECURE_AUTH_SALT', '8gJe[`tV ha,;,Ws?g`rBd+Hsd*mm^Ud?}9+@`WehQoH Zdl_X6rBnSBV56Ar;GJ');
define('LOGGED_IN_SALT',   '3I#v$9PY+ IM,gJ^<J_dR0O$FT9.tMOA=mM`-cC`lQcn hg0%I6V=b!RPf86<]c(');
define('NONCE_SALT',       '6(@EhSNov2Id[aH9C_w=9g`Dg>lalnX+DgL(6$xmtNixj_n=FFZA_;bfs69ev>?%');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
