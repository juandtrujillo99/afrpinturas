<?php

include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/Redireccion.inc.php';

include_once 'app/usuario/Usuario.inc.php';
include_once 'app/admin/Admin.inc.php';
include_once 'app/tienda/Entrada.inc.php';
include_once 'app/tienda/Comentario.inc.php';

include_once 'app/usuario/RepositorioUsuario.inc.php';
include_once 'app/tienda/RepositorioEntrada.inc.php';
include_once 'app/tienda/RepositorioComentario.inc.php';

include_once 'app/admin/ControlSesionAdmin.inc.php';

if (ControlSesionAdmin::sesion_iniciada()) {    
    Conexion :: abrir_conexion();
    $id = $_SESSION['id_admin'];
    $admin = RepositorioAdmin :: obtener_admin_por_id(Conexion::obtener_conexion(), $id);
}


$titulo = $entrada -> obtener_titulo();
$url = RUTA_ENTRADA_TIENDA . '/' .$entrada -> obtener_url();
$descripcionPagina = $descripcionAlterna;
$imagenCompartida = RUTA_TIENDA_COVER.$entrada -> obtener_imagen();

include_once 'seccion/cabecera-inicio.inc.php';
?>

<script type="text/javascript">const imageUrl = '<?php echo RUTA_TIENDA_COVER.$entrada -> obtener_imagen() ?>';</script>
<?php/*
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=62e668918fce6e001925d9c8&product=sop' async='async'></script>
*/?>
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>recortar-imagen.css">
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>sobreponer.css">
<link rel="canonical" href="<?php echo $url; ?>">
<?php
include_once 'seccion/cabecera-cierre.inc.php';
include_once 'seccion/doc-navbar.inc.php';
?>
<div id="fb-root"></div>
<script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></script>
<?php
//entrada.php es el archivo encargado de crear las entradas, es una plantilla
?>





