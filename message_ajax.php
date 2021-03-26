<?php 
session_start();
include "fonctionsBDD.php";
$connexion = connect(); 

if(isset($_SESSION['mail'])){
        $requete = "SELECT * FROM utilisateur WHERE idutilisateur=".$_POST["utilisateur"];
        $resultat = mysqli_query($connexion,$requete);
        $tab = mysqli_fetch_array($resultat);
        if($_SESSION["mail"]==$tab['mail']){
            echo "<div class='BarreHaut'>";
            echo "<a> C'est votre voiture : <a id='CVotreV' href='profil.php'>Cliquez pour plus de details </a></a>";
            echo"</div>";
        }
        else{
            echo "<div class='BarreHaut'>";
            echo "<a> Destinataire : ".$tab['nom']." ".$tab['prenom']." - ".$tab['mail']."</a><br>";
            echo"</div>";

            echo "<div id='TexteMilieu'>";
            echo "<a id='AchatRapide'> Achat rapide : <a href='PageAchat.php'>Acheter votre voiture </a></a>";
            echo "<input id='objet' type='text' name='' placeholder='Objet'><br>";
            echo "<textarea id='corp' placeholder='Texte'></textarea><br>";
            
            echo "<input id='BoutonEnvoyer' onclick='envoi_message(".$_POST['utilisateur'].")' type='button' value='Envoyer'><br>";
            $_SESSION['acheteur'] = $_SESSION['idutilisateur'];
            $_SESSION['Vendeur'] = mailtoid($connexion, $tab['mail']);
            $_SESSION['idvoiture'] = $_POST["idvoiture"];
            echo"</div>";
        }
}
else{
    echo "<div class='BarreHaut'>";
    echo "<a id='Txtcnt'> Vous n'êtes pas connecté ! <a id='TxtPagecnt' href='PageConnexion.php'>Connectez-vous</a> </a>";
    echo"</div>";
}


function mailtoid($connexion, $mail){
    $affmarque="SELECT idutilisateur FROM utilisateur WHERE mail = '$mail'";
    $requete = mysqli_query($connexion,$affmarque);
    $resultat = mysqli_fetch_array($requete);
    $id = $resultat['idutilisateur'];
    return $id;
}

?>    

