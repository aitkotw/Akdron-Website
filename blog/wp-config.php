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
define( 'DB_NAME', 'wordpress_blog' );

/** MySQL database username */
define( 'DB_USER', 'wordpress_blog' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpressblog' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'c?Q^8DuL#W!mD4T/|_svBA_c!6<ws0x~!8<CK,)?%9Iv&)R+KT*RBcV+Ph>q9ez0' );
define( 'SECURE_AUTH_KEY',  'Daa|`UF!b`Q8Bk&*vF-9Hnwf*NK^F&,^A}=?SF]~CQXzh}9n<5YLc`,6^)e;WW`R' );
define( 'LOGGED_IN_KEY',    '<MvWqi`sB.Ks@_~mET~EBc#RDXQfCdnN~VGt<#KgGo~_G8J@Z3lNp^^HP`}6@kT[' );
define( 'NONCE_KEY',        '^ps_Ub-$}vMgYjaJ*@yN@m{](|)^>R&+E9:p9)wfxwIwN9[-bP>b1a7uLsM5=D{j' );
define( 'AUTH_SALT',        ',NW9fY_&^VXy0&&|/0JI`LjhCuUc/tp=aQ W$fQImZyEN6<56Q>uGf!PcKo7(e]X' );
define( 'SECURE_AUTH_SALT', 'Pt tUM@<zfq*1|+JaHvfLkalGd4H7@n-)JU]bXw`CmsA!~0tu!Gf?Zc`6}DD|2XK' );
define( 'LOGGED_IN_SALT',   '1j [m8|%Cep|m>ccu4T,T=j!D2P,cmbN2FG)pA+}0O}JDGW52_0Qqv5Qe%~Mb0iC' );
define( 'NONCE_SALT',       'c$dk9;FzWZ )5t:#UqN FclRr01|fcr*^a7(iSY;mo<r7Ee.~iQJQ0j^1.6Nc7Wm' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
