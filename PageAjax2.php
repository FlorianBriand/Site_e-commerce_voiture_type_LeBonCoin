<?php  
    session_start();
    include "debut.php";
    include "fonctionsBDD.php";
    $connexion = connect();
    $salut = 0;
    $mail = $_POST["mail"];
    $mdp = $_POST["mdp"];
    $affmarque="SELECT * FROM utilisateur WHERE mail = '$mail'";
    $resultat1 = mysqli_query($connexion,$affmarque);
    while($marque = mysqli_fetch_array($resultat1)){
        $salut = 1;
        if (count($marque) != 0){
            if(($_POST["mail"]==$marque['mail']) && ($_POST["mdp"]==$marque['mdp'])){
                echo "<br><br><span class=message_succes> Connexion avec succès</span><br>";
                $_SESSION['idutilisateur']=$marque['idutilisateur'];
                $_SESSION['prenom']=$marque['prenom'];
                $_SESSION['nom']=$marque['nom'];
                $_SESSION['mail']=$marque['mail'];
                $_SESSION['mdp']=$marque['mdp'];
                $_SESSION['niveau']=$marque['niveau'];
                echo "<a class='bouton_arrondi' href='ProjetAccueil.php'>Retour à l'accueil</a>";
            }
            else if (($_POST["mail"]==$marque['mail']) && ($_POST["mdp"]!=$marque['mdp'])){
                echo "Mot de passe incorrect";
            }
        }
    }
    if ($salut != 1){
        echo "<div class='message_erreur'>Compte inexistant</div><br>";
        echo "<a id='Lien' class='bouton_arrondi' href='PageInscription.php'>S'inscrire</a><br/>";
    }
?>