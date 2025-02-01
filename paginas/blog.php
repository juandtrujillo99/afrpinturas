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

$titulo = "Blog ".$nombreEmpresa;
$descripcionPagina = $descripcionNegocio;
$imagenCompartida = RUTA_IMG_OPTIMIZADA."fondo/AFR-about.webp";



include_once 'seccion/cabecera-inicio.inc.php';
?>
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>recortar-imagen.css">
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>sobreponer.css">
<?php
include_once 'seccion/cabecera-cierre.inc.php';
include_once 'seccion/doc-navbar.inc.php';
?>



<?php //body ?>
<div class="container-fluid">		
	<div class="row">
		<div class="col-12 row">
			<div class="col-1"></div>				
			<div class="col-10 row anime-1" id="services">				
				<div class="col-12" style="margin-top:6em;">					
                    <div class="d-none d-sm-block"><br><br></div>
					<p class="textoTitulo1 textoBlack">Conocimiento, métodos y resultados de alta calidad</p>
					<br>
				</div>				
				<?php EscritorEntradasBlog::escribir_entradas(); ?>
			</div>
			<div class="col-1"></div>
			<div class="col-12" style="margin-bottom:5em;"></div>	
		</div>
	</div>
</div>

<?php //body ?>

<?php
include_once 'seccion/copyright.inc.php';
include_once 'seccion/doc-terminacion.inc.php';
?>