<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <center>
    <h1>
      <p>formularios de materias</p>
    </h1>
  </center>
  <center>
    <form action="insert.php" method="post" >
      <ul>
        <li>
          <label for="name">Nombre:</label>
          <input type="text" id="name" name="name" />
        </li>

        <li>
          <label for="cuatrimestre">cuatrimestre:</label>
          <input type="text" id="cuatrimestre" name="cuatrimestre"/>
        </li>

        <li>
          <label for="licenciatura">licebciatura:</label>
          <input type="text" id="licenciatura" name="licenciatura"/>
        </li>
        
        <li>
          <input type="submit">
        </li>
      </ul>
    </form>  
</center>
</body>
</html>