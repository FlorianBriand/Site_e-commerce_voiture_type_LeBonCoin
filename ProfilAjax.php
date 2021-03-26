<!DOCTYPE html>
<html>
        <head> 
            <meta charset="UTF-8" />
            <link rel="stylesheet" href="PageArticle.css">
            <link rel="stylesheet" href="commun.css" /> 
            <script type="text/javascript" src="PageProfil.js"></script>
        </head>


<?php
session_start(); 
include "fonctionsBDD.php";
$connexion = connect();

echo"<div id='Ensemble'>";

    echo "Nom : ".$_SESSION["nom"]."<br>";
    echo "<input onclick='modif(1)' type='submit' value='Modifier son nom'><br>";
    echo "<div id='nom'></div>";
    echo "Prénom : ".$_SESSION["prenom"]."<br>";
    echo "<div id='prenom'></div>";
    echo "<input type='button' value='Modifier son prénom' onclick='modif(2)'><br>";
    echo "Mail : ".$_SESSION["mail"]."<br>";
    echo "<input type='button' value='Modifier son mail' onclick='modif(3)'><br>";
    echo "<div id='mail'></div>";
    echo "Mot de passe : ".$_SESSION["mdp"]."<br>";
    echo "<input type='button' value='Modifier son mot de passe' onclick='modif(4)'><br>";
    echo "<div id='mdp'></div>";
echo"</div>";
?>

