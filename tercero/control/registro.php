<?php
include_once '../conexion/conexion.php';

$conn = conexion();

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$fecha = $_POST['fecha'];

$sql = "INSERT INTO estudiante ( est_id, est_nom, est_fec)
    values('$id', '$nombre','$fecha')";
$consulta = mysqli_query($conn, $sql);
echo "registro exitoso";

header("location: ../index.php");
