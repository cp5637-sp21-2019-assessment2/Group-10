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
define( 'DB_NAME', 'amarad51_iankirkwood' );

/** MySQL database username */
define( 'DB_USER', 'amarad51_iankirk' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin678#$' );

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
define( 'AUTH_KEY',         'C4bT%,>-eLZPIR7Drtq[2=@6.V}>2G0b dq$9?k.)QtU.y_aGU3B=s,r1JuX$Zlf' );
define( 'SECURE_AUTH_KEY',  'GN(%Ksb$v#js,$S`Bi^C~ x~vb58nsB-BiXa.2BR5eH`MQvUc1(0k[ATC{}E*p-q' );
define( 'LOGGED_IN_KEY',    'ky5#Es%HAK{p6X`tbYgIPpqdB([_ZTT@3<S0xP}[>1TR<@ml,@f5ndVQ}P}Nc/1-' );
define( 'NONCE_KEY',        'V);?;QX1j3OLodDiZ_Dr{82^~0M*0w?MLCgyRNLpI_j^yi#qe0bhq)p)aN8)$)C}' );
define( 'AUTH_SALT',        ':0XDN=MsHrU&mJ^({D5xL$@v^4P_a(G!(5%GZQ9e{/vl^80WEJv{c.1QVv=YN__F' );
define( 'SECURE_AUTH_SALT', 'Xg`?{**s-_OG${0&?.(U ?vw}^ 7)?2[{V=@3Eb9&prfi9109=IFQM&}h Qx>:0(' );
define( 'LOGGED_IN_SALT',   'nZh3ZB?;(eO8:1XV_l H`o#,xFEdX)Fh_[rvM5^>nQv4R5*~UI,`~D~<i7ZRk[[~' );
define( 'NONCE_SALT',       '=0,z%9}##vbloCxNb_I*y;:y</C{p xxPBvJ6nO0%v=t ]C{}vw{o htV0;y}E{H' );

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
