<!-- ProfilAdmin -->
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
echo "<div id='ensemble_article'>";
     $affmarque1="SELECT * FROM utilisateur";
     $resultat1 = mysqli_query($connexion,$affmarque1);
     while($marque1 = mysqli_fetch_array($resultat1)){
        echo "<div class='bord_article'><div id=".$marque1['idutilisateur']." class='article'>";
        echo "Nom : ".$marque1['nom']."<br>";
        echo "Prénom :".$marque1['prenom']."<br>";
        echo "Mail: ".$marque1['mail']."<br>";
        echo "Téléphone : ".$marque1['telephone']."<br>";
        echo "Mot de passe : ".$marque1['mdp']."<br>";
        echo "<input onclick='supprutilisateur(".$marque1['idutilisateur'].")' type='button' value='Supprimer' >";
        echo "</div></div><br>";
    }
echo"</div>";

?>