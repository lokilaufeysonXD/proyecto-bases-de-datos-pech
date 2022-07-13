<?php 
require_once("../lib/funtions.php");
$materia = get_all_materias($connect);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>materias</title>
</head>
<body>
    <hr>
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
                while ($fila = mysqli_fetch_array ($materia)) {
            ?>
            <tr> 
                <td><?php echo $fila['ID'];?></td>
                <td><?php echo $fila['nombre'];?></td>
                <td><?php echo $fila['cuatrimestre'];?></td>
                <td><?php echo $fila['licenciatura'];?></td>
                <td><a href= "detail.php?ID=<?php echo $fila['ID'] ; ?> " >detalle</a></td>
                <td><a href="">editar</a></td>
                <td> <a href="update.php?ID=<?php echo $fila['ID'] ; ?> "> Eliminar </a></td>
            </tr>        
            <?php
             }
            ?> 
        </tbody>
        <tfoot>
            <tr>
                <th><a href="../"><button>Regresar</button></a></th>
                <th><a href="form.php"><button>insertar</button></a></th>
            </tr>
        </tfoot>
    </table>
</body>
</html>