<?php
include_once 'app/blog/EscritorEntradas.inc.php';
?>

<div class="row">	
	<?php
		for ($i = 0; $i < count($entradas_azar); $i++) {
			$entrada_actual = $entradas_azar[$i];
		?>		
		
		<a href="<?php echo RUTA_ENTRADA_BLOG . '/' . $entrada_actual -> obtener_url() ?>" class="col-md-6 col-12" style="padding:.5em;">
			<div style="background-color:black;">
				<div class="row bg-image" style="background-image:url(<?php echo RUTA_BLOG_COVER. $entrada_actual -> obtener_imagen(); ?>);color: white;box-shadow: none;border: 0;">						
					<div class="col-6 filtroEntrada" style="padding:1em;">
						<div class="img-entrada bg-cover" style="height: 10em; background-image:url(<?php echo RUTA_BLOG_COVER.$entrada_actual -> obtener_imagen(); ?>);"></div>
					</div>				
					<div class="col-6 texto-contenido4 filtroEntrada valign-wrapper">
						<p class="textoBookBold" style="font-size:.9em;word-wrap: break-word;"><?php echo EscritorEntradasBlog::resumir_texto(nl2br($entrada_actual -> obtener_titulo()));?></p>
					</div>         
				</div>
			</div>
		</a>
		<?php
		}
	?>
</div>
