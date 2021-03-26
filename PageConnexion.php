<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Connexion</title>
        <!--<link rel="stylesheet" href="PageConnexion.css">-->
        <script type="text/javascript" src="PageConnexion.js"></script>
        <link rel="stylesheet" type="text/css" href="commun.css">
        <link rel="stylesheet" type="text/css" href="PageConnexion.css">
    </head>
 
    <body>
    <?php
    //connection
    session_start();
    include "debut.php";
    include "fonctionsBDD.php";
    $connexion = connect(); 
    ?>
        <div>
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
        </div>
        <form> 
        <div id="Principal">                
            <div id="CadrePrincipal">
            <?php
                if(isset($_SESSION['mail'])){
                    echo "<span classs='message_erreur'>Vous êtes déjà connecté.</span> <br>";
                    echo "<a class='bouton_arrondi' href='ProjetAccueil.php'>Retour Accueil</a><br>";
                }
                else { ?>
                <h2>Connexion</h2>
                <div id="texteprincipal"> 
                    <div id="gauche_inscrit">
                        <input id="Email" type="email" placeholder="Adresse email" required/> <br/> 
                        <input id="Password" type="password" placeholder="Mot de passe" required/> <br/>
                  
                        <div id="text_principal_bas">
                            <input id="valide" type="button" value="Valider" onclick="transfert()" />
                        </div>
                    <div id="vide">
                        <div id="verif" class="message_erreur"></div>
                    
                        <a id="Lien" class="bouton_arrondi" href='PageInscription.php'>S'inscrire</a><br/>
                    </div>
                    </div>
                </div>
            </div>
            </form>

            <?php
                }
            ?>
        </div>
</html>
