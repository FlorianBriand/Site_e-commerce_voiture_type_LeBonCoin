<!DOCTYPE html>
<html>
        <head> 
            <meta charset="UTF-8" />
            <title>Accueil</title>
            <link rel="stylesheet" href="PageArticle.css">
            <link rel="stylesheet" href="commun.css" /> 
            <script type="text/javascript" src="PageProfil.js"></script>
        </head>
<body onload="voitures()">
<?php
    //connection
    session_start();
    include "fonctionsBDD.php";
    $connexion = connect(); ?>

            <div id="barre-haut">
                <div id="titre"><a href="ProjetAccueil.php"><img id="logo" src="img/logo.png" /></a></div>
                <a class='barre-haut-bloc' href='PageArticle.php'><div class="barre_haut_interieur"><img id="" class="logo_haut" src="img/loupe.png" /><br>Rechercher une voiture</div></a>
                <a class='barre-haut-bloc' href='AjoutVoiture.php'><div class="barre_haut_interieur"><img id="" class="logo_haut" src="img/clef.png" /><br>Vendre sa voiture</div></a>

                <?php
                    //Session
                    if(isset($_SESSION['mail'])){
                        echo "<a class='barre-haut-bloc' href='Profil.php'><div class='barre_haut_interieur'><img class='logo_haut' src='img/utilisateur.png' /><br>Mon compte</div></a>";
                        echo "<a class='barre-haut-bloc' onclick='deconnexion()' href='ProjetAccueil.php'><div class='barre_haut_interieur'><img class='logo_haut' src='img/porte.png' /><br>Déconnexion</div></a>";}
                    else{
                        echo "<a class='barre-haut-bloc' href='PageConnexion.php'><div class='barre_haut_interieur'><img class='logo_haut' src='img/utilisateur.png' /><br>Se connecter</div></a>";
                    }

                ?>
                
            </div>

        <div id="FondPage">

            <div id="barre-milieu">
                <br><br><input type="button" name="" id="" value="Profil " onclick="profil()">
                <input type="button" name="" id="" value="Messagerie" onclick="messages()">
                <input type="button" name="" id="" value="Vos voitures"  onclick="voitures()" >
                <input type="button" name="" id="" value="Historique"  onclick="historique()" >
                <?php
                if($_SESSION["niveau"]=="3"){
                    echo"<input type='button' value='Utilisateurs'  onclick='admin()' >";
                }

                ?>
            </div>
                
                <div id="vide"></div>
        </div>        
</body>
</html>





