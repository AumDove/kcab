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
define('DB_NAME', 'kat808');
/** MySQL database username */
define('DB_USER', 'owner');
/** MySQL database password */
define('DB_PASSWORD', 'PMIHElite@2016');
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
define('AUTH_KEY',         'sjd;afierjoiOE8949QAQIF89f8eu98F89P8Ef89pF8P9f8je89p82ye73778YOF');
define('SECURE_AUTH_KEY',  'AKLDJFIAIOEioeoi3849o0aq0989fd8fh8d7ys78fo8a78fh3oppjap8893fh83h');
define('LOGGED_IN_KEY',    '94057akldIIOASF8989PPA9I8pj8IFJEP89AFLAIE483901047362JFIDsidofia');
define('NONCE_KEY',        'akliaII3847793iuhjhfkaldfjJIIFjidsofiaohfaudhbmxcvjalzcmvnajuery');
define('AUTH_SALT',        '879aoidfaoierioqpu8PFlkdIDFSdlflsifai384978a88f8f8soo39023hjfd8s');
define('SECURE_AUTH_SALT', 'weropi9803209ifsp9uaopir9sl;dfkaoeAOIR939021736SLFJISI8jiflsigjs');
define('LOGGED_IN_SALT',   'soeriq99ERUu8ifyh87e4r32278oafhgPgfad78pfyuaignxaioeru83847635KS');
define('NONCE_SALT',       'lasdkfiISIF83479834628y437sifhalhglidandlfjieruwiyuerntusikdngit');
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