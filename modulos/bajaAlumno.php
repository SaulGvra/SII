<?php
  include('../conexion.php');

  $usuario = $_POST['idAl'];

  $query = "call sp_DelBajaAlumno('$usuario')";
  
  $result = $mysqli->query($query);

  header('Location: ' . $_SERVER['HTTP_REFERER']);
?>