<?php
header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
header("Last-Modified: ". gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");


include_once 'app/Conexion.inc.php';
include_once 'app/Redireccion.inc.php';

include_once 'app/admin/RepositorioAdmin.inc.php';
include_once 'app/admin/ControlSesionAdmin.inc.php';
include_once 'app/tienda/EscritorEntradas.inc.php';
include_once 'app/blog/EscritorEntradas.inc.php';


if (!ControlSesionAdmin::sesion_iniciada()) {
	Redireccion::redirigir(RUTA_LOGIN_ADMIN);	
}else {
	Conexion :: abrir_conexion();
	$id = $_SESSION['id_admin'];
	$admin = RepositorioAdmin :: obtener_admin_por_id(Conexion::obtener_conexion(), $id);
}


$titulo = "Administración | $nombreEmpresa";
$descripcionPagina = $descripcionAlterna;
$imagenCompartida = RUTA_IMG_OPTIMIZADA."fondo/portada-inicio.webp";


include_once 'app/usuario/RepositorioUsuario.inc.php';
include_once 'seccion/panel_control_declaracion.inc.php';
$array_usuarios = RepositorioUsuario :: obtener_todos(Conexion::obtener_conexion());


include_once 'seccion/admin/perfil/subir_foto.inc.php';
include_once 'seccion/cabecera-inicio.inc.php';
?>
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>recortar-imagen.css">
<script type="text/javascript" src="<?php echo RUTA_JS; ?>desaparecer-automaticamente.js"></script>
<link async='async' rel="stylesheet" href="<?php echo RUTA_CSS; ?>sobreponer.css">
<?php
include_once 'scripts/formatoFecha.php';
include_once 'seccion/cabecera-cierre.inc.php';
include_once 'seccion/doc-navbar.inc.php';
?>




<?php //body ?>

<div class="container-fluid">
	<div class="row">


<div class="row col-12" style="margin-top: 2em;">
	<?php /*columna izquierda moviles*/?>
    <div class="col-md-3 col-12" style="padding: 2em 0;">
        <div class="row bg-image" style="background-image: url(<?php echo RUTA_IMG_OPTIMIZADA;?>fondo/profile-cover.webp);">
            <div class="col-1"></div>
            <div class="col-10" style="margin-top: 8em;margin-bottom:2em ;">
                <div id="actualizar" class="modal bottom-sheet col-12 col-md-12" style="max-height: 100%;">    
                    <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat white-text" style="position: absolute;right: 0;background-color: black;padding: .05em 2.5em;">X</a>
                    <div style="background-color:#180d45;padding: 3em 0;">
                        <p class="textoBookBold textoSubtitulo white-text mayusculas center-align">Configuración de la foto de perfil</p>
                    </div>
                    <div>
                        <form class="text-center row" action="<?php echo RUTA_PERFIL_ADMIN; ?>" method="post" enctype="multipart/form-data">
                            <?php
                            if(file_exists(DIRECTORIO_RAIZ."/assets/fotos-perfil/admin/".$admin->obtener_nombre())) {
                                ?>  
					                        <div class="col-12 col-md-6" style="background-color:black;padding: 2em 0;">
					                            <br>
					                            <a target="_blank" class="btn btn-secundario-animado" href="<?php echo SERVIDOR.'/assets/fotos-perfil/admin/'.$admin->obtener_nombre(); ?>" data-lightbox="Foto de perfil" data-title="Foto de perfil">Ver foto</a>
					                            <input class="btn btn-secundario-animado" type="submit" value="Eliminar" name="borrar"><br>
					                        </div>
					                        <div class="d-block d-sm-none col-1"></div>
					                        <div class="col-10 col-md-6" style="padding: 2em 0;">            
					                            <label class="btn btn-principal-animado" for="archivo_subido" id="label-archivo" title="Selecciona una foto" style="margin-bottom: 0">Cambiar foto</label>  
					                            <input class="d-none" type="file" name="archivo_subido" id="archivo_subido">    
					                            <input class="btn btn-principal" type="submit" value="Subir" name="guardar_imagen" id="guardar_imagen"><br><br>
					                            <p class="grey-text"><i class="fa-solid fa-circle-info"></i> Si deseas cambiar tu foto de perfil primero presiona <b>CAMBIAR FOTO</b> y después <b>SUBIR</b>.</p> 
					                        </div>   
					                        <div class="d-block d-sm-none col-1"></div>             
					                    </form> 
					                </div>
					            </div>
                                <div class="d-none d-sm-block"></div>
                                <a class="modal-trigger col-12" href="#actualizar">
                                    <div>   
                                        <div class="img-profile bg-cover" style="background-color: black;background-image:url(<?php echo SERVIDOR.'/assets/fotos-perfil/admin/'.$admin->obtener_nombre(); ?>);"></div>
                                    </div>
                                </a>
                                <div class="d-none d-sm-block"></div>

                                    <?php
                            } else {        
                            ?>
                            <div class="col-12 col-md-6" align="left" style="background-color:black;padding: 2em 6em 3.5em 6em;color: white;">
                                <br>
                                <p class="textoBlack textoParrafo">Recomendaciones:</p><br>
                                <p>
                                    1. El archivo no debe pesar más de 500kb.<br>
                                    2. Sólo se admiten imágenes JPG, JPEG, PNG o GIF.
                                </p>
                            </div>
                            <div class="d-block d-sm-none col-1"></div>
                            <div class="col-10 col-md-6 center" style="padding: 4em 0;">            
                                <label class="btn btn-principal-animado" for="archivo_subido" id="label-archivo" title="Selecciona una foto" style="margin-bottom: 0">Seleccionar foto</label>  
                                <input class="d-none" type="file" name="archivo_subido" id="archivo_subido">    
                                <input class="btn btn-principal" type="submit" value="Subir" name="guardar_imagen" id="guardar_imagen"><br><br>
                                <p class="grey-text"><i class="fa-solid fa-circle-info"></i> Primero presiona <b>SELECCIONAR FOTO</b> y después <b>SUBIR</b>.</p> 
                            </div>   
                            <div class="d-block d-sm-none col-1"></div>   
                        </form>
                    </div>
                </div>
                <div class="col-2"></div>
                <a class="col-8 waves-effect waves-light btn modal-trigger" style="background-color: white;" href="#actualizar">
                    <span style="font-size:6em;" class="material-icons">account_circle</span>
                    <span class="material-icons">add_a_photo</span>
                </a>
                <div class="col-2"></div>                               
                <?php
                }
            ?>
                </div>
                <p class="textoBookBold textoParrafo1 white-text mayusculas" style="padding: 0 0 1em 1.5em;">Información general</p>
            </div>
                <div class="col-12 row">
                    <div class="col-1"></div>                     
                    <div class="col-10" style="padding-top: 2em;">
                        <?php 
                        if (!empty($admin -> obtener_nombre())) {
                            ?>
                            <p class="textoBookBold textoParrafo" style="font-size: 1.2em;">Hola <?php echo $admin -> obtener_nombre(); ?>, eres administrador</p>
                            <?php
                            }
                        ?>      
                        <br>
                        <p class="textoBook textoParrafo">Correo electrónico:</p>
                        <?php 
                        if (!empty($admin -> obtener_email())) {
                            ?>
                            <p class="textoBookBold textoParrafo" style="font-size: 1.2em;"><?php echo $admin -> obtener_email(); ?></p>
                            <?php
                            }
                        ?>      
                    </div>
                    <div class="col-12 row textoParrafo perfil" style="padding-top:2em;">
                        <a href="<?php echo RUTA_GESTOR_ENTRADAS_TIENDA;?>" class="col-12 tooltipped" data-position="right" data-tooltip="Gestionar proyectos" style="padding:.5em">
                            <p class="boton"><i style="padding:1.5em 1em" class="fa-solid fa-screwdriver-wrench"></i> Gestionar proyectos</p>
                        </a>  
                        <a href="<?php echo RUTA_GESTOR_ENTRADAS_BLOG;?>" class="col-12 tooltipped" data-position="right" data-tooltip="Gestionar blog" style="padding:.5em">
                            <p class="boton"><i style="padding:1.5em 1em" class="fa-solid fa-screwdriver-wrench"></i> Gestionar blog</p>
                        </a>                
                        <a href="<?php echo RUTA_REGISTRO_ADMIN; ?>" class="col-12 tooltipped" data-position="right" data-tooltip="Registrar nuevo colaborador" style="padding:.5em">
                            <p class="boton"><i style="padding:1.5em 1em" class="fa-solid fa-user-pen"></i> Nuevo colaborador</p>
                        </a>                
                        <a href="<?php echo RUTA_REGISTRO; ?>" class="col-12 tooltipped" data-position="right" data-tooltip="Registrar nuevo miembro" style="padding:.5em">
                            <p class="boton"><i style="padding:1.5em 1em" class="fa-solid fa-people-group"></i> Nuevo miembro de equipo</p>
                        </a>
                    </div>
                </div>
            </div>

    

<?php /*estructura derecha*/?>
    <div class="col-md-9 col-12 row" style="margin-top: 4em;">
        <div align="center" class="col-12">
            <p class="textoBlack d-none d-sm-block textoTitulo1" style="margin-bottom:1em;">Bienvenido al panel de administración</p>
        </div>
        <div class="col-12 row">
            <div class="col-1"></div>
            <div class="col-10 row">
                <p class="textoParrafo textoBookBold mayusculas" style="margin-bottom:1em;">Últimos proyectos publicados</p>
                <div class="col-12 row">
                <?php EscritorEntradasTienda::escribir_tres_entradas(); ?>                     
            </div>                
            </div>
            <div class="col-1"></div>                         
        </div>
        <div class="col-12 row">
            <div class="col-1"></div>
            <div class="col-10 row">
                <p class="textoParrafo textoBookBold mayusculas" style="margin-top:2em;margin-bottom:1em;">Últimas publicaciones del blog</p>
                <div class="col-12 row">
                <?php EscritorEntradasBlog::escribir_cuatro_entradas(); ?>                     
            </div>                
            </div>
            <div class="col-1"></div>                         
        </div>
        <div class="col-12 row" style="margin-top:3em;">
            <div class="col-1"></div>
            <div class="col-10 row">
                <p class="textoParrafo textoBookBold mayusculas">Equipo</p>
                                                        
                    <?php 
                        if (count($array_usuarios) > 0) {
                            ?>
                            <div class="col-12 row">                                 
                                <?php
                                for ($i = 0; $i < count($array_usuarios); $i++) {
                                    $usuario_actual = $array_usuarios[$i];
                                    ?>   
                                <div class="col-md-2 col-4" style="padding: .1em;">                           
                                    <img loading="lazy" itemprop="image" class="imagen tooltipped" data-position="center" data-tooltip="<?php echo $usuario_actual->obtener_nombre(); ?>" src="<?php echo SERVIDOR.'/assets/fotos-perfil/usuario/'.$usuario_actual->obtener_telefono()."foto"; ?>">
                                </div>                                
                                    <?php
                                }
                                ?>                                                                           
                            </div>    
                            <?php
                        } else {
                            ?>
                            <p class="textoBookBold textoParrafo">No hay nadie en el equipo</p>
                            <br>
                            <br>
                            <?php
                        }
                    ?>                 
            </div>
            <div class="col-1"></div>                         
        </div>

    </div>
</div>

    



</div>


<?php //cuerpo 
include_once 'seccion/panel_control_cierre.inc.php';
include_once 'seccion/doc-terminacion.inc.php';
?>
