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
define( 'DB_NAME', 'barbershop' );

/** MySQL database username */
define( 'DB_USER', 'barbershop' );

/** MySQL database password */
define( 'DB_PASSWORD', 'barbershop' );

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
define( 'AUTH_KEY',         'YdqnuTjD-Y~ wsBe=CyB)-/GBw*9H_p0,RH~?_>N(pWJQ~!}=MR{}F/.2.7@3uc.' );
define( 'SECURE_AUTH_KEY',  '/08_VR6TH:~K{5Ee7JbCE(Su7fyWg*lv5+yzmDCVQXyQb7W-1;r>WluK)xUy+7]}' );
define( 'LOGGED_IN_KEY',    '>3L<w-;O~6T*h7B?so7oI&5e6^W<cN4W!lbJz09@+(SfFCd:]S]g1^3fkU8a`X# ' );
define( 'NONCE_KEY',        ' y;9^lAhWy.E*swh3?eF^eQsnXovw/:2Ylq&Z!*Cl>M=(`P4.2rctpyh]sP:yuTD' );
define( 'AUTH_SALT',        'tTW|eqZ-?1B?&8ZS8Z|)zudm6Vv>)?*u1dR-@qpj=c]$.AYn>y|u(7W<R0x3=d1E' );
define( 'SECURE_AUTH_SALT', 'Ze-34;*c-PM?X_HVB*JO=hln;uWO,TmS.>Z+HrcKY@Y(Vd>r|VJF`RcaHEC`_?@;' );
define( 'LOGGED_IN_SALT',   '1-%UH/|kU`<p%0%`EylzMv+D[$Ku_7:6FXW96l0P{;Xo_vb<iQ?rCa{wuD[<,fZ`' );
define( 'NONCE_SALT',       'wK1*HKEW|r/t30-<;a{AqPz+e#]OJ}qN:C?&mF/kF5myFL0o&$)@pJmsHr6BJ1k:' );

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
