<!DOCTYPE html>
<html>
    <head>
        <title>  Voiture ajoutée </title>
        <meta charset = "UTF-8"/> 
        <link rel="stylesheet" type="text/css" href="commun.css">
        <link rel="stylesheet" type="text/css" href="ReponseAjoutVoiture.css">
    </head>
        <body>  
            
            <div>
                <div id="barre-haut">
                    <a class="titre" href="ProjetAccueil.php"> C&C Classy Company </a>
                    <a class="barre-haut-bloc" href="ProjetAccueil.php"> Accueil </a>
                    <a class="barre-haut-bloc" href="ProjetAccueil.php"> Nos garages </a>
                    <a class="barre-haut-bloc" href="ProjetAccueil.php"> Univers</a>
                    <a class="barre-haut-bloc" href="ProjetAccueil.php"> Financements </a>
                </div>

    <?php
    $nommarque = $_POST["marque"];
    $nomcouleur = $_POST["couleur"];
    $nomenergie = $_POST["energie"];
    $date = $_POST["date"];
    $prix = $_POST["prix"];
    $kilometrage = $_POST["kilometrage"];
    $chemin_img="img/".$_POST["file"];


    //connection
    include "fonctionsBDD.php";
    $connexion = connect();
    session_start();

    //Transfomer nom en idmarque
    $marque = "SELECT idmarque FROM marque WHERE nom = '$nommarque' ";
    $requete1 = mysqli_query($connexion,$marque);
    $resultat1 = mysqli_fetch_array($requete1);
    $idmarque = $resultat1['idmarque'];
    //echo "L'id de la marque est le ".$idmarque."<br>";

    //Transfomer nom en idcouleur
    $couleur = "SELECT idcouleur FROM couleur WHERE nom = '$nomcouleur' ";
    $requete2 = mysqli_query($connexion,$couleur);
    $resultat2 = mysqli_fetch_array($requete2); 
    $idcouleur = $resultat2['idcouleur'];
    //echo "L'id de la couleur est le ".$idcouleur."<br>";

    //Transfomer nom en idenergie
    $energie = "SELECT idenergie FROM energie WHERE nom = '$nomenergie' ";
    $requete3 = mysqli_query($connexion,$energie);
    $resultat3 = mysqli_fetch_array($requete3);
    $idenergie = $resultat3['idenergie'];
    //echo "L'id de la energie est le ".$idenergie."<br>";

    $ajout= "INSERT INTO voiture(idmarque, annee, idcouleur, prix, kilometrage, idenergie, picture, affichage) 
    VALUES ('$idmarque', '$date', '$idcouleur', '$prix', '$kilometrage', '$idenergie', '$chemin_img', '0')";
    $resultat4 = executer($connexion,$ajout);

    //Recuperer le idvoiture
    $requete = "SELECT idvoiture FROM voiture WHERE idmarque='$idmarque' AND annee='$date' AND idcouleur='$idcouleur' AND prix='$prix' AND kilometrage='$kilometrage' AND idenergie='$idenergie' AND picture='$chemin_img'";
    $resultat = mysqli_query($connexion,$requete);
    $tab = mysqli_fetch_array($resultat);
    $idvoiture = $tab['idvoiture'];


    $ajout="INSERT INTO operation(idutilisateur, idvoiture, statut)
    VALUES ('$_SESSION[idutilisateur]','$idvoiture', '0')";
    $requete=executer($connexion, $ajout);

        echo "<div id='principal'>";
         echo "<br><br><p class='message_succes'> La voiture a été ajouté dans le catalogue avec succès </p>";
            echo "<div id='principal_gauche'>";
                echo " Voici les informations que vous avez rentrées : <br><br>";
                echo "Marque : ".$nommarque."<br><br/>";
                echo "Couleur : ".$nomcouleur."<br><br/>";
                echo "Energie : ".$nomenergie."<br><br/>";
                echo "Année : ".$date."<br><br/>";
                echo "Prix : ".$prix." €<br><br/>";
                echo "Kilométrage : ".$kilometrage." km";
            echo "</div>";
                echo "<div id='principal_droite'>";
                    echo "Vous avez rentré cette image : <br><br/>";
                    echo "<img id='image' src='$chemin_img'/>";
                    echo "<div id='principal_droite_bas'>";
                        echo "<a id='Lien6' class='bouton_arrondi' href='ProjetAccueil.php'> Retour à l'accueil </a>";
                    echo "</div>";
                echo "</div>";
        echo "</div>";       
     deconnect($connexion); 
     
     ?> 


</html>