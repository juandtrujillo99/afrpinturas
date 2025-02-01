<?php

include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/Redireccion.inc.php';

include_once 'app/usuario/RepositorioUsuario.inc.php';
include_once 'app/usuario/ControlSesion.inc.php';
include_once 'app/admin/ControlSesionAdmin.inc.php';
include_once 'app/tienda/EscritorEntradas.inc.php';

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



$descripcionPagina = $descripcionAlterna;
$imagenCompartida = RUTA_IMG_OPTIMIZADA."fondo/AFR-about.webp";


include_once 'seccion/cabecera-inicio.inc.php';
?>
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>scroll-x.php">
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>recortar-imagen.css">
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>sobreponer.css">
<?php
if(ControlSesionAdmin :: sesion_iniciada()){
	include_once 'scripts/tienda/barra-progreso-archivo-imagen.php';//script que sube las imagenes de las entradas
}
include_once 'seccion/cabecera-cierre.inc.php';
include_once 'seccion/doc-navbar.inc.php';
include_once 'seccion/inicio/portada.inc.php';
?>

<div class="container-fluid">		
	<div class="row">
		<div class="col-12 row">
			<div class="col-1"></div>				
			<div class="col-10 row anime-1 center" id="services">				
				<div class="col-12" style="margin-top:4em;margin-bottom:2em;">
					<p class="textoTitulo1 textoBlack">Proyectos recientes</p>					
				</div>				
				<?php EscritorEntradasTienda::escribir_cuatro_entradas(); ?>				
				<div class="col-12" style="margin-top:2em;">
					<p class="textoParrafo1">Encuentra en AFR Pinturas & Rehabilitaciones un equipo de profesionales dispuestos a conseguir los mejores resultados.</p>				
				</div>
				<div class="col-12 center" style="margin-top:1.5em;font-size: 1em;">
					<a class="btn btn-principal-animado" href="<?php echo RUTA_TIENDA; ?>"><p class="textoBold">todos los proyectos</p></a>
				</div>
			</div>
			<div class="col-1"></div>
			<div class="col-1"></div>				
			<div class="col-10 row anime-1">				
				<div class="col-12" style="margin-top:4em;">
					<p class="textoTitulo1 textoBlack">¿Por qué escogernos?</p>					
				</div>							
				<div class="col-12" style="margin-top:2em;">
					<p class="textoParrafo1">AFR pinturas y rehabilitaciones siempre ha tenido como objetivo en cada proyecto capturar los sueños y mejorar el estilo de vida de los dueños de viviendas y negocios de la marina alta y alrededores ofreciendo servicios de pintura de la mejor y más alta calidad.<br><br>Revitaliza las paredes de tu espacio con pintura, tanto afuera como adentro. No importa si optas por un color neutro o intenso, una nueva capa de pintura puede hacer la diferencia en la forma que se ve y se siente tu hogar o tu oficina.</p>				
				</div>
				<div class="col-12 row choose center">
					<div class="icono col-md-3 col-12 row valign-wrapper">
						<i class="col-12 fa-solid fa-users-viewfinder"></i><p class="col-12">Confiables</p>
					</div>
					<div class="col-12 center d-block d-sm-none"><hr></div>
					<div class="icono col-md-3 col-12 row valign-wrapper">
						<i class="divisiones col-12 fa-solid fa-ranking-star d-none d-sm-block"></i><p class="col-12 d-none d-sm-block divisiones">Profesionales</p>						
						<i class="col-12 fa-solid fa-ranking-star d-block d-sm-none"></i><p class="col-12 d-block d-sm-none">Profesionales</p>	
					</div>
					<div class="col-12 center d-block d-sm-none"><hr></div>
					<div class="icono col-md-3 col-12 row valign-wrapper">
						<i class="col-12 fa-solid fa-handshake"></i><p class="col-12">Comprometidos</p>
					</div>
					<div class="col-md-3 col-12 valign-wrapper">
						<a class="d-none d-sm-block btn btn-secundario-animado" href="<?php echo RUTA_TIENDA; ?>"><p class="textoBold">Obtener presupuesto</p></a>
					</div>							
				</div>
			</div>
			<div class="col-1"></div>
			<div class="col-12 center d-block d-sm-none" style="margin-top:1.5em;margin-bottom: 3em;font-size: 1em;">
				<a class="btn btn-principal-animado" href="<?php echo RUTA_TIENDA; ?>"><p class="textoBold">Obtener presupuesto</p></a>
			</div>	
		</div>
	</div>
	
	<?php 
	include_once 'seccion/inicio/certificaciones.inc.php';
	include_once 'seccion/inicio/opiniones.inc.php';
	include_once 'seccion/inicio/equipo.inc.php';
	include_once 'seccion/inicio/faq.inc.php';
	?>
</div>

<?php //body ?>



<?php
include_once 'seccion/footer.inc.php';
include_once 'seccion/copyright.inc.php';
include_once 'seccion/doc-terminacion.inc.php';
?>