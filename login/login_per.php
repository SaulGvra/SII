<?php

  include('../conexion.php');
 
  session_start();

  $usuario = $_POST['usuario'];
  $contra = $_POST['contra'];

  $query = "SELECT per_tipo FROM personal where personal.per_cve_personal='$usuario' and personal.per_contrasena = '$contra';";
  
  if ($result = $mysqli->query($query)) {

    if (mysqli_num_rows($result)!=0){

      $_SESSION['user'] = $usuario;

    
      //Da vuelta por cada fila encontrada
      while ($row = $result->fetch_assoc()) 
      {
          $field1name = $row["per_tipo"];

          if($field1name == "Master"){
                
                header("location: ../boleta.php");
  
          }else if($field1name == "Maestro"){
  
                header("location: ../per_datos.php");
  
          }
      }

    }else{
    header('Location: ' . $_SERVER['HTTP_REFERER']);
  }
    
    
  
  }

?>