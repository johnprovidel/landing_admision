<?php


/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'admision_lanuc2017');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'admision_us2017');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '=q2h(4tAmT]@');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'c9jTuwFw7X%E0+0}8,&=q;_OzQ9x9z#dp:OSe)CcDgp`0:CqP:PYBFsNbyARS;I>');
define('SECURE_AUTH_KEY', '1uis96z=(M(z&!|( .`XB|6W</T@+;m2&G9@}3CL674M-o>6zTx5$5qX#HsNVQzg');
define('LOGGED_IN_KEY', '%4WBXLi_)gg+jU1?i],@RP*{]p8hszX8<f@|+*Y?XgX02N_Vmf8UI*`~&{|,f,7!');
define('NONCE_KEY', '(+TGnrn1XN@ztu@}fLV0bDZUGD-V|,HUo:->M {Wa:bpRTXnDATP%Q>Tn5R@3D/(');
define('AUTH_SALT', 'gm%mWg(dA3/g>vEqCq{_,M)M3uYP7;gW=-e&MP7NFUYyp&|(Ewo.%JEat%quJ#WB');
define('SECURE_AUTH_SALT', '_W55L-f{Sr`|,sAYQjp;1;lai~}Af{WXG,oizla7#-|L:3R#%F?lN|9[S[,S/<q;');
define('LOGGED_IN_SALT', 'IQwt1`,hP==Yw-+AI!LN}l),{vG!!@<el^i!wR&RM?).>Sr}]N4K:_ntB<pJ5%%%');
define('NONCE_SALT', 'g`D9I**vFqNTr-:TXX:^b<t_G<ac~`M)RoARCGDlOnIFu<N(3U0s~-.u2AW`uY@|');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'adm2017_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

