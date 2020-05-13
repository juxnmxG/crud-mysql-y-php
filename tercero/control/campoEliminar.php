<?php

function Conexion(){
    $localhost="localhost";
    $user="root";
    $password="";
    $basedatos="escuela";
    $conn = mysqli_connect($localhost, $user, $password, $basedatos);
    return $conn;
}
$con = Conexion();

function ejecutar($con) {

$ID = $_GET['id'];
$sql = "DELETE FROM estudiante WHERE est_id = '".$ID."'";
$consulta = mysqli_query($con, $sql);
echo "se elimino correctamente";
}
ejecutar($con);
header("location: ../index.php");
?>
