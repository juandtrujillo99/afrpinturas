<?php
header($_SERVER['SERVER_PROTOCOL'] . "404 Not Found", true, 404);

include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
/*
include_once 'app/usuario/Usuario.inc.php';

include_once 'app/usuario/RepositorioUsuario.inc.php';
*/
$titulo = "Página no encontrada";
$descripcionPagina = $descripcionAlterna;
$imagenCompartida = RUTA_IMG_OPTIMIZADA."fondo/AFR-about.webp";

include_once 'seccion/cabecera-inicio.inc.php';
?>
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>recortar-imagen.css">
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>sobreponer.css">
<?php
include_once 'seccion/cabecera-cierre.inc.php';
include_once 'seccion/doc-navbar.inc.php';
?>

<div class="container-fluid" style="background-color: #180d45;">
	<div class="col-12">
		<div class="row">	
			<div class="col-12 valign-wrapper">
				<div class="col-12">
					<?php //pc ?>
					<div class="row section d-none d-sm-block">
					    <?php //pc ?>
					    <div class="sobreponer d-none d-sm-block">
					        <div class="imagen-background">
					            <img loading="lazy" src="<?php echo RUTA_IMG;?>webp/otras/patern-1.webp" class="imagen-4">
					            <img loading="lazy" style="position: absolute;right: 0" src="<?php echo RUTA_IMG;?>webp/otras/patern-2.webp" class="imagen-3">
					        </div>        
					        <div class="texto-contenido col-5">
					            <p style="font-size: 3em;padding-bottom: .5em;" class="textoBookBold">Lo sentimos</p>
					            <p style="font-size: 1.3em;padding-bottom: 1em;line-height: 1.5em;" class="textoBookBold">Esta página no existe o no está disponible. Parece que no encontraste lo que buscabas.</p>
					            <div class="col-12" style="padding:1em 0 3em 0">                   
					                <a class="btn btn-secundario-animado" href="<?php echo RUTA_TIENDA; ?>"><p class="textoBold">Ver proyectos</p></a>
					            </div>
					        </div>
					    </div>
					</div>
					<?php //movil ?>
					<div class="row section d-block d-sm-none">
					    <?php //seccion portada pc ?>
					    <div class="sobreponer d-block d-sm-none">
					        <div class="imagen-background">
					            <img loading="lazy" src="<?php echo RUTA_IMG;?>webp/otras/patern-1.webp" class="imagen-2">
					            <img loading="lazy" style="position: absolute;right: 0" src="<?php echo RUTA_IMG;?>webp/otras/patern-2.webp" class="imagen-4">
					        </div>        
					        <div class="col-12 section valign-wrapper white-text">
					        	<div style="padding:0 3em;">
						            <p style="padding-bottom: .5em;" class="textoBlack textoTitulo">Lo sentimos</p>
						            <p style="padding-bottom: 1em;" class="textoBook textoSubtitulo">Esta página no existe o no está disponible. Parece que no encontraste lo que buscabas.</p>
						            <div class="col-12" style="padding:1em 0 3em 0">                   
						                <a class="btn btn-secundario-animado" href="<?php echo RUTA_TIENDA; ?>"><p class="textoBold">Ver proyectos</p></a>
						            </div>
					            </div>
					        </div>
					    </div>
					</div>
				</div>
			</div> 
		</div>
	</div>
</div>


<?php
include_once 'seccion/footer.inc.php';
include_once 'seccion/copyright.inc.php';
include_once 'seccion/doc-terminacion.inc.php';
