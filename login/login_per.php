<?php

  include('../conexion.php');
 
  session_start();

  $usuario = $_POST['usuario'];
  $contra = $_POST['contra'];

  $query = "SELECT * FROM personal where personal.per_cve_personal='$usuario' and personal.per_contrasena = '$contra';";
  
  if ($result = $mysqli->query($query)) {
    //Da vuelta por cada fila encontrada
    while ($row = $result->fetch_assoc()) 
    {
        $field1name = $row["alu_nombre"];
        $field2name = $row["alu_paterno"];
        $field3name = $row["alu_materno"];
        $field4name = $row["alu_fecha"];
        $field5name = $row["alu_telefono"];
        $field6name = $row["alu_direccion"];
    }
  
  }
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