<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Le Ciel Burgouzz</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>
<div>
    <h1>Le Ciel Burgouzz</h1>
    <a href="#">Connexion</a> <!-- Ajout d'un href pour rendre le lien cliquable -->
</div>
<div>
    <h2>Menu</h2>
    <div class="burger"> <!-- Ajout des guillemets pour la classe CSS -->
        <?php
        for ($i = 0; $i < 10; $i++) {
            echo "yoyo ";
        }
        ?>
        <button>Choisir</button>
    </div>
</div>
    
</body>
</html>
