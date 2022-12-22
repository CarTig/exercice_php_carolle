<?php
//fichier de la page d'accueil
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo2</title>
</head>
<body>
    <?php
        if(isset($_SESSION['prenom']) && isset($_SESSION['nom'])) {
          echo "Hello".$_SESSION['prenom'].  " ". $_SESSION['nom'] . " ! ";
          echo "<p> <a href='logout.php'>Se deconnecter </a> </p>";
        
        }
        else
        {
            echo "<p> <a href='login.php'>Se connecter </a> </p>";
        }
    
    ?>
</body>
</html>