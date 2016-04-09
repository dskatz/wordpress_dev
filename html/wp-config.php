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
define('AUTH_KEY',         'E+t-5pHm<L52Sb#a>>&i#h.Sd;h|wt[$*;DxEuTQ{s_m]d[FYDmxJB!~mt953N>P');
define('SECURE_AUTH_KEY',  '5wbS/n_>dIFpE+z1c(M$g+nzC`H/QGG{D~8{hAJ-;@M/4nLOz+L!gLIj1c-1Q/;C');
define('LOGGED_IN_KEY',    'Y0dLU~:g0&J[M|mwDVexeK><VQ|<+Ta$5:Qc3Q25mES2j?*/L:)0=#Hon&|)PM3v');
define('NONCE_KEY',        'xy~yVb!j8}<4u|Q;Bv.Wbovc-;6oI{ofs2Bs 6gf|7snfY;vBG2oTy/wsKKP&2`%');
define('AUTH_SALT',        '4|+]*h!x@QA>R:NWwg>^FOt_s6kQ,,|q@g3HA<9Q9-_-$yseintBILE7]?2wEZ_v');
define('SECURE_AUTH_SALT', 'Jg^=<9wtF}6!pF}!S+{7C,>*|f:N8.;risLo+ik1unTj^Lr&t Uy-96lIlOvjeqz');
define('LOGGED_IN_SALT',   'uCcEH_=J(+y`s)j(`b7Y^lsP4W7ME<2D{#3yKwFx}s=NqiD-g{uVP65.~xgO>M|P');
define('NONCE_SALT',       '*q-Uf:D|U#-..cu:|.V+JiY^$S[$RhQqfCsoloB|h3|U>kpmiW8lgI+K5zsMx=*A');

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

