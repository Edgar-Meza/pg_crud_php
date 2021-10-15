function d_nombre() {
    var nombre = document.getElementById('nombre');
    document.getElementById('nombred').value = nombre.value;
}
function d_apellidos() {
    var apellidos = document.getElementById('apellidos');
    document.getElementById('apellidosd').value = apellidos.value;
}
function d_edad() {
    var edad = document.getElementById('edad');
    document.getElementById('edadd').value = edad.value;
}
function d_correo() {
    var correo = document.getElementById('correo');
    document.getElementById('correod').value = correo.value;
}
function eliminar(idel) {
    document.getElementById('idelete').value = idel;
}
function actualizar(idu, nombre, apellidos, edad, correo) {
    document.getElementById('save').style.display = 'none';
    document.getElementById('update').style.display = 'block';
    document.getElementById('idup').value = idu;
    document.getElementById('nombre').value = nombre;
    document.getElementById('apellidos').value = apellidos;
    document.getElementById('edad').value = edad;
    document.getElementById('correo').value = correo;
    document.getElementById('nombred').value = nombre;
    document.getElementById('apellidosd').value = apellidos;
    document.getElementById('edadd').value = edad;
    document.getElementById('correod').value = correo;
}
function nuevo() {
    document.getElementById('idup').value = "";
    document.getElementById('nombre').value = "";
    document.getElementById('apellidos').value = "";
    document.getElementById('edad').value = "";
    document.getElementById('correo').value = "";
    document.getElementById('nombred').value = "";
    document.getElementById('apellidosd').value = "";
    document.getElementById('edadd').value = "";
    document.getElementById('correod').value = "";
}