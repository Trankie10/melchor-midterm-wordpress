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
define( 'DB_NAME', 'wordpress4' );

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
define( 'AUTH_KEY',         ']z((oMFMu+FHc+z,Z-b75LzcR!pv3Bcv=fZZeU2{QZQ#5LLT/L6@Zx:,Fu4c:[0R' );
define( 'SECURE_AUTH_KEY',  'EDD|U%=]X2$CM)llz8}}O@,S~!)e]:iw6[ KwG`sR]+~?eG9ijLR {URGEc*zZt]' );
define( 'LOGGED_IN_KEY',    'bg|~z&-7^z 7[vDf}(mUo#!?yh(KcGC_D^du^WdjRt;=r0Qn~#_|<I7^yzR03!)n' );
define( 'NONCE_KEY',        'Ci<k%%{J?~s0T{ozkI5D/@H~rsPlbQ|DnG6+.{#drWC=#<8%1t]LU5/Z7ocFOE>@' );
define( 'AUTH_SALT',        'r.^i#Qf{<!iaWk}yb}3= hBBFy5c?j*/vI-00wrZA<WUvq)fN:/3=@lqCw75Jvn3' );
define( 'SECURE_AUTH_SALT', '{BKMXD(Mrnf@-_Dn/dqbbdZIQ#W+5jWNX5K;/6zIkBQ6g;$=ZGm8)Mv }NH.PKlW' );
define( 'LOGGED_IN_SALT',   'z!t.nrrfpZ7xOFF*VWsD.a~A+8&*!yl}Ve*~H{ek`71oR3R?zUd#`3V5mw{Sy2/o' );
define( 'NONCE_SALT',       '9UhvbwQE,I6-t<P`%6xz$a:%nRKw|]&M3aDgN1u!!,-j`<IKOGTbjM;0yT$rmW(c' );

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
