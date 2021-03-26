<!DOCTYPE html>
<html>
<head>
    <title>Ajouter votre voiture</title>
    <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="commun.css">
<link rel="stylesheet" type="text/css" href="AjoutVoiture.css">

</head>
<body>
<?php
    session_start();
?>
<div id="barre-haut">
    <div id="titre"><a href="ProjetAccueil.php"><img id="logo" src="img/logo.png" /></a></div>
    <a class='barre-haut-bloc'  href='PageArticle.php'><div class="barre_haut_interieur"><img id="" class="logo_haut" src="img/loupe.png" /><br>Rechercher une voiture</div></a>
    <a class='barre-haut-bloc' href='AjoutVoiture.php'><div class="barre_haut_interieur"><img id="" class="logo_haut" src="img/clef.png" /><br>Vendre sa voiture</div></a>
    <?php
    //Session
    if(isset($_SESSION['mail'])){
        echo "<a class='barre-haut-bloc' href='Profil.php'><div class='barre_haut_interieur'><img class='logo_haut' src='img/utilisateur.png' /><br>Mon compte</div></a>";
        echo "<a class='barre-haut-bloc' onclick='deconnexion()' href='ProjetAccueil.php'><div class='barre_haut_interieur'><img class='logo_haut' src='img/porte.png' /><br>Déconnexion</div></a>";}
    else{
        echo "<a class='barre-haut-bloc' href='PageConnexion.php'><div class='barre_haut_interieur'><img class='logo_haut' src='img/utilisateur.png' /><br>Se connecter</div></a>";
    }
    ?>            
</div>

<?php
 include "fonctionsBDD.php";
 $connexion = connect();

 if(isset($_SESSION['mail'])){
     
?>
<div id="Partie_Centrale">
    <div id="Partie_Gauche">
        <div id="Partie_Gauche_Droite">
<form action="ReponseAjoutVoiture.php" method="POST">   
    <span class="police"> Sélectionner la marque :</span> <br/>
<select name="marque">
    <?php
        $affmarque="SELECT nom FROM marque";
        $resultat1 = mysqli_query($connexion,$affmarque);
         while($marque = mysqli_fetch_array($resultat1)){
            echo "<option value=".$marque["nom"].">".$marque["nom"]."</option>";
        }
        echo "<br>";
        ?>
</select>
<br/>

<span class="police"> Sélectionner la couleur :</span> <br/>
<select name="couleur">
    <?php
        $affcouleur="SELECT nom FROM couleur";
        $resultat2 = mysqli_query($connexion,$affcouleur);
        while($couleur = mysqli_fetch_array($resultat2)){
            echo "<option value=".$couleur["nom"].">".$couleur["nom"]."</option>";
        }
        echo "<br>";
        ?>
</select>
<br/>

<span class="police"> Sélectionner le type d'énergie</span> <br/>
<select name="energie">
    <?php
        $affenergie="SELECT nom FROM energie";
        $resultat3 = mysqli_query($connexion,$affenergie);
        while($energie = mysqli_fetch_array($resultat3)){
            echo "<option value=".$energie["nom"].">".$energie["nom"]."</option>";
        }
        echo "<br>";
    ?>
</select>

</div>
<div id="Partie_Gauche_Gauche">
    <span class="police"> Entrer l'année de fabrication :</span><br><input placeholder="Année" require type="number" name="date" min="1950" max="2020" /> <br/>
        <span class="police"> Entrer votre prix de vente :</span><br><input placeholder="Prix" require type="number" name="prix" /> <br/>
            <span class="police"> Entrer le kilométrage :</span><br><input placeholder="Kilométrage" require type="number" name="kilometrage" /><br/>
</div>
<div id="Partie_Bas"> 
    <span class="police"> Sélectionner une photo de votre voiture :</span><br> <input type="file" id="file" accept="image/*" name="file"><br/>

<input type="submit" value="Envoi des données" /><br/>
<input type="reset" value="On réinitialise tout" /> <br/>
</div>
</div>
</form>
<img id="garage" src="img/garage.jpg"/>
</div>  
<?php     
}
else{
    echo "<div id='central'>";
    echo "<br><br><span class='message_erreur'>Vous n'êtes pas connecté.</span> <br>";
    echo "<a class='bouton_arrondi' href='PageConnexion.php'>Se connecter</a><br>";
    echo "<a class='bouton_arrondi' href='ProjetAccueil.php'>Retour Accueil</a><br>";
    echo "</div>";
    }
?>
</body>
</html>