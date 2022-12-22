<?php
//fichier de la page pour se connecter
session_start();

$_SESSION['prenom'] = 'Caro';
$_SESSION['nom'] = 'Dwwm';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo2</title>
</head>

<?php
    if(isset($_SESSION['prenom']) && isset($_SESSION['nom'])) {
      echo "Hello".$_SESSION['prenom'].  " ". $_SESSION['nom'] . " ! ";
    }
?>

<body>
    <form method="post" action="">
            <p>
                <label for="nom">Nom : </label>
                <input type="text" name="nom" id="nom">
            </p>
            <p>
                <label for="prenom">Prénom : </label>
                <input type="text" name="prenom" id="prenom">
            </p>
            <p>
                <input type="submit" value="Se connecter">
            </p>
    </form>
</body>
</html>
