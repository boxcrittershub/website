<?php
define('WP_AUTO_UPDATE_CORE', 'minor');// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress website is not managed by WordPress Toolkit anymore.
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
define( 'DB_NAME', "website_db" );

/** MySQL database username */
define( 'DB_USER', "root" );

/** MySQL database password */
define( 'DB_PASSWORD', "" );

/** MySQL hostname */
define( 'DB_HOST', "localhost" );

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
define('AUTH_KEY', '3Q5t/ZkW4[Wk+Oc21uFg8mBuu*i)37X%16|]5o1rLZeswPk24c/YDYFtC6#f8_~g');
define('SECURE_AUTH_KEY', '@y6|kL~c9_+(5/4:(Z0:z1Mc468)3*n6_8O89_TA)12v7pq:Dx&FBfq2g[D4#20[');
define('LOGGED_IN_KEY', '6B6F7p0IXlPR7G2!o_bDC)Zz3vOj3%+%B!KI7I_Wd[D)x6Qxq5tA98_D2D/:/oe_');
define('NONCE_KEY', 'o15j3Rz(7LoqXb1*ij2UN(hd_07jd6cNj5wK)87K-5(w]&Q&&|i+]nAK6Zl3Do3@');
define('AUTH_SALT', 'lgGa&3mc+f3J0oELEU0J62C8xd0GWRc:%Aio%hU1X881l&(jel(+k(E;cR](Xyg4');
define('SECURE_AUTH_SALT', '0wNr5n0:F)EP13h379)8F43%t)S1!4pFjy#vO)h:69Q3QFFt8yZwnPKkat1Tev5w');
define('LOGGED_IN_SALT', 'r_&FWR69vJ~(eW&3cmLKo668QNL#4Kb0OA8K(oa05b/w;@;W[dS:M2EBuV*;&d60');
define('NONCE_SALT', '8/;8o5O93rbS5S!*t0EeuLc-0ZM@oTB/(0x(7XfD0f:2Q39Ge~+Jx9M7J0|/79oK');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '76thF_';


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
