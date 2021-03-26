<!DOCTYPE html>
<html> 
    <head>
        <meta charset="UTF-8" />
        <title>Inscription</title>
        <link rel="stylesheet" type="text/css" href="PageInscription.css" />
        <link rel="stylesheet" type="text/css" href="commun.css" />
    </head>

    <body>
        <script type="text/javascript">
            function checkPw() {
                var pw1 = document.getElementById("Password").value;
                var pw2 = document.getElementById("Verif_Password").value;
                if (pw1 != pw2) {
                    document.getElementById("mdp").innerHTML="<span class='message_erreur'> Mots de passe différents </span>";
                        }
                else{document.getElementById("mdp").innerHTML="<span class='message_succes'>Mots de passe identiques";}
                }
        </script>

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


        <form action="ReponseInscription.php" method="POST">
            <video id="video_background" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0"> 
                <source src="img/Monfilm.mp4" type="video/mp4"><img src="background.jpg" width="100%" height="100%" >
                </video>      
                
        <div id="CadrePrincipal">
            <h2>Mon inscription</h2>
            <div id="texteprincipal"> 
                <div id="gauche_inscrit">
                    <input id="Nom" name="nom" type="text" placeholder="Nom" required/>
                    <input id="Email" name="mail" type="email" placeholder="Adresse email" required/> <br/> 
                    <input id="Password" type="password" onfocusout="checkPw()" placeholder="Mot de passe" minlength="8" required/> 
                    <div id="mdp"></div>
                </div>  
                <div id="droite_inscrit"> 
                    <input id="Prenom" name="prenom" type="text" placeholder="Prénom" required/> <br/>       
                    <input id="telephone" name="phone" pattern="[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}" placeholder="Numéro de téléphone"><small></small><br/>          
                    <input id="Verif_Password" name="mdp" type="password" name="mdp" onfocusout="checkPw()"placeholder= "Confirmation " minlength="8" id="passe2" required /> <br/>
                </div>
            </div>    


            <div id="text_principal_bas">
                <input id="valide" type="submit" value="Valider" />
                <input id="annule" type="reset" value="Annuler" />
                <a id="DejaInscrit" class="bouton_arrondi" href="PageConnexion.php"> Déjà inscrit ? Accédez à votre compte </a>          
            </div>
        </div>
        </form>

    </body>
</html>