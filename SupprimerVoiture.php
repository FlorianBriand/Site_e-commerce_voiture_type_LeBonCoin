<!--SupprimerVoiture.php-->
<?php
     include "fonctionsBDD.php";
     $connexion = connect();
     $idvoiture = $_POST['idvoiture'];
     $requete="DELETE FROM voiture WHERE idvoiture=$idvoiture";
     $resultat = executer($connexion, $requete);
     $requete="DELETE FROM operation WHERE idvoiture=$idvoiture";
     $resultat = executer($connexion, $requete);
     echo "Voiture supprimée : ";
     echo "<a class='bouton_arrondi' href=profil.php>OK</a>";
?> 