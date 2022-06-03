<?php
  include('../conexion.php');

  $usuario = $_POST['idAs'];

  $query = "call sp_DelBajaAspirante('$usuario')";
  
  $result = $mysqli->query($query);

  header('Location: ' . $_SERVER['HTTP_REFERER']);
?>