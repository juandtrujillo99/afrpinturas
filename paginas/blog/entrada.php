<?php

include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/Redireccion.inc.php';

include_once 'app/usuario/Usuario.inc.php';
include_once 'app/admin/Admin.inc.php';
include_once 'app/blog/Entrada.inc.php';
include_once 'app/blog/Comentario.inc.php';

include_once 'app/usuario/RepositorioUsuario.inc.php';
include_once 'app/blog/RepositorioEntrada.inc.php';
include_once 'app/blog/RepositorioComentario.inc.php';




$titulo = $entrada -> obtener_titulo();
$url = RUTA_ENTRADA_BLOG . '/' .$entrada -> obtener_url();
$descripcionPagina = $descripcionNegocio;
$imagenCompartida = RUTA_IMG_OPTIMIZADA."fondo/portada-inicio.webp";

include_once 'seccion/cabecera-inicio.inc.php';
include_once 'scripts/formatoFecha.php';
?>
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=625b4e8e85d62e001964c39a&product=sop' async='async'></script>
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>recortar-imagen.css">
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>sobreponer.css">
<link rel="canonical" href="<?php echo $url; ?>">
<?php
include_once 'seccion/cabecera-cierre.inc.php';
include_once 'seccion/doc-navbar.inc.php';

//entrada.php es el archivo encargado de crear las entradas, es una plantilla
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-4 bg-image" style="background-position: top;background-image: url(<?php echo RUTA_BLOG_COVER;?><?php echo $entrada -> obtener_imagen(); ?>) ;">
            <a href="<?php echo RUTA_BLOG_COVER;?><?php echo $entrada -> obtener_imagen(); ?>" class="filtroEntrada">
                <div class="row ">
                    <div class="d-none d-sm-block section3"></div>                
                    <div class="d-block d-sm-none" style="height: 40vh;">
                        <div class="imageContainer"></div>
                    </div>
                </div>
            </a>            
        </div>
        <div class="col-12 col-md-8 entrada" style="padding:4em;">
            <div class="d-none d-sm-block" style="margin-top: 4em;"><br></div>    
            <h1 class="textoBlack"><?php echo $entrada -> obtener_titulo(); ?></h1>
            <?php if ((($entrada -> obtener_url_externa()) == "")) {
                ?><br><br><?php
            }else{
                ?><br><br><?php
                echo $entrada -> obtener_url_externa();
                ?><br><br><?php
            }
            ?>                 
            <p><?php echo nl2br($entrada -> obtener_texto()); ?></p>      
            <br><br>
            <script async src="https://comments.app/js/widget.js?3" data-comments-app-website="-69nWccB" data-limit="5" data-color="000"></script>
            <br><br>
            <div class="col-12 row blog">
                <div class="col-md-4 col-12 row valign-wrapper">
                    <div class="col-3 icono"><i class="fa-solid fa-envelope"></i></div>
                    <div class="col-9" style="padding: 0 1em;">
                        <h4>Email</h4>
                        <p><?php echo $emailEmpresa?></p>
                    </div>                    
                </div>
                <div class="col-md-4 col-12 row valign-wrapper">
                    <div class="col-3 icono"><i class="fa-solid fa-phone"></i></div>
                    <div class="col-9" style="padding: 0 1em;">
                        <h4>Teléfono</h4>
                        <p>+34 <?php echo $telefonoEmpresa1?></p>
                    </div>                    
                </div>
                <div class="col-md-4 col-12 row valign-wrapper">
                    <div class="col-3 icono"><i class="fa-solid fa-location-dot"></i></div>
                    <div class="col-9" style="padding: 0 1em;">
                        <h4>Ubicación</h4>
                        <p><?php echo $ubicacionEmpresa." ".$direccionEmpresa1 ?></p>
                    </div>                    
                </div>
            </div>
            <br><br>
            <?php
            	include_once 'seccion/blog/entradas_al_azar.inc.php';
            ?>
        </div>
    </div>
</div>

<?php
include_once 'seccion/copyright.inc.php';
include_once 'seccion/doc-terminacion.inc.php';
