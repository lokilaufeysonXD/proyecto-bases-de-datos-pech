<?php
    require_once("../lib/funtions.php") ;

    $nombre = $_POST['name'];
    $cuatrimestre = $_POST['cuatrimestre'] ;
    $licenciatura = $_POST['licenciatura'] ;

    // echo $nombre ;

    insertar_materias($nombre, $cuatrimestre, $licenciatura);

    header('location: index.php') ;

   // print_r($_POST)

?>