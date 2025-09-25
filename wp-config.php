<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'getpro' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '@sizJf:i!]6ud<`hICC2p#l0WTZ/Uue|I1>wo8!L0)n*OQF,nzUmnW#d.+Redg5P' );
define( 'SECURE_AUTH_KEY',  '[O49JaiL_f$X].Vxxmj<n>/H0p-^t,/I3o[2,#6aSg+Sa.gm= Hv~(yi%}%HyFdX' );
define( 'LOGGED_IN_KEY',    '$@LC,~TlH IC, {)Mp&X`|a|rtW?17k]}QMj4e}OX1oxk4qN~FEkEM;Yb[OK)e9G' );
define( 'NONCE_KEY',        'PC@jERuhtrP<c4NYa<-=<~$8=QyzLbY&bL|9zbG`hKlrBt](4Fa*VZF]X9ie`X_Y' );
define( 'AUTH_SALT',        'N2rriB*3rew<<k3hD!?o:!Oeja58W0kgd4|> j/F)<z42HL_/{!4~L;4wxG!Iq9P' );
define( 'SECURE_AUTH_SALT', 'C07L;ZKg-[.XVck|]vgWW_TvHfA,BOn9cwwh[%6{]P~JWM.):BtZ/X6NtEbh,`rA' );
define( 'LOGGED_IN_SALT',   'Tr>:3$39(K`b_~O|Q*)d7op82GN=qb:Oz_m?$u7q~`>Sw0(L+T-4d#khj,NU4m,t' );
define( 'NONCE_SALT',       'M0VWo7SV^e%tl1@iml`#`G~jgyZVb<n,^B%ng#>pxS#oNBl>J:%|EF?4[<i0dAJt' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
