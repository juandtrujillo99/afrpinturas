<div class="row">
	<div class="col-1"></div>
	<div class="col-10" style="padding: 8em 0 1.5em 0;">
		<h2 class="textoBlack textoTitulo text-center"><?php echo $titulo ?></h2>
		
	</div>
	<div class="col-1"></div>
	<div class="col-1"></div>
	<div class="col-10">
		<div style="padding: 1.2em 0">
			<a href="<?php echo RUTA_NUEVA_ENTRADA_TIENDA; ?>" class="btn btn-principal-animado" role="button" id="boton-nueva-entrada">Nuevo proyecto</a>
		</div>		
		<div class="row">						
			<div class="col-12 row">
			<?php 
				if (count($array_entradas) > 0) {
					for ($i = 0; $i < count($array_entradas); $i++) {
						$entrada_actual = $array_entradas[$i][0];
						?>
						<a target="_blank" href="<?php echo RUTA_ENTRADA_TIENDA . '/' . $entrada_actual -> obtener_url() ?>" class="col-12 col-md-4" style="padding:.5em;">
							<div class="row card" style="background-color: white;color: black;">
								<div class="card-image">                    
									<div align="center">   
										<div class="img-entrada bg-cover" style="background-image:url(<?php echo RUTA_TIENDA_COVER. $entrada_actual -> obtener_imagen(); ?>);"></div>
									</div>
								</div> 
								<div class="card-content col-12 row">
									<div class="row">
										<p class="textoParrafo" style="word-wrap: normal;"><?php echo $entrada_actual -> obtener_titulo(); ?></p>
									</div>
									<div class="row col-12 textoParrafo1b">
										<form class="col-md-6 col-12" style="padding-top: 2em;" method="post" action="<?php echo RUTA_EDITAR_ENTRADA_TIENDA; ?>">
											<input type="hidden" name="id_editar" value="<?php echo $entrada_actual -> obtener_id(); ?>">
											<button type="submit" class="btn btn-principal-animado" name="editar_entrada">
												Editar
											</button>
										</form>
										<form class="col-md-6 col-12" style="padding-top: 2em;" method="post" action="<?php echo RUTA_BORRAR_ENTRADA_TIENDA; ?>">
											<input type="hidden" name="id_borrar" value="<?php echo $entrada_actual -> obtener_id(); ?>">
											<button type="submit" class="btn btn-principal-animado" name="borrar_entrada">
												Eliminar
											</button>
										</form>
									</div>									
								</div>         
							</div>
						</a>
														
						<?php
					}
					?>
			</div>
					<?php
				} else {
					?>
					<div class="col-12">
						<hr>
						<p>Los proyectos creados se mostrarán aquí</p>
					</div>
					<?php
				}
			?>
		</div>
	</div>
</div>