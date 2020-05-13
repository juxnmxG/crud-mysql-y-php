<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Inicio de sesión</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <!-- INICIAR SESION -->
        <br>
        <div class="login">
            <div class="login-screen">
                <div class="app-title">
                    <h1 style="color: white">REGISTRAR</h1>
                </div>
                <br/>

                <form role="form" action="../control/registro.php" method="post">
                    <div class="login-form">
                        <div class="control-group espacio">
                            <label for="usrname" class="login-field-icon fui-user"></label>
                            <input type="text" class="login-field" name="id" id="id" placeholder="Codigo">
                        </div>
                        <div class="control-group espacio">
                            <label for="usrname" class="login-field-icon fui-user"></label>
                            <input type="text" class="login-field" name="nombre" placeholder="nombre" id="nombre">
                        </div>
                        <div class="control-group espacio">
                            <label for="usrname" class="login-field-icon fui-user"></label>
                            <input type="date" class="login-field" name="fecha" placeholder="fecha" id="fecha">
                        </div>
                        <button type="submit" class="btn btn-primary espacio" onclick="validar()">Registrar</button>
                    </div>
                </form>
            </div>
        </div>
        <br/><br/>
        <script type="text/javascript">
        
        function validar(){
          var id, nombre, fecha;
          id = document.getElementById("id").value;
          nombre = document.getElementById("nombre").value;
          fecha = document.getElementById("fecha").value;

          if (nombre === ""){
            alert("debe ingresar el campo nombre");
            return false;
          }
          if (id === ""){
            alert("debe ingresar el campo id");
            return false;
          }
          if (fecha === ""){
            alert("debe ingresar el campo fecha");
            return false;
          }
        }
        </script>
    </body>
</html>
