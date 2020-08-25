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
define('DB_NAME', 'wp');

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
define('AUTH_KEY',         'I9YpB;B/XqrA4&dp1j(78/srp+a|g>r$N>&#r~E,eUMpAW60H$v^VuW~JDbA_#S^');
define('SECURE_AUTH_KEY',  ' 5)6L^$.bqJkIQ&b@Zxno_fY+~pA,g1c4rtr7/OR{(re0K@eLO7u<0_~0/ME!Dap');
define('LOGGED_IN_KEY',    '7X49oZ ?r.3CQo>EVyT}<,67LKD-6Y`X%de}N*Wi!A:F]<0m9;S^H_dsJHCO3sBP');
define('NONCE_KEY',        ')YCu?ohD/(}`gUzKi%E+x4WMGk5cu6{RVC;}6U#b&27YCS)*obWjnKGCm?+9Jga-');
define('AUTH_SALT',        'q9jRWFen`Hb:#4Y*agcl/1^Cr_p86l#my0fC+~)H$%Xo$96Rlb@*)b`?j?}/W09(');
define('SECURE_AUTH_SALT', 'kdyu `o|v${vL|K+39Kje.{U/VqqfN|:Tfo~Bq3Yc CKI_`OwNTKn)G#HrG/-]tF');
define('LOGGED_IN_SALT',   '4OU3<=z1G~TXCib9FvFG@p9HJTq  (}v<:|EF:?kFyp<%4t!cu_Q@q7l_X&_.jHZ');
define('NONCE_SALT',       'Flq{GKoo1dq#E@4c[7+,%&ApZ>u.dEr:WunRD58%)BQ$rV,?|$=_I-]g)HPw5ce6');

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
