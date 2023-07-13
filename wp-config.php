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

define( 'DB_NAME', "flowie" );


/** MySQL database username */

define( 'DB_USER', "root" );


/** MySQL database password */

define( 'DB_PASSWORD', "" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


/** Database Charset to use in creating database tables. */

define( 'DB_CHARSET', 'utf8mb4' );


/** The Database Collate type. Don't change this if in doubt. */

define( 'DB_COLLATE', '' );


/** Remove auto P / BR from contact form 7 */

define ( 'WPCF7_AUTOP', false );


/**#@+

 * Authentication Unique Keys and Salts.

 *

 * Change these to different unique phrases!

 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}

 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.

 *

 * @since 2.6.0

 */

define( 'AUTH_KEY',         '}Eb#FT5NL@}hhu,]$h$ET*@0CJnEKl5|VEbc@32}I`j2e`6tL48A}M/a;B:TM?<(' );

define( 'SECURE_AUTH_KEY',  '->h3lL.0+x;O;2xV[yb,~=&XbWq1?cR8cdDz#I.FuWZM.k=3{p<s;52E}cMQV8Dp' );

define( 'LOGGED_IN_KEY',    'o?:!A-y_I@-[=W8:S@<EDL[[#x7`EF1 )d_pwA;R*:BE}xe+Z3uJit{}x?~Ft@y&' );

define( 'NONCE_KEY',        'AxzDo^)O!-Tu|zLk#7MQ+%c8P6D{O796NjiL;%iUrYJ(9oS_RwTelPNb}pbFS/7%' );

define( 'AUTH_SALT',        '4-eeE0G:a` ohf>3*o}^3PWdbh}YTprU[bsZp-mypqf@!a@DOawwa2q+hWkw1-a8' );

define( 'SECURE_AUTH_SALT', '(IH#b/WO{s=imO|>0.JRuTWw(K}7T{#i+^$X}`|0zwe+CuT9Ij%We%].ts8/#NJ6' );

define( 'LOGGED_IN_SALT',   'x@|qHc1i2+8:#km@[=Jub<zjw5@Z;C}KW314zt/KR597m{JISk6pZI_LK%2;5C3a' );

define( 'NONCE_SALT',       '</+}a$W.TMWU``71/%*2%($4<X$ypZ[OCLeHUw4ac<af6hn_P>W rvyV}EZvr}E5' );


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