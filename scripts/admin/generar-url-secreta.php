<?php

include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';

include_once 'app/admin/Admin.inc.php';
include_once 'app/admin/RecuperacionClave.inc.php';
include_once 'app/admin/RepositorioAdmin.inc.php';
include_once 'app/admin/RepositorioRecuperacionClave.inc.php';

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
/*Empleado recuperacion*/
if (isset($_POST['enviar_email'])) {
	$email = $_POST['email'];

	Conexion::abrir_conexion();

	if (!RepositorioAdmin :: email_existe(Conexion :: obtener_conexion(), $email)) {
		return;
	}

	$admin = RepositorioAdmin :: obtener_admin_por_email(Conexion :: obtener_conexion(), $email);

	$nombre_admin = $admin -> obtener_nombre();
	$string_aleatorio = sa(10);

	$url_secreta = hash('sha256', $string_aleatorio . $nombre_admin);

	$peticion_generada = RepositorioRecuperacionClave :: generar_peticion(Conexion :: obtener_conexion(), $admin -> obtener_id(), $url_secreta);

	Conexion :: cerrar_conexion();

	if ($peticion_generada) {
		Redireccion :: redirigir(SERVIDOR);
	}

}