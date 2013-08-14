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

// ** Heroku Postgres settings - from Heroku Environment ** //
$db = parse_url($_ENV["DATABASE_URL"]);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', trim($db["path"],"/"));

/** MySQL database username */
define('DB_USER', $db["user"]);

/** MySQL database password */
define('DB_PASSWORD', $db["pass"]);

/** MySQL hostname */
define('DB_HOST', $db["host"]);

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
define('AUTH_KEY',         '4Jl=Lt=60b`A1WYuG5`,H#.>p2F5C8zZ|-0GAlW6|Q )NMj?H6h~#n41$k^F[rgw');
define('SECURE_AUTH_KEY',  'd}x>|I D5RtL.[DJzGB_QB*0;A2SeW@F[g}#x@,qrK#A4!#Y]wmw|c s:C#EvqJs');
define('LOGGED_IN_KEY',    'h|${ps(Wa#s} -9VJ4n7mqL2kduiDe<k!kw,i3$_Y*2_sY*T*U|DM/FnEC=`n=es');
define('NONCE_KEY',        'TD18^>2(`nP|T.sf!|LnS.7LE1]<!>lePhD7BL&2Y|gk98lOri{PksGKi0D{] #:');
define('AUTH_SALT',        '-(3]QB2KQ/Zk)oa]Dzr{qlxGjRX9~+B|&k Rra#xsW%<0r?8}0x.+z(s4hV4U>=a');
define('SECURE_AUTH_SALT', 'Fx>a%W7eS(*Ep;H|JF-?It!$P(w?l{/nD<Z[n6:#vXs^64pJ-=-.m%=Bv%+Okxh#');
define('LOGGED_IN_SALT',   'SGT~oWiY]qr9g2l:`1E|X6pres_+hiClMK#sTzBgaCG`bEf]qLQ|!dwK B%m^>&X');
define('NONCE_SALT',       '}}Q|6r56NQN|gjGF>b7Y@gA5K60Gv> k-K+|eFX7Y?~**u/`5#=#]t->>/KLu@}1');

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
