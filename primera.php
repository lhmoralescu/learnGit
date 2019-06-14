<?php
$usuario="lisandra";
$password="880817";


if($_POST['usuario']==$usuario && $_POST['contrasena']==$password)
{
	session_start();
	$_SESSION['nombre']="Lisandra Hernadez Morales";
	$_SESSION['edad']=30;
	$_SESSION['pais']="Cuba";
	
	header('location:segunda.php');
	
	
	
}
else
{
	
	echo "Error, Verifique su usuario y contrasena.<br>";
	echo "<a href='index.php'> Intentar de nuevo</a>";
}





?>