<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma Calculatrice</title>
    <link rel="stylesheet" href="Prototype.css">
</head>
<body>
  <div class="page">
    <h1 class="title">Ma calculatrice</h1>
   <div class="container">
    <form method="POST">
  <input type="number" name="num1">
  <input type="number" name="num2">

  <select name="operation">
    <option value="addition">Addition</option>
    <option value="soustraction">Soustraction</option>
    <option value="multiplication">Multiplication</option>
    <option value="division">Division</option>
  </select>

  <button type="submit" name="calculer">Calculer</button>
</form>
</div>
</div>
</body>

<?php
if (isset($_POST["calculer"])) {
  $num1 = $_POST["num1"];
  $num2 = $_POST["num2"];
  $operation = $_POST["operation"];

  if ($num1 === "" || $num2 === "") {
    echo "Champs obligatoires";
    return;
  }

  function calculer($a, $b, $op) {
    if ($op == "addition") return $a + $b;
    if ($op == "soustraction") return $a - $b;
    if ($op == "multiplication") return $a * $b;
    if ($op == "division") {
      if ($b == 0) return "Erreur";
      return $a / $b;
    }
  }

  echo "Résultat : " . calculer($num1, $num2, $operation);
}
?>

    
</body>
</html>