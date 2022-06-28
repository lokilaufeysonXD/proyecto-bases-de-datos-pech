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
?>