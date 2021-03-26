<!-- ProfilVoitures -->
<script type="text/javascript" src="PageProfil.js"></script>
<?php 
 session_start();
 include "fonctionsBDD.php";
 $connexion = connect();
$affmarque="SELECT idvoiture FROM operation WHERE idutilisateur =".$_SESSION["idutilisateur"];
$resultat = mysqli_query($connexion,$affmarque);
while($marque = mysqli_fetch_array($resultat)){
    $affmarque1="SELECT * FROM voiture WHERE idvoiture =".$marque['idvoiture']." AND affichage = '0' ";
    $resultat1 = mysqli_query($connexion,$affmarque1);
    while($marque1 = mysqli_fetch_array($resultat1)){
        echo "<div class='bord_article'><div  class='article'> <div class='gauche_article'>";
        echo "Marque : ".nomtoid("marque", $marque1['idmarque'], $connexion)."<br>";
        echo "Couleur : ".nomtoid("couleur", $marque1['idcouleur'], $connexion)."<br>";
        echo "Energie: ".nomtoid("energie", $marque1['idenergie'], $connexion)."<br>";
        echo "Prix : ".$marque1['prix']." €"."<br>";
        echo "Année : ".$marque1['annee']."<br>";
        echo "Kilométrage : ".$marque1['kilometrage']." km<br>";
        echo "</div> <div class='droite_article'>";
        echo "<img class='photo_article' src=".$marque1['picture'].">";
        echo "<div id=".$marque1['idvoiture'].">";
        echo "<input onclick='supprVoiture(".$marque1['idvoiture'].")' type='button' value='Supprimer' ></div>";
        echo "</div></div><br>";
    }
}

function nomtoid($type, $case, $connexion){
   $affmarque="SELECT nom FROM $type WHERE id$type = '$case' ";
   $requete = mysqli_query($connexion,$affmarque);
   $resultat = mysqli_fetch_array($requete);
   $id = $resultat['nom'];
   return $id;
}

?>