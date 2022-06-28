<?php 
$id = $_GET['di'];
require_once("../lib/funtions.php");
$resultado = get_alumno($connect, $id);
$alumno = mysqli_fetch_array($resultado);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>alumnos | esuela BD</title>
</head>
<body>
<h1>detalle del alumno <?php echo $alumno ['apellido']." ".$alumno ['nombre'] ?>
<small><a href="../alumnos/">regresar</a></small></h1>
</body>
</html>