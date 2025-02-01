<?php
    header("Content-type: text/css; charset: UTF-8");
    include_once 'identidad-corporativa.inc.php';
    /* las lineas estan corridas 11 casillas, es decir, si te dicen linea 39 en realidad se refiere a la linea 50*/
?>


.btn-flotante-contact{position: fixed;bottom: 1em;right: 1em;z-index: 996;}
.btn-flotante-contact .btn-floating{border-radius: 5em;background-color: <?php echo $colorMarca2;?>;width: 5em;height: 5em;}
.btn-flotante-contact .btn-floating i{font-size: 3em;padding: .37em .43em;color:white;}



.barra-navegacion-m{z-index:99;position: fixed;}
.barra-navegacion-m .logo{padding: .5em 0}
.contenedor-menu{
    align-items: center;
    display: flex;
    flex-direction:row;
    height: 150px;
    justify-content: center;
    position: absolute;
    left: -3.8em;
    top: -3.2em;
    transform: scale(.2);
    width: 150px;
    z-index: 100;
    color: <?php echo $colorMarca;?>;
}



.menu-burger:after,
.menu-burger:before,
.menu-burger{
    background-color: <?php echo $colorMarca;?>;/*Color de las barras del menu*/
    content: '';
    transition: .5s;
    width: 100%;
    position: absolute;
}



.menu-burger{
    height: 15%;
}



.menu-burger:before{/* palito de abajo */
    top: 50px;
    height: 100%;
}

.menu-burger:after{/* palito de arriba */
    height: 100%;
    top: -50px;
}

.cruz{
    transition: .5s;
    transform: rotateZ(45deg);
} 



.cruz:before{    
    transition: .5s;
    top:0px;
    transform: rotateZ(90deg);
}



.cruz:after{
    transition: .5s;
    top:0px;
    transform: rotateZ(0deg);
}



.menu{
    transition: .1s;
    width: 0vw;
    height: 100vh;
    background-color:<?php echo $colorMarca4;?>;/*color del fondo de la barra izquiera*/
    position: fixed;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    justify-content: center;
    z-index: 100;
}

.menu>a{
    font-size: 1.5em;
    width: 100%;
    padding: .05em 0 .05em 2em;
    color: <?php echo $colorMarca2;?>;
    text-decoration: none;
}

 .menu>a:hover{
 	color: <?php echo $colorMarca;?>;
    box-shadow: 15em 0 <?php echo $colorMarca;?> inset;
}

.menu>a>div{
    color: <?php echo $colorMarca2;?>;
    text-decoration: none;
    font-family: <?php echo $textoBlack;?>;
    text-transform: uppercase;
}

.menu>a>div:hover,.menu>a>div:focus{/*controla el efecto al pulsar un enlace en el menu*/
    color: <?php echo $colorMarca4;?>;
    font-family: <?php echo $textoBold;?>;
}

.menu>a>div>i{/*si quieres agregar iconos al lado de los enlaces, con esto lo controlas*/
    font-size: .7em;
}

.menu .logo {padding: 2em 3em;}

.menu .busqueda{
    padding:1em 3em;
}



.fondo{
    transition: .2s;
    width: 78%;
    height: 100vh;
    position: fixed;
    z-index: 100;
}
.transparencia{
	background-color: rgba(0, 0, 0, .7);
    width: 100%;
    height: 100vh;
    position: fixed;
    z-index: 98;
}





















/* para pc */

header{
    position: fixed;
    width: 100%;
    top: 0px;
    box-shadow: 0px .1px 5px 0px rgba(0,0,0,0.1);
    z-index:10;
}

header{width: 100%;background-color: <?php echo $colorMarca4;?>;}
header .logo{padding: .5em 0;height:5em}

header a{font-family: <?php echo $textoBlack;?>;color: <?php echo $colorMarca6;?>;}
header a:hover{color: <?php echo $colorMarca2;?>}
header .busca{background-color:<?php echo $colorMarca;?>};


Efectos Menu
.headroom{transition: transform .5s ease;}
.headroom--pinned{transform: translateY(0%);transition: transform .5s ease;}
.headroom--unpinned{transform: translateY(-100%);transition: transform .5s ease;}


/*
.headroom{transition: transform .5s ease;}
.headroom--pinned{transform: translateY(-100%);}
.headroom--unpinned{transform: translateY(-60%);}
*/

/*Mediaqueries*/
@media screen and (max-width: 100%){
header .menu-pc {flex-direction: column;}
header .menu-pc .logo {display: flex;flex-direction: row;justify-content: space-between;width: 100%;padding: 1em;}
header .menu-pc .logo .btn-menu{display: inline-block;}
header .menu-pc .enlaces{width: 100%;display: flex;flex-direction: row;flex-wrap: wrap;justify-content: space-around;}






.fondo-pc{
    transition: .2s;
    margin-top: 50px;
    width: 40%;
    height: 100vh;
    position: fixed;
    z-index: 100;
}