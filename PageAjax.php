<?php
    $filtremarque=1;
     
    //connection
    include "fonctionsBDD.php";
    $connexion = connect(); 
    $condition="";
    $salut=0;
    $condition=creationwhere($_POST["taille_tab_marque"],$_POST["taille_tab_couleur"],$_POST["taille_tab_energie"],$condition,$connexion, $_POST["prixmin"], $_POST["prixmax"], $_POST["anneemin"], $_POST["anneemax"], $_POST["kmmin"], $_POST["kmmax"], $_POST["ordre"]);
    $affmarque="SELECT * FROM voiture $condition";
    $resultat1 = mysqli_query($connexion,$affmarque);
    while($marque = mysqli_fetch_array($resultat1)){
        $salut = 1;
        if (count($marque) != 0){

            echo "<div class='bord_article'><div class='article'> <div class='gauche_article'>";
            echo "Marque : ".nomtoid("marque", $marque['idmarque'], $connexion)."<br>";
            echo "Couleur : ".nomtoid("couleur", $marque['idcouleur'], $connexion)."<br>";
            echo "Energie: ".nomtoid("energie", $marque['idenergie'], $connexion)."<br>";
            echo "Prix : ".$marque['prix']." €"."<br>";
            echo "Année : ".$marque['annee']."<br>";
            echo "Kilométrage : ".$marque['kilometrage']." km<br>";
            echo "</div> <div class='droite_article'>";
            echo "<img class='photo_article' src=".$marque['picture'].">";
            echo "</div><div onclick='contacter(".voitoutili($marque["idvoiture"],$connexion).",".$marque['idvoiture'].")' class='message'>Contacter</div>";
            echo "</div></div>";
        }
    }
    if ($salut != 1){
        echo "Aucun resultat trouvé";
    }
        
    function nomtoid($type, $case, $connexion){
        $affmarque="SELECT nom FROM $type WHERE id$type = '$case' ";
        $requete = mysqli_query($connexion,$affmarque);
        $resultat = mysqli_fetch_array($requete);
        $id = $resultat['nom'];
        return $id;
    }

    function voitoutili($idvoiture,$connexion){
        $requete = "SELECT idutilisateur FROM operation WHERE idvoiture=".$idvoiture;
        $resultat = mysqli_query($connexion,$requete);
        $tab = mysqli_fetch_array($resultat);
        $idutilisateur = $tab['idutilisateur'];
        return $idutilisateur;
    }


    function selection($type,$connexion){
        $condi="";
        for ($i=0; $i < $_POST["taille_tab_".$type] ; $i++) {        
            //transformer nom marque en idmarque
           
            $a=$type.$i; 
            $nommarque=$_POST[$a];
            $marque =  "SELECT id$type FROM $type WHERE nom = '$nommarque' ";
            $requete = mysqli_query($connexion,$marque);
            $resultat = mysqli_fetch_array($requete);
            $b="id".$type;
            $idmarque = $resultat[$b];
            if ($i==0){
                $condi=" (".$condi."id$type=".$idmarque." OR ";
            }
            if (($i != $_POST["taille_tab_".$type]-1) && ($i != 0)){ 
                $condi=$condi."id$type=".$idmarque." OR ";
            }
            if ($i == $_POST["taille_tab_".$type]-1){
                $condi=$condi."id$type=".$idmarque.")";
            }
            
        }
        return($condi);
    } 

    function intervalle($condition,$min,$max,$type){
        if (($min == "")&&($max != "")){
            $condition = "(0<=$type AND $type<=$max)";
        }
        if (($min != "")&&($max == "")){
            $condition = "($min<=$type AND $type<=999999999999)";
        }
        if (($min != "")&&($max != "")){
            $condition ="($min<=$type AND $type<=$max)";
        }
        return $condition;
    }
    
    function creationwhere($taille_marque,$taille_couleur,$taille_energie,$condition,$connexion, $prixmin, $prixmax, $anneemin, $anneemax, $kmmin, $kmmax, $ordre){
        $compteur=0;
            $condition=" WHERE ";
            //ajout affichage
            $condition=$condition."(affichage=0)";
            $compteur = 1;

            //ajout marque
            if ($taille_marque != 0){
                if ($compteur != 0){
                    $condition=$condition." And ";
                }
                $condition=$condition.selection("marque",$connexion);
                $compteur = 1;
            }
            //ajout couleur
            if ($taille_couleur != 0){
                if ($compteur != 0){
                    $condition=$condition." And ";
                }
                $condition=$condition.selection("couleur",$connexion);
                $compteur = 1;
            }
            //ajout energie
            if ($taille_energie != 0){
                if ($compteur != 0){
                    $condition=$condition." And ";
                }
                $condition=$condition.selection("energie",$connexion);
                $compteur = 1;
            }

            //ajout prix
            if (($prixmin != "") || ($prixmax != "")){
                if ($compteur != 0){
                    $condition=$condition." And ";
                }
                $condition=$condition.intervalle($connexion, $prixmin, $prixmax, "prix");
                $compteur = 1;
            }
            //ajout annee
            if (($anneemin != "") || ($anneemax != "")){
                if ($compteur != 0){
                    $condition=$condition." And ";
                }
                $condition=$condition.intervalle($connexion, $anneemin, $anneemax, "annee");
                $compteur = 1;
            }
            //ajout annee
            if (($kmmin != "") || ($kmmax != "")){
                if ($compteur != 0){
                    $condition=$condition." And ";
                }
                $condition=$condition.intervalle($connexion, $kmmin, $kmmax, "kilometrage");
                $compteur = 1;
            }
        //ajout ordre
        if ($ordre == 0){
            $condition=$condition."ORDER BY prix ASC";
        }
        else if ($ordre == 1){
            $condition=$condition."ORDER BY prix DESC";
        }
        else if ($ordre == 2){
            $condition=$condition."ORDER BY annee ASC";
        }
        else if ($ordre == 3){
            $condition=$condition."ORDER BY annee DESC";
        }
        else if ($ordre == 4){
            $condition=$condition."ORDER BY kilometrage ASC";
        }
        else if ($ordre == 5){
            $condition=$condition."ORDER BY kilometrage DESC";
        }
        return $condition;
    }
    
?>