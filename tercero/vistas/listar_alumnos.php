<?php
require_once "conexion/conexion.php";
$conexion = conexion();
?>
<div class="row contenedor">
    <br>
    <br>
    <br>
    <br>
    <div>
        <center>
            <h2>ESTUDIANTES</h2>
        </center>
        <a href="vistas/registrar_estudiante.php" class="btn btn-primary">
          Agregar Estudiante
        <span class="glyphicon glyphicon-plus"></span>
        </a>

				<form class="formulario" action="control/buscar.php?busqueda=buscar" method="get" style="display: inline;">
					<input type="text" name="buscar" value="">
					<input type="submit" value="Buscar" class="btn btn-primary">
				</form>
    </div>
    <div class="col-sm-12 table-responsive">
        <br>
        <table class="table table-hover table-condensed table-bordered table-responsive">
            <tr>
                <td>CÓDIGO</td>
                <td>NOMBRE</td>
                <td>FECHA</td>
            </tr>
            <?php
						//paginador
						$sql_registros = "SELECT COUNT(*) AS REGISTROS FROM estudiante";
            $result_1 = mysqli_query($conexion, $sql_registros);
						$ver_1 = mysqli_fetch_array($result_1);
						$total = $ver_1['REGISTROS'];
						echo $total;
						$porpaginas = 5;

						if (empty($_GET['pagina'])){
							$pagina = 1;
						}else{
							$pagina = $_GET['pagina'];
						}

						$desde = ($pagina-1)*$porpaginas;
						$total_paginas =  ceil($total/$porpaginas);

            $sql = "SELECT * FROM estudiante limit $desde,$porpaginas ";
            $result = mysqli_query($conexion, $sql);

            while ($ver = mysqli_fetch_assoc($result)) {
                $datos = $ver['est_id'] . "||" .
                        $ver['est_nom'] . "||" .
                        $ver['est_fec'] ;
                ?>
                <tr>
                    <td><?php echo $ver['est_id']; ?></td>
                    <td><?php echo $ver['est_nom']; ?></td>
                    <td><?php echo $ver['est_fec']; ?></td>
                    <td>
											  <a href="control/campoModificar.php?id=<?php echo $ver['est_id'];?>" class="btn btn-warning glyphicon glyphicon-pencil">
													Modificar
												</a>
                    </td>
                    <td>
											<a href="control/campoEliminar.php?id=<?php echo $ver['est_id']; ?>" class="btn btn-danger glyphicon glyphicon-remove">
												Eliminar
											</a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
				<div class="paginador">
					<ul>
						<li>
							<a href="#" class="selector">|<</a>
							<a href="#"><<</a>
							<?php for ($i=1; $i <= $total_paginas ; $i++) {
								?>
							<a href="?pagina=<?php echo $i; ?>"><?php echo $i; ?></a>
							<?php } ?>
							<a href="#">>></a>
							<a href="#">>|</a>
						</li>
					</ul>
				</div>
        <br>
    </div>
    <?php
    $conexion->close();
    ?>
</div>
