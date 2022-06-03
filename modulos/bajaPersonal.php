<?php
  include('../conexion.php');

  $usuario = $_POST['idPer'];

  $query = "call sp_DelBajaPersonal('$usuario')";
  
  $result = $mysqli->query($query);

  header('Location: ' . $_SERVER['HTTP_REFERER']);
?>