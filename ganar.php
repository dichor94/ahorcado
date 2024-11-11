<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/styles.css">
  <title>Partida Ganada</title>
</head>
<body>

  <h1 id="ganador">¡Has ganado la partida!</h1>

  <?php

    session_start();
    echo "Enhorabuena, has ganado! :) La palabra era: " . $_SESSION['palabra'] . "<br>";
    
  
  ?>
  
    <a href="./index.php"><button type="Submit" class="resetGame">Nueva partida</button></a>
  
  <?php
    session_destroy();
    exit();
  ?>

 
  
</body>
</html>