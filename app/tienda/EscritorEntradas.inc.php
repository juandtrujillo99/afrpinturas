<?php
include_once 'app/Conexion.inc.php';
include_once 'app/tienda/RepositorioEntrada.inc.php';
include_once 'app/tienda/Entrada.inc.php';

class EscritorEntradasTienda {

	public static function escribir_entradas() {
		$entradas = RepositorioEntradaTienda::obtener_todas_por_fecha_descendente(Conexion::obtener_conexion());

		if (count($entradas)) {

			foreach ($entradas as $entrada) {

				self::escribir_entrada($entrada);
			}
		}
	}
	public static function escribir_entrada($entrada) {
		if (!isset($entrada)) {
			return;
		}
		?>
		<a href="<?php echo RUTA_ENTRADA_TIENDA . '/' . $entrada -> obtener_url() ?>" class="col-md-6 col-12" style="padding:.5em;">
			<div style="background-color:black;">
				<div class="row bg-image" style="background-image:url(<?php echo RUTA_TIENDA_COVER. $entrada -> obtener_imagen(); ?>);color: white;box-shadow: none;border: 0;">
					<div class="col-md-6 d-none d-sm-block filtroEntrada" style="padding:1em;">
						<div class="img-entrada bg-cover" style="background-image:url(<?php echo RUTA_TIENDA_COVER.$entrada -> obtener_imagen(); ?>);"></div>
					</div>	
					<div class="d-block d-sm-none col-12 filtroEntrada" style="padding:1em 1em 0 1em;">
						<div class="img-entrada bg-cover" style="background-image:url(<?php echo RUTA_TIENDA_COVER.$entrada -> obtener_imagen(); ?>);"></div>
					</div>				
					<div class="col-md-6 col-12 texto-contenido4 filtroEntrada valign-wrapper">
						<p class="textoBookBold mayusculas" style="font-size: 1.2em;line-height: 1.2em;word-wrap: break-word;"><?php echo EscritorEntradasTienda::resumir_texto(nl2br($entrada -> obtener_titulo()));?></p>
					</div>         
				</div>
			</div>
		</a>
		<?php
	}



	public static function escribir_cuatro_entradas() {
		$entradas = RepositorioEntradaTienda::obtener_cuatro_por_fecha_descendente(Conexion::obtener_conexion());
		if (count($entradas)) {
			foreach ($entradas as $entrada) {
				self::escribir_preview_entradas($entrada);
			}
		}
	}
	public static function escribir_preview_entradas($entrada) {
		if (!isset($entrada)) {
			return;
		}
		?>
		<a href="<?php echo RUTA_ENTRADA_TIENDA . '/' . $entrada -> obtener_url() ?>" class="col-md-3 col-12" style="padding:.5em;">
			<div style="background-color:black;" title="<?php echo $entrada -> obtener_titulo();?>">
				<div class="row bg-image" style="background-image:url(<?php echo RUTA_TIENDA_COVER. $entrada -> obtener_imagen(); ?>);color: white;box-shadow: none;border: 0;">					
					<div class="texto-contenido4 filtroEntrada">
						<div class="img-entrada bg-cover" style="background-image:url(<?php echo RUTA_TIENDA_COVER.$entrada -> obtener_imagen(); ?>);"></div>
						<p class="textoBookBold mayusculas" style="font-size: 1.1em;line-height: 1.2em;padding-top: 1em;word-wrap: break-word;"><?php echo EscritorEntradasTienda::resumir_titulo(nl2br($entrada -> obtener_titulo()));?></p>
					</div>       
				</div>
			</div>
		</a>
		<?php
	}

	public static function escribir_tres_entradas() {
		$entradas = RepositorioEntradaTienda::obtener_tres_por_fecha_descendente(Conexion::obtener_conexion());
		if (count($entradas)) {
			foreach ($entradas as $entrada) {
				self::escribir_preview_entradas_admin($entrada);
			}
		}
	}
	public static function escribir_preview_entradas_admin($entrada) {
		if (!isset($entrada)) {
			return;
		}
		?>
		<a href="<?php echo RUTA_ENTRADA_TIENDA . '/' . $entrada -> obtener_url() ?>" class="col-md-4 col-12" style="padding-right:2em;margin-top: .5em;margin-bottom: .5em;">
			<div style="background-color:black;" title="<?php echo $entrada -> obtener_titulo();?>">
				<div class="row bg-image" style="background-image:url(<?php echo RUTA_TIENDA_COVER. $entrada -> obtener_imagen(); ?>);color: white;box-shadow: none;border: 0;">					
					<div class="texto-contenido4 filtroEntrada" style="z-index: 1;">
						<div class="img-entrada bg-cover" style="background-image:url(<?php echo RUTA_TIENDA_COVER.$entrada -> obtener_imagen(); ?>);"></div>
						<p class="textoBookBold mayusculas" style="font-size: 1.1em;line-height: 1.2em;padding-top: 1em;word-wrap: break-word;"><?php echo EscritorEntradasTienda::resumir_titulo(nl2br($entrada -> obtener_titulo()));?></p>
					</div>       
				</div>
			</div>
		</a>
		<?php
	}

