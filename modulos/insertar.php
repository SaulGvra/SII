<?php
require_once("cn.php");

$nombre = $_POST["nombre"];
$inicio = $_POST["inicio"];

$monto = $_POST["monto"];

$sql= "INSERT INTO aspirante(nombre,inicio,monto) VALUES('$nombre','$inicio','$monto')";
$resultado  = mysqli_query($conexion,$sql);

if(resutado){
	
	echo "<script>
	
	alert('Registro insertado');
	window.location='index.php';
	</script>";
}else {
	echo
	"<script>
	alert('existe alguna falla, favor de intentar nuevamente');
	window.location = 'index.php';
	</script>";
}
?>
	
