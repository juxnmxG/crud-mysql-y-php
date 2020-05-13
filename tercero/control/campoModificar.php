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
$sql = "SELECT est_id  FROM estudiante WHERE est_id = $ID";
$id1 = mysqli_query($con, $sql);
  while ($ver = mysqli_fetch_assoc($id1)) {
  }
}

ejecutar($con);
?>
<form role="form" action="../control/registro.php" method="post">
    <div class="login-form">
        <div class="control-group espacio">
            <label for="usrname" class="login-field-icon fui-user"></label>
            <input type="text" class="login-field" name="id" id="id" value="<?php echo  $ver['est_id']; ?>">
        </div>
        <div class="control-group espacio">
            <label for="usrname" class="login-field-icon fui-user"></label>
            <input type="text" class="login-field" name="nombre" id="nombre" value="">
        </div>
        <div class="control-group espacio">
            <label for="usrname" class="login-field-icon fui-user"></label>
            <input type="date" class="login-field" name="fecha" id="fecha" value="">
        </div>
        <button type="submit" class="btn btn-primary espacio" onclick="validar()">Modificar</button>
    </div>
</form>
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/style.css">
<?php
//$proyecto=$_GET['proyecto'];
//header("location: index.php");
?>
