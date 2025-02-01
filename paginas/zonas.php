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


$titulo = "Zonas | ".$nombreEmpresa;
$descripcionPagina = $descripcionAlterna;
$imagenCompartida = RUTA_IMG_OPTIMIZADA."logo/cuadrado3.webp";


include_once 'seccion/cabecera-inicio.inc.php';
?>
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>scroll-x.php">
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>scroll-off.php">
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>recortar-imagen.css">
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>sobreponer.css">
<?php
include_once 'seccion/cabecera-cierre.inc.php';
include_once 'seccion/doc-navbar.inc.php';
?>

<div class="container-fluid">       
    <div class="col-12 row">
        <div class="col-12 row">
            <div class="col-1"></div>               
            <div class="col-10 row anime-1" id="services">              
                <div class="col-12" style="margin-top:6em;">
                    <div class="d-none d-sm-block"><br><br></div>
                    <p class="textoTitulo1 textoBlack">Llegamos con facilidad donde a otros les cuesta</p>
                    <br>
                    <?php //imagenes movil ?>
                    <div class="d-block d-sm-none">
                        <img class="col-12" src="<?php echo RUTA_IMG_OPTIMIZADA;?>fondo/elevadora.webp">
                        <img class="col-12" style="padding:0.5em 0" src="<?php echo RUTA_IMG_OPTIMIZADA;?>fondo/camion.webp">
                        <img class="col-12" src="<?php echo RUTA_IMG_OPTIMIZADA;?>fondo/plataforma.webp">
                    </div>
                    <?php //imagenes pc ?>
                    <div class="d-none d-sm-block">
                        <div class="col-12 row">
                            <div class="col-5">                            
                                <img style="padding-right: .5em" class="imagen"src="<?php echo RUTA_IMG_OPTIMIZADA;?>fondo/elevadora.webp">
                            </div>
                            <div class="col-4">                            
                                <img style="padding-right: .5em" class="imagen"src="<?php echo RUTA_IMG_OPTIMIZADA;?>fondo/camion.webp">
                            </div>
                            <div class="col-3">                            
                                <img style="padding-right: .3em" class="imagen"src="<?php echo RUTA_IMG_OPTIMIZADA;?>fondo/plataforma.webp">
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-md-7 col-sm-12">
                            <img class="imagen d-none d-sm-block" src="<?php echo RUTA_IMG_OPTIMIZADA;?>fondo/zonas.webp">
                        </div>
                        <div class="col-1"></div>
                        <div class="col-md-4 col-sm-10 valign-wrapper">
                            <div>
                                <p class="textoSubtitulo textoBlack">Somos la empresa de pintura favorita en la marina alta</p>
                                <br>
                                <img class="imagen d-block d-sm-none" src="<?php echo RUTA_IMG_OPTIMIZADA;?>fondo/zonas.webp">
                                <br>
                                <p style="font-size: 1.3em">
                                    Nuestro alcance incrementa día a día como el número de proyectos en los que nos involucramos.
                                    <br><br>
                                    Trabajamos normalmente en zonas como Ondara, Beniarbeig, Denia, La Xara, Jesus Pobre, Javea, Pedreguer, Gata de Gorgos, Orba, Pego, Vergel, Oliva, entre otras.
                                </p>
                            </div>
                        </div>                        
                    </div>                    
                </div>              
            </div>
            <div class="col-1"></div>
            <div class="col-12" style="margin-bottom:5em;"></div>   
        </div>        
    </div>
</div>

<?php //body ?>



<?php
include_once 'seccion/footer.inc.php';
include_once 'seccion/copyright.inc.php';
include_once 'seccion/doc-terminacion.inc.php';
?>