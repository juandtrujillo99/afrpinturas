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
<meta http-equiv="refresh" content="<?php echo $duracionVideo ?>; URL=<?php echo RUTA_VIDEOS_OFICINA_6 ?>">
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>recortar-imagen.css">
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>sobreponer.css">
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>video-js.php">
<script src="<?php echo RUTA_JS; ?>hora.js"></script>
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>video.php">
<?php
include_once 'seccion/cabecera-cierre.inc.php';


?>



<?php //body ?>
<div class="container-fluid reloj">

    <header class="bg content">
      <div class="bg-img">
         <video class="fm-video video-js vjs-big-play-centered" data-setup="{}" controls id="fm-video" autoplay muted loop>
            <source src="<?php echo RUTA_VIDEOS; ?>hora.mp4" type="video/mp4">
        </video>
      </div>
      <div class="bg-overlay"></div>
      <div class="bg-content">
        <div class="row center">  
            <div class="col-12 valign-wrapper">   
                <div class="row valign-wrapper anime-1">          
                    <div class="col-12 hora">                        
                        <script language="JavaScript">
                            const formattedTime = (hora < 10 ? '0' : '') + hora + ':' + (minuto < 10 ? '0' : '') + minuto;
                            document.write(formattedTime)
                            //  Final -->              
                        </script>
                    </div>
                    <div class="col-12 fecha">
                        <script language="JavaScript">
                            document.write(rangodia[dia]+", "+diames+" de "+rangomes[mes]+" del "+year)
                            //  Final -->              
                        </script>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </header>
    <div align="center">
      Aquí tambien se puede escribir
    </div>














	
</div>

<?php //body ?>

<?php
include_once 'seccion/doc-terminacion.inc.php';
?>



