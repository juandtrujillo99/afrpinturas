<div class="col-12">
<p>Script lista-categorias</p>
<div class="row">					
	<div class="col-12">
		<a href="<?php echo RUTA_TIENDA_COVER_CATEGORIAS ;?>" target="_blank"><h4>Archivos en carpeta <i class="fa-solid fa-arrow-up-right-from-square"></i></h4></a>
		<br>
	</div>          
	<?php 


	/////////////ENLISTAR LOS FICHEROS EXISTENTES
	$listar = null;
	$carpeta = "./assets/tienda/categorias/";//carpeta donde se guardan los archivos
	$directorio=opendir($carpeta);


	while ($elemento = readdir($directorio)){
		if ($elemento != '.' && $elemento != '..'){
			if (is_dir($carpeta.$elemento)){
			?>
			<div class="col-2" style="padding:1em;">
				<img class="imagen" src="<?php echo $carpeta.$elemento ;?>">
				<p style="word-break: break-word;"><?php echo $elemento ;?></p>
			</div>
			<?php
			}else{
			?>
			<div class="col-2" style="padding:1em;">
				<img class="imagen" src="<?php echo $carpeta.$elemento ;?>">
				<p style="word-break: break-word;font-size: 0.5em;"><?php echo htmlentities("<img src='".RUTA_TIENDA_COVER_CATEGORIAS.$elemento."' class='imagen'>") ;?></p>   
			</div>            
			<?php
			}
		}
	}
	?>        
</div>