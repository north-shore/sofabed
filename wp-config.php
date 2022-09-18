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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sofa' );

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
define( 'AUTH_KEY',         '9q8s0ol>3RIQL]SUoMy}Dx9zmeotL4!9AlM*}j-iTN!kLB/jtPK)g@BL,O]raSCp' );
define( 'SECURE_AUTH_KEY',  'uV7&H{x/]Bq,KSh(Bd38<c~)3DkM-us0.N=4[X6nQ.up`l6fb50[MZo!hGz`T9:H' );
define( 'LOGGED_IN_KEY',    'q0fSE4TK`9tyV*/f$DzHD5z;trT.3v<MO2+Y(n1Ve0.CD0(DuO%c<THrW_=ZS0Ts' );
define( 'NONCE_KEY',        '^617zZ(~+/8>YC-?f%Q,]nGw4kmp`nz6}25D}mn~yuU_sO9xIT{n1Pj +|Z^O<~+' );
define( 'AUTH_SALT',        '^RHWmx|SqKfi:]N )6DgOdGUo=yG@.]m/9a&n}BZ|~#yAH:9|P }$2RwP:3oQR)b' );
define( 'SECURE_AUTH_SALT', '1M9_n>?Mo=LXs7nVS>EjmWADavnrW_Q$TdKdATq:tN:IU/.<AqD:Mzb7&jcDLE7.' );
define( 'LOGGED_IN_SALT',   'ddo#Sr=u<:$Vck_:X,egt7|5) wl.gJvk|/taw$7]t1)^f7cS2^<qw0c1Z4$]VDd' );
define( 'NONCE_SALT',       '|Zy^:25%Q?Vn29&?iD_$Q>QTqlOA}79|$Qt 6Hvw+0ax d`#s@pp{Hn7K~PK8}j5' );

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
