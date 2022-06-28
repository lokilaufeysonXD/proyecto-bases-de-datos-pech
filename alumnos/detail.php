<?php
require_once("../lib/funtions.php") ;
$ID = $_GET['ID'];
$users = get_all_alumnos($connect) ;
$resultado = get_alumno($connect, $ID) ;
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
                <td>ID             &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                <td>Nombre         &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                <td>Apellido       &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                <td>Correo         &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                <td>Licenciatura   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th></td>
                <td>Cuatrimestre   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th></td>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td><?php echo $alumno ['ID']; ?> </td>
            <td><?php echo $alumno ['nombre']; ?> </td>
            <td><?php echo $alumno ['apellido']; ?> </td>
            <td><?php echo $alumno ['correo']; ?> </td>
            <td><?php echo $alumno ['licenciatura']; ?> </td>
            <td><?php echo $alumno ['cuatrimestre']; ?> </td>
        </tr>
        </tbody>
    </table>
</body>
</html>