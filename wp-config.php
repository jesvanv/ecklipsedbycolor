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
define('DB_NAME', 'ecklipsedbycolor');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '0beron');

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
define('AUTH_KEY',         'Uo!riSw8X3J)y+pa`fTC0]^`fPNor,@:{FsiC^]cxnj[QB&;j`oV1w|U-#7*4AX ');
define('SECURE_AUTH_KEY',  'sA$V&]E_`l+l7m4f!3S~P<7;r6Fr+DkI{a&&pLhRcY9?0Bezo$Ir&YUwawnHiVal');
define('LOGGED_IN_KEY',    '-]]I)6a@(3NjsFvp]S0oj[U6Tr1nWg<c7cRV{@ti<dxYH>u->aeGA >Hiu@LispO');
define('NONCE_KEY',        'JN|E_UwB=8UgCYjs;tZV}?gZ8S1xm>a 7dCRm/6B=Z<a|f=yn0RZ-WFQ6&5}3<n&');
define('AUTH_SALT',        '@JN|*AK;6*<%Uaf,OO6<R=OnEv}R0b_ 8)_%NhYj bd*dQuiuGuYq=Q1gn|.7Iek');
define('SECURE_AUTH_SALT', '`M{A-&C[jh6O F&|ep-8~zQQ;ymMXu^|M{i9M*<mzy/)vDsc@BDf7]bRAh5n}oyy');
define('LOGGED_IN_SALT',   'z>C:$mr`!q{YR1eWg|#[|^D/5xd?K~]d^cj k4ri+IQ_14}d&jmg$(rFq}FO![.:');
define('NONCE_SALT',       '>n#&I2dC&z/c;w6eJFQw,%DAZxTTpA,j@3bAjVQ%*JB-jGfI5bMo]+0>!72}>Wzf');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
