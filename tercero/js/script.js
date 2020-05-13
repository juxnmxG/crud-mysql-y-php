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