<div class="container-fluid">    
    <div class="row">
        <div class="col-12 bg-image" style="background-image: url(<?php echo RUTA_TIENDA_COVER;?><?php echo $entrada -> obtener_imagen(); ?>) ;">
            <a href="<?php echo RUTA_TIENDA_COVER;?><?php echo $entrada -> obtener_imagen(); ?>" class="filtroEntrada">
                <div class="row filtroEntrada">
                    <div class="d-none d-sm-block section3"></div>                
                    <div class="d-block d-sm-none" style="height: 20vh;">
                        <div class="imageContainer"></div>
                    </div>
                </div>
            </a>            
        </div>

        <?php // informacion para moviles  ?>  
        <div class="col-12 d-block d-sm-none" style="padding: 3em;margin-top: -2em;background-color: white;border-radius: 2em 2em 0 0;box-shadow: 0px -2px 27px -7px rgba(0,0,0,0.75);word-wrap: normal;">
            <p class="textoBlack mayusculas" style="letter-spacing: .01em;font-size:1.5em;line-height: 1.2em;"><?php echo $entrada -> obtener_titulo(); ?></p>            
            <?php 
            if (ControlSesionAdmin::sesion_iniciada()) {
                ?>
                <br>
                <form method="post" action="<?php echo RUTA_EDITAR_ENTRADA_TIENDA; ?>">
                    <input type="hidden" name="id_editar" value="<?php echo $entrada -> obtener_id(); ?>">
                    <button type="submit" class="btn btn-principal" name="editar_entrada">Editar</button>
                </form>
            <?php 
            }?>  
            <br>
            <p><?php echo nl2br($entrada -> obtener_texto()); ?></p>      
            <br><br><br>
            <div class="anime-1a">
                <p class="textoParrafo1" style="text-transform: initial;"><b>Escríbenos</b></p>
                <div style="font-size:3em;padding-bottom: .5em"><?php include 'seccion/contactar.inc.php'; ?></div>
                <p class="textoParrafo1" style="text-transform: initial;padding-bottom: .5em"><b>Llámanos</b></p>
                <p style="padding: .8em 0">
                    <img class="circle" height="20px" src="<?php echo RUTA_IMG_OPTIMIZADA;?>otras/es.webp" style="padding-right:.5em;"><a href="<?php echo $whatsappEmpresa?>" target="_blank"><?php echo "+34 ".$telefonoEmpresa1?></a>        
                </p>
                <p style="padding: .8em 0">
                    <img class="circle" height="20px" src="<?php echo RUTA_IMG_OPTIMIZADA;?>otras/fr.webp" style="padding-right:.5em;"><img class="circle" height="20px" src="<?php echo RUTA_IMG_OPTIMIZADA;?>otras/uk.webp" style="padding-right:.5em;"><a href="<?php echo $whatsappEmpresaB1?>" target="_blank"><?php echo "+34 ".$telefonoEmpresaB1?></a>        
                </p>
                <br><br>
                <?php include 'seccion/tienda/entradas_al_azar.inc.php'; ?>  
            </div>
        </div>

        <?php // informacion para pc  ?> 
        <div class="d-none d-sm-block" style="margin-top: -10em;padding: 0 5em;">  
            <div class="col-12 row">          
                <div class="col-8 anime-1" style="background-color:white;padding: 4.5em 4.5em 0 4.5em ;">
                    <h1 class="textoBlack" style="word-wrap: normal;padding: .5em 0"><?php echo $entrada -> obtener_titulo(); ?></h1>
                    <p class="textoParrafo1b chip" style="word-wrap: normal;">#<?php echo $entrada -> obtener_etiqueta(); ?></p>
                    <?php 
                    if (ControlSesionAdmin::sesion_iniciada()) {
                        ?>
                        <form method="post" action="<?php echo RUTA_EDITAR_ENTRADA_TIENDA; ?>">
                            <input type="hidden" name="id_editar" value="<?php echo $entrada -> obtener_id(); ?>">
                            <button type="submit" class="btn btn-principal" name="editar_entrada">Editar</button>
                        </form>
                    <?php 
                    }?>
                    <p class="textoParrafo1 anime-1" style="padding:.8em 0 1em 0;line-height: 1.3em"><?php echo nl2br($entrada -> obtener_texto()); ?></p>
                    <a class="btn btn-principal-animado" style="margin-bottom:3em;" href="#"><p class="textoBold">Volver arriba</p></a>                    
                </div>
                <div class="col-4 anime-1" style="background-color:white;padding:3em;">
                    <div class="anime-1a">
                        <p class="textoParrafo1" style="text-transform: initial;"><b>Escríbenos</b></p>
                        <div style="font-size:3em;padding-bottom: .5em"><?php include 'seccion/contactar.inc.php'; ?></div>
                        <p class="textoParrafo1" style="text-transform: initial;padding-bottom: .5em"><b>Llámanos</b></p>
                        <p style="padding: .8em 0">
                            <img class="circle" height="20px" src="<?php echo RUTA_IMG_OPTIMIZADA;?>otras/es.webp" style="padding-right:.5em;"><a href="<?php echo $whatsappEmpresa?>" target="_blank"><?php echo "+34 ".$telefonoEmpresa1?></a>        
                        </p>
                        <p style="padding: .8em 0">
                            <img class="circle" height="20px" src="<?php echo RUTA_IMG_OPTIMIZADA;?>otras/fr.webp" style="padding-right:.5em;"><img class="circle" height="20px" src="<?php echo RUTA_IMG_OPTIMIZADA;?>otras/uk.webp" style="padding-right:.5em;"><a href="<?php echo $whatsappEmpresaB1?>" target="_blank"><?php echo "+34 ".$telefonoEmpresaB1?></a>        
                        </p>
                        <br><br>
                        <?php include 'seccion/tienda/entradas_al_azar.inc.php'; ?>  
                        <br><br> 
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
