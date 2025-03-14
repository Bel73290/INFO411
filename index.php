<?php

require('include/Crud_Menu.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Burgouzz</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

    <div class="header">
        <img src="img/logo.jpg" alt="Logo Burgouzz">
        <h1>Menu Burgouzz</h1>
        <a href="connexion_user.php">Connexion</a>
    </div>

    <div class="menu">
    <?php
            $menus = list_menus($CONNEXION);
            foreach ($menus as $menu) {
                echo "<div class='menu-item'>";
                echo "<img src='img/" . $menu['nom'] . ".png' alt='" . $menu['nom'] . "'>";
                echo "<h2>" . $menu['nom'] . "</h2>";
                echo "<h2>" . $menu['prix'] . "€</h2>";
                echo "<input class='styled' type='button' value='Choisissez ce burger' />";
                echo "</div>";
            }
    ?>
    </div>

</body>
</html>

