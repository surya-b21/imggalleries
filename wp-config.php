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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'imggalleries' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ' ##{W5W%%YA#^4Lx?YTTNm5dVh_1X_.9><|B*rKn| b,#Y$%(%T6-yC`ey/kcO#[' );
define( 'SECURE_AUTH_KEY',  '5x>Zki$0KS^iUul+;##?6Bh!-me|/ze3AQ^Ajf]V]}<-T,M`N.Dn!=L^x?YshFHr' );
define( 'LOGGED_IN_KEY',    'q:dP}1m Ef$?44U;U|d2eY+grj=DQmpMbZTs1C%(np=ey!ta{3fN3;#yv8Au>uR?' );
define( 'NONCE_KEY',        '8ggXmGiah(u5XxVUm0&ebY&tVnpqpJ(m{l6I>}@=EBc-s32~:!h]//_G^k635uEI' );
define( 'AUTH_SALT',        'Na;<-l:_M03q.8(zsrG.6oaT_D8Y^s@wh:R4$j@|sZ&GUP0s^FOF*zZogisgO;R?' );
define( 'SECURE_AUTH_SALT', '[dK>:HJ,6(ww3v{br@z}y8@p^_5/vk))RwQauDg3gr%z3s69?/:&<s2nu$OWFdCb' );
define( 'LOGGED_IN_SALT',   'cCg0+I!4sB.HmZGF7H]j#Di4Ng`~.[UCKPetu^4Ww02EfYp}<4!!KESrK9Re.<6N' );
define( 'NONCE_SALT',       'wqK(+l.!Bj*wLmN1>LAHw?6^J?2_!lM,~U&0wAccp^UOFUEKu3=Z1Lia7MfdqF]g' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
