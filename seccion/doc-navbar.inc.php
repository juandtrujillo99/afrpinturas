<?php

if(ControlSesion :: sesion_iniciada() && ControlSesionAdmin :: sesion_iniciada()) {//con inicio de sesion de usuario y admin

	//barra de navegación movil ?>
	<ul id="slide-out" class="sidenav">
		<li>
			<div class="user-view">
				<a href="#user">
					<img  loading="lazy" itemprop="image" class="imagen" style="padding: 4em" src="<?php echo RUTA_IMG_OPTIMIZADA;?>logo/cuadrado.webp">
				</a>
			</div>
		</li>
		<li><div class="divider"></div></li>
		<li><br></li>
		<li><a href="<?php echo RUTA_PERFIL_ADMIN ?>" class="col">Panel</a></li>
		<li><a href="<?php echo RUTA_GESTOR_ENTRADAS_TIENDA ?>" class="col">Proyectos</a></li>
		<li><a href="<?php echo RUTA_GESTOR_ENTRADAS_BLOG ?>" class="col">Blog</a></li>
		<li><a href="<?php echo RUTA_PERFIL ?>" class="col">Perfil de usuario</a></li>
		<li><a href="<?php echo RUTA_LOGOUT ?>" class="col">Salir</a></li>
	</ul>
	


	<?php //barra de navegación pc ?>
	<header class="li" id="header">
		<nav class="d-block d-sm-none" style="z-index: 10;">
			<div class="row">
				<div class="col-1"></div>
				<div class="col-2 waves-effect">
					<a href="<?php echo RUTA_TIENDA; ?>">
						<img  loading="lazy" itemprop="image" class="imagen" src="<?php echo RUTA_IMG_OPTIMIZADA;?>logo/icono.webp">
					</a>
				</div>			
				<div class="col-6"></div>
				<div class="col-1 valign-wrapper row ">
					<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
				</div>			
			</div>
		</nav>

	 	<div class="d-none d-sm-block menu-pc">
	        <div class="row">
	            <div class="col-2 row valign-wrapper">
	                <div class="col-5" style="padding: .5em 0;">
	                    <a href="<?php echo SERVIDOR; ?>">
	                        <img  loading="lazy" itemprop="image" class="imagen" src="<?php echo RUTA_IMG_OPTIMIZADA;?>logo/cuadrado.webp">
	                    </a>
	                </div>
	            </div>
	            <div class="col-4"></div>
	            <div class="col-4 valign-wrapper center-align">
	                <a href="<?php echo RUTA_PERFIL_ADMIN ?>" class="col">Panel</a>
	                <a href="<?php echo RUTA_GESTOR_ENTRADAS_TIENDA ?>" class="col">Proyectos</a>
	                <a href="<?php echo RUTA_GESTOR_ENTRADAS_BLOG ?>" class="col">Blog</a>
	                <a href="<?php echo RUTA_PERFIL ?>" class="col">Usuario</a>
					<a href="<?php echo RUTA_LOGOUT ?>" class="col">Salir</a>
	            </div> 
	        </div>  
	    </div>  
	</header>  


	

<?php

}elseif(ControlSesionAdmin :: sesion_iniciada()&&!ControlSesion :: sesion_iniciada()) {//con inicio de sesion de admin

	//barra de navegación movil ?>
	<ul id="slide-out" class="sidenav">
		<li>
			<div class="user-view">
				<a href="#user">
					<img  loading="lazy" itemprop="image" class="imagen" style="padding: 4em" src="<?php echo RUTA_IMG_OPTIMIZADA;?>logo/cuadrado.webp">
				</a>
			</div>
		</li>
		<li><div class="divider"></div></li>
		<li><br></li>
		<li><a href="<?php echo RUTA_PERFIL_ADMIN ?>" class="col">Panel</a></li>
		<li><a href="<?php echo RUTA_GESTOR_ENTRADAS_TIENDA ?>" class="col">Proyectos</a></li>
		<li><a href="<?php echo RUTA_BLOG ?>" class="col">Blog</a></li>
		<li><a href="#openBuscador" class="col modal-trigger">Buscar</a></li>
		<li><a href="<?php echo RUTA_LOGOUT ?>" class="col">Salir</a></li>
	</ul>
	


	<?php //barra de navegación pc ?>
	<header class="li" id="header">
		<nav class="d-block d-sm-none" style="z-index: 10;">
			<div class="row">
				<div class="col-1"></div>
				<div class="col-2 waves-effect">
					<a href="<?php echo RUTA_TIENDA; ?>">
						<img  loading="lazy" itemprop="image" class="imagen" src="<?php echo RUTA_IMG_OPTIMIZADA;?>logo/icono.webp">
					</a>
				</div>			
				<div class="col-6"></div>
				<div class="col-1 valign-wrapper row ">
					<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
				</div>			
			</div>
		</nav>

	 	<div class="d-none d-sm-block menu-pc">
	        <div class="row">
	            <div class="col-2 row valign-wrapper">
	                <div class="col-5" style="padding: .5em 0;">
	                    <a href="<?php echo SERVIDOR; ?>">
	                        <img  loading="lazy" itemprop="image" class="imagen" src="<?php echo RUTA_IMG_OPTIMIZADA;?>logo/cuadrado.webp">
	                    </a>
	                </div>
	            </div>
	            <div class="col-4"></div>
	            <div class="col-4 valign-wrapper center-align">
	                <a href="<?php echo RUTA_PERFIL_ADMIN ?>" class="col">Panel</a>
	                <a href="<?php echo RUTA_GESTOR_ENTRADAS_TIENDA ?>" class="col">Proyectos</a>
	                <a href="<?php echo RUTA_BLOG ?>" class="col">Blog</a>
	                <a href="#openBuscador" class="col modal-trigger">Buscar</a>
					<a href="<?php echo RUTA_LOGOUT ?>" class="col">Salir</a>
	            </div> 
	        </div>  
	    </div>  
	</header>  

<?php

}elseif(ControlSesion :: sesion_iniciada()&&!ControlSesionAdmin :: sesion_iniciada()) {//con inicio de sesion de usuario


	//barra lateral movil ?>
	<ul id="slide-out" class="sidenav">
		<li>
			<div class="user-view center">
				<a href="#user">
					<img  loading="lazy" itemprop="image" class="imagen-2" style="margin-top:1.5em;margin-bottom:1.5em;" src="<?php echo RUTA_IMG_OPTIMIZADA;?>logo/cuadrado.webp">
				</a>
			</div>
		</li>
		<li><div class="divider"></div></li>
		<li><br></li>
		<li><a href="<?php echo RUTA_PERFIL ?>" class="col"><i class="fa-solid fa-user"></i>Perfil de usuario</a></li>
		<li><a href="<?php echo SERVIDOR ?>" class="col"><i class="fa-solid fa-house"></i>Inicio</a></li>
		<li><a href="<?php echo RUTA_TIENDA ?>" class="col"><i class="fa-solid fa-briefcase"></i>Proyectos</a></li>
		<li><a href="<?php echo RUTA_BLOG ?>" class="col"><i class="fa-solid fa-paint-roller"></i>Blog</a></li>
		<li><a href="<?php echo RUTA_LOGOUT ?>" class="col"><i class="fa-solid fa-arrow-right-from-bracket"></i>Cerrar sesión</a></li>
		<li><br></li>
	</ul>
	


	<?php //barra de navegación pc ?>
	<header class="li" id="header">
		<nav class="d-block d-sm-none" style="z-index: 10;">
			<div class="row valign-wrapper">
				<div class="col-1"></div>
				<div class="col-2 waves-effect">
					<a href="<?php echo RUTA_TIENDA; ?>">
						<img  loading="lazy" itemprop="image" class="imagen" src="<?php echo RUTA_IMG_OPTIMIZADA;?>logo/cuadrado.webp">
					</a>
				</div>			
				<div class="col-6"></div>
				<div class="col-1 row ">
					<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
				</div>			
			</div>
		</nav>

	 	<div class="d-none d-sm-block menu-pc">
	 		<?php //barra de email y telefono ?>
	 		<div class="row" style="background-color:grey;color: white;">
	 			<div class="col-12 row">
	 				<p align="right" class="col-11 textoBookBold textoParrafo1b" style="padding: .5em 1em;border-right: 1px solid white;"><?php echo $emailEmpresa ?></p>
	 				<p class="col textoBookBold textoParrafo1b"style="padding: .5em 1em;"><?php echo $telefonoEmpresa ?></p>
	 			</div>
	 		</div>
	 		<?php //barra enlaces ?>
	        <div class="row">
	            <div class="col-2 row valign-wrapper">
	                <div class="col-5" style="padding: .5em 0;">
	                    <a href="<?php echo SERVIDOR; ?>">
	                        <img  loading="lazy" itemprop="image" class="imagen" src="<?php echo RUTA_IMG_OPTIMIZADA;?>logo/cuadrado.webp">
	                    </a>
	                </div>
	            </div>
	            <div class="col-4"></div>
	            <div class="col-4 valign-wrapper center-align">
	                <a href="<?php echo SERVIDOR ?>" class="col tooltipped" data-position="bottom" data-tooltip="Inicio"><i class="fa-solid fa-house"></i></a>
	                <a href="<?php echo RUTA_PERFIL ?>" class="col tooltipped" data-position="bottom" data-tooltip="Perfil de usuario"><i class="fa-solid fa-user"></i></a>
	                <a href="<?php echo RUTA_TIENDA ?>" class="col tooltipped" data-position="bottom" data-tooltip="Proyectos"><i class="fa-solid fa-briefcase"></i></a>
	                <a href="<?php echo RUTA_BLOG ?>" class="col tooltipped" data-position="bottom" data-tooltip="Blog"><i class="fa-solid fa-paint-roller"></i></a>
	                <a href="<?php echo RUTA_LOGOUT ?>" class="col tooltipped" data-position="bottom" data-tooltip="Cerrar sesión"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
	            </div> 
	        </div>  
	    </div>  
	</header> 
	

<?php
}else{//sin inicio de sesion
	//barra lateral movil ?>
	<ul id="slide-out" class="sidenav">
		<li>
			<div class="user-view center">
				<a href="#user">
					<img  loading="lazy" itemprop="image" class="imagen-2" style="margin-top:1.5em;margin-bottom:1.5em;" src="<?php echo RUTA_IMG_OPTIMIZADA;?>logo/cuadrado.webp">
				</a>
			</div>
		</li>
		<li><div class="divider"></div></li>
		<li><br></li>
		<li><a href="<?php echo SERVIDOR ?>" class="col"><i class="fa-solid fa-house"></i>Inicio</a></li>
		<li><a href="<?php echo RUTA_TIENDA ?>" class="col"><i class="fa-solid fa-briefcase"></i>Proyectos</a></li>
		<li><a href="<?php echo RUTA_NOSOTROS ?>" class="col"><i class="fa-solid fa-users"></i>Nosotros</a></li>
		<li><a href="<?php echo RUTA_BLOG ?>" class="col"><i class="fa-solid fa-paint-roller"></i>Blog</a></li>
		<li><a href="<?php echo RUTA_CONTACTO ?>" class="col"><i class="fa-solid fa-phone"></i>Contacto</a></li>
		<li><a href="#openBuscador" class="col modal-trigger"><i class="fa-solid fa-magnifying-glass"></i>Buscar</a></li>
		<li><a href="<?php echo RUTA_LOGIN_ADMIN ?>" class="col"><i class="fa-solid fa-user"></i>Iniciar sesión</a></li>
		<li><br></li>
		<li><div class="divider"></div></li>
		<li><a class="col"><?php echo $emailEmpresa ?></a></li>
		<li><a class="col"><?php echo $telefonoEmpresa ?></a></li>
		<li><div class="divider"></div></li>
	</ul>
	


	<?php //barra de navegación pc ?>
	<header class="li" id="header">
		<nav class="d-block d-sm-none" style="z-index: 10;">
			<div class="row valign-wrapper">
				<div class="col-1"></div>
				<div class="col-2 waves-effect">
					<a href="<?php echo RUTA_TIENDA; ?>">
						<img  loading="lazy" itemprop="image" class="imagen" src="<?php echo RUTA_IMG_OPTIMIZADA;?>logo/cuadrado.webp">
					</a>
				</div>			
				<div class="col-6"></div>
				<div class="col-1 row ">
					<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
				</div>			
			</div>
		</nav>

	 	<div class="d-none d-sm-block menu-pc">
	 		<?php //barra de email y telefono ?>
	 		<div class="row" style="background-color:grey;color: white;">
	 			<div class="col-12 row">
	 				<p align="right" class="col-11 textoBookBold textoParrafo1b" style="padding: .5em 1em;border-right: 1px solid white;"><?php echo $emailEmpresa ?></p>
	 				<p class="col textoBookBold textoParrafo1b"style="padding: .5em 1em;"><?php echo $telefonoEmpresa ?></p>
	 			</div>
	 		</div>
	 		<?php //barra enlaces ?>
	        <div class="row">
	            <div class="col-2 row valign-wrapper">
	                <div class="col-5" style="padding: .5em 0;">
	                    <a href="<?php echo SERVIDOR; ?>">
	                        <img  loading="lazy" itemprop="image" class="imagen" src="<?php echo RUTA_IMG_OPTIMIZADA;?>logo/cuadrado.webp">
	                    </a>
	                </div>
	            </div>
	            <div class="col-4"></div>
	            <div class="col-4 valign-wrapper center-align">
	                <a href="<?php echo SERVIDOR ?>" class="col tooltipped" data-position="bottom" data-tooltip="Inicio"><i class="fa-solid fa-house"></i></a>
	                <a href="<?php echo RUTA_TIENDA ?>" class="col tooltipped" data-position="bottom" data-tooltip="Proyectos"><i class="fa-solid fa-briefcase"></i></a>
	                <a href="<?php echo RUTA_NOSOTROS ?>" class="col tooltipped" data-position="bottom" data-tooltip="Nosotros"><i class="fa-solid fa-users"></i></a>
	                <a href="<?php echo RUTA_BLOG ?>" class="col tooltipped" data-position="bottom" data-tooltip="Blog"><i class="fa-solid fa-paint-roller"></i></a>
	                <a href="<?php echo RUTA_CONTACTO ?>" class="col tooltipped" data-position="bottom" data-tooltip="Contacto"><i class="fa-solid fa-phone"></i></a>
					<a href="#openBuscador" class="col modal-trigger tooltipped" data-position="bottom" data-tooltip="Buscar"><i class="fa-solid fa-magnifying-glass"></i></a>
	                <a href="<?php echo RUTA_LOGIN_ADMIN ?>" class="col tooltipped" data-position="bottom" data-tooltip="Iniciar sesión"><i class="fa-solid fa-user"></i></a>
	            </div> 
	        </div>  
	    </div>  
	</header> 

	<div class="btn-flotante-contact">
		<a href="<?php echo $whatsappEmpresa ?>" target="_blank">
			<div class="btn-floating pulse">
				<i class="fa-brands fa-whatsapp"></i>	
			</div>
		</a>	
	</div> 
	 	
<?php
}

  
//abrir el buscador Modal ?>
<div id="openBuscador" class="modal" style="height:auto;padding: 2em;">
	<div class="modal-content">
		<form role="form" id="busqueda" method="post" action="<?php echo RUTA_BUSCAR_ENTRADA_TIENDA; ?>">
			<div class="input-field">
				<i class="material-icons prefix">search</i>
				<input type="text" id="autocomplete-input" placeholder="Usa palabras clave" name="termino-buscar-tienda" required class="autocomplete">		
				<input type="hidden" name="buscar-tienda">
      			<label for="autocomplete-input">Búsqueda</label>
			</div>
        </form>	
	</div>
</div>


