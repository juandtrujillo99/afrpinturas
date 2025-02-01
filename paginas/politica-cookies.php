<?php
include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';


$titulo = "Política de cookies ".$nombreEmpresa;
$navbar = "position: absolute;";
$descripcionPagina = $descripcionNegocio;
$imagenCompartida = RUTA_IMG_OPTIMIZADA."fondo/AFR-about.webp";



include_once 'seccion/cabecera-inicio.inc.php';
include_once 'seccion/cabecera-cierre.inc.php';
include_once 'seccion/doc-navbar.inc.php';

?>



<?php //body ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-1 col-md-3"></div>
		<div class="col-10 col-md-6" style="margin-top: 4em;">
			<br><br>
			<p class="textoParrafo mayusculas" style="font-size: 3em;"><b>POLÍTICA DE COOKIES</b></p>
			<br><br>		
			<p class="textoParrafo1">
				<br>
				Este sitio web utiliza cookies y/o tecnologías similares propias, que almacenan y recuperan información cuando navegas.
				<br><br>
				A continuación puede consultar las cookies y/o tecnologías similares utilizadas en este sitio web.
				<br><br><br>				
			</p>
			<br><br>
			<p class="textoParrafo"><b>COOKIES PROPIAS</b></p>		
			<p class="textoParrafo1">
				<br>
				Técnicas o necesarias
				<br>
				Las cookies técnicas o estrictamente necesarias son aquellas que permiten al usuario la navegación a través de una página web y la utilización de las diferentes opciones o servicios que en ella se ofrecen, como, por ejemplo, controlar el tráfico y la comunicación de datos, identificar la sesión, acceder a partes de acceso restringido, recordar los elementos que integran un pedido, realizar el proceso de compra de un pedido, gestionar el pago, controlar el fraude vinculado a la seguridad del servicio, realizar la solicitud de inscripción o participación en un evento, utilizar elementos de seguridad durante la navegación, almacenar contenidos para la difusión de vídeos o sonido, habilitar contenidos dinámicos (por ejemplo, animación de carga de un texto o imagen), compartir contenidos a través de redes sociales o personalizar la interfaz de usuario siempre que sea éste quien elija las opciones de personalización que desee. La base legal que legitima este tratamiento es la ejecución y mantenimiento del servicio solicitado por el usuario. Estas cookies permanecerán activas mientras el usuario permanezca en el sitio web.
				<br><br>
				<p class="textoParrafo"><b>MÁS INFORMACIÓN SOBRE TRATAMIENTO DE DATOS PERSONALES</b></p>
				<br><br>
				Puede consultar más información sobre el tratamiento de sus datos personales accediendo a nuestra <a href="<?php echo RUTA_PRIVACIDAD?>" target="_blank"> Política de Privacidad</a>.
				<br>			
			</p>
		</div>
		<div class="col-1"></div>
	</div>


</div>

<?php //body ?>



<?php

include_once 'seccion/copyright.inc.php';
include_once 'seccion/doc-terminacion.inc.php';

?>