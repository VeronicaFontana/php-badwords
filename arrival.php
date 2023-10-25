<?php

$word = $_GET["parola"];
$text = $_GET["testo"];
$text_length = strlen($text);

$textReplace = str_replace($word, " *** " , $text);
$textReplace_length = strlen($textReplace);

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

  <h1>Il testo censurato</h1>
  <p><?php echo $textReplace ?></p>
  <span>Lunghezza: <?php echo $textReplace_length ?></span>
</body>
</html>