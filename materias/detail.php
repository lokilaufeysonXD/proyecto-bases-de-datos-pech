<?php
require_once("../lib/funtions.php") ;
$ID = $_GET['ID'];
$users = get_all_materias($connect) ;
$resultado = get_materia($connect, $ID) ;
$materia =mysqli_fetch_array($resultado) ;
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
    <h1>Detalle de la materia <?php echo $materia ['licenciatura']." ". $materia ['nombre'] ?>
    <small> <a href="../materias/">Regresar </a> </small> </h1>
    <table>
        <thead>
            <tr>
                <th>ID                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                <th>nombre              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                <th>cuatrimestre        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                <th>licenciatura        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
            </tr>
        </thead>
        <tbody>
        <?php
            while ($fila = mysqli_fetch_array($users)) {
        ?> 
        <tr>
                <td><?php echo $materia['ID'];?></td>
                <td><?php echo $materia['nombre'];?></td>
                <td><?php echo $materia['cuatrimestre'];?></td>
                <td><?php echo $materia['licenciatura'];?></td>
        </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
</body>
</html>