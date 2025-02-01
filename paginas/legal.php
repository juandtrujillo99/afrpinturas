<?php
include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';


$titulo = "Aviso legal ".$nombreEmpresa;
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
			<p class="textoParrafo mayusculas" style="font-size: 3em;"><b>Términos y condiciones</b></p>
			<p class="textoParrafo1">Última actualización: 09/02/2023</p>
			<br><br>	
			<p class="textoParrafo"><b>Información Legal</b></p>		
			<p class="textoParrafo1">
				<br>
				En cumplimiento del art. 10 de Ley 34/2002, de 11 de julio, de servicios de la sociedad de la información y de comercio electrónico, le informamos que el responsable de este sitio web es:
				<br><br>
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
			<p class="textoParrafo"><b>Condiciones Generales de Uso</b></p>		
			<p class="textoParrafo1">
				<br>
				Las presentes condiciones generales de uso (en adelante CGU), regulan el acceso y el uso del Website bajo el dominio WWW.AFRPINTURAS.COM(en adelante Website), titularidad de “AFR Pinturas & rehabilitaciones, S.L” (en adelante AFR PINTURAS), puesto a disposición de los usuarios (en adelante Usuario/s).
				<br><br>
				Ante cualquier duda o consulta relacionada con la utilización y acceso al Website o de las presentes CGU, puede contactar con nosotros a través de los datos de contacto publicados en el Aviso Legal.
				<br><br><br>			
			</p>
			<p class="textoParrafo"><b>CONFORMIDAD CON LAS PRESENTES CONDICIONES GENERALES.</b></p>
			<p class="textoParrafo1">
				<br>
				La utilización del Website supone la aceptación plena por el Usuario de las CGU vigentes en cada momento en que el Usuario acceda al mismo. Por lo que éste si no está de acuerdo con cualquiera de las condiciones aquí establecidas deberá abstenerse de usar este Website.
				<br><br>
				En consecuencia, el Usuario debe leer con atención las CGU cada vez que se proponga utilizar el Website.
				<br><br>
				En todo caso, AFR PINTURAS se reserva el derecho de modificar, sin previo aviso y en cualquier momento las CGU. Asimismo, AFR PINTURAS se reserva el derecho de suspender, interrumpir o dejar de operar el Website en cualquier momento.
				<br><br>
				Por “utilización del Website”, se entiende a todo Usuario que acceda y navegue por el Website independientemente de que cumplimente los formularios de registro.
				<br><br><br>				
			</p>
			<p class="textoParrafo"><b>CONDICIONES DE ACCESO Y USO DEL WEBSITE Y DE SUS CONTENIDOS.</b></p>
			<p class="textoParrafo1">
				<br>
				El acceso al Website y/o a los Contenidos incluidos en el mismo no implica ningún tipo de garantía respecto a la idoneidad del Website y/o de los Contenidos incluidos en el mismo para fines particulares o específicos de los Usuarios.
				<br><br>
				AFR PINTURAS podrá establecer limitaciones y/o condiciones adicionales para el uso y/o acceso al Website y/o a los Contenidos, las cuales deberán ser observadas por los Usuarios en todo caso.
				<br><br><br>				
			</p>
			<p class="textoParrafo"><b>Acceso y Uso del Website.</b></p>
			<p class="textoParrafo1">
				<br>
				Salvo que se disponga otra cosa, el uso del Website tendrá carácter gratuito, sin perjuicio del coste de conexión a través de la correspondiente red de telecomunicaciones que tenga contratada el Usuario.
				<br><br>
				El Usuario reconoce ser mayor de dieciocho años, asimismo es consciente y acepta voluntaria y expresamente que el uso del Website se realiza en todo caso bajo su única y exclusiva responsabilidad.
				<br><br>
				El Usuario se obliga al cumplimiento de las CGU, así como a cumplir las especiales advertencias o instrucciones contenidas en el Website y a obrar siempre conforme a la ley, a las buenas costumbres y a las exigencias de la buena fe, empleando su máxima en atención teniendo en cuenta la naturaleza y contraprestación del servicio del que disfruta. A tal efecto, se abstendrá de utilizar el Website de cualquier forma que pueda impedir, dañar o deteriorar el normal funcionamiento del mismo, los bienes o derechos de AFR PINTURAS, sus proveedores, sus distribuidores, el resto de Usuarios o en general de cualquier tercero.
				<br><br>
				Concretamente y sin que ello implique restricción alguna a la obligación asumida por el Usuario con carácter general de conformidad con el apartado anterior, el Usuario se obliga en la utilización del Website:
				<br><br>
				a) A no introducir, almacenar o difundir en o desde el Website, cualquier información o material que sea difamatorio, injurioso, obsceno, amenazador, xenófobo, pornográfico, de apología al terrorismo, incite a la violencia, a la discriminación por razón de raza, sexo, ideología, religión o que de cualquier forma atente contra la forma, el orden público, los derechos fundamentales, las libertades públicas, el honor, la intimidad o la imagen de terceros y en general la normativa vigente.
				<br><br>
				b) A no introducir, almacenar o difundir mediante el Website ningún programa de ordenador, datos, virus, código, o cualquier otro instrumento o dispositivo electrónico o físico que sea susceptible de causar daños en el Website, en cualquiera de los servicios, o en cualquiera de los equipos, sistemas o redes de AFR PINTURAS, de cualquier Usuario, de los Proveedores o Distribuidores de AFR PINTURAS o en general de cualquier tercero, capaz de causar cualquier tipo de alteración o impedir el normal funcionamiento de los mismos.
				<br><br>
				c) A no introducir, almacenar o difundir mediante el Website cualquier contenido que infrinja las normas de propiedad intelectual, industrial o derechos de terceros, ni en general ningún contenido del cual no ostentara, de conformidad con la ley, el derecho a ponerlo a disposición de terceros.
				<br><br><br>				
			</p>
			<p class="textoParrafo"><b>Acceso y Uso de los Contenidos.</b></p>
			<p class="textoParrafo1">
				<br>
				Los Contenidos del Website son puestos a disposición del Usuario con información procedente tanto de fuentes propias como de terceros.
				<br><br>
				AFR PINTURAS procura que los Contenidos sean de la mayor calidad posible y estén razonablemente actualizados, pero no garantiza la utilidad, exactitud, exhaustividad, pertinencia y/o actualidad de los Contenidos.
				<br><br><br>				
			</p>
			<p class="textoParrafo"><b>DERECHOS DE PROPIEDAD INTELECTUAL E INDUSTRIAL.</b></p>
			<p class="textoParrafo1">
				<br>
				Mediante estas CGU no se cede ningún derecho de propiedad intelectual o industrial sobre el Website ni sobre ninguno de sus elementos integrantes, quedando expresamente prohibidos al Usuario la reproducción, transformación, distribución, comunicación pública, puesta a disposición, extracción, reutilización, reenvío o la utilización de cualquier naturaleza, por cualquier medio o procedimiento, de cualquiera de ellos, salvo en los casos en que esté legalmente permitido o sea autorizado por el titular de los correspondientes derechos.
				<br><br>
				El Usuario podrá visualizar y obtener una copia privada temporal de los Contenidos para su exclusivo uso personal y privado en sus sistemas informáticos (software y hardware), siempre que no sea con la finalidad de desarrollar actividades de carácter comercial o profesional. El Usuario deberá abstenerse de obtener, o intentar obtener, los Contenidos por medios o procedimientos distintos de los que en cada caso se hayan puesto a su disposición o indicado al efecto o de los que se utilicen habitualmente en Internet (siempre que estos últimos no entrañen un riesgo de daño o inutilización del Website). El Usuario deberá respetar en todo momento todos los derechos de propiedad intelectual e industrial sobre el Website, de titularidad de AFR PINTURAS o de terceros.
				<br><br><br>				
			</p>
			<p class="textoParrafo"><b>EXCLUSIÓN DE GARANTÍAS Y RESPONSABILIDAD.</b></p>
			<p class="textoParrafo1">
				<br>
				<b>Exclusión de Garantías y Responsabilidad por el Funcionamiento del Website.</b>
				<br><br>
				AFR PINTURAS no garantiza la disponibilidad y continuidad del funcionamiento del Website y de los servicios o Contenidos ofrecidos en el mismo, ni que el contenido existente en su Website se encuentre actualizado, quedando exonerado de toda responsabilidad por los daños y perjuicios de cualquier naturaleza que puedan originarse por tales circunstancias.
				<br><br>
				AFR PINTURAS llevará a cabo, siempre que no concurran circunstancias que lo hagan imposible o de difícil ejecución y tan pronto tenga noticias de los errores, desconexiones y/o falta de actualización de los contenidos, todas aquellas labores tendentes a subsanar los errores, restablecer la comunicación y/o actualizar los referidos contenidos.
				<br><br>
				Asimismo, AFR PINTURAS no garantiza ni la fiabilidad técnica de su Website, ni el acceso a sus distintas páginas, quedando de la misma forma exonerado de toda responsabilidad por los daños y perjuicios de cualquier naturaleza que puedan originarse por esta causa.
				<br><br>
				Además, AFR PINTURAS no se hace responsable de los posibles errores o deficiencias de seguridad que pudieran producirse por la utilización por parte del Usuario de un navegador de una versión no actualizada o insegura en el navegador o de los daños, errores o inexactitudes que pudieran derivarse del mal funcionamiento del mismo.
				<br><br>
				Con el fin de disminuir el riesgo de introducción de virus en el Website, utiliza programas de detección de virus para controlar todos los Contenidos que introduce en el Website. No obstante,AFR PINTURAS no garantiza la ausencia de virus, ni de otros elementos en el Website introducidos por terceros ajenos a AFR PINTURAS que puedan producir alteraciones en los sistemas físicos o lógicos de los usuarios o en los documentos electrónicos y ficheros almacenados en sus sistemas. En consecuencia, AFR PINTURAS no será en ningún caso responsable de cualesquiera daños y perjuicios de toda naturaleza que pudieran derivarse de la presencia de virus u otros elementos que puedan producir alteraciones en los sistemas físicos o lógicos, documentos electrónicos o ficheros de los Usuarios. 
				<br><br>
				AFR PINTURAS adopta diversas medidas de protección para proteger el Website, los datos recabados y los Contenidos contra ataques informáticos de terceros. No obstante, AFR PINTURAS no garantiza que terceros no autorizados puedan tener acceso al tipo de uso o navegación del Website que hace el Usuario o las condiciones, características y circunstancias en las cuales se efectúa. En consecuencia, AFR PINTURAS no será en ningún caso responsable de los daños y perjuicios que pudieran derivarse de dicho acceso no autorizado.
				<br><br>
				AFR PINTURAS no se hará responsable en ningún caso del uso que los usuarios y/o terceros pudieran hacer del Website o los Contenidos, ni de los daños y perjuicios que pudieran derivarse del mismo.
				<br><br>
				<b>Exclusión de Garantías y de Responsabilidad por los Contenidos.</b>
				<br><br>
				AFR PINTURAS no edita los Contenidos de terceros publicados en el Website y, en consecuencia, no garantiza ni se hace responsable de la licitud, fiabilidad, utilidad, veracidad, exactitud, exhaustividad y actualidad de dichos Contenidos, así como tampoco de los Contenidos titularidad de AFR PINTURAS. AFR PINTURAS no será en ningún caso responsable de cualesquiera daños y perjuicios que pudieran derivarse de: (i) la falta de licitud, veracidad, exactitud, exhaustividad y/o actualidad de los Contenidos originados por terceros y suyos propios; (ii) la inadecuación para cualquier propósito y la defraudación de las expectativas generadas por los Contenidos; (iii) decisiones o acciones tomadas o evitadas por parte del usuario confiando en la información o datos facilitados o proporcionados en los Contenidos, incluyendo sin limitación la pérdida de beneficios u oportunidades empresariales.
				<br><br><br>				
			</p>
			<p class="textoParrafo"><b>HIPERENLACES</b></p>
			<p class="textoParrafo1">
				<br>
				Aquellas personas que se propongan establecer hiperenlaces entre su página Web y el Website deberán observar y cumplir las condiciones siguientes:
				<br><br>
				i) No será necesaria autorización previa cuando el Hiperenlace permita únicamente el acceso a la página de inicio del Website, pero no podrá reproducirla de ninguna forma. Cualquier otra forma de Hiperenlace requerirá la autorización expresa e inequívoca por escrito por parte de AFR PINTURAS.
				<br><br> 
				ii) La página Web en la que se establezca el Hiperenlace solo podrá contener lo estrictamente necesario para identificar el destino del Hiperenlace.
				<br><br>
				iii) La página Web en la que se establezca el Hiperenlace no contendrá informaciones o contenidos ilícitos, contrarios a la moral y a las buenas costumbres generalmente aceptadas y al orden público, así como tampoco contendrá contenidos contrarios a cualesquiera derechos de terceros.
				<br><br>
				iv) AFR PINTURAS se reserva el derecho a bloquear los Hiperenlaces dirigidos al Website que no cuenten 
				con autorización expresa con carácter previo aun cumpliendo con lo preceptuado en este punto de las Condiciones Generales.
				<br><br><br>				
			</p>
			<p class="textoParrafo"><b>ACCIONES EN CASO DE INCUMPLIMIENTO.</b></p>
			<p class="textoParrafo1">
				<br>
				AFR PINTURAS se reserva el derecho a ejercer cuantas acciones estén disponibles en derecho para exigir las responsabilidades que se deriven del incumplimiento de cualquiera de las disposiciones de estas Condiciones Generales del Website por parte de un usuario.
				<br><br><br>
			</p>
			<p class="textoParrafo"><b>NULIDAD PARCIAL</b></p>
			<p class="textoParrafo1">
				<br>
				La declaración de cualquiera de las cláusulas contenidas en estas Condiciones Generales como nula, inválida o ineficaz no afectará a la validez o eficacia de las restantes, que seguirán siendo vinculantes entre las partes.
				<br><br><br>
			</p>
			<p class="textoParrafo"><b>LEY APLICABLE Y JURISDICCIÓN.</b></p>
			<p class="textoParrafo1">
				<br>
				Las presentes CGU se regirán por lo dispuesto en la legislación española.
				<br><br>
				Cualquier controversia relativa a las condiciones de uso y acceso a este Website contenidas en el presente documento de CGU del Website, las partes se someten, renunciando expresamente a cualquier otro fuero que pudiera corresponderles, salvo que por imperativo legal se determine lo contrario, a los Juzgados de Denia.
				<br><br><br>
			</p>
			<p class="textoParrafo"><b>NOTIFICACIONES.</b></p>
			<p class="textoParrafo1">
				<br>
				A los efectos de practicar las oportunas notificaciones, AFR PINTURAS designa como domicilio de contacto el especificado en el Aviso Legal.
				<br><br>
				El correo electrónico facilitado por el Usuario durante el proceso de registro en el Website, será el utilizado por AFR PINTURAS a efectos de practicar notificaciones al Usuario.
				<br><br>
				El Usuario está obligado a mantener debidamente actualizados los datos que a efectos de notificaciones se referencian en la presente cláusula.
				<br><br>
				Todas las Notificaciones que efectúe AFR PINTURAS al Usuario se considerarán válidamente efectuadas si se han realizado empleando los datos y a través de los medios anteriormente señalados. AFR PINTURAS no se responsabiliza de cualquier perjuicio que pudiere producirse por la vulneración del Usuario de su obligación de mantenimiento actualizado de sus datos de contacto.
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