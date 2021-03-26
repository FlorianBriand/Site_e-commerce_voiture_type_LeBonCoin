<!DOCTYPE html>
<html>
    <head> 
        <meta charset="UTF-8" />
        <title>Accès aux articles</title>
        <link rel="stylesheet" href="commun.css">
        <link rel="stylesheet" href="PageArticle.css">

        <script type="text/javascript" src="PageArticle.js">
        </script>
    </head>

    <body onload="enregistrement_filtres(),mareponse()">
    <?php
    //connection
    session_start();
    include "fonctionsBDD.php";
    $connexion = connect(); ?>

            <div id="barre-haut">
                <div id="titre"><a href="ProjetAccueil.php"><img id="logo" src="img/logo.png" /></a></div>
                <a class='barre-haut-bloc' href='PageArticle.php'><div class="barre_haut_interieur"><img id="" class="logo_haut" src="img/loupe.png" /><br>Rechercher une voiture</div></a>
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

        <!-- Debut du filtre -->

    <div id="gauche" > 
        <form >
            <div>
                <input type="button" value="Marque  +" onclick="part_marque()">
                <div id="partie_marque" >
                    <?php affiche_tableau_filtres("marque",$connexion);?>
                </div>
            </div>
            <div>
                <input type="button" value="Couleur  +" onclick="part_couleur()">
                <div id="partie_couleur" >
                    <?php affiche_tableau_filtres("couleur",$connexion);?>
                </div>
            </div>
            <div>
                <input type="button" value="Energie  +" onclick="part_enegie()">
                <div id="partie_energie">
                    <?php affiche_tableau_filtres("energie",$connexion);?>
                </div>
            </div>
            <div>
                <select onchange="mareponse()" id="ordre">
			        <option value="0" selected>Tri par prix croissant</option>
			        <option value="1">Tri par prix décroissant</option>
			        <option value="2">Tri par année croissante</option>
                    <option value="3">Tri par année décroissante</option>
                    <option value="4">Tri par kilométrage croissante</option>
			        <option value="5">Tri par kilométrage décroissante</option>
				</select>
            </div>
    </div>             
            <div id="haut_droite">
                <input onchange="mareponse()" type="number" id="prixmin" placeholder="Prix min" min="0">
                <input onchange="mareponse()" type="number" id="prixmax" placeholder="Prix max" max="999999999">
                <input onchange="mareponse()" type="number" id="anneemin" placeholder="Année min" min="0">
                <input onchange="mareponse()" type="number" id="anneemax" placeholder="Année max" max="999999999">
                <input onchange="mareponse()" type="number" id="kmmin" placeholder="Km min" min="0">
                <input onchange="mareponse()" type="number" id="kmmax" placeholder="Km max" max="999999999">
            </div>  



        </form>
    


    <div id="droite" >
        <div id="article" name="article"></div> 
    </div>
    <div id="partie_message" ></div>


    </body>
</html>