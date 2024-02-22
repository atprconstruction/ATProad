<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u173247717_IuZMN' );

/** Database username */
define( 'DB_USER', 'u173247717_voK5w' );

/** Database password */
define( 'DB_PASSWORD', 'uYJO4kAf6v' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'pQ=EMM)B1ql.3{2APMNW{7Zw85.hd_O;`>ZW)A3DFONz<?[C7Y.%fGCAyRM_9NI%' );
define( 'SECURE_AUTH_KEY',   'oC$c+q{u-Uq73jSc csI.Y9E- } 7qr?1S?)`Ri<@jL7XZJxa(6 2^E}D~mXI?9l' );
define( 'LOGGED_IN_KEY',     '`A^bY2O_yEDX%2YQi;8n6>L*?ex9S0<X@C,NrPPvJcee|YATVHYSnk`u~lRRP?}+' );
define( 'NONCE_KEY',         'S7s~o*NonN0Xm=C+y<$U>^!qnElMF[nVUEN@GD~L5FPr{~v3vaL1IO^.Vj&(|dzl' );
define( 'AUTH_SALT',         '%5%1p<LHG6J`gg|&z/d5wSyD_}Qme[A,J>,ZdB:?i4LQhg3Xx8^36) XXzm6SD?@' );
define( 'SECURE_AUTH_SALT',  ')+ASTl.-arY}z|KU_GwY!M6|d7|{Dg_<,Bg:cAJVYXU{-+cq,Sdb$X|8wD#AwY{K' );
define( 'LOGGED_IN_SALT',    'vxP%jW5Y.fhEjoMvE5o;N#DgnL]gQ=aR-Ftu^t|W2RGD2glvV?9iI}#w#[^wwle~' );
define( 'NONCE_SALT',        'Bq_Y/BX6LZ0vHL7 yFOX`H5tdWo`@H(&qdvdzo&|PxDasY.f^IFpwj.G$5BKY(e)' );
define( 'WP_CACHE_KEY_SALT', 'MCPN[7S[rGwrtD8gu0d4U6<&0HY(_&u#k6${xiPn?TMFT>Xggnd4?dxb9L8>eX@L' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
