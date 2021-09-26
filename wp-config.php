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
define( 'DB_NAME', 'slatkoteka' );

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
define( 'AUTH_KEY',         'I_vuW~2M.v2Iwkt_Uq!?rIks><v^,i,Mjuc<<{bs5ic7*)0Bc:}-DJTQ{x{ws9bN' );
define( 'SECURE_AUTH_KEY',  'j|R&qF^sZOUWqfU<}&OKKhK@MUE3kC~p&>!f:WXQm,]V;e`KLs$6bAJXhSEH+#7o' );
define( 'LOGGED_IN_KEY',    '(2GES&2x(,^eXLm .cS[m*J%3[ZKtO#*j7[rO>E>EqXr/=HuoQ#] 7$D87r4,~)o' );
define( 'NONCE_KEY',        'c-9:4dcVfEI6;~~{]QCBx23*I+Bun2_LL_O/#7%`r*co8+4q]E$TeOqQ^dSvwNYB' );
define( 'AUTH_SALT',        'gyyrmwN=Jzwb0l(owk#^x%.7GY,V_tjZGCOxl]ylwIISla{_F5m;E?YDX)eR)~E;' );
define( 'SECURE_AUTH_SALT', 'HzaAL;Vw&H/3W&%0o}WtT*0)LP+sx=Kw20#9(M?([ lF^>OgR_`BH%0;P%m}E%0h' );
define( 'LOGGED_IN_SALT',   '}/{~K?^d-)87|_#~Vu,X[tj4d3y$aR`V3qYU,FHRWJX;.fUQ{)04!`8hjUP=Tz(J' );
define( 'NONCE_SALT',       'iO2^=1%?#L+#x3%OHZoHCk>qBtOdY#B;K0.w:A$uco]A@5_246iAT}7^,zi[+0-l' );

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
