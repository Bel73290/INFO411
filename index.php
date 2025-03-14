<?php
required('../connexion.php')
required('../Crud_Menu.php')
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

    <h1>Menu Burgouzz</h1>

    <div class="menu">
        <div class="menu-item">
            <img src="img/Classic Burgouzz.png" alt="Classic Burgouzz">
            <?php
            echo list_menus($CONNEXION);
            ?>
            <h2>Classic Burgouzz</h2>
        </div>

        <div class="menu-item">
            <img src="img/Green Burgouzz.png" alt="Green Burgouzz">
            <h2>Green Burgouzz</h2>
        </div>

        <div class="menu-item">
            <img src="img/Kaarage Burgouzz.png" alt="Kaarage Burgouzz">
            <h2>Kaarage Burgouzz</h2>
        </div>

        <div class="menu-item">
            <img src="img/Summer Burgouzz.png" alt="Summer Burgouzz">
            <h2>Summer Burgouzz</h2>
        </div>

        <div class="menu-item">
            <img src="img/Truffle Burgouzz.png" alt="Truffle Burgouzz">
            <h2>Truffle Burgouzz</h2>
        </div>

        <div class="menu-item">
            <img src="img/Winter Burgouzz.png" alt="Winter Burgouzz">
            <h2>Winter Burgouzz</h2>
        </div>
    </div>

</body>
</html>

