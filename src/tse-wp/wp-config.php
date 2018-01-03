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
define('DB_NAME', 'tseinc');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
 define('AUTH_KEY',         '}c([i:%|Nc.3CH+c kS 7FTPa0j)9Yito[|qu7hcY/CwUuqmWdmvyDEX5$q>c;(4');
 define('SECURE_AUTH_KEY',  'wg(M0#M-C{GGGQ!5R00+&^r).8CL<1.c7f&zT56xgG%TAk]Qxgx~S%.%e8aR( <f');
 define('LOGGED_IN_KEY',    'qa$[bZ@](;1t#~M_]RVp%#n__i[C]JQAD9gW-h-#mWdPC_48iDU|[j<C0)3sNKTp');
 define('NONCE_KEY',        '2Z6w1#BI>2B3H;+:+f-,L^p_,r*[p+&+>lU/5}}F~TD6stTlW+nccglbw`Wv4_2$');
 define('AUTH_SALT',        'u*0)MlvSs>0r5k/mMvD=[|YW}N%(4<A;o|(I!U+LR9-|JK2I).*/CwC$n/ b?Bc(');
 define('SECURE_AUTH_SALT', '(QoBBi1<_R.d7P0U~JJ#$H8mx algBiV:tr2u0V}lgPHgxk0-rjTup1cG{Ne]fdQ');
 define('LOGGED_IN_SALT',   'dY]GpSYwh@b{r1P]_W>H9hx,6I>1g=o-1L$;=l~`ryO|gms<P2! $;FDr&`-wP[T');
 define('NONCE_SALT',       'DGuVwd:~zJkVfg.IJO-D!GeD/(E! DgSjYU`H{`-Nc=biOlH+GzwXvR;SJqAEnCY');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dbwptse_';

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
