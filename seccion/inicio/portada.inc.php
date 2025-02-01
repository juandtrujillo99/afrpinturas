<?php //inicio ?>


<div class="row d-none d-sm-block" style="padding-top: 8em;margin-bottom:8em;">
        <div class="col-12 row section   sobreponer">
            <div class="imagen-background section anime-1" style="background-attachment: fixed;background-image:url(<?php echo RUTA_IMG_OPTIMIZADA;?>fondo/portada.webp) ;">
                <img src="<?php echo RUTA_IMG_OPTIMIZADA;?>fondo/1.webp" class="imagen anime-2b">
            </div> 
            <div class="col-7"></div>
            <div class="col-4 anime-1a white-text">
                <p style="padding:3em 0 0 0;" class="textoBlack textoTitulo">Obtén tu presupuesto ahora</p>
                <p style="padding-top: 1em;" class="textoBook textoParrafo1">La empresa de pintura favorita en la marina alta con más de 20 años de experiencia.</p>
                <p style="padding-top: 1em;" class="textoBook textoParrafo1">
                Trabajamos principalmente en proyectos que involucren la rehabilitación y pintura de espacios en viviendas y comercios de la marina alta y alrededores.</p>
                <div class="col-12" style="padding:2em 0 3em 0">                   
                    <a class="btn btn-secundario-animado" href="<?php echo RUTA_TIENDA; ?>"><p class="textoBold">Saber más</p></a>
                </div>
            </div>
        </div>
    </div>
    <?php //seccion portada pc ?>
</div>
<?php //inicio ?>



<?php //inicio ?>
<div class="d-block d-sm-none row">
    <img loading="lazy" src="<?php echo RUTA_IMG_OPTIMIZADA;?>fondo/portada-m.webp" class="imagen">
    <?php include_once 'seccion/borde-redondeado.inc.php'; ?>
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10 anime-1a">
            <h1 class="textoTitulo1a textoBlack">Obtén tu presupuesto ahora</h1>
            <br>
            <p style="font-size: 1.3em;">
                La empresa de pintura favorita en la marina alta con más de 20 años de experiencia.
                <br><br>
                Trabajamos principalmente en proyectos que involucren la rehabilitación y pintura de espacios en viviendas y comercios de la marina alta y alrededores.
            </p>
            <br>
            <a class="btn btn-principal-animado" href="<?php echo RUTA_NOSOTROS; ?>"><p class="textoBold">Saber más</p></a>
            <br><br><hr>
        </div>
    </div>
</div>