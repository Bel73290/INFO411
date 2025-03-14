
<!DOCTYPE html>
<?php
session_start(); // Démarrer la session
require('connexion.php')

// Vérifie si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Nettoyer les entrées
    $name = trim($_POST['name']);
    $colis = trim($_POST['mdp']);
    
    // Échapper les valeurs pour la base de données
    $name = mysqli_real_escape_string($conn, $name);
    $mdp = mysqli_real_escape_string($conn, $mdp);

    // Requête SQL
    $sql = "SELECT * FROM `utilisateur` WHERE `nom`='$name' AND `mdp`='$mdp'";
    $result = mysqli_query($CONNEXION, $sql);

    if (!$result) {
        die("Erreur SQL : " . mysqli_error($CONNEXION)); 
    }

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['name'] = $name;
		$_SESSION['mdp'] = $mdp;
        header("Location: ../index.php");
        exit();  
    } else {
        echo "Nom ou numéro du colis incorrect.";
    }

    mysqli_close($conn);
}
?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Burgouzz</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

    <h1>Menu Burgouzz - Connexion</h1>

    <div class="connexion">
    <form method="POST" action="">
    <label for="name">Nom :</label>
    <input type="text" id="name" name="name" required minlength="4" maxlength="8"  />
    <label for="name">Mot de passe :</label>
    <input type="text" id="mdp" name="mdp" required minlength="4" maxlength="50"  />
    <button class="button" type="submit"> Connexion</button>
	</form>
        
       
    </div>

</body>
</html>