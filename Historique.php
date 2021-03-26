<!--Historique--> 
<?php
    echo "Historique : <br>";
    session_start();
    include "fonctionsBDD.php";
    $connexion = connect();
    $compteur2=0;
    $affmarque="SELECT * FROM operation WHERE idutilisateur =".$_SESSION["idutilisateur"]." ORDER BY jour DESC";
    $resultat = mysqli_query($connexion,$affmarque);
    while($marque = mysqli_fetch_array($resultat)){
        $compteur=0;
        if ($marque['statut']==1){
            echo "Voiture : Vendu<br>";
            echo "Date : ".$marque['jour']."<br>";
            $compteur=1;
            $compteur2=1;
        }
        if ($marque['statut']==2){
            echo "Voiture : Acheté<br>";
            echo "Date : ".$marque['jour']."<br>";
            $compteur=1;
            $compteur2=1;
        }
        if ($compteur==1){
            $affmarque1="SELECT * FROM voiture WHERE idvoiture =".$marque['idvoiture'];
            $resultat1 = mysqli_query($connexion,$affmarque1);
            while($marque1 = mysqli_fetch_array($resultat1)){
                echo "Marque : ".nomtoid("marque", $marque1['idmarque'], $connexion)."<br>";
                echo "Couleur : ".nomtoid("couleur", $marque1['idcouleur'], $connexion)."<br>";
                echo "Energie: ".nomtoid("energie", $marque1['idenergie'], $connexion)."<br>";
                echo "Prix : ".$marque1['prix']." €"."<br>";
                echo "Année : ".$marque1['annee']."<br>";
                echo "Kilométrage : ".$marque1['kilometrage']." km<br>";
                echo "</div> <div class='droite_article'>";
                echo "<img class='photo_article' src=".$marque1['picture'].">";
                echo "<div id=".$marque1['idvoiture'].">";
                echo "</div></div><br>";
            }
        }  
    }
    if ($compteur2==0){
        echo "Vous n'avez pas fait d'action";
        $compteur2=1;
    }  
    



    function nomtoid($type, $case, $connexion){
        $affmarque="SELECT nom FROM $type WHERE id$type = '$case' ";
        $requete = mysqli_query($connexion,$affmarque);
        $resultat = mysqli_fetch_array($requete);
        $id = $resultat['nom'];
        return $id;
    }
?>