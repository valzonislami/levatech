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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'y25/<=MV;>^{>u112=u~(2|u$V{4KKe|H740{8/{yZKKH%l,bb*}<f<hq6w 1mHD' );
define( 'SECURE_AUTH_KEY',   '=NoAE_()]b@=w!~/(IR,G=PJk9qDsjZPBMFxz:0(sfIwzHo8B}meL98*rE4O}Vc;' );
define( 'LOGGED_IN_KEY',     'I#${P.*ZY2N8EPq2[(>o|(3Nii~+)IqCt*c$esWy^@F:(cqzfPYEB`?s> ,7Am[S' );
define( 'NONCE_KEY',         'y_[J*xA52$!V{h{I6LqU/_9K(cS4YNh:hIU&PIr&[aukuf#~jioj,8SwKtAWPS4C' );
define( 'AUTH_SALT',         '~y5`q;F7d@t}j%g5Oo;UbT8tE4.>d&/.KsN?9 $b:aDFO_&-I*,Y,_D?kU.s%L(^' );
define( 'SECURE_AUTH_SALT',  'I#=zZ$6d^{aFf$L]{H `v6&+M%. !,mVchvJJ+ 18 8/@SO.xXU2vW9s}%-< mQ~' );
define( 'LOGGED_IN_SALT',    '|!oRXQVAs)}_.NK1g.ohi64q`6Cf-^J^DVafFZ?qBrTv[BNxLB{z4GzAO6,d&`m9' );
define( 'NONCE_SALT',        '&@]T$v7YPhAKG.b c.8.}dR~B(k~*9m:KGP5tdm8J+=ywmAN?!Z`>)b;t2r3ijz3' );
define( 'WP_CACHE_KEY_SALT', 'ZC&pU$NFE0vC@L)]*Uh$wN#7p.4huj(hr;gQPJzrY}Mp{P._DIOZp-XRQ`>,jk9R' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
