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
define('DB_NAME', 'fbfm');


/** MySQL database username */
define('DB_USER', 'hannit');


/** MySQL database password */
define('DB_PASSWORD', 'xerex9');


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
define('AUTH_KEY',         '.t|MUkip!:wu~xS#j;-*g%E,|s{m)uL+W43q$F]XwuA)594;/eRgyo-9&6ze>b|@');

define('SECURE_AUTH_KEY',  ']zG+ (5,:q25laILgU7w%w,ZhK46vp-ux1-v,KCmLdy:-^OiN:V#~|iAWJ=0ox>+');

define('LOGGED_IN_KEY',    '672?%SFzmGH0LTild!>]9xUT+MKd%U<V:Vr0Zc{0-(@ZZJ!4h=~s?+TtKKae!V/`');

define('NONCE_KEY',        'Uq<y#W#KC,4Bp4/U@|-yS2NSR{DUKgJ|9pgV_3>_%..9eYI-DeeS([}@Mvh{b:rh');

define('AUTH_SALT',        'TWWfM@#064i=r,9t(/nV+bpL}=fd*:-9Cb7r<d.-;AcWyP~Qxs)pe=x3U4MXjS!I');

define('SECURE_AUTH_SALT', '|73uaxG+{ulN=na[_-Si+!^0[`iZXvI_u&3xUi<%&>;{f+-/d^?]>.c 0i5{ !mD');

define('LOGGED_IN_SALT',   'zi?|<AJ9^j^YZc,mF.+w/8T5O|`HQv|W%be3TS`L#]%S|-IdlWd#VQO_IBQgh-%$');

define('NONCE_SALT',       'm)G2{(Pdgl2jQ!~` AMC|`%KezE*K(ASEE s6aBG#Hw9Y^1kWBym~)mk9kn$39h9');


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
define('WP_ENV', 'development');

define('WP_HOME', 'http://localhost/fbfm');
define('WP_SITEURL', 'http://localhost/fbfm');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
