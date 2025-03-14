<?php
/**
 * Gestion du menu
 */
require('../connexion.php')
$debeug = true;

function insert_menu($CONNEXION, $nom, $description, $prix) {
    $sql = "INSERT INTO menu (nom, description, prix) VALUES ('$nom', '$description', '$prix')";
    global $debeug;
    if ($debeug) echo $sql;
    return mysqli_query($conn, $sql);
}

function update_menu($CONNEXION, $id, $nom, $description, $prix) {
    $sql = "UPDATE menu SET nom='$nom', description='$description', prix='$prix' WHERE id = $id";
    global $debeug;
    if ($debeug) echo $sql;
    return mysqli_query($conn, $sql);
}

function delete_menu($CONNEXION, $id) {
    $sql = "DELETE FROM menu WHERE id = $id";
    global $debeug;
    if ($debeug) echo $sql;
    return mysqli_query($conn, $sql);
}

function select_menu($CONNEXION, $id) {
    $sql = "SELECT * FROM menu WHERE id = $id";
    global $debeug;
    if ($debeug) echo $sql;
    $res = mysqli_query($conn, $sql);
    return mysqli_fetch_assoc($res);
}

function list_menus($CONNEXION) {
    $sql = "SELECT * FROM menu";
    global $debeug;
    if ($debeug) echo $sql;
    $res = mysqli_query($conn, $sql);
    return rs_to_tab($res);
}

/**
 * Fonction auxiliaire pour transformer un result set en tableau
 */
function rs_to_tab($rs) {
    $tab = [];
    while ($row = mysqli_fetch_assoc($rs)) {
        $tab[] = $row;
    }
    return $tab;
}
?>