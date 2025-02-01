<?php
include_once 'app/tienda/EscritorEntradas.inc.php';
?>

<div class="row">
	<?php
		for ($i = 0; $i < count($entradas_azar); $i++) {
			$entrada_actual = $entradas_azar[$i];
		?>	
		<a href="<?php echo RUTA_ENTRADA_TIENDA . '/' . $entrada_actual -> obtener_url() ?>" class="col-12" style="padding:.5em;">
			<div style="background-color:black;">
				<div class="row bg-image" style="background-image:url(<?php echo RUTA_TIENDA_COVER. $entrada_actual -> obtener_imagen(); ?>);color: white;box-shadow: none;border: 0;">						
					<div class="col-12 filtroEntrada" style="padding:1em 1em 0 1em;">
						<div class="img-entrada bg-cover" style="background-image:url(<?php echo RUTA_TIENDA_COVER.$entrada_actual -> obtener_imagen(); ?>);"></div>
					</div>				
					<div class="col-12 texto-contenido4 filtroEntrada valign-wrapper">
						<p class="textoBookBold mayusculas" style="font-size: 1.2em;line-height: 1.2em;word-wrap: break-word;"><?php echo EscritorEntradasTienda::resumir_texto(nl2br($entrada_actual -> obtener_titulo()));?></p>
					</div>         
				</div>
			</div>
		</a>
		<?php
		}
	?>
	<div class="col-12">
		<br>
		<a class="btn btn-principal-animado" href="<?php echo RUTA_TIENDA; ?>"><p class="textoBold">Ver más</p></a>
	</div>
	
</div>
