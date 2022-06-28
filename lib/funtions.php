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
?>