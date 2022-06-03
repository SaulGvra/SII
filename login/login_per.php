<?php

  include('../conexion.php');
 
  session_start();

  $usuario = $_POST['usuario'];
  $contra = $_POST['contra'];

  $query = "SELECT * FROM personal where personal.per_cve_personal='$usuario' and personal.per_contrasena = '$contra';";
  
  $result = $mysqli->query($query);
  $count = $result->num_rows; 

  if ($count > 0) {
    $_SESSION['user'] = $usuario;
    header("location: ../index.php");
  }else{
    echo '<script>alert("Usuario incorrecto");</script>';
    header("location: ../acceso.php");
    
  }
?>