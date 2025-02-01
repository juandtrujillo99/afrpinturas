<?php

include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/Redireccion.inc.php';

include_once 'app/usuario/ControlSesion.inc.php';
include_once 'app/admin/ControlSesionAdmin.inc.php';

include_once 'app/usuario/RepositorioUsuario.inc.php';
include_once 'app/blog/EscritorEntradas.inc.php';

if(!ControlSesion::sesion_iniciada() && !ControlSesionAdmin::sesion_iniciada()) {
    Conexion :: abrir_conexion();
} else {

    if (ControlSesionAdmin::sesion_iniciada()) {
        Conexion :: abrir_conexion();
        $id = $_SESSION['id_admin'];
        $admin = RepositorioAdmin :: obtener_admin_por_id(Conexion::obtener_conexion(), $id);
    }
    elseif (ControlSesion::sesion_iniciada()) {
        Conexion :: abrir_conexion();
        $id = $_SESSION['id_usuario'];
        $usuario = RepositorioUsuario :: obtener_usuario_por_id(Conexion::obtener_conexion(), $id);
    }
}

$titulo = "Videos ".$nombreEmpresa;
$descripcionPagina = $descripcionNegocio;
$imagenCompartida = RUTA_IMG_OPTIMIZADA."fondo/AFR-about.webp";
$duracionVideo = 60;//Se pone un numero que indica los segundos del video



include_once 'seccion/cabecera-inicio.inc.php';
?>
<meta http-equiv="refresh" content="<?php echo $duracionVideo ?>; URL=<?php echo RUTA_VIDEOS_OFICINA_15 ?>">
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>recortar-imagen.css">
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>sobreponer.css">
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>video.php">
<?php
include_once 'seccion/cabecera-cierre.inc.php';


?>



<?php //body ?>
<div class="container-fluid clima">		
	<div class="row">
        <div class="col-3"></div>
		<div class="col-6 row anime-1">
            <iframe src="https://www.tutiempo.net/ondara.html"><meta HTTP-EQUIV="Refresh" CONTENT="5; URL=http://www.google.com"></iframe>
		</div>
        
        <div class="col-3"></div>
	</div>
</div>

<?php //body ?>

<?php
include_once 'seccion/doc-terminacion.inc.php';
?>



