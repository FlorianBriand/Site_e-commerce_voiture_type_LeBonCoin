<!DOCTYPE html>
<html>
<head>
    <meta charset = "UTF-8"/> 
    <title> Réponse inscription </title>
    <link rel="stylesheet" type="text/css" href="ReponseInscription.css">
    <link rel="stylesheet" type="text/css" href="commun.css">
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
            //connection
            include "fonctionsBDD.php";
            $connexion = connect();

            //Info
            $nom = $_POST["nom"];
            $prenom = $_POST["prenom"];
            $mail = $_POST["mail"];
            $mdp = $_POST["mdp"];
            $phone = $_POST["phone"];

            //Verif
            $verif=0;
            $requete="SELECT mail FROM utilisateur";
            $resultat = mysqli_query($connexion,$requete);
            while($mailbdd = mysqli_fetch_array($resultat)){
                if ($mailbdd["mail"]==$mail){
                    $verif = 1;
                }
            } 
            if ($verif==1){
            
                echo "<div id='centre_erreur' class='message_erreur'> Vous avez déja un compte <br><br>";
                echo "<a id='Lieninscrip' class='bouton_arrondi' href='PageInscription.php'/> Retour à l'inscription </a></div>";
                echo"<img id='img-course2' src='img/InscriptionEchec.jpg'/>";
            }
            else{
                //Ajout
                $ajout = "INSERT INTO utilisateur(nom, prenom, mail, telephone, mdp, niveau)
                VALUES ('$nom', '$prenom', '$mail', '$phone', '$mdp', '2')";
                $resultat = executer($connexion,$ajout);
                echo "<div id='centre_succes' class='message_succes'> Inscription réalisée avec succès  <br><br> ";
                echo "<a id='LienAccueil' class='bouton_arrondi' href='ProjetAccueil.php'/> Retour à l'accueil </a></div>";
                echo"<img id='img-course' src='img/InscriptionReussie.jpg'/>";
            }
                deconnect($connexion);
        ?>

    </body>
</html>