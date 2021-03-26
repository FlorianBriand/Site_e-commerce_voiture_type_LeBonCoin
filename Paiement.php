<!--Paiement.php-->
<!DOCTYPE html> 
<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="commun.css">
        <script type="text/javascript" src="PageArticle.js"></script>
        <link rel="stylesheet" type="text/css" href="AjoutAchat.css">
    </head>

    <body>
    <?php
    //connection
    session_start();
    include "fonctionsBDD.php";
    $connexion = connect();
    echo "<div id='PaiementV'>Paiement validé</div>";
    $date=date("j-m-y");
    $requete="UPDATE operation SET statut = '1', jour = '$date'  WHERE idutilisateur=".$_SESSION['Vendeur']." AND idvoiture=".$_SESSION['idvoiture'];
    $resultat = executer($connexion,$requete);
    $requete="INSERT INTO operation(idutilisateur, idvoiture, statut, jour) VALUES ('$_SESSION[acheteur]','$_SESSION[idvoiture]', '2', '$date')";
    $resultat = executer($connexion,$requete);
    $requete="UPDATE voiture SET affichage = '1' WHERE idvoiture=".$_SESSION['idvoiture'];
    $resultat = executer($connexion,$requete);
    echo "<div id=RetourA> <a href='ProjetAccueil.php'>Retour accueil</a></div>"
    ?>
    </body>