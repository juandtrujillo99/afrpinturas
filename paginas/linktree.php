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


$titulo = "Escoge una opción";
$descripcionPagina = $descripcionAlterna;
$imagenCompartida = RUTA_IMG_OPTIMIZADA."fondo/AFR-about.webp";


include_once 'seccion/cabecera-inicio.inc.php';
?>
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>recortar-imagen.css">
<?php
include_once 'seccion/cabecera-cierre.inc.php';
?>


<div class="container-fluid" style="background-color: #180d45;">    

    <div class="row" align="center">
        <div class="col-2 col-md-5"></div>
        <div class="col-8 col-md-2" style="padding: 2em 0;">
            <div class="d-block d-sm-none"><br></div>            
            <br><br>
        </div>
        <div class="col-2 col-md-5"></div>


        <div class="col-12" style="background-color:white;width: 100%;">
            <div class="col-2 col-md-5"></div>
            <div class="col-8 col-md-2">
                <img itemprop="image" loading="lazy" src="<?php echo RUTA_IMG_OPTIMIZADA;?>logo/cuadrado.webp" class="imagen-2" style="padding: 1em 0;">                
            </div>
            <div class="col-2 col-md-5"></div>   
        </div> <?php ///bien?>

        <div class="d-none d-sm-block col-md-3"></div>
        <div class="anime-1 row col-12 col-md-6" style="padding: 2em 0;">
            <div class="col-12">
                <br>
                <a class="btn btn-secundario-animado  modal-trigger" style="width: 90%;" href="http://<?php echo $urlEmpresa;?>"><p class="textoBookBold" style="padding: 1em 0.5em;" itemprop="name">Ver sitio web</p></a>
            </div>
            <div class="col-12">
                <br>
                <a target="_blank" class="btn btn-secundario-animado  modal-trigger" style="width: 90%;" href="<?php echo $direccionEmpresa3;?>"><p class="textoBookBold" style="padding: 1em 0.5em;" itemprop="name">Mostrar Ubicación</p></a>
            </div> 
            <div class="col-12">
                <br>
                <a target="_blank" class="btn btn-secundario-animado modal-trigger" style="width: 90%;" href="<?php echo $whatsappEmpresa."?text=Hola%2C%20mi%20nombre%20es%20";?>"><p class="textoBookBold" style="padding: 1em 0.5em;" itemprop="name">Solicitar presupuesto</p></a>
            </div>
        </div> 
        <div class="d-none d-sm-block col-md-3"></div>     


        <div id="contacto" class="row social2-pc" align="center">
            <div class="col-12" style="padding:2em 0;">
                <div class="d-block d-sm-none"><br><br></div>
                <p><font class="textoBlack textoSubtitulo"><?php echo $nombreEmpresa2;?></font></p>
                <p><font class="textoBook textoParrafo">La empresa de pintura favorita en la marina alta</font></p>
                <div><br></div>
                <?php include 'seccion/social.inc.php'; ?>
                <div class="d-block d-sm-none"><br><br></div>
            </div>
        </div>
    </div>
</div>

<?php //body ?>


<?php

include_once 'seccion/doc-terminacion.inc.php';

?>