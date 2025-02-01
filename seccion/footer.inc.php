<div class="footer">
	<div class="row sec2">		
		<div class="col-md-4" align="center">
			<img  loading="lazy" itemprop="image" class="imagen-3" src="<?php echo RUTA_IMG_OPTIMIZADA;?>logo/cuadrado.webp">
		</div>
		<div class="col-md-4 col-6 row center-align" style="padding-top:1.2em;">
			<div class="col-12">
				<p class="textoBookBold"><?php echo $nickEmpresa; ?></p>
			</div>
			<div class="col-12 social-pc d-none d-sm-block" style="padding-top: 0;padding-bottom: 0;">
				<?php include 'seccion/social.inc.php'; ?>
			</div>
			<div class="col-12 social-m d-block d-sm-none" style="padding-top: 0;padding-bottom: 0;">
				<?php include 'seccion/social.inc.php'; ?>
			</div>						
		</div>
		<div class="col-md-3 valign-wrapper">	
			<p class="textoBookBold d-none d-sm-block" align="right">
				<a href="<?php echo $direccionEmpresa3?>" target="_blank">
					<?php echo $ubicacionEmpresa?>
					<br>
					<?php echo $direccionEmpresa1?>
				</a>
				<br><br>
				<a href="<?php echo $whatsappEmpresa?>" target="_blank"><?php echo "+34 ".$telefonoEmpresa1?></a>					
			</p>
		</div>
	</div>
</div>
