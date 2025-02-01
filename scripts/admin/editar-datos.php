<?php


include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/admin/ControlSesionAdmin.inc.php';
include_once 'app/admin/Admin.inc.php';
include_once 'app/admin/editar-datos/EdicionDatos.inc.php';
include_once 'app/admin/RepositorioAdmin.inc.php';
include_once 'app/admin/editar-datos/RepositorioEdicionDatos.inc.php';
include_once 'app/Redireccion.inc.php';



function sa($longitud){
	$caracteres = '0123456789abcdefghijklmnopqrstcvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$numero_caracteres = strlen($caracteres);
	$string_aleatorio = '';


	for ($i = 0; $i < $longitud; $i++) { 
		$string_aleatorio .= $caracteres[rand(0, $numero_caracteres - 1)];
	}
	return $string_aleatorio;
}



/*Usuario recuperacion*/
if(!ControlSesionAdmin :: sesion_iniciada()) {
	Redireccion :: redirigir(SERVIDOR);
}
else {
	Conexion::abrir_conexion();
	$id = $_SESSION['admin'];
	$admin = RepositorioAdmin :: obtener_admin_por_id(Conexion::obtener_conexion(), $id);


	$nombre_admin = $admin -> obtener_nombre();
	$string_aleatorio = sa(10);


	$url_secreta = hash('sha256', $string_aleatorio . $nombre_admin);
	$peticion_generada = RepositorioEdicionDatos :: generar_peticion(Conexion :: obtener_conexion(), $admin -> obtener_id(), $url_secreta);


	Conexion :: cerrar_conexion();



	if ($peticion_generada) {
		Redireccion :: redirigir(RUTA_EDITAR_DATOS_ADMIN."/".$url_secreta);
	}

}