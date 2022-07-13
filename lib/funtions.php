<?php
require_once("connect.php");

function get_all_alumnos($connect) {
    $consulta = "SELECT * FROM alumnos";
    $resultado = mysqli_query($connect, $consulta);
    return $resultado;
}
function get_alumno($connect, $ID) {
    $consulta = "SELECT * FROM alumnos WHERE ID = $ID";
    $resultado = mysqli_query($connect, $consulta);
    return $resultado;
}
function get_all_materias($connect) {
    $consulta = "SELECT * FROM materias";
    $resultado = mysqli_query($connect, $consulta);
    return $resultado;
}
function get_materia($connect, $ID) {
    $consulta = "SELECT * FROM materias WHERE ID = $ID";
    $resultado = mysqli_query($connect, $consulta);
    return $resultado;
}
function get_all_profesores($connect) {
    $consulta = "SELECT * FROM profesores";
    $resultado = mysqli_query($connect, $consulta);
    return $resultado;
}
function get_profesores($connect, $ID) {
    $consulta = "SELECT * FROM profesores WHERE ID = $ID";
    $resultado = mysqli_query($connect, $consulta);
    return $resultado;
}
function insertar_alumnos($nombre, $apellido, $telefono, $correo, $licenciatura, $cuatrimestre, $status){
    global $connect ;
    $consulta = "INSERT INTO alumnos(nombre, apellido, telefono, correo, licenciatura, cuatrimestre, estatus) 
    VALUES('$nombre', '$apellido', '$telefono', '$correo', '$licenciatura', '$cuatrimestre', '$status')" ;
    $resultado = mysqli_query($connect, $consulta) ;
    // return $resultado ;
}
function eliminar_alumno($connect, $ID){
    global $connect ;
    $consulta = "DELETE FROM alumnos WHERE ID = $ID" ;
    $resultado = mysqli_query($connect, $consulta) ;
    return $resultado ;
}
function insertar_materias($nombre, $cuatrimestre, $licenciatura,){
    global $connect ;
    $consulta = "INSERT INTO materias(nombre, cuatrimestre, licenciatura) 
    VALUES('$nombre', '$cuatrimestre', '$licenciatura')" ;
    $resultado = mysqli_query($connect, $consulta) ;
    // return $resultado ;
}
function eliminar_materias($connect, $ID){
    global $connect ;
    $consulta = "DELETE FROM materias WHERE ID = $ID" ;
    $resultado = mysqli_query($connect, $consulta) ;
    return $resultado ;
}
function insertar_profesores($nombre, $apellido, $telefono, $correo, $status){
    global $connect ;
    $consulta = "INSERT INTO profesores(nombre, apellido, telefono, correo, estatus) 
    VALUES('$nombre', '$apellido', '$telefono', '$correo', '$status')" ;
    $resultado = mysqli_query($connect, $consulta) ;
    // return $resultado ;
}
function eliminar_profesores($connect, $ID){
    global $connect ;
    $consulta = "DELETE FROM profesores WHERE ID = $ID" ;
    $resultado = mysqli_query($connect, $consulta) ;
    return $resultado ;
}
?>