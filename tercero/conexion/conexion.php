<?php
function Conexion(){
    $localhost="localhost";
    $user="root";
    $password="";
    $basedatos="escuela";
    $conn = mysqli_connect($localhost, $user, $password, $basedatos);
    return $conn;
}
if(Conexion()){
    echo "";
}else{
    echo "Conexion fallida";
}
?>
