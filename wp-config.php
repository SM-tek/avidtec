<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'M?S)h3lqs9xr+wr-{W&-G!CZ0=./T4]WoCj-eA2r_!hW@|WxtN3Ez!Th{{,DZY*;' );
define( 'SECURE_AUTH_KEY',  't+b]+7:~n2?+8hMpjC|o.1y),r2tbppvjBm|Dwxo9p.Vl3=^6ikF5*PgtK<VP[zz' );
define( 'LOGGED_IN_KEY',    'OO0Oxxf*xX}=pTP:dj}pH+=>K>UaL5^NQx,o^)6agS|EHGtsOnyTR[puYn!6TZmy' );
define( 'NONCE_KEY',        '3KX{H:5u$)yWj*4@g!nn,|Y])!]&+Zxui@iFNm)|wQ#k)~r4z@;WvavwT)@Or3?t' );
define( 'AUTH_SALT',        '|j<RfNi&D@v>OJ.3a]%9vRG$bA11W#i!f>$20Y@H9:3q,0H~RSs?-B3sr<!*x4e*' );
define( 'SECURE_AUTH_SALT', 'd7e.<w&Vy,M`W+[k9h<)G~,5cq9k0ua),x_^9( fXR.0kF*nuNp!8pQSoyodjL6Y' );
define( 'LOGGED_IN_SALT',   ':=y>XK.]GweM1;.]SGqYUhW}f)|Fa5=!SGz7ht_Z=%]cIn!v`{xt0it].t+ggh|~' );
define( 'NONCE_SALT',       'xxf 2$n?|% 7 bsn}%5H9zFjj3KGMrRv$AVtt5pG)|h6BVUBF,IjGYyoNltlFhPq' );

/**#@-*/

/**
 * WordPress database table prefix.
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
define( 'WP_DEBUG', true );
define('WP-DEBUG-DISPLAY', false);
define('WP_DEBUG_LOG', true);
define('SCRIPT_DEBUG', true);



/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
