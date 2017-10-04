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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', '172.17.0.1:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'cekVkTwOhLrQN+,<([6uSM[58.qp& ?#N[~#.lju#M]LZG7(,SqD_mf1qB!`|0dM' );
define( 'SECURE_AUTH_KEY',  'kao8$)-nR/gwM5R&44a?,26rgJbsgI({*f4.{k3rzI-W21h~h7T(]JNO _W&X[;0' );
define( 'LOGGED_IN_KEY',    '`x3`WU1;v~EU{^2D;U6{Z p1ut9BH-C!F!xdc99A:$o%CQWDr>6}+z$D2^3<I<OJ' );
define( 'NONCE_KEY',        'l=n&oQ~))ImAcVg}x_T ,m3Ida&CAOu{;&L:EF_K4Ve2brhE|f5mro|=H~}5+9oZ' );
define( 'AUTH_SALT',        'vZsvPM,!KOv^N84q_0XY>#TaD}]Vl7QQ<B2(=R{zJbW>3Y43]ZLbAJ9xO^i:sVP+' );
define( 'SECURE_AUTH_SALT', '&O6ckO5y=PI~0iduz{e6`EuKX}z9t6x;t<SMpix=kHgN>g-4zk7{j7PaIP:ZWtm~' );
define( 'LOGGED_IN_SALT',   'B9K@AIy9V:bTZO+aV$K{jGL`3I&[dfuv<JX#$qjHpG)MOF*2{wu+bLWK,o$S35bH' );
define( 'NONCE_SALT',       'fral$NYX!V6AhaE5+j8z`OA6,&.A^X-JGK|znJ<WH2%{A2rT7RX6lB9OkUjG^ c,' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);
define('WP_DEBUG_LOG', false);
define('COOKIE_DOMAIN','');



define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', true );
$base = '/';
define( 'DOMAIN_CURRENT_SITE', 'www.mywordpress.local' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

/* That's all, stop editing! Happy blogging. */
    // If we're behind a proxy server and using HTTPS, we need to alert Wordpress of that fact
    // see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
    if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
    $_SERVER['HTTPS'] = 'on';
    }

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
