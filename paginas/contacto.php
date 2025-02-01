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


$titulo = "Contacto | ".$nombreEmpresa;
$descripcionPagina = $descripcionAlterna;
$imagenCompartida = RUTA_IMG_OPTIMIZADA."fondo/AFR-about.webp";


include_once 'seccion/cabecera-inicio.inc.php';
?>
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>scroll-x.php">
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>scroll-off.php">
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>recortar-imagen.css">
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>sobreponer.css">
<?php
if(ControlSesionAdmin :: sesion_iniciada()){
	include_once 'scripts/tienda/barra-progreso-archivo-imagen.php';//script que sube las imagenes de las entradas
}
include_once 'seccion/cabecera-cierre.inc.php';
include_once 'seccion/doc-navbar.inc.php';
?>

<div class="container-fluid">		
	<div class="row" style="padding-top: 5em;">
        <div class="d-none d-sm-block col-md-7 bg-image">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3108.376721928273!2d0.020860500000000004!3d38.82383240000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x129e1d0bdfa8c40f%3A0xb283c2fa9939a96e!2sAFR%20Pinturas%20%26%20Rehabilitaciones!5e0!3m2!1ses-419!2ses!4v1670272037697!5m2!1ses-419!2ses" style="width:100%;height: 100vh;border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>           
        </div>
        <div class="col-12 d-block d-sm-none">
        	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3108.376721928273!2d0.020860500000000004!3d38.82383240000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x129e1d0bdfa8c40f%3A0xb283c2fa9939a96e!2sAFR%20Pinturas%20%26%20Rehabilitaciones!5e0!3m2!1ses-419!2ses!4v1670272037697!5m2!1ses-419!2ses" style="width:100%;height: 50vh;border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <?php // informacion para pc  ?> 
        <div class="col-md-5 d-none d-sm-block anime-1" style="height: 100vh;position: absolute;right: 0;overflow-y: scroll;padding: 6em 8em; scroll-behavior: smooth;">
            <h1 class="textoBlack mayusculas">Agenda tu cita</h1>
			<br>
			<p style="font-size: 1.3em;padding-bottom: 2em;">Encuentra nuestra sede en Ondara, háblanos de tu problema y nosotros te brindaremos las mejores opciones.</p>
			<p class="textoParrafo1" style="text-transform: initial;padding-bottom: .8em;"><b>Visítanos</b></p>
			<p style="padding-bottom: 2em;">
				<a href="<?php echo $direccionEmpresa3?>" target="_blank">
					<?php echo $ubicacionEmpresa;?><br><?php echo $direccionEmpresa1;?><br><?php echo $direccionEmpresa2;?>
				</a>
			</p>		
			<p class="textoParrafo1" style="text-transform: initial;"><b>Horarios</b></p>
			<div style="padding-bottom: 2em">Lunes a Viernes de 8h a 18h</div>			
			<p class="textoParrafo1" style="text-transform: initial;"><b>Escríbenos</b></p>
			<div style="font-size:3em;padding-bottom: .5em"><?php include 'seccion/contactar.inc.php'; ?></div>
			<p class="textoParrafo1" style="text-transform: initial;padding-bottom: .5em"><b>Llámanos</b></p>
			<p style="padding: .8em 0">
				<img class="circle" height="20px" src="<?php echo RUTA_IMG_OPTIMIZADA;?>otras/es.webp" style="padding-right:.5em;"><a href="<?php echo $whatsappEmpresa?>" target="_blank"><?php echo "+34 ".$telefonoEmpresa1?></a>		
			</p>
			<p>			
				<img class="circle" height="20px" src="<?php echo RUTA_IMG_OPTIMIZADA;?>otras/fr.webp">
				<img class="circle" height="20px" src="<?php echo RUTA_IMG_OPTIMIZADA;?>otras/uk.webp" style="padding: 0 .5em;">
				<a href="<?php echo $whatsappEmpresaB?>" target="_blank"><?php echo "+34 ".$telefonoEmpresaB1?></a>					
			</p>
        </div>

        <?php // informacion para moviles  ?>  
        <div class="col-12 d-block d-sm-none anime-1" style="padding: 3em;margin-top: -2em;background-color: white;border-radius: 2em 2em 0 0;box-shadow: 0px -2px 27px -7px rgba(0,0,0,0.75);">
            <h1 class="textoBlack mayusculas">Agenda tu cita</h1>
			<br>
			<p style="font-size: 1.3em;padding-bottom: 2em;">Encuentra nuestra sede en Ondara, háblanos de tu problema y nosotros te brindaremos las mejores opciones.</p>
			<p class="textoParrafo1" style="text-transform: initial;padding-bottom: .8em;"><b>Visítanos</b></p>
			<p style="padding-bottom: 2em;">
				<a href="<?php echo $direccionEmpresa3?>" target="_blank">
					<?php echo $ubicacionEmpresa;?><br><?php echo $direccionEmpresa1;?><br><?php echo $direccionEmpresa2;?>
				</a>
			</p>					
			<p class="textoParrafo1" style="text-transform: initial;padding-bottom: .5em"><b>Horarios</b></p>
			<div style="padding-bottom: 2em">Lunes a Viernes de 8h a 18h</div>
			<p class="textoParrafo1" style="text-transform: initial;"><b>Escríbenos</b></p>
			<div style="font-size:3em;padding-bottom: .5em"><?php include 'seccion/contactar.inc.php'; ?></div>
			<p class="textoParrafo1" style="text-transform: initial;padding-bottom: .5em"><b>Llámanos</b></p>
			<p style="padding: .8em 0">
				<img class="circle" height="20px" src="<?php echo RUTA_IMG_OPTIMIZADA;?>otras/es.webp" style="padding-right:.5em;"><a href="<?php echo $whatsappEmpresa?>" target="_blank"><?php echo "+34 ".$telefonoEmpresa1?></a>		
			</p>
			<p>			
				<img class="circle" height="20px" src="<?php echo RUTA_IMG_OPTIMIZADA;?>otras/fr.webp">
				<img class="circle" height="20px" src="<?php echo RUTA_IMG_OPTIMIZADA;?>otras/uk.webp" style="padding: 0 .5em;">
				<a href="<?php echo $whatsappEmpresaB?>" target="_blank"><?php echo "+34 ".$telefonoEmpresaB1?></a>					
			</p>
        </div>
    </div>
</div>

<?php //body ?>



<?php
include_once 'seccion/footer.inc.php';
include_once 'seccion/copyright.inc.php';
include_once 'seccion/doc-terminacion.inc.php';
?>