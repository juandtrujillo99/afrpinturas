<?php
include_once 'info_empresa.inc.php';

//info de la base de datos
define('NOMBRE_SERVIDOR', 'host21.latinoamericahosting.com'); //se deja así
define('NOMBRE_USUARIO', 'afrpintu_bd'); //nombre de usuario de la base de datos
define('PASSWORD', 'rRmJJv{5C!&N');
define('NOMBRE_BD', 'afrpintu_bd');//Nombre de la Base de datos
//info de las bases de datos



//Pestañas principales (basicas o  comunes) de la web
	/*
	Aqui debes poner todas las rutas que vayas a utilizar en la pagina
	por ejemplo:
	si queres podes crear una ruta tipo...
	define("RUTA_CONTACTO", SERVIDOR."/contacto.php");
	y en vez de agregarlo a alguna etiqueta <a href="contacto.php"></a>
	podes escribir <a href="<?php echo RUTA_CONTACTO"></a>
	*/
	define("SERVIDOR", "https://afrpinturas.com");//carpeta raiz (la que contiene todos los archivos para el funcionamiento de la página)
	define("RUTA_404", SERVIDOR."/not-found");
	define("RUTA_TIENDA", SERVIDOR."/work");
	define("RUTA_INICIO_USUARIO", SERVIDOR."/inicio");//para los usuarios que iniciaron sesion
	define("RUTA_NOSOTROS", SERVIDOR."/about");//Informacion de la empresa
	define("RUTA_BLOG", SERVIDOR."/blog");
	define("RUTA_CONTACTO", SERVIDOR."/contact");
	define("RUTA_ENLACES", SERVIDOR."/design-1");
	define("RUTA_ZONAS", SERVIDOR."/commercial");
	define("RUTA_LEGAL", SERVIDOR."/terminos-condiciones");
	define("RUTA_PRIVACIDAD", SERVIDOR."/politica-privacidad");
	define("RUTA_COOKIES", SERVIDOR."/politica-cookies");
	define("RUTA_TIENDA_COVER_CATEGORIAS", SERVIDOR."/cover-categorias");


	//PANTALLA DE OFICINA
	define("RUTA_VIDEOS_OFICINA_1", SERVIDOR."/video1");
	define("RUTA_VIDEOS_OFICINA_2", SERVIDOR."/video2");
	define("RUTA_VIDEOS_OFICINA_3", SERVIDOR."/video3");
	define("RUTA_VIDEOS_OFICINA_4", SERVIDOR."/video4");
	define("RUTA_VIDEOS_OFICINA_5", SERVIDOR."/video5");
	define("RUTA_VIDEOS_OFICINA_6", SERVIDOR."/video6");
	define("RUTA_VIDEOS_OFICINA_7", SERVIDOR."/video7");
	define("RUTA_VIDEOS_OFICINA_8", SERVIDOR."/video8");
	define("RUTA_VIDEOS_OFICINA_9", SERVIDOR."/video9");
	define("RUTA_VIDEOS_OFICINA_10", SERVIDOR."/video10");
	define("RUTA_VIDEOS_OFICINA_11", SERVIDOR."/video11");
	define("RUTA_VIDEOS_OFICINA_12", SERVIDOR."/video12");
	define("RUTA_VIDEOS_OFICINA_13", SERVIDOR."/video13");
	define("RUTA_VIDEOS_OFICINA_14", SERVIDOR."/video14");
	define("RUTA_VIDEOS_OFICINA_15", SERVIDOR."/video15");
	define("RUTA_VIDEOS_OFICINA_16", SERVIDOR."/video16");
	define("RUTA_VIDEOS_OFICINA_17", SERVIDOR."/video17");
	define("RUTA_VIDEOS_OFICINA_18", SERVIDOR."/video18");
	define("RUTA_OFICINA_CLIMA", SERVIDOR."/clima");
	define("RUTA_OFICINA_HORA", SERVIDOR."/hora");

//ADMIN
	//Registro y login administradores
	define("RUTA_REGISTRO_ADMIN", SERVIDOR."/registro-colaborador");//registrar nuevo admin
	define("RUTA_REGISTRO_CORRECTO_ADMIN", SERVIDOR."/registro-correcto-colaborador");
	define("RUTA_LOGIN_ADMIN", SERVIDOR."/login-colaborador");//inicio de sesion admin
	define("RUTA_LOGOUT_ADMIN", SERVIDOR."/logout-admin");

	//perfil administrador y edicion de datos
	define("RUTA_PERFIL_ADMIN", SERVIDOR."/perfil-colaborador");
	define("RUTA_RECUPERAR_CLAVE_ADMIN", SERVIDOR."/recuperar-clave-admin");
	define("RUTA_GENERAR_URL_SECRETA_ADMIN", SERVIDOR."/generar-url-secreta-admin");
	define("RUTA_RECUPERACION_CLAVE_ADMIN", SERVIDOR."/recuperacion-clave-admin");
	define("RUTA_EDITAR_DATOS_ADMINS", SERVIDOR."/generar-peticion-edicion-datos-colaborador");//script
	define("RUTA_CLAVE_ACTUALIZADA_ADMIN", SERVIDOR."/clave-actualizada-admin");
	define("RUTA_EDITAR_DATOS_ADMIN", SERVIDOR."/editar-datos-colaborador");//edicion de datos del administrador


//USUARIO
	//Registro y login de usuario
	define("RUTA_GESTOR_USUARIOS", SERVIDOR."/gestor-usuarios");
	define("RUTA_BORRAR_USUARIO", SERVIDOR."/borrar-usuario");
	define("RUTA_REGISTRO", SERVIDOR."/registro");//registrar nuevo usuario
	define("RUTA_REGISTRO_CORRECTO", SERVIDOR."/registro-correcto-usuario");
	define("RUTA_LOGIN", SERVIDOR."/iniciar-sesion");//inicio de sesion usuario
	define("RUTA_LOGOUT", SERVIDOR."/logout");

	//perfil usuario
	define("RUTA_PERFIL", SERVIDOR."/perfil");
	define("RUTA_EDITAR_DATOS", SERVIDOR."/generar-peticion-edicion-datos");//script
	define("RUTA_EDITAR_DATOS_USUARIO", SERVIDOR."/editar-datos-usuario");//edicion de datos del usuario

	//recuperacion de contraseña para usuario
	define("RUTA_RECUPERAR_CLAVE", SERVIDOR."/recuperar-clave");
	define("RUTA_GENERAR_URL_SECRETA", SERVIDOR."/generar-url-secreta");
	define("RUTA_RECUPERACION_CLAVE", SERVIDOR."/recuperacion-clave");//contraseña para usuario
	define("RUTA_ENVIO_EMAIL", SERVIDOR."/enviar-email");


//PAGINAS 3ER NIVEL (Estas son las paginas de tercer nivel de redireccion que detectan que el usuario ha realizado una accion especifica)
	define("RUTA_EMAIL_RECUPERACION_CLAVE", SERVIDOR."/email-recuperacion-clave-enviado");
	define("RUTA_CLAVE_ACTUALIZADA", SERVIDOR."/clave-actualizada");


//entradas de blog
	define("RUTA_ENTRADA_BLOG", SERVIDOR."/entrada-blog");
	define("RUTA_PANEL_ENTRADA_BLOG", SERVIDOR."/panel-entrada-blog");
	define("RUTA_GESTOR_ENTRADAS_BLOG", RUTA_PANEL_ENTRADA_BLOG."/entradas-blog");
	define("RUTA_NUEVA_ENTRADA_BLOG", SERVIDOR."/nueva-entrada-blog");
	define("RUTA_BORRAR_ENTRADA_BLOG", SERVIDOR."/borrar-entrada-blog");
	define("RUTA_EDITAR_ENTRADA_BLOG", SERVIDOR."/editar-entrada-blog");
	define("RUTA_BUSCAR_BLOG", SERVIDOR."/buscar-blog");//busca entrada
	define("RUTA_BUSCAR_ENTRADA_BLOG", SERVIDOR."/buscar-entrada-blog");//busca entrada



//entradas de tienda
	define("RUTA_ENTRADA_TIENDA", SERVIDOR."/servicio");
	define("RUTA_PANEL_ENTRADA_TIENDA", SERVIDOR."/panel-entrada-tienda");
	define("RUTA_GESTOR_ENTRADAS_TIENDA", RUTA_PANEL_ENTRADA_TIENDA."/entradas-tienda");
	define("RUTA_NUEVA_ENTRADA_TIENDA", SERVIDOR."/nueva-entrada-tienda");
	define("RUTA_BORRAR_ENTRADA_TIENDA", SERVIDOR."/borrar-entrada-tienda");
	define("RUTA_EDITAR_ENTRADA_TIENDA", SERVIDOR."/editar-entrada-tienda");
	define("RUTA_BUSCAR_TIENDA", SERVIDOR."/buscar-tienda");//busca producto
	define("RUTA_BUSCAR_ENTRADA_TIENDA", SERVIDOR."/buscar-entrada-tienda");//busca entrada





//recursos
	define("RUTA_IMG", SERVIDOR."/assets/");
	define("RUTA_IMG_OPTIMIZADA", SERVIDOR."/assets/webp/");
	define("RUTA_VIDEOS", RUTA_IMG."videos/");
	define("RUTA_BLOG_COVER", SERVIDOR."/assets/blog/cover/");
	define("RUTA_TIENDA_COVER", SERVIDOR."/assets/tienda/cover/");
	define("RUTA_TIENDA_CATEGORIAS", SERVIDOR."/assets/tienda/categorias/");

//PDFs subidos
	define("RUTA_GUIA_TALLAS_PDF", SERVIDOR."/pdf/guia-tallas");
	define("RUTA_EBOOK_PDF", SERVIDOR."/pdf/ebook/");
	
	define("RUTA_CSS", SERVIDOR."/css/");
	define("RUTA_JS", SERVIDOR."/js/");
	define("DIRECTORIO_RAIZ", realpath(__DIR__."/.."));