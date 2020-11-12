<?php 
require_once('conexion.php');
$id = $_POST['id'];
$descripcion = $_POST['descripcion'];

$sql = "insert into categorias (id,descripcion) values ('$id','$descripcion')";
$result =  $conn->query($sql);

if (!$result) die('Error al insertar');
header('Location: categorias.php');
?>