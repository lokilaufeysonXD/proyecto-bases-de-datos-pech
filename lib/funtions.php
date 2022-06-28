<?php
require_once("../lib/connect.php");
function get_all_alumnos($connect){
    $consulta = "SELECT * FROM alumnos";
    $resultado = mysqli_query($connect, $consulta);

    return $resultado;

}
function get_alumno($connect, $id){
    $consulta = "SELECT * FROM alumnos WHERE ID = $id";
    $resultado = mysqli_query($connect, $consulta);

    return $resultado;

}
?>