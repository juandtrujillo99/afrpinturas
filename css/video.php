<?php
    header("Content-type: text/css; charset: UTF-8");
    include_once 'identidad-corporativa.inc.php';
    /* las lineas estan corridas algunas casillas hacia abajo porque este codigo no se muestra en el navegador*/
?>


/* ------------------------- */
/* Estilos CSS del Reproductor */
/* ------------------------- */
.fm-video {
	width: 100%;
}

.fm-video .vjs-control-bar {
	background: transparent;
	color: transparent;
}

.fm-video .vjs-play-progress,
.fm-video .vjs-volume-level {
	background: transparent;
}

.fm-video .vjs-slider {
	background: transparent;
}

.video-js:hover .vjs-big-play-button {
	background: transparent;
}

.fm-video .vjs-big-play-button {
	background: transparent;
	width: 1.4em;
	height: 1.4em;
	line-height: 1.4em;
	border-radius: 100%;
	border:none;
}

.fm-video .vjs-big-play-button:hover {
	background: transparent;
}