<?php

session_start();


if($_SESSION['edad']>=18){
	echo "Bienvenidos al sistema: ". $_SESSION['nombre']."<br>";	
	echo "Su edad es: ". $_SESSION['edad'].", ya es un adulto <br>";
	echo "Su país de origen es: ". $_SESSION['pais'];
?>
	<form method="POST" action="tercera.php">
	Asunto:<input type="text" name="asunto"><br>
	Reseumen: <textarea name="resumen" rows="10" cols="30"></textarea><br>
	<input type="submit" name="enviar" value="Guardar">
	</form>
<?php	
}
else
{
	echo "Lo sentimos, su edad es: ". $_SESSION['edad']. "por lo que es menor de edad y no tiene acceso a este sistema<br>";
	session_unset();
	session_destroy();
	header('location:index.php');
	
	
	
}





















?>