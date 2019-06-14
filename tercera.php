<?php

$asunto=$_POST['asunto'];
$resumen=$_POST['resumen'];

$solicitud= fopen("miArchivo.txt","a") or die("Ha ocurrido un error en la creación del fichero");

fwrite($solicitud,"Asunto: ");
fwrite($solicitud,"\r\n");
fwrite($solicitud,$asunto);
fwrite($solicitud,"\r\n");
fwrite($solicitud,"Resumen: ");
fwrite($solicitud,"\r\n");
fwrite($solicitud,$resumen);
fwrite($solicitud,"================================================================");
echo "Se ha guardado correctamente.Si desea ver el documento haga clic en el enlace
<a href='cuarta.php'>Ver</a>";
fclose($solicitud);



























?>