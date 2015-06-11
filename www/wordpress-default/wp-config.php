<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_default');

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

define('AUTH_KEY',         '[fx5A^k6gHF0de(qE9u&@/4mKvb_TJLh$DGt6_=(uEh<aEQW}V?t=(tm+)qV[1t!');
define('SECURE_AUTH_KEY',  'KNgB4;T{hWPqb-6U>MkbbzMrYkvqX2a#7r_)[o*@T1}&PdU)S+vzfl)|]A:9lEDw');
define('LOGGED_IN_KEY',    'LFvq5A-]`(Rg|QdpQF~yxR-U`=o2PI;..x<mb1E+)0=XxT28k:|[~XmqR3ro2HMd');
define('NONCE_KEY',        'WhE=<N$-8~[kZb4[Hg+ q-|8m*iBvyy.TwuVMzT36R7g|JZ<U1}|(&oHP]VTER^h');
define('AUTH_SALT',        'R/De9@5zW(z4A;JuAcq-L+kH.q-T5SF|Z;YNO$Fxim,+5>.a]}{!6$kAZ8}>+o5M');
define('SECURE_AUTH_SALT', ',p.cVf@ZOu L?mr<ji;9.AZj~O|iL2^0P)GD$h?!xt/?t_cpg#WsLmtv0$v|N:#x');
define('LOGGED_IN_SALT',   'd&4jDutF=eqrT]Y.GA*gM@Mnpi6*T]4|8(E5a+h7P[mb7>0:i)ZLexI;O-]:N<u!');
define('NONCE_SALT',       'a1{>-z&o-OEnZ@m,rEnbejZ^U|3<-0:TzCO(SLtA>z>TFx1D0(.5 8Y]Kl,E.nU7');


$table_prefix = 'wp_';


// Match any requests made via xip.io.
if ( isset( $_SERVER['HTTP_HOST'] ) && preg_match('/^(local.wordpress.)\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}(.xip.io)\z/', $_SERVER['HTTP_HOST'] ) ) {
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
