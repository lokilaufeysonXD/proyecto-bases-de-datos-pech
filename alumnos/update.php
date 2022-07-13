<<<<<<< Updated upstream
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Formulario de alumnos</h2>
    <form action="insert.php" mehod="post" >
        <ul>
            <li> 
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="user name">
            </li>
            <li>
                <label for="name">Apellido: </label>
                <input type="text" id="name" name="user name">
            </li>
            <li> 
                <label for="name">Teléfono:</label>
                <input type="text" id="name" name="user name">
            </li>
            <li>
                <label for="name">Correo: </label>
                <input type="text" id="name" name="user name">
            </li>
            <li> 
                <label for="name">Licenciatura:</label>
                <input type="text" id="name" name="user name">
            </li>
            <li>
                <label for="name">Cuatrimestre: </label>
                <input type="text" id="name" name="user name">
            </li>
            <li>
                <input type="submit">
            </li>
        </ul>
    </form>
</body>
</html>
=======
<?php
require_once("../lib/funtions.php") ;
$ID = $_GET['ID'] ;

eliminar_alumno($connect, $ID) ;

header('location: index.php') ;
?>
>>>>>>> Stashed changes
