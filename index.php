<?php
// Vérifier si un cookie de couleur a déjà été défini
if(isset($_COOKIE['color'])) {
  $color = $_COOKIE['color'];
} else {
  $color = "light";
}

// Si le formulaire a été soumis
if(isset($_POST['submit'])) {
  $color = $_POST['color'];
  // Définir le cookie avec le jeu de couleurs sélectionné
  setcookie('color', $color, time() + (7 * 24 * 60 * 60));
  echo "La couleur a été enregistrée.";
}
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
<form action="" method="post">
  <input type="radio" name="color" value="light" <?php if($color == "light") echo "checked"; ?>> Light
  <input type="radio" name="color" value="dark" <?php if($color == "dark") echo "checked"; ?>> Sombre
  <input type="submit" name="submit" value="Save">
</form>
</body>
</html>