<?php
require_once("../lib/funtions.php") ;
$ID = $_GET['ID'];
$users = get_all_profesores($connect) ;
$resultado = get_profesores($connect, $ID) ;
$profesores =mysqli_fetch_array($resultado) ;
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
    <h1>Detalle del alumno <?php echo $profesores ['apellido']." ". $profesores ['nombre'] ?>
    <small> <a href="../profesores/">Regresar </a> </small> </h1>
    <table>
        <thead>
            <tr>
                <th>ID             &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                <th>nombre         &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                <th>apellido       &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                <th>telefono       &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                <th>correo         &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                <th>status         &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
            </tr>
        </thead>
        <tbody>
        <?php
            while ($fila = mysqli_fetch_array($users)) {
        ?> 
        <tr>
                <td><?php echo $profesores['ID'];?></td>
                <td><?php echo $profesores['nombre'];?></td>
                <td><?php echo $profesores['apellido'];?></td>
                <td><?php echo $profesores['telefono'];?></td>
                <td><?php echo $profesores['correo'];?></td>
                <td><?php echo $profesores['estatus'];?></td>
        </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
</body>
</html>