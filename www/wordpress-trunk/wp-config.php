<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_trunk');

/** MySQL database username */
define('DB_USER', 'wp');

/** MySQL database password */
define('DB_PASSWORD', 'wp');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         'yq+{nw+]/oTih-tzNkHZiS_2 zC6D+AJE<B_h<t+v|sk4N-&DtiAqJW;p:tBH~|h');
define('SECURE_AUTH_KEY',  'O+2OGfq5a=qF5uCTGJy-vz|YZJ;qVm?|RV-8C:@n_MW/r_@Xz^&:^ {e#f|D7PnP');
define('LOGGED_IN_KEY',    '?;PJ4!Jk#bxm{`WzUkSx3)?`s0Cj]FwgoEi!b`|Z:54HOYe &%G,N@?W:a7W#/EG');
define('NONCE_KEY',        '<Mge.Xa{:6C0bA}g@j>=sCX-]6xe/L96br;GG{v/g(cQy50f-EW/qCOqIg@E|GM<');
define('AUTH_SALT',        '/&Dq%CaVoWB8~0.Y;nas=lW@r9gS)Sov,vhp}$oVTfK`nr^@ZZ3n=l@E5#]vNeKh');
define('SECURE_AUTH_SALT', 'Lp#+)V5,+dE--{aS:qc-:N/U7cYo(4wzbBuukE[ck4+|RguKnfRqVdyv@~9iGR%&');
define('LOGGED_IN_SALT',   'h2vLV,YCr`cPZQQ2c)@B%eYg:/~r!nG2W24s~5_(w%Q58W&0}[v!K@5FZCfP()W)');
define('NONCE_SALT',       'A}?%u$5<ArLJjuf^O|^&jQ[GZdB<(gI]p41+A=MR6DO+LM0?(qh<ZlW1d5t0G=y+');


$table_prefix = 'wp_';


// Match any requests made via xip.io.
if ( isset( $_SERVER['HTTP_HOST'] ) && preg_match('/^(local.wordpress-trunk.)\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}(.xip.io)\z/', $_SERVER['HTTP_HOST'] ) ) {
	define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] );
	define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] );
}

define( 'WP_DEBUG', true );



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
