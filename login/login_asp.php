<?php

  include('../conexion.php');
 
  session_start();

  $usuario = $_POST['usuario'];
  $contra = $_POST['contra'];

  $query = "SELECT * FROM aspirante where aspirante.asp_cve_aspirante='$usuario' and aspirante.asp_nip = '$contra';";
  
  $result = $mysqli->query($query);
  $count = $result->num_rows; 

  if ($count > 0) {
    $_SESSION['user'] = $usuario;
    header("location: ../index_asp.php");
  }else{
    echo '<script>alert("Usuario incorrecto");</script>';
    header("location: ../acceso.php");
    
  }
?>