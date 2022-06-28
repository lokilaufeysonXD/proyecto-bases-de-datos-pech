<?php
require_once("../lib/funtions.php") ;
$ID = $_GET['ID'];
$users = get_all_alumnos($connect) ;
$resultado = get_alumnos($connect, $ID) ;
$alumno =mysqli_fetch_array($resultado) ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Detalle del alumno <?php echo $alumno ['apellido']." ". $alumno ['nombre'] ?>
    <small> <a href="../alumnos/">Regresar </a> </small> </h1>
    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Teléfono</td>
                <td>Correo</td>
                <td>Licenciatura</td>
                <td>Cuatrimestre</td>
                <td>Status</td>
            </tr>
        </thead>
        <tbody>
        <?php
            while ($fila = mysqli_fetch_array($users)) {
        ?>

        <tr>
            <td><?php echo $fila ['ID'] ; ?> </td>
            <td><?php echo $fila ['nombre'] ; ?> </td>
            <td><?php echo $fila ['apellido'] ; ?> </td>
            <td><?php echo $fila ['teléfono'] ; ?> </td>
            <td><?php echo $fila ['correo'] ; ?> </td>
            <td><?php echo $fila ['licenciatura'] ; ?> </td>
            <td><?php echo $fila ['cuatrimestre'] ; ?> </td>
            <td><?php echo $fila ['status'] ; ?> </td>
        </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
</body>
</html>