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
define( 'DB_NAME', 'CodeAcademy_db' );

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
define( 'AUTH_KEY',         'TVi/Tar=nv3vB29TVtIaw=R)QkqDA.R8NMq+Rl,,J$wK>i4G^#UbDMyV8,!$V/ic' );
define( 'SECURE_AUTH_KEY',  '0upq}6VWU49ZXw%%#+bSlJXfh=e}<Lzl JO$a2](|m.YxYi;]CJ 3cT}n*$sQ^O7' );
define( 'LOGGED_IN_KEY',    'eoO8U1VB`M_g)BPo h=2{k =%gQS9+/=u*^^i;<nVeU^oDaa`,qG|p`Ss{aTGsZc' );
define( 'NONCE_KEY',        '4W7K*1H{]<J9W_{[ Ia&ugYi:5$,M*;mBPvP-&$*:0B1sG$<)ao.k~wM4)2A01;I' );
define( 'AUTH_SALT',        '3tt=UV3e1|Oxv4pT=VeO.SgArJd(EsZeNwWI4O98v,`Z wPa@#)Og2=F=DFD3N %' );
define( 'SECURE_AUTH_SALT', 'W_O/J-a(rWkrXIqq9:eXg#Xh@W9l0[s)_t}V>+2GaCu=*TWjrW3$fE8ilB5;R69$' );
define( 'LOGGED_IN_SALT',   'SWQ!LvPJ:G>X:Y~ICb^CWbkcOc,BqceDB*>tJP9s)~HE^2|zgu/Ag;C9p0I<p]:p' );
define( 'NONCE_SALT',       '_;wg]@Y!bZLT_8Zd>6vYGs[q.`H-P4yF9v21GzvK0P}|E(.^N1[;?)w%b2a:g33%' );

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
