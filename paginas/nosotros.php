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


$titulo = "Acerca de | ".$nombreEmpresa;
$descripcionPagina = $descripcionAlterna;
$imagenCompartida = RUTA_IMG_OPTIMIZADA."fondo/AFR-about.webp";


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
    <div class="col-12 row anime-1">
        <div class="col-md-6 col-12 row" style="height: 100vh;position: relative; scroll-behavior: smooth;">
            <div class="col-md-1 col-12"></div>
            <div class="col-md-10 d-none d-sm-block" style="padding: 10em 8em 0 8em;">
                <h1 class="textoBlack mayusculas">Sobre nosotros</h1>
                <br>
                <p class="textoParrafo1" style="padding-bottom: 2em;">Trabajamos de manera habitual con los proveedores más confiables de la zona, para que nunca nos falte nada.</p>
                <img class="imagen" src="<?php echo RUTA_IMG_OPTIMIZADA;?>fondo/AFR-about.webp">     
            </div>
            <div class="col-12 d-block d-sm-none" style="padding:3em;">
                <h1 class="textoBlack mayusculas">Sobre nosotros</h1>
                <br>
                <p class="textoParrafo1" style="padding-bottom: 2em;">Trabajamos de manera habitual con los proveedores más confiables de la zona, para que nunca nos falte nada.</p>
                <img class="imagen" src="<?php echo RUTA_IMG_OPTIMIZADA;?>fondo/AFR-about.webp">     
            </div>
        </div>


        <?php // informacion para movil  ?> 
        <div class="col-12 d-block d-sm-none" style="overflow-y: scroll;background-color: #180d45;color: white;height: 50vh;position: relative; scroll-behavior: smooth;">
            <div class="col-12 row">
                <div class="col-2"></div>
                <div class="col-8 valign-wrapper section3 anime-1">
                    <p class="textoParrafo" style="line-height: 1.2em;">Nuestro equipo surge desde 2002 después de analizar y entender que los excesivos gastos de dinero pueden ser un factor determinante en cualquier tipo de obra.</p>                    
                </div>
                <div class="col-2"></div>
            </div>
            <div class="col-12 row">
                <div class="col-2"></div>
                <div class="col-8 valign-wrapper section3">
                    <p class="textoParrafo" style="line-height: 1.2em;">Nos preocupamos por nuestros clientes brindando un servicio profesional por personas altamente cualificadas garantizando la calidad y su ahorro.</p>
                </div>
            </div>
            <div class="col-12 row">
                <div class="col-2"></div>
                <div class="col-8 valign-wrapper section3">
                    <p class="textoParrafo" style="line-height: 1.2em;">Garantizamos nuestra experiencia y conocimiento aplicando las mejores técnicas y utilizando los materiales más apropiados en cada proyecto.</p>
                </div>
            </div>
            <div class="col-12 row">
                <div class="col-8 row valign-wrapper section3">
                    <div class="col-12">
                        <p style="line-height: 1.2em;font-size: 1.3em">Lláma y solicita tu presupuesto sin compromiso, te asesoraremos con seriedad.</p>  
                        <br>
                        <div class="social-pc" style="padding-top: 0;padding-bottom: 0;font-size: 2em;">
                            <?php include 'seccion/contactar.inc.php'; ?>
                        </div> 
                    </div>
                </div>
            </div>            
            <div class="col-12 row">
                <div class="col-8 row valign-wrapper section3">
                    <div class="col-12">
                        <a href="<?php echo RUTA_ZONAS; ?>">
                             <p class="textoSubtitulo textoBlack white-text">Somos la empresa de pintura favorita en la marina alta</p>
                            <br>
                            <img class="imagen" src="<?php echo RUTA_IMG_OPTIMIZADA;?>fondo/zonas.webp">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <?php // informacion para pc  ?> 
        <div class="col-md-6 d-none d-sm-block" style="overflow-y: scroll;background-color: #180d45;color: white;height: 100vh;position: relative; scroll-behavior: smooth;">
            <div class="col-12 row">
                <div class="col-2"></div>
                <div class="col-8 valign-wrapper section anime-1">
                    <p class="textoParrafo1" style="line-height: 1.2em;">Nuestro equipo surge desde 2002 después de analizar y entender que los excesivos gastos de dinero pueden ser un factor determinante en cualquier tipo de obra.<br><br>Nos preocupamos por nuestros clientes brindando un servicio profesional por personas altamente cualificadas garantizando la calidad y su ahorro.</p>
                </div>
                <div class="col-2"></div>
            </div>
            <div class="col-12 row">
                <div class="col-2"></div>
                <div class="col-8 valign-wrapper section">
                    <p class="textoParrafo1" style="line-height: 1.2em;">Los diferentes y numerosos proyectos de reformas, pintura, rehabilitaciones e impermeabilizaciones en los que nos hemos involucrado nos han dado como recompensa la experiencia y el conocimiento para aplicar las mejores técnicas y utilizar los materiales más apropiados en cada circunstancia.</p>
                </div>
            </div>
            <div class="col-12 row">
                <div class="col-8 row valign-wrapper section">
                    <div class="col-12">
                        <p style="line-height: 1.2em;font-size: 1.3em">Llámanos y pídenos presupuesto sin compromiso, te asesoraremos con seriedad.</p>  
                        <br>
                        <div class="social-pc" style="padding-top: 0;padding-bottom: 0;font-size: 2em;">
                            <?php include 'seccion/contactar.inc.php'; ?>
                        </div> 
                    </div>
                </div>
            </div>            
            <div class="col-12 row">
                <div class="col-8 row valign-wrapper section">
                    <div class="col-12">
                        <a href="<?php echo RUTA_ZONAS; ?>">
                             <p class="textoTitulo1 textoBlack white-text">Somos la empresa de pintura favorita en la marina alta</p>
                            <br>
                            <img class="imagen" src="<?php echo RUTA_IMG_OPTIMIZADA;?>fondo/zonas.webp">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
</div>

<?php //body ?>



<?php
include_once 'seccion/footer.inc.php';
include_once 'seccion/copyright.inc.php';
include_once 'seccion/doc-terminacion.inc.php';
?>