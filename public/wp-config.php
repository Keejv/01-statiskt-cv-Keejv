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
define( 'DB_NAME', 'scotchbox' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '|z(Qnw`zjk{]AC?XfTdcgJ0v3AQ7S!89]8E;PzFo9KgBWtnx_7bNNM9:$iCy1=U)' );
define( 'SECURE_AUTH_KEY',  'w+TS6M3UcuP9|`WSncq`9?!mEqr2Gd%|j$gqsl9lNhw?5i1[8/|fPvYv>QkR(,x;' );
define( 'LOGGED_IN_KEY',    ' lDO9.=:nUea=)) ;zP42K&uY8tJB:Vr7UqOC?h+%|t7xiB FG8#{aaE5_%~6(In' );
define( 'NONCE_KEY',        '=8A.>dZKh_dt&9`u]Em6}Jy}3Joa}-]cX; ki-1Y&h30hm:R5]F{d2r9?CgR,oCs' );
define( 'AUTH_SALT',        'HhA3|Hp[n5`$8_8m%djeH<Z`=8${G.rvIEd#%$8<={lIz^m2~GwwJ$K]Xgq-{,]q' );
define( 'SECURE_AUTH_SALT', 'GOI7-{Fr~N*n)BE/ApkEnXcQEW9PWysjz<M6j}1^66IEXP{{Ax6#[&jdUo v!!iL' );
define( 'LOGGED_IN_SALT',   'kqsf!I*GP$W?HeJqNYU&n@zn=a]j7*@5f4%p7d|,?1Ae*(gu&HGm;z?pcrCyR80F' );
define( 'NONCE_SALT',       '5)ugX2UZAn{9<(/6!+-&Au*i3LCAfb?`P7$V(Xgtth17[Mr/X?p8r||P6|:NB_] ' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
