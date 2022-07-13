<?php
    require_once("../lib/funtions.php") ;

    $nombre = $_POST['name'];
    $apellido = $_POST['apellido'] ;
    $telefono = $_POST['tel'] ;
    $correo = $_POST['correo'] ;
    $licenciatura = $_POST['licenciatura'] ;
    $cuatrimestre = $_POST['cuatrimestre'] ;
    $status = $_POST['status'] ;

    // echo $nombre ;

    insertar_alumnos($nombre, $apellido, $telefono, $correo, $licenciatura, $cuatrimestre, $status);

    header('location: index.php') ;

   // print_r($_POST)

?>