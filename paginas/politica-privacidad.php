<?php
include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';


$titulo = "Política de privacidad ".$nombreEmpresa;
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
			<p class="textoParrafo mayusculas" style="font-size: 3em;"><b>POLÍTICA DE PRIVACIDAD</b></p>
			<br><br>		
			<p class="textoParrafo1">
				<br>
				La presente política de privacidad es conforme al Reglamento (UE) 2016/679 del Parlamento Europeo y del Consejo, de 27 de abril de 2016, relativo a la protección de las personas físicas en lo que respecta al tratamiento de datos personales y a la libre circulación de estos datos (RGPD), a Ley Orgánica 3/2018, de 5 de diciembre, de Protección de Datos Personales y garantía de los derechos digitales (LOPDGDD), así como en lo que no resulte contrario a la normativa indicada, a la Ley Orgánica 15/1999, de Protección de Datos de Carácter Personal (LOPD) y su normativa de desarrollo, y/o aquellas que las pudieran sustituir o actualizar en el futuro.
				<br><br>
				Nuestra organización está comprometida con la privacidad de sus datos personales. Los datos personales facilitados son necesarios para prestar nuestros servicios y son tratados de manera lícita, leal y transparente, garantizando una seguridad adecuada de los mismos, incluida la protección contra el tratamiento no autorizado o ilícito y contra su pérdida, destrucción o daño accidental mediante la aplicación de medidas técnicas y organizativas.
				<br><br>
				A través del presente documento queremos ofrecerle de forma transparente y leal toda la información necesaria relativa al tratamiento de sus datos personales que realiza esta organización.
				<br><br><br>				
			</p>
			<br><br>	
			<p class="textoParrafo"><b>RESPONSABLE DEL TRATAMIENTO</b></p>		
			<p class="textoParrafo1">
				<br>
				Identidad - Entidad: <b><?php echo $nombreEmpresa." ".$descripcionNegocio;?></b>
				<br>
				CIF/NIF: <b>B54198007</b>
				<br>
				Dirección postal: <b><?php echo $ubicacionEmpresa." ".$direccionEmpresa1." ".$direccionEmpresa2;?></b>
				<br>
				Teléfono: <b><?php echo $telefonoEmpresa1;?></b>
				<br>
				Correo electrónico: <b><?php echo $emailEmpresa ;?></b>
				<br>
				Sitio web: <b>https://<?php echo $urlEmpresa;?></b> 
				<br><br><br>				
			</p>		
			<p class="textoParrafo1">
				<b>DESTINATARIOS DE LOS DATOS PERSONALES</b>
				<br><br>
				1.- Los datos personales facilitados no serán objeto de cesión alguna salvo que así se disponga en los tratamientos específicos.
				<br><br>
				2.- Opcionalmente, para la contratación de servicios de computación en la nube y/o servicios para el envío de e-mails, de comunicación, así como otros servicios informáticos relacionados, los datos personales podrán ser:
				<br><br>
				- Cedidos a empresas de servicios informáticos ubicadas dentro del Espacio Económico Europeo (EEE) o, 
				<br>
				- Transferidos a empresas de servicios informáticos ubicadas fuera del EEE acogidos al escudo de protección Privacy Shield por lo que cuentan con medidas de protección adecuadas para garantizar la seguridad de los datos personales. Puede obtener más información visitando este enlace: <a href="https://www.privacyshield.gov/welcome" target="_blank">https://www.privacyshield.gov/welcome</a> 
				<br><br>
				3.- Opcionalmente, a administraciones y demás organismos cuando sean requeridos en cumplimiento de obligaciones legales.
				<br><br><br>			
			</p>
			<p class="textoParrafo1">
				<b>BASE LEGAL QUE LEGITIMA EL TRATAMIENTO DE LOS DATOS PERSONALES</b>
				<br><br>
				En cada tratamiento específico de datos personales le informaremos de la base legal que lo legitima.
				<br><br><br>				
			</p>
			<p class="textoParrafo mayusculas"><b>DERECHOS</b></p>
			<br><br>
			<p class="textoParrafo1">
				<b>DERECHO DE ACCESO</b>
				<br><br>
				Es el derecho a obtener del responsable del tratamiento confirmación de si están tratando o no datos personales que conciernen al interesado y, en tal caso, derecho de acceso a los datos personales y a la siguiente información: los fines del tratamiento, las categorías de datos personales de que se trate, los destinatarios o las categorías de destinatarios a los que se comunicaron o serán comunicados los datos personales, plazo de conservación o los criterios utilizados para determinar este plazo, la existencia del derecho a solicitar del responsable la rectificación o supresión de datos personales o la limitación del tratamiento de datos personales relativos al interesado o a oponerse a dicho tratamiento, derecho a presentar una reclamación ante la Agencia Española de Protección de Datos (AEPD), la existencia, en su caso, de decisiones automatizadas, incluida la elaboración de perfiles, cuando se transfieran datos a terceros países el derecho a ser informado de las garantías adecuadas aplicadas.
				<br><br><br>				
			</p>
			<p class="textoParrafo1">
				<b>DERECHO DE RECTIFICACIÓN</b>
				<br><br>
				Es el derecho a solicitar la rectificación de sus datos personales si son inexactos, incluyendo el derecho a completar datos que figuren incompletos. Hay que tener en cuenta que al facilitarnos los datos personales por cualquier vía, garantiza que son ciertos y exactos y se compromete a notificarnos cualquier cambio o modificación de los mismos. Por lo tanto cualquier daño causado por motivo de una comunicación de información errónea, inexacta o incompleta en los formularios de la web, será responsabilidad exclusiva del interesado.
				<br><br><br>				
			</p>
			<p class="textoParrafo1">
				<b>DERECHO DE SUPRESIÓN</b>
				<br><br>
				Es el derecho a solicitar la supresión de sus datos personales cuando, entre otros supuestos, ya no son necesarios para la finalidad por la cual fueron recabados, o están siendo tratados de otro modo o retire el consentimiento. Hay que tener en cuenta que no procederá la supresión cuando el tratamiento de los datos personales sea necesario, entre otros supuestos, para el cumplimiento de obligaciones legales o para la formulación, el ejercicio o la defensa de reclamaciones.
				<br><br><br>				
			</p>
			<p class="textoParrafo1">
				<b>DERECHO A LA LIMITACIÓN</b>
				<br><br>
				Es el derecho a solicitar la limitación del tratamiento de sus datos personales, lo que supone que en determinados casos pueda solicitarnos que suspendamos temporalmente los tratamientos de sus datos personales o que los conservemos más allá del tiempo necesario cuando pueda necesitarlo.
				<br><br><br>				
			</p>
			<p class="textoParrafo1">
				<b>DERECHO A RETIRAR EL CONSENTIMIENTO</b>
				<br><br>
				Es el derecho a retirar el consentimiento que ha proporcionado al marcar “He leído y acepto la política de privacidad” en cualquier momento y según se especifica en el apartado correspondiente “Ejercicio de derechos” o en el tratamiento específico de comunicaciones comerciales o Newsletter. Hay que tener en cuenta que este derecho no surtirá efectos si, entre otros casos, el tratamiento de los datos personales es necesario para el cumplimiento de una obligación legal, la ejecución y el mantenimiento de una relación contractual, o para la formulación, ejercicio o la defensa de reclamaciones. Asimismo la retirada del consentimiento no tendrá efectos retroactivos, es decir, no afectará a la licitud del tratamiento basado en el consentimiento previo a su retirada.
				<br><br><br>				
			</p>
			<p class="textoParrafo1">
				<b>DERECHO A LA PORTABILIDAD</b>
				<br><br>
				Es el derecho a recibir los datos personales que le incumban y que nos haya facilitado, en un formato estructurado, de uso común y lectura mecánica, y a trasmitirlos a otro responsable, siempre y cuando: el tratamiento se base en su consentimiento y se efectúe por medios automatizados o informáticos.
				<br><br><br>				
			</p>
			<p class="textoParrafo1">
				<b>DERECHO DE OPOSICIÓN</b>
				<br><br>
				Es el derecho a oponerse al tratamiento de sus datos personales en base al interés legítimo nuestro. No seguiremos tratando sus datos personales a menos que podamos acreditar motivos legítimos imperiosos para el tratamiento que prevalezcan sobre sus intereses, derechos y libertades, o bien para la formulación, el ejercicio o la defensa de reclamaciones.
				<br><br><br>				
			</p>
			<p class="textoParrafo1">
				<b>DERECHO A PRESENTAR UNA RECLAMACIÓN ANTE UNA AUTORIDAD DE CONTROL</b>
				<br>
				Si considera que tratamos sus datos personales de un modo incorrecto, puede contactar con nosotros o también tiene derecho a presentar una reclamación ante la Agencia Española de Protección de Datos (AEPD):
				<br><br>
				<a href="https://www.agpd.es/portalwebAGPD/index-ides-idphp.php" target="_blank">https://www.agpd.es/portalwebAGPD/index-ides-idphp.php</a>
				<br><br><br>				
			</p>
			<p class="textoParrafo1">
				<b>EJERCICIO DE DERECHOS</b>
				<br><br>
				Puede ejercer los derechos que le asisten a través de carta a la dirección postal arriba indicada o a través del e-mail info@afrpinturas.com, adjuntando en ambos casos copia de su NIF/NIE/Pasaporte o documento análogo.
				<br><br><br>
			</p>
			<p class="textoParrafo"><b>TRATAMIENTOS DE DATOS PERSONALES.</b></p>
			<br><br>
			<p class="textoParrafo1">
				<b>DISPOSICIONES GENÉRICAS</b>
				<br><br>
				Los datos personales solicitados en cada uno de los tratamientos específicos son adecuados, pertinentes y limitados a lo necesario en relación con los fines para los que son tratados por lo que se cumple con el principio de minimización de datos.
				<br><br>
				Los datos personales solicitados en cada uno de los tratamientos específicos son los estrictamente necesarios, la negativa a facilitarlos implicaría no poder prestar el servicio solicitado.
				<br><br>
				Las comunicaciones de los datos personales previstas en cada uno de los tratamientos específicos en algunos casos son necesarias para la ejecución y el mantenimiento de un contrato y en otros casos para el cumplimiento de una obligación legal aplicable al responsable del tratamiento.
				<br><br><br>
			</p>
			<p class="textoParrafo1">
				<b>FORMULARIO DE CONTACTO</b>
				<br><br>
				Los datos personales serán tratados para canalizar las solicitudes de información, sugerencias y reclamaciones de usuarios o clientes.
				<br><br>
				La base legal que legitima el tratamiento de los datos personales es el consentimiento expreso al marcar “He leído y acepto la política de privacidad”.
				<br><br>
				Los datos personales se conservarán por un período de dos años desde el momento en que dejen de tratarse, sin perjuicio del ejercicio de los derechos que le asisten como interesado.
				<br><br><br>
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