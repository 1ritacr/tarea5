<?php 
require_once('conexion.php');
$usuario = $_POST['usuario'];
$password = md5($_POST['password']);

$sql = "insert into usuarios (usuario,password) values ('$usuario','$password')";
$result =  $conn->query($sql);

if (!$result) die('Error al insertar');
header('Location: usuarios.php');
?>