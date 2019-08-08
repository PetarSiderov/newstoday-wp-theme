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
define( 'DB_NAME', 'news' );

/** MySQL database username */
define( 'DB_USER', 'homestead' );

/** MySQL database password */
define( 'DB_PASSWORD', 'secret' );

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
define( 'AUTH_KEY',         'PGIi+*MXc1evjQQ!t_tmC,W,+XVT<)P%f1Z{Hs{|lEuAN{reOxcn)+e~3))k!H.3' );
define( 'SECURE_AUTH_KEY',  ',1v=&j1JL k@a$8|bn3xF.aFGN:By+2)[)M,Ml0h0:KKC]q(x4d40>dC&B{~)_:2' );
define( 'LOGGED_IN_KEY',    'y;fz*KtM3O&f;CbKnM}U}+[##md&~@qdB`CUQ}:!A%:l?TZC$+1c+RY{eKFf%S8.' );
define( 'NONCE_KEY',        '(2)~dq__F$&]A-GG7e*P<IX$SaN-nha?CRdPx.:l_?2JLh^fRfSn| 2kDDkH/@JT' );
define( 'AUTH_SALT',        '_v@Hu|OO$:DzLN-2W=4mDyL0K_v8]T=tDaK1L[,zU6B=~nwntkz9}K[e-TMc:vpl' );
define( 'SECURE_AUTH_SALT', '@osC#+mV%{PBuiheGpF_erm)9vU85Go!c72XqQw ;f5>z%?bD<r/N1$-J6W[D-gh' );
define( 'LOGGED_IN_SALT',   '>c#RihY/G]dyyJQnH.r)06mL]n&tV(KV7w@ZLK^R._y~7Miz`6IGzA6Jr*RRDN(z' );
define( 'NONCE_SALT',       'Oq*B!Ck2ketTA:k%o%&.+[VYb&<:iJw1&@-X,Q_cyd8t|]!% Q{.3OLi#8>l`uU7' );

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
