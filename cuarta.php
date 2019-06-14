<?php

$solicitud=fopen("miArchivo.txt","r") or die ("No se ha podido leer el fichero, lo sentimos");

while(!feof($solicitud)){
	
	$leer=fgets($solicitud);
	$ver=$nl2br($leer);
	echo $ver;
	
	
}











?>