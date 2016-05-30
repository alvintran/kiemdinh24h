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
define('DB_NAME', 'kiemdinh24h');

/** MySQL database username */
define('DB_USER', 'homestead');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '._v;AaR&-*=o?7&,+d]je/E QTqE3>,>;Qm]aI>n`)pW3LuO>Ge-[:Q}nffs**lk');
define('SECURE_AUTH_KEY',  'S=6^TS~l1v5>h$&B@`VMjui,,%V*S${52r=&dX>Q1,iv4Ud-lNTsHq[bhaT~agLp');
define('LOGGED_IN_KEY',    '-baX2L&m7nM>8PT@kG^yu*iN~nJ(To);6V~T3)YJX=iZvdv5[PZz1I R8jtdI$Ia');
define('NONCE_KEY',        '2:y;-__8:rnsx:wo#J?.h#K}oz5|Ps:^s#=G*XvxoP^BZctgLAz;m< .[N_=%fx)');
define('AUTH_SALT',        'Q!L9^)dW>1yBp6|4dHblhnz|$+zhRv*>,c-^h]lwS}`be[$~JL#W:<dS)i7t2WfY');
define('SECURE_AUTH_SALT', '*ME[ /9& Y<#Ou;NLpX{@3e|H~#[IcPoBz!2^FQjgpaoHqWs=1Q]?PH|~)qJ)eUz');
define('LOGGED_IN_SALT',   '4H&4Mfpy/qi`=tk;oOg{m.yc=#gf%W ac`bIpyXCXL6w3rU@Oe/Dee2#+vAkT*S/');
define('NONCE_SALT',       ',{dxJfW_7CY?|@~IY:FG4jezh3}>k2!>kmdTedZjjJ=0m1 UbD$v4|b(*oU6v+xq');

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
