<?php

$word = $_GET["parola"];
$text = $_GET["testo"];
$text_length = strlen("testo");

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arrival</title>
</head>
<body>
  <h1>Il testo</h1>
  <p><?php echo $text ?></p>
  <span>Lunghezza: <?php echo $text_length ?></span>
</body>
</html>