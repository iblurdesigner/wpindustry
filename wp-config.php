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
define('DB_NAME', 'industry');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY', '4_vHqdwXTEzx `/@FjH==$0pD+sevqIFOzKS}N|5S~<i4! z>B?OCa`@yJ/0!6~,');
define('SECURE_AUTH_KEY', '(/1HN,v;8&JQ!P?3[ jmeoaii*WU:Ja}Kdcr11=04Yr7wU;2X*edH`5(V>4@LovX');
define('LOGGED_IN_KEY', 'iJIC+0$J4Wul,=VKc5WxF_6yP)R.DjkqEgO6-PHYS1(@JBvw{8`gad~n.:5N81:.');
define('NONCE_KEY', 'p2<$:yllf|{saWm^mt,IH*z@PmLAug^M1ZuIl|CKI[>?[_P#Yc}-@Iq)Lb+ bwkL');
define('AUTH_SALT', ';OMJi[&.;e&}CL3Ytr5*4<]6Fs!OB9%yT$^QO&B/6*s8;EDg,j8QWKu:k|=D-7^E');
define('SECURE_AUTH_SALT', 'yiy2Yhb}e|f-.7m.pR~VEY1f>]`0t%G:KKi+KxKOTWNzIkffkrPNM(-|Ch^8+O3T');
define('LOGGED_IN_SALT', '2)rGa#TL>BsAe4Yg~9s]V0Agol9Z,o5er7Dbt!nGE`nI,oA9%0t1I!S,gO~N F!M');
define('NONCE_SALT', 'j,t[^N{2*OC3F}*@Z0[n;P9&dwdtbs;Lp9@6C361`?ry&*8Dl7<bynle^9~vBs]P');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


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

