<?php
    require_once("../lib/funtions.php") ;

    $nombre = $_POST['name'];
    $apellido = $_POST['apellido'] ;
    $telefono = $_POST['tel'] ;
    $correo = $_POST['correo'] ;
    $status = $_POST['status'] ;

    // echo $nombre ;

    insertar_profesores($nombre, $apellido, $telefono, $correo, $status);

    header('location: index.php') ;

   // print_r($_POST)

?>