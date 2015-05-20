<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', 'C:\xampp\htdocs\ociosur\wp-content\plugins\wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'ociosur');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'i]-BBzA72f8RSL52G)%1$$ mltXrY)?}ate}H|e*]zAHt)h?LiunlkJe]}r0e1`U');
define('SECURE_AUTH_KEY',  '[zfj/A}[TSIsV~zR!BGbfnuE?|tc);#k hu5+uA4I<drGFxyd0/UqBqinf.OItv|');
define('LOGGED_IN_KEY',    '/oWMdk]w|Su:Fsh~B#a a}r</M%;P:u:gfD(_mmQmJC>aZuRN9y_b&]NY2drj*@i');
define('NONCE_KEY',        'l|]pa%=v>%JFP%Jrd/#]Ur[)hBeWq%+X6nUom-3(To#/G<G4LW?c!o-@}$o]twD$');
define('AUTH_SALT',        'I#<l,/`jorNui$=XSSd7>/ [it%^3 :5_R[BRx 2q-+L% bI0@1X7J3(0Oosi~0h');
define('SECURE_AUTH_SALT', ',5rnJZ^c;AJl4+aGR1jW8I+p.aJ)WsQHP$`7}b+J4y[lL_%&:A`95>r,#@ikow9^');
define('LOGGED_IN_SALT',   '8}ALQ#KB6H=N9f<=yA>@I_kR/Q}^+_Cw98QU]DjY]h@iAR3^yPq4Mj{Gwt6o$16q');
define('NONCE_SALT',       '<8CIc%]16:PJ TA%hMtRHZHinw9w8QpO-:IhS_x R&|`{p6=WWmhJmk$xIdqX.HK');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'csr_';

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