	public static function mostrar_entradas_busqueda($entradas) {
		for ($i = 1; $i <= count($entradas); $i++) {
			if($i % 25 == 0) {
				?>
			<div class="col">
				<?php
			}

			$entrada = $entradas[$i - 1];
			self::mostrar_entrada_busqueda($entrada);

			if($i % 25 == 0) {
				?>
			</div>
				<?php
			}
		}
	}

	public static function mostrar_entradas_busqueda_multiple($entradas) {
		for ($i = 0; $i < count($entradas); $i++) {
			?>
			<div class="col">
			<?php

			$entrada = $entradas[$i];
			self::mostrar_entrada_busqueda_multiple($entrada);

			?>
			</div>
			<?php
		}
	}

	public static function mostrar_entrada_busqueda($entrada) {
		if (!isset($entrada)) {
			return;
		}
		?>
		<a href="<?php echo RUTA_ENTRADA_TIENDA . '/' . $entrada -> obtener_url() ?>" class="col-md-3 col-6" style="padding:.5em;">
			<div style="background-color:black;" title="<?php echo $entrada -> obtener_titulo();?>">
				<div class="row bg-image" style="background-image:url(<?php echo RUTA_TIENDA_COVER. $entrada -> obtener_imagen(); ?>);color: white;box-shadow: none;border: 0;">					
					<div class="texto-contenido4 filtroEntrada">
						<div class="img-entrada bg-cover" style="background-image:url(<?php echo RUTA_TIENDA_COVER.$entrada -> obtener_imagen(); ?>);"></div>
						<p class="textoBookBold mayusculas" style="font-size: 1.1em;line-height: 1.2em;padding-top: 1em;word-wrap: break-word;"><?php echo EscritorEntradasTienda::resumir_titulo(nl2br($entrada -> obtener_titulo()));?></p>
					</div>       
				</div>
			</div>
		</a>
		<?php
	}

	public static function mostrar_entrada_busqueda_multiple($entrada) {
		if (!isset($entrada)) {
			return;
		}
		?>
		<a href="<?php echo RUTA_ENTRADA_TIENDA . '/' . $entrada -> obtener_url() ?>" class="col-md-3 col-6" style="padding:.5em;">
			<div style="background-color:black;" title="<?php echo $entrada -> obtener_titulo();?>">
				<div class="row bg-image" style="background-image:url(<?php echo RUTA_TIENDA_COVER. $entrada -> obtener_imagen(); ?>);color: white;box-shadow: none;border: 0;">					
					<div class="texto-contenido4 filtroEntrada">
						<div class="img-entrada bg-cover" style="background-image:url(<?php echo RUTA_TIENDA_COVER.$entrada -> obtener_imagen(); ?>);"></div>
						<p class="textoBookBold mayusculas" style="font-size: 1.1em;line-height: 1.2em;padding-top: 1em;word-wrap: break-word;"><?php echo EscritorEntradasTienda::resumir_titulo(nl2br($entrada -> obtener_titulo()));?></p>
					</div>       
				</div>
			</div>
		</a>
		<?php
	}

	public static function resumir_titulo($titulo) {
		$longitud_maxima = 50;

		$resultado = '';

		if (strlen($titulo) >= $longitud_maxima) {

			$resultado = substr($titulo, 0, $longitud_maxima);

			$resultado .= '...';
		} else {
			$resultado = $titulo;
		}

		return $resultado;
	}

	public static function resumir_texto($texto) {
		$longitud_maxima = 80;

		$resultado = '';

		if (strlen($texto) >= $longitud_maxima) {

			$resultado = substr($texto, 0, $longitud_maxima);

			$resultado .= '...';
		} else {
			$resultado = $texto;
		}

		return $resultado;
	}

}
