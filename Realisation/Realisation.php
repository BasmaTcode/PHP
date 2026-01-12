<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIZ PHP</title>
    <link rel="stylesheet" href="Realisation.css">
</head>
<body>
     <div class="container">
    <h1>QUIZ PHP</h1>
    <form method="POST">
        <p>1. PHP est un langage :</p>
        <input type="radio" name="Q1" value="serveur"> Serveur<br>
        <input type="radio" name="Q1" value="navigateur"> Navigateur<br>
        <input type="radio" name="Q1" value="css"> CSS<br>

        <p>2. HTML sert à :</p>
        <input type="radio" name="Q2" value="structure"> Structurer une page<br>
        <input type="radio" name="Q2" value="calcul"> Faire des calculs<br>
        <input type="radio" name="Q2" value="base"> Gérer une base de données<br>

        <p>3. Le symbole $ en PHP sert à :</p>
        <input type="radio" name="Q3" value="variable"> Déclarer une variable<br>
        <input type="radio" name="Q3" value="fonction"> Créer une fonction<br>
        <input type="radio" name="Q3" value="classe"> Créer une classe<br>

        <p>4. PHP est principalement utilisé pour :</p>
        <input type="radio" name="Q4" value="frontend"> Le design des pages<br>
        <input type="radio" name="Q4" value="backend"> Le traitement côté serveur<br>
        <input type="radio" name="Q4" value="css"> Le style CSS<br>

        <br>
        <button type="submit" name="Valider">Valider</button>
    </form>
</div>
<?php
if(isset($_POST["Valider"])){

    $score = 0; 
    
       echo '<div class="result">';
    echo "<h3>Résultats :</h3>";

    // echo "<h3>Résultats :</h3>";

    // Question 1
    if(isset($_POST["Q1"])){
        if($_POST["Q1"] == "serveur"){
            echo "Question 1 : Bonne réponse <br>";
            $score++;
        } else {
            echo "Question 1 : Mauvaise réponse <br>";
        }
    } else {
        echo "Question 1 : Aucune réponse <br>";
    }

    // Question 2
    if(isset($_POST["Q2"])){
        if($_POST["Q2"] == "structure"){
            echo "Question 2 : Bonne réponse <br>";
            $score++;
        } else {
            echo "Question 2 : Mauvaise réponse <br>";
        }
    } else {
        echo "Question 2 : Aucune réponse <br>";
    }

    // Question 3
    if(isset($_POST["Q3"])){
        if($_POST["Q3"] == "variable"){
            echo "Question 3 : Bonne réponse <br>";
            $score++;
        } else {
            echo "Question 3 : Mauvaise réponse <br>";
        }
    } else {
        echo "Question 3 : Aucune réponse <br>";
    }

    // Question 4
    if(isset($_POST["Q4"])){
        if($_POST["Q4"] == "backend"){
            echo "Question 4 : Bonne réponse <br>";
            $score++;
        } else {
            echo "Question 4 : Mauvaise réponse <br>";
        }
    } else {
        echo "Question 4 : Aucune réponse <br>";
    }

   
   echo '<div class="result">Votre score est : '.$score.'/4</div>';
}
?>
</body>
</html>
