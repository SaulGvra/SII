<?php

  include('../conexion.php');

  $control = $_SESSION['user'];
  $nombre = $_POST['nombre'];
  $ap = $_POST['ap'];
  $am = $_POST['am'];
  $fecha = $_POST['fecha'];
  $tel = $_POST['tel'];
  $dir = $_POST['dir'];


  $query = "call sp_UpdAlumno('$control','$nombre','$ap','$am',$tel,'$fecha','$dir');";
  
  $result = $mysqli->query($query);
  //$count = $result->num_rows; 

  header('Location: ' . $_SERVER['HTTP_REFERER']);

?>