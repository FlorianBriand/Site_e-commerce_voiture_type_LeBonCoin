<!--SupprUtilisatur-->
<?php

     include "fonctionsBDD.php";
     $connexion = connect();
     $idutilisateur = $_POST['idutilisateur'];
     $requete="DELETE FROM utilisateur WHERE idutilisateur=$idutilisateur";
     $resultat = executer($connexion, $requete);

     $requete="SELECT idvoiture FROM operation WHERE idutilisateur=$idutilisateur";
     $resultat = mysqli_query($connexion,$requete);
     $tab = mysqli_fetch_array($resultat);
     $idvoiture = $tab['idvoiture'];

     $requete="DELETE FROM voiture WHERE idvoiture=$idvoiture";
     $resultat = executer($connexion, $requete);
     
     $requete="DELETE FROM operation WHERE idutilisateur=$idutilisateur";
     $resultat = executer($connexion, $requete);
     echo "Utilisateur supprimé : ";
     echo "<a class='bouton_arrondi' href=profil.php>OK</a>";
?> 