<!--Modifmdp.php-->
<?php
    session_start(); 
    include "fonctionsBDD.php";
    $connexion = connect();
    $modif=$_POST["modif"];    
    $requete="UPDATE utilisateur SET ".$_POST["nom"]."='$modif' WHERE idutilisateur=".$_SESSION['idutilisateur'];
    $resultat = executer($connexion,$requete);
    echo "<span class='message_succes'>Votre ".$_POST["nom"]." a été modifié avec succès par ".$modif."</span>";
    $_SESSION[$_POST["nom"]]=$modif;
?> 

