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
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '123' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'Ll?H.`#Dp,vq0te5fL0N8F^]AnSpDIY?&{h}(5um?@Gt9g ^g~}elCa RMT(C=Tx' );
define( 'SECURE_AUTH_KEY',  'j53NcygVk y7.3#Siyfo_()T3B-3=Jz4g@1kAdyGdyLCLcw[^L{O`~(Dtcj$n-hi' );
define( 'LOGGED_IN_KEY',    '4eKbi;JDKh`D|n+Xch7<Hd6_?;h_Fk0EGkyry5oQSj}3{ rG<FWA4cG|7!Epq;f~' );
define( 'NONCE_KEY',        '(D/vi$d/RHZ0]uPBW43.cC0Zh[{zC`S;YqT-EIiBPM2?V:Esq307:YtS1d^ZD!3g' );
define( 'AUTH_SALT',        'hJU!-E<vN<VhsFz|27O!S5~{F_-g.e0&0.(-|,J?Mo/pib[~x@s6g%$EWJ6QzE8.' );
define( 'SECURE_AUTH_SALT', 't-k+*|e~A!?{A3h%p^zmHSO8V*){$P8Y0II`w]O5yT&iVtNHFY1BE-}8[!`Ug$%V' );
define( 'LOGGED_IN_SALT',   'oL|%f#g>TMO5BiqU)N.M=FI2d-j~|O{Vzilzbae!^{^t$bd~&92+`U)B&Q5,,/5;' );
define( 'NONCE_SALT',       '4!*<#62QN=7#z55OHiMEY;p@eQ^/Cn=7>*6]d0W$lM,;P%QTI0#+V=SAXdg*BKDS' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
