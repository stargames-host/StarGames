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
define( 'DB_NAME', 'stargames_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'gi~pD=j|mEDQyN@F1Tn*D`%w61QX`&Sh @V2kCu=JzlJ-wDQ_l4>FGKrI/Byl.CV' );
define( 'SECURE_AUTH_KEY',  '8;FOh{wMlMXsn_[PYq xOx[/rFv9TRWW9kjR{/.<OO%ou3DkIubpns -m-?x1_z.' );
define( 'LOGGED_IN_KEY',    '<Re>O{w7fKZdUD[(,HA![lpHaN&@!PU.CSbdcIgt9D%|x7<EHx`yo?1@pfTP9Eap' );
define( 'NONCE_KEY',        'c`Gt@5 Lhoj*/DU .d;Da{(ox4O(!7Ci+M E@~tIFM^#vIVq:[uwF?ftE yY*vtn' );
define( 'AUTH_SALT',        ')tai!LqL^nBCPTFS7f+aRZqJ$-y$Xz4hU=;]nB/D4yt2j6e_.x3H$b~Xh+ n95[P' );
define( 'SECURE_AUTH_SALT', '=Pk.h`V}MZ{%4y{/:HcgS7r1wED(C=~MNj~0![n,jr.7C=mB)xiYJeJi%%ya+llE' );
define( 'LOGGED_IN_SALT',   'K`RE)Q(*I{BoO`KldA-jG7~>xqRBydPPJL@N1v Va7SCv>|J#xxKd)p2Td:6Er ~' );
define( 'NONCE_SALT',       '!/,n+uA&g$@e/]p2!][Gae>),C?<@Qi}:F#^)1/ykN+Bbd(t<K9ZpE0ZLixy+qp%' );

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
