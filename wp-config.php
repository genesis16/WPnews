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
define( 'DB_NAME', 'wpnews' );

/** MySQL database username */
define( 'DB_USER', 'wpnews' );

/** MySQL database password */
define( 'DB_PASSWORD', 'zV7ECs3HvRkfGEKo' );

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
define( 'AUTH_KEY',         '{Tj?ArxzG$_T:~]OrI>NV`xUo8&52@#C|4U|Jme]n@,di$bxIV,XZl!p&MhC?1m4' );
define( 'SECURE_AUTH_KEY',  '5$wCBw6>0/0A_R(1j|0Z|:qwPnp{*o!n+g98Ha15tE9_nzy#fDn|omIt0MIf)K>E' );
define( 'LOGGED_IN_KEY',    'pHMk5O*ro-5tL]5NLQ3BUYNs5`ziAf,DTC: V{`lTD5q .8ZUd0=@#}Bs_di7/&s' );
define( 'NONCE_KEY',        'Qj-Ly?`gF){aK#&+IDC1=M|9r=B;_!<G<^?h)nwF%HLUs~Nx2S{@=8,QEiC4XIam' );
define( 'AUTH_SALT',        ' ?Fx3h}ABxj|[;-~V.,vC/:7(&1]%Wm&~$n>.|qPvm,395f)?MqD:#P]8`M HJjo' );
define( 'SECURE_AUTH_SALT', '^T)$TkiF6ckB57(/#$)[DNj.QuDyV-zmOC-A6pX)J7;.^q]8qCK(!7c6p{b#`]ip' );
define( 'LOGGED_IN_SALT',   'Go8.a=<L0mzK $6fd*5njEVV|+]tA(&@|hsZoF;*&le@NL+6^N${)n{`PMNb]]{_' );
define( 'NONCE_SALT',       '-Du64N&;Vzlr}L{Qr|YVl*B?NXnpNJn+ @n16B?igQQKk1Dw$,v!#;CqIRmj3y$S' );

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
