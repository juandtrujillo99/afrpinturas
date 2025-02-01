<?php
    header("Content-type: text/css; charset: UTF-8");
    include_once 'identidad-corporativa.inc.php';
    /* las lineas estan corridas algunas casillas hacia abajo porque este codigo no se muestra en el navegador*/
?>

/*estilos para pc*/

html{scroll-behavior: smooth;}

*{margin: 0;padding: 0;box-sizing: border-box;text-decoration: none;}

*::-moz-selection{background: <?php echo $colorMarca;?>;color: #fff;}

*::selection {background: <?php echo $colorMarca3;?>;color: #000;}

body{font-family: <?php echo $textoBook;?>;}

/*barra de scroll*/
body::-webkit-scrollbar {width: 6px;background: <?php echo $colorMarca4;?>;}
body::-webkit-scrollbar-thumb {background: <?php echo $colorMarca;?>;border-radius: 10px;border-right: 2px solid <?php echo $colorMarca;?>;}
/*barra de scroll*/

.bg-image{background-position: center center; background-attachment: scroll; background-size: cover;}
.sombra{box-shadow: 0px .1px 5px 0px rgba(0,0,0,0.5);}
.sombra .categoria button{padding: 1em;background-color: rgba(0, 0, 0, .5);}
.sombra .categoria button{padding: 1em;background-color: rgba(0, 0, 0, .5);}

.sombra-1:hover{box-shadow: 0px .1px 5px 0px rgba(0,0,0,0.5);}

.mayusculas{text-transform: uppercase;}
.minusculas{text-transform: lowercase;}

.textoBlack{font-family: <?php echo $textoBlack;?>;text-transform: uppercase;}
.textoBold{font-family: <?php echo $textoBold;?>;letter-spacing: .01em;}
.textoBookBold{font-family: <?php echo $textoBookBold;?>;}
.textoBook{font-family: <?php echo $textoBook;?>}


.textoColorMarca{color: <?php echo $colorMarca;?>;}
.textoColorMarca1a{color: <?php echo $colorMarca1a;?>;}
.textoColorMarca3{color: <?php echo $colorMarca3;?>;}
.textoColorMarca4{color: <?php echo $colorMarca4;?>;}


.textoTitulo{font-size: 3em;}
.textoTitulo1{font-size: 2.5em;}
.textoSubtitulo{font-size: 2em;}
.textoSubtituloMarginIzq{font-size: 2em;margin-left: 1em;margin-top: -1em;}
.textoParrafo{font-size: 1.1em;}
.textoParrafo1{font-size: 1.3em;line-height: 1.5em;}
.textoParrafo1a{font-size: 1.5em;line-height: 1em;}
.textoParrafo1b{font-size: .8em;}

.enlaceSubrayado{text-decoration: underline;color: <?php echo $colorMarca;?>;}



.btn-principal{box-shadow: 0px .1px 5px 0px rgba(0,0,0,0.5);line-height: 1.5em;padding: 1em 4em;font-size: .8em;color: <?php echo $colorMarca; ?>;}
.btn-principal:hover{box-shadow: inset 0px 0px 0px 4px black;background: white;}



.btn-principal-animado{
  box-shadow: inset 0px 0px 0px 4px <?php echo $colorMarca?>;
  padding: 1em 4em;font-size: 1em;
  font-family: <?php echo $textoBold;?>;
  color: <?php echo $colorMarca?>;
  background-image: transparent 50%;
  background-size: 200%;
  background-position: 0% 50%;
  border-radius: 0;}


.btn-principal-animado:hover, .btn-principal-animado:active{color: <?php echo $colorMarca4?>;
  background-position: 100% 50%;transition: .4s;
background-image: linear-gradient(to right, transparent 50%, <?php echo $colorMarca;?> 50%, <?php echo $colorMarca;?> 100%);}



.btn-secundario{box-shadow: inset 0px 0px 0px 4px <?php echo $colorMarca4?>; color:<?php echo $colorMarca4?>;}
.btn-secundario:hover{box-shadow: inset 0px 0px 0px 4px <?php echo $colorMarca?>;}


.btn-secundario-animado{
  box-shadow: inset 0px 0px 0px 4px <?php echo $colorMarca3?>;
  padding: 1em 4em;font-size: 1em;
  font-family: <?php echo $textoBold;?>;
  color: <?php echo $colorMarca3?>;
  background-image: transparent 50%;  
  background-size: 200%;
  background-position: 0% 50%;
  border-radius: 0;}


.btn-secundario-animado:hover, .btn-principal-animado:active{color: <?php echo $colorMarca?>;
  background-position: 100% 50%;transition: .4s;
background-image: linear-gradient(to right, transparent 50%, <?php echo $colorMarca3;?> 50%, <?php echo $colorMarca3;?> 100%);}





.btn:focus, .btn-large:focus,

.btn-floating:focus {

  background-color: #000;

  color: #fff;

}




.imagen{max-width: 100%;width: 100%}
.imagen-1{max-height: 100%;height: 100%}
.imagen-2{max-width: 50%;width: 50%}
.imagen-3{max-width: 33.3%;width: 33.3%}
.imagen-4{max-width: 25%;width: 25%}
.imagen-5{max-width: 10%;width: 10%}

.clima iframe{width: 100%;height: 145vh;margin-top:-20em;padding-top:2em;}

.reloj .bg {
  width: 100%;
  height: 100vh;
  display: flex;
  align-items: center;/*centra verticalmente todo lo que hay en el contenedor*/
  color: #fff;
}

.reloj .content {/* Este contenedor flota encima del background */
  width: 100%; /*esta es su medida*/
  margin: auto;
  text-align: center;
}

.reloj .bg-img {position: absolute;top: 0;left: 0;height: 100%;overflow: hidden;}
.reloj .bg-img video {min-height: 100%;}

.reloj .bg-overlay {/*capa sobrepuesta*/
  height: 100vh;width: 100%;position: absolute;top: 0;left: 0;z-index: 1;
  background: #000;opacity:25%;
}

.reloj .bg-content {z-index: 2;width: 100%;}
.hora{font-size: 10em;font-family: <?php echo $textoBlack;?>; }
.fecha{font-size: 2em;font-family: <?php echo $textoBook;?>; } 

.copyright{background-color:<?php echo $colorMarca4;?>;padding: .6em 1em 1em 1em;}
.copyright a{color:<?php echo $colorMarca4;?>;padding-top: .4em;}
.dev{background-color:<?php echo $colorMarca;?>;padding: 1.5em 1em 2em 1em;color: white;}

.social-m {color: <?php echo $colorMarca2;?>;}
.social-m a{font-size: 1.5em;color: <?php echo $colorMarca2;?>;}
.social-m a:hover,.social-m a:focus {color: <?php echo $colorMarca;?>;}

.social2-m {padding: 2em 0;color: <?php echo $colorMarca4;?>;}
.social2-m a{font-size: 2.5em;padding: 0 .2em;color: <?php echo $colorMarca4;?>;}
.social2-m a:hover,.social2-m a:focus {color: <?php echo $colorMarca;?>;}

.social-pc {padding: 2em 0;color: <?php echo $colorMarca2;?>;}
.social-pc a{font-size: 2.5em;padding: 0 .2em;color: <?php echo $colorMarca2;?>;}
.social-pc a:hover,.social-pc a:focus {color: <?php echo $colorMarca;?>;}

.social2-pc {padding: 2em 0;color: <?php echo $colorMarca4;?>;}
.social2-pc a{font-size: 2.5em;padding: 0 .2em;color: <?php echo $colorMarca4;?>;}
.social2-pc a:hover,.social2-pc a:focus {color: <?php echo $colorMarca;?>;}


.planBg {background-color:#000;}
.planBg .titlePlan{padding: 1em 0;}
.planBg .pricePlan{padding: 1em 0;background-color: white;}
.planBg .pricePlan .discountPlan{background-color: <?php echo $colorDescuento; ?>; color: white;text-transform: uppercase;}
.planBg .pricePlan .lastPricePlan{text-decoration: line-through;padding-top: .5em}
.planBg .descriptionPlan{padding: 1em 0;color: white;}



.desaparecer-automaticamente .card{background-color:<?php echo $colorMarca;?>;color:<?php echo $colorMarca4;?>;padding:1em 2.5em;}
.desaparecer-automaticamente .card .card-action a:not(.btn):not(.btn-large):not(.btn-small):not(.btn-large):not(.btn-floating) {color:<?php echo $colorMarca4;?>;}
.desaparecer-automaticamente .card .card-content{padding:.1em 0;}
.desaparecer-automaticamente .card .card-content .titulo{padding:.5em 0;line-height: 1em;}

#registro-usuarios{padding:3em 0;}
#registro-usuarios .col-md-4{padding:0 3em;}
#registro-usuarios .input-field{padding: .5em 0;}

.perfil .boton {background-color: <?php echo $colorMarca;?>;color: white;text-align: left;}

.entrada p i{font-family: <?php echo $textoBlack;?>;text-transform: uppercase;letter-spacing: .035em;font-size: 2.5em;line-height: 1em;}
.entrada p{font-size: 1.2em;line-height: 1.5em;}
.entrada .tienda{font-size: 1em;line-height: 1.5em;}
.entrada .color{width: 2em;height: 2em;margin-right: .5em;box-shadow: inset 0px 0px 0px .1em <?php echo $colorMarca3?>;display: inline-block;}
.entrada b{font-family: <?php echo $textoBookBold;?>;font-size: 1.2em;}

.entrada .blog .icono{padding: .5em;font-size: 1.5em;background-color:<?php echo $colorMarca;?>;color: white; text-align: center}
.entrada .blog .valign-wrapper{padding: 1em 0;}
.entrada .blog h4{font-family: <?php echo $textoBookBold;?>;font-size: .9em;line-height: .7em;}
.entrada .blog p{font-family: <?php echo $textoBook;?>;font-size: .8em;line-height: 1em;}

.suscripcion .bg{background-color: black;}
.suscripcion .texto{color: <?php echo $colorMarca4;?>;padding:0 2em;}
.suscripcion .texto .titulo{font-size: 1.7em;line-height: .9em;}
.suscripcion .texto .subtitulo{font-size: 1em;padding-top: .5em;}
.suscripcion input:not(.browser-default){color: <?php echo $colorMarca4;?>;border-bottom: 1px solid <?php echo $colorMarca4;?>;}

.footer a i{color: <?php echo $colorMarca;?>;padding: 0 .5em;}
.footer a i:hover{color: <?php echo $colorMarca2;?>;}
.footer .sec2{box-shadow: 0px .1px 5px 0px rgba(0,0,0,0.1);padding:1em 0;}
.footer .sec2{background-color: <?php echo $colorMarca5;?>;padding: 2em 0}
.footer .sec2 a:hover{text-decoration: underline;}






#services .categorias button{text-align: left;padding-left:1em;background-color: <?php echo $colorMarca;?>;font-size: 1.3em;color: white; width: 100%;}
#services .categorias .descripcion{padding-top:.5em;}
#services .categorias .descripcion p{padding-left:1em;}

.cuadro-categorias{padding:1em 0;}
.cuadro-categorias button{background: transparent;border: 0;}
.cuadro-categorias .titulo-categoria{font-size: 2em;font-family: <?php echo $textoBlack;?>;text-transform: uppercase;}
.borde-amarillo-derecho{border-right: .2em solid yellow;padding: 4em 0;}
.borde-amarillo-izquierdo{border-left: .2em solid yellow;padding: 4em 0;}
.fondo-oscuro{background-color: <?php echo $colorMarca;?>}


.barra-sup .pc{background-color: black;color: white;padding: .5em 1em;font-size: 1.5em;}
.barra-sup .pc a{color: white;}
.barra-sup .movil{position: absolute;z-index: 9999;font-size: 1.2em;padding: 1em 1em;width: 100%;}
.barra-sup .movil a{background-color: rgba(255, 255, 255, 1);padding: .5em 1em;border-radius: 50%}

.panel-lateral {background-color: <?php echo $colorMarca ;?>;color: white;}
.panel-lateral li > a {border-bottom:.5px solid white;margin: 1.5em;font-size: .9em;color: white;}

.opiniones .fa-circle-user{color: <?php echo $colorMarca2 ;?>;font-size:3em;}
.opiniones .fa-star{color: <?php echo $colorMarca3 ;?>;}

.choose {background-color:<?php echo $colorMarca ;?>;color:white;margin-top:3em;margin-bottom:2em;}
.choose .icono{padding:4em 1em;}
.choose .divisiones{border-left:3px solid white;border-right:3px solid white;}
.choose  hr{width: 80%;border-top: 2px solid white;margin-left: 10%}
.choose .icono i{font-size:4em;}
.choose .icono p{font-size:1.4em;font-family: <?php echo $textoBookBold;?>;}
.choose a{font-size:.8em;}

.team{background-color:<?php echo $colorMarca ;?>;color: white;}
.team .equipo img{padding: 1em 1em 0 1em}
.team .equipo p{padding-left:1em ;font-size: 1.1em;font-family: <?php echo $textoBookBold;?>;padding: 1em}
.cert .marcas, .cert .certificados {border-radius: 2em;padding: 1.5em;box-shadow: 0px 0px 23px 0px rgba(0,0,0,0.2);}
.cert .marcas img{padding: .5em 1.5em}
.cert .certificados img{padding: 1em}
.cert .certificados .logo{margin-top: -1.2em;margin-bottom: -1.2em;}


