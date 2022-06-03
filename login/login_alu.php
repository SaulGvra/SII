<?php
  session_start();
  include('../conexion.php');
 
 

  $usuario = $_POST['usuario'];
  $contra = $_POST['contra'];
  $_SESSION['user'] = $usuario;

  $query = "SELECT * FROM alumno where alumno.alu_cve_nocontrol='$usuario' and alumno.alu_contrasena = '$contra';";
  
  $result = $mysqli->query($query);
  $count = $result->num_rows; 

  if ($count > 0) {
    
    header("location: ../index.php");
  }else{
    echo '<script>alert("Usuario incorrecto");</script>';
    header("location: ../acceso.php");
    
  }
?>