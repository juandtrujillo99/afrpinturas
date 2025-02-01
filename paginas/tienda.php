<?php

include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/Redireccion.inc.php';

include_once 'app/usuario/ControlSesion.inc.php';
include_once 'app/admin/ControlSesionAdmin.inc.php';

include_once 'app/usuario/RepositorioUsuario.inc.php';
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


$titulo = "Servicios | ".$nombreEmpresa;
$descripcionPagina = $descripcionAlterna;
$imagenCompartida = RUTA_IMG_OPTIMIZADA."fondo/AFR-about.webp";


include_once 'seccion/cabecera-inicio.inc.php';
?>
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>scroll-x.php">
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>recortar-imagen.css">
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>sobreponer.css">
<?php
if(ControlSesionAdmin :: sesion_iniciada()){
	include_once 'scripts/tienda/barra-progreso-archivo-imagen.php';//script que sube las imagenes de las entradas
}
include_once 'seccion/cabecera-cierre.inc.php';
include_once 'seccion/doc-navbar.inc.php';
?>



<?php //body ?>

<div class="container-fluid">		
	<div class="row">
		<div class="col-12 row">
			<div class="col-1"></div>				
			<div class="col-10 row anime-1" id="services">				
				<div class="col-12" style="margin-top:6em;">					
                    <div class="d-none d-sm-block"><br><br></div>
					<p class="textoTitulo1 textoBlack" align="center">Contrata tu mejor opción, contrata a los mejores</p>

					<div class="d-block d-sm-none">
						<div class="col-12">
							<p style="font-size: 1.3em;padding:1.5em 0;">Con más de 20 Años de experiencia en AFR Pinturas & Rehabilitaciones sabemos qué hacer en cada circunstancia.</p>
						</div>
						<div class="col-12 row valign-wrapper categorias">
							<div class="col-12"><hr></div>
							<div class="col-5">
								<img loading="lazy" src="<?php echo RUTA_IMG_OPTIMIZADA;?>categorias/pintura.webp" class="imagen">
							</div>
							<div class="col-7">
								<form role="form" id="busqueda" method="post" action="<?php echo RUTA_BUSCAR_ENTRADA_TIENDA; ?>">
									<input type="hidden" name="buscar-tienda">
									<button name="termino-buscar-tienda" value="pintura">
										<p class="textoBlack mayusculas">Pintura</p>
									</button>	
								</form><?php //titulo de categoria, debe ir con una fuente bold y mayor tamaño que las demas?>
								<div class="descripcion">
									<p>Fachadas</p>
									<p>Interiores</p>
									<p>Lucido</p>
								</div>
							</div>
							<div class="col-12"><hr></div>
							<div class="col-5">
								<img loading="lazy" src="<?php echo RUTA_IMG_OPTIMIZADA;?>categorias/impermeabilizacion.webp" class="imagen">
							</div>
							<div class="col-7">
								<form role="form" id="busqueda" method="post" action="<?php echo RUTA_BUSCAR_ENTRADA_TIENDA; ?>">
									<input type="hidden" name="buscar-tienda">
									<button name="termino-buscar-tienda" value="impermeabilización">
										<p class="textoBlack mayusculas">impermeabilización</p>
									</button>	
								</form><?php //titulo de categoria, debe ir con una fuente bold y mayor tamaño que las demas?>
								<div class="descripcion">
									<p>Cubiertas</p>
									<p>Terrazas</p>
									<p>Piscinas</p>
								</div>
							</div>
							<div class="col-12"><hr></div>
							<div class="col-5">
								<img loading="lazy" src="<?php echo RUTA_IMG_OPTIMIZADA;?>categorias/pladur.webp" class="imagen">
							</div>
							<div class="col-7">
								<form role="form" id="busqueda" method="post" action="<?php echo RUTA_BUSCAR_ENTRADA_TIENDA; ?>">
									<input type="hidden" name="buscar-tienda">
									<button name="termino-buscar-tienda" value="Pladur">
										<p class="textoBlack mayusculas">Pladur</p>
									</button>	
								</form><?php //titulo de categoria, debe ir con una fuente bold y mayor tamaño que las demas?>
								<div class="descripcion">
									<p>Techos</p>
									<p>Paredes</p>
									<p>Muebles</p>
								</div>
							</div>
							<div class="col-12"><hr></div>
							<div class="col-5">
								<img loading="lazy" src="<?php echo RUTA_IMG_OPTIMIZADA;?>categorias/microcemento.webp" class="imagen">
							</div>
							<div class="col-7">
								<form role="form" id="busqueda" method="post" action="<?php echo RUTA_BUSCAR_ENTRADA_TIENDA; ?>">
									<input type="hidden" name="buscar-tienda">
									<button name="termino-buscar-tienda" value="Microcemento">
										<p class="textoBlack mayusculas">Microcemento</p>
									</button>	
								</form><?php //titulo de categoria, debe ir con una fuente bold y mayor tamaño que las demas?>
								<div class="descripcion">
									<p>Suelos</p>
									<p>Paredes</p>
									<p>Muebles</p>
								</div>
							</div>
							<div class="col-12"><hr></div>
							<div class="col-5">
								<img loading="lazy" src="<?php echo RUTA_IMG_OPTIMIZADA;?>categorias/suelos.webp" class="imagen">
							</div>
							<div class="col-7">
								<form role="form" id="busqueda" method="post" action="<?php echo RUTA_BUSCAR_ENTRADA_TIENDA; ?>">
									<input type="hidden" name="buscar-tienda">
									<button name="termino-buscar-tienda" value="Suelos">
										<p class="textoBlack mayusculas">Suelos</p>
									</button>	
								</form><?php //titulo de categoria, debe ir con una fuente bold y mayor tamaño que las demas?>
								<div class="descripcion">
									<p>Tratamiento</p>
									<p>Parquets</p>
									<p>Diamantado</p>
								</div>
							</div>
							<div class="col-12"><hr></div>
							<div class="col-5">
								<img loading="lazy" src="<?php echo RUTA_IMG_OPTIMIZADA;?>categorias/mantenimiento.webp" class="imagen">
							</div>
							<div class="col-7">
								<form role="form" id="busqueda" method="post" action="<?php echo RUTA_BUSCAR_ENTRADA_TIENDA; ?>">
									<input type="hidden" name="buscar-tienda">
									<button name="termino-buscar-tienda" value="mantenimiento">
										<p class="textoBlack mayusculas">mantenimiento</p>
									</button>	
								</form><?php //titulo de categoria, debe ir con una fuente bold y mayor tamaño que las demas?>
								<div class="descripcion">
									<p>Tratamiento de maderas</p>
									<p>Tratamiento de muebles</p>
								</div>
							</div>
							<div class="col-12"><hr></div>
							<div class="col-5">
								<img loading="lazy" src="<?php echo RUTA_IMG_OPTIMIZADA;?>categorias/instalacion.webp" class="imagen">
							</div>
							<div class="col-7">
								<form role="form" id="busqueda" method="post" action="<?php echo RUTA_BUSCAR_ENTRADA_TIENDA; ?>">
									<input type="hidden" name="buscar-tienda">
									<button name="termino-buscar-tienda" value="Instalaciones">
										<p class="textoBlack mayusculas">Instalaciones</p>
									</button>	
								</form><?php //titulo de categoria, debe ir con una fuente bold y mayor tamaño que las demas?>
								<div class="descripcion">
									<p>Papel pintado</p>
									<p>Techos Flotantes</p>
									<p>Water colgantes</p>
								</div>
							</div>
							<div class="col-12"><hr></div>
							<div class="col-5">
								<img loading="lazy" src="<?php echo RUTA_IMG_OPTIMIZADA;?>categorias/reforma.webp" class="imagen">
							</div>
							<div class="col-7">
								<form role="form" id="busqueda" method="post" action="<?php echo RUTA_BUSCAR_ENTRADA_TIENDA; ?>">
									<input type="hidden" name="buscar-tienda">
									<button name="termino-buscar-tienda" value="Reformas">
										<p class="textoBlack mayusculas">Reformas</p>
									</button>	
								</form><?php //titulo de categoria, debe ir con una fuente bold y mayor tamaño que las demas?>
							</div>
							<div class="col-12"><hr></div>
						</div>
					</div>


					<div class="d-none d-sm-block">
						<div class="col-12 row valign-wrapper" style="padding:4em 0"><?php //principal, recuadro del todo ?>
							<div class="col-4"><?php //primera division, izquierda?>
								<div class="col-12 row cuadro-categorias"><?php //segunda division, subdivision en 2, se debe agrega un margin arriba y abajo?>
									<div class="col-6"></div>
									<div class="col-6" align="right"><?php //subdivision, aqui se ponen los titulos de las categorias, alineado a la derecha?>
										<form role="form" id="busqueda" method="post" action="<?php echo RUTA_BUSCAR_ENTRADA_TIENDA; ?>">
											<input type="hidden" name="buscar-tienda">
											<button name="termino-buscar-tienda" value="pintura">
												<p class="titulo-categoria">Pintura</p>
											</button>	
										</form><?php //titulo de categoria, debe ir con una fuente bold y mayor tamaño que las demas?>
										<p>Fachadas</p>
										<p>Interiores</p>
										<p>Lucido</p>
									</div>
								</div>
							</div>
							<div class="col-4"><?php //primera division, centro, se debe agrega un margin arriba y abajo para que las lineas amarillas sobrepasen los textos?>
								<div class="col-12 row"><?php //segunda division, subdivision en 2?>
									<div class="col-6 row borde-amarillo-derecho"><?php //subdivision, las abreviaciones de las categorias, borde color amarillo a la derecha de 1px ?>
										<div class="col-3"></div>
										<div class="col-9 fondo-oscuro"><?php //el texto alineado a la izquierda y el fondo del bg de color azul?>
											<p class="textoTitulo1 textoBlack" style="padding:0 0.3em;color: white;">P</p><?php //abreviacion de categoria, debe ir con una fuente bold y mayor tamaño que el titulo?>
										</div>
									</div>
									<div class="col-6 row borde-amarillo-izquierdo"><?php //subdivision, las abreviaciones de las categorias, borde color amarillo a la izquierda de 1px ?>
										<div class="col-9 fondo-oscuro" align="right"><?php //el texto alineado a la derecha y el fondo del bg de color azul?>
											<p class="textoTitulo1 textoBlack" style="padding:0 0.3em;color: white;">IM</p><?php //abreviacion de categoria, debe ir con una fuente bold y mayor tamaño que el titulo?>
										</div>
										<div class="col-3"></div>
									</div>
								</div>
							</div>
							<div class="col-4"><?php //cuarta division, izquierda?>
								<div class="col-12 row cuadro-categorias"><?php //segunda division, subdivision en 2, se debe agrega un margin arriba y abajo?>
									<div class="col-9"><?php //subdivision, aqui se ponen los titulos de las categorias, alineado a la izquierda?>
										<form role="form" id="busqueda" method="post" action="<?php echo RUTA_BUSCAR_ENTRADA_TIENDA; ?>">
											<input type="hidden" name="buscar-tienda">
											<button name="termino-buscar-tienda" value="impermeabilizacion">
												<p class="titulo-categoria">Impermeabilización</p>
											</button>	
										</form><?php //titulo de categoria, debe ir con una fuente bold y mayor tamaño que las demas?>
										<p>Cubiertas</p>
										<p>Terrazas</p>
										<p>Piscinas</p>
									</div>
									<div class="col-3"></div>
								</div>
							</div>


							<div class="col-4"><?php //segunda division, izquierda?>
								<div class="col-12 row cuadro-categorias"><?php //segunda division, subdivision en 2, se debe agrega un margin arriba y abajo?>
									<div class="col-6"></div>
									<div class="col-6" align="right"><?php //subdivision, aqui se ponen los titulos de las categorias, alineado a la derecha?>
										<form role="form" id="busqueda" method="post" action="<?php echo RUTA_BUSCAR_ENTRADA_TIENDA; ?>">
											<input type="hidden" name="buscar-tienda">
											<button name="termino-buscar-tienda" value="pladur">
												<p class="titulo-categoria">Pladur</p>
											</button>	
										</form><?php //titulo de categoria, debe ir con una fuente bold y mayor tamaño que las demas?>
										<p>Techos</p>
										<p>Paredes</p>
										<p>Muebles</p>
									</div>
								</div>
							</div>
							<div class="col-4"><?php //segunda division, centro, se debe agrega un margin arriba y abajo para que las lineas amarillas sobrepasen los textos?>
								<div class="col-12 row"><?php //segunda division, subdivision en 2?>
									<div class="col-6 row borde-amarillo-derecho"><?php //subdivision, las abreviaciones de las categorias, borde color amarillo a la derecha de 1px ?>
										<div class="col-3"></div>
										<div class="col-9 fondo-oscuro"><?php //el texto alineado a la izquierda y el fondo del bg de color azul?>
											<p class="textoTitulo1 textoBlack" style="padding:0 0.3em;color: white;">PL</p><?php //abreviacion de categoria, debe ir con una fuente bold y mayor tamaño que el titulo?>
										</div>
									</div>
									<div class="col-6 row borde-amarillo-izquierdo"><?php //subdivision, las abreviaciones de las categorias, borde color amarillo a la izquierda de 1px ?>
										<div class="col-9 fondo-oscuro" align="right"><?php //el texto alineado a la derecha y el fondo del bg de color azul?>
											<p class="textoTitulo1 textoBlack" style="padding:0 0.3em;color: white;">S</p><?php //abreviacion de categoria, debe ir con una fuente bold y mayor tamaño que el titulo?>
										</div>
										<div class="col-3"></div>
									</div>
								</div>
							</div>
							<div class="col-4"><?php //segunda division, izquierda?>
								<div class="col-12 row cuadro-categorias"><?php //segunda division, subdivision en 2, se debe agrega un margin arriba y abajo?>
									<div class="col-6"><?php //subdivision, aqui se ponen los titulos de las categorias, alineado a la izquierda?>
										<form role="form" id="busqueda" method="post" action="<?php echo RUTA_BUSCAR_ENTRADA_TIENDA; ?>">
											<input type="hidden" name="buscar-tienda">
											<button name="termino-buscar-tienda" value="suelo">
												<p class="titulo-categoria">Suelos</p>
											</button>	
										</form><?php //titulo de categoria, debe ir con una fuente bold y mayor tamaño que las demas?>
										<p>Tratamiento</p>
										<p>Parquets</p>
										<p>Diamantado</p>
									</div>
									<div class="col-6"></div>
								</div>
							</div>




							<div class="col-4"><?php //tercera division, izquierda?>
								<div class="col-12 row cuadro-categorias"><?php //segunda division, subdivision en 2, se debe agrega un margin arriba y abajo?>
									<div class="col-6"></div>
									<div class="col-6" align="right"><?php //subdivision, aqui se ponen los titulos de las categorias, alineado a la derecha?>
										<form role="form" id="busqueda" method="post" action="<?php echo RUTA_BUSCAR_ENTRADA_TIENDA; ?>">
											<input type="hidden" name="buscar-tienda">
											<button name="termino-buscar-tienda" value="instalacion">
												<p class="titulo-categoria">Instalaciones</p>
											</button>	
										</form><?php //titulo de categoria, debe ir con una fuente bold y mayor tamaño que las demas?>
										<p>Papel Pintado</p>
										<p>Techos Flotantes</p>
										<p>Water Colgante</p>
									</div>
								</div>
							</div>
							<div class="col-4"><?php //tercera division, centro, se debe agrega un margin arriba y abajo para que las lineas amarillas sobrepasen los textos?>
								<div class="col-12 row"><?php //segunda division, subdivision en 2?>
									<div class="col-6 row borde-amarillo-derecho"><?php //subdivision, las abreviaciones de las categorias, borde color amarillo a la derecha de 1px ?>
										<div class="col-3"></div>
										<div class="col-9 fondo-oscuro"><?php //el texto alineado a la izquierda y el fondo del bg de color azul?>
											<p class="textoTitulo1 textoBlack" style="padding:0 0.3em;color: white;">IN</p><?php //abreviacion de categoria, debe ir con una fuente bold y mayor tamaño que el titulo?>
										</div>
									</div>
									<div class="col-6 row borde-amarillo-izquierdo"><?php //subdivision, las abreviaciones de las categorias, borde color amarillo a la izquierda de 1px ?>
										<div class="col-9 fondo-oscuro" align="right"><?php //el texto alineado a la derecha y el fondo del bg de color azul?>
											<p class="textoTitulo1 textoBlack" style="padding:0 0.3em;color: white;">MN</p><?php //abreviacion de categoria, debe ir con una fuente bold y mayor tamaño que el titulo?>
										</div>
										<div class="col-3"></div>
									</div>
								</div>
							</div>
							<div class="col-4"><?php //tercera division, izquierda?>
								<div class="col-12 row cuadro-categorias"><?php //segunda division, subdivision en 2, se debe agrega un margin arriba y abajo?>
									<div class="col-6"><?php //subdivision, aqui se ponen los titulos de las categorias, alineado a la izquierda?>
										<form role="form" id="busqueda" method="post" action="<?php echo RUTA_BUSCAR_ENTRADA_TIENDA; ?>">
											<input type="hidden" name="buscar-tienda">
											<button name="termino-buscar-tienda" value="mantenimiento">
												<p class="titulo-categoria">Mantenimiento</p>
											</button>	
										</form><?php //titulo de categoria, debe ir con una fuente bold y mayor tamaño que las demas?>
										<p>Tratamiento de maderas</p>
										<p>Tratamiento de metales</p>
									</div>
									<div class="col-6"></div>
								</div>
							</div>




							<div class="col-4"><?php //cuarta division, izquierda?>
								<div class="col-12 row cuadro-categorias"><?php //segunda division, subdivision en 2, se debe agrega un margin arriba y abajo?>
									<div class="col-6"></div>
									<div class="col-6" align="right"><?php //subdivision, aqui se ponen los titulos de las categorias, alineado a la derecha?>
										<form role="form" id="busqueda" method="post" action="<?php echo RUTA_BUSCAR_ENTRADA_TIENDA; ?>">
											<input type="hidden" name="buscar-tienda">
											<button name="termino-buscar-tienda" value="reforma">
												<p class="titulo-categoria">Reformas</p>
											</button>	
										</form><?php //titulo de categoria, debe ir con una fuente bold y mayor tamaño que las demas?>
										<p>Rehabilitaciones</p>
										<p>Obra en exteriores</p>
										<p>Obra en interiores</p>
									</div>
								</div>
							</div>
							<div class="col-4"><?php //cuarta division, centro, se debe agrega un margin arriba y abajo para que las lineas amarillas sobrepasen los textos?>
								<div class="col-12 row"><?php //segunda division, subdivision en 2?>
									<div class="col-6 row borde-amarillo-derecho"><?php //subdivision, las abreviaciones de las categorias, borde color amarillo a la derecha de 1px ?>
										<div class="col-3"></div>
										<div class="col-9 fondo-oscuro"><?php //el texto alineado a la izquierda y el fondo del bg de color azul?>
											<p class="textoTitulo1 textoBlack" style="padding:0 0.3em;color: white;">R</p><?php //abreviacion de categoria, debe ir con una fuente bold y mayor tamaño que el titulo?>
										</div>
									</div>
									<div class="col-6 row borde-amarillo-izquierdo"><?php //subdivision, las abreviaciones de las categorias, borde color amarillo a la izquierda de 1px ?>
										<div class="col-9 fondo-oscuro" align="right"><?php //el texto alineado a la derecha y el fondo del bg de color azul?>
											<p class="textoTitulo1 textoBlack" style="padding:0 0.3em;color: white;">MC</p><?php //abreviacion de categoria, debe ir con una fuente bold y mayor tamaño que el titulo?>
										</div>
										<div class="col-3"></div>
									</div>
								</div>
							</div>
							<div class="col-4"><?php //primera division, izquierda?>
								<div class="col-12 row cuadro-categorias"><?php //segunda division, subdivision en 2, se debe agrega un margin arriba y abajo?>
									<div class="col-6"><?php //subdivision, aqui se ponen los titulos de las categorias, alineado a la izquierda?>
										<form role="form" id="busqueda" method="post" action="<?php echo RUTA_BUSCAR_ENTRADA_TIENDA; ?>">
											<input type="hidden" name="buscar-tienda">
											<button name="termino-buscar-tienda" value="microcemento">
												<p class="titulo-categoria">Microcemento</p>
											</button>	
										</form><?php //titulo de categoria, debe ir con una fuente bold y mayor tamaño que las demas?>
										<p>Paredes</p>
										<p>Suelos</p>
										<p>Muebles</p>
									</div>
									<div class="col-6"></div>
								</div>
							</div>									
						</div>
					</div>





					
					<div style="font-size: 1.3em;padding:2em 0;">
						<font>Desde 2002 un equipo de profesionales totalmente capacitados para llevar los proyectos  al siguiente nivel te garantiza unos resultados de excelente calidad.</font><font class="d-none d-sm-block">Con más de 20 Años de experiencia en AFR Pinturas & Rehabilitaciones sabemos qué hacer en cada circunstancia.</font>
					</div>	



				</div>				
				<?php EscritorEntradasTienda::escribir_entradas(); ?>
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