<!DOCTYPE html>
<html>
    <head> 
        <meta charset="UTF-8" />
        <title>Accueil</title>
        <link rel="stylesheet" href="ProjetAccueil.css" />
        <link rel="stylesheet" href="commun.css" />
        <script type="text/javascript" src="PageArticle.js"></script>

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
               
            <div id="presentation">
                <p class="texteIntro1"> Explorez nos ventes et choisissez la voiture qui vous convient. Plus que des voitures, des légendes ...</p>
        
            </div>




            <div id="inscription">
                <p class="texteIntro3">Sur la grille de départ </p>
                <a id="Lien2" class="bouton_arrondi" href="PageConnexion.php">Identifiez-vous</a>
            </div>



            <div id="partie-model">
                <div id="partie-model-gauche">
                    <p class="texteIntro3"> Nos modèles </p>
                    
                    <div class="Affaire"> Cliquez sur votre modèle et l'affaire est dans le coffre<br><br><br>
                    <a id="Lien1" class="bouton_arrondi" href="PageArticle.php"> Découvrez nos voitures </a>  
                    </div>
                </div>

                      
                <div id="partie-model-droite" class="zoom">
                    <div>
                        <a href="PageArticle.php"><img src="img/VCourse.jpg" alt="Voitures de courses"/></a>
                    </div>
                    <div>
                        <a href="PageArticle.php"><img src="img/VCabriolets.jpg" alt="Voitures cabriolets"/></a> 
                    </div>
                    <div>
                        <a href="PageArticle.php"><img src="img/VBerline.jpg" alt="Voitures berlines"/></a> 
                    </div>
                    <div>
                        <a href="PageArticle.php"><img src="img/VCoupées.jpg" alt="Voitures coupées"/></a> 
                    </div>

                </div>
            </div>




            <div id="partie-mise-vente">
                <img id="img-course" src="img/Course-noiretblanc.jpg" />
                <div id="mise-vente-droite">
                    <p class="texteIntro3"> Mettre en ventes</p>
                    <div id="partie-model-gauche-milieu">
                        <p>Vous souhaitez faire de la place dans votre garage… N'hésitez plus, c'est ici qu'il faut vendre sa voiture</p>
                    </div>
                    <div id="partie-model-gauche-bas">
                        <p>Une affaire qui roule</p>
                        <a id="Lien4" class="bouton_arrondi" href="AjoutVoiture.php">Vendre</a>
                    </div>    
                </div>
            </div>


            <div id="sav">

                <div id="sav-gauche">
                    <p>"Les gens peuvent choisir n'importe quelle couleur pour la Ford T, du moment que c'est noir." Henry Ford</p>
                    <a id="Lien5" class="bouton_arrondi" href="SAV.php">Services après ventes</a>
                </div>

                <img id="retro" src="img/Sav.jpg" />
            </div>

            <div >
                <div id="Mentionslegales">

                    <div id="Mentionslegales-milieu">
                        <p>Mentions légales</p>
                        <div id="Mentionslegales-milieu-centre"> 
                            <p> Valeurs déterminées suivant la méthode de mesure légale obligatoire. Depuis le 1er septembre 2018, les véhicules sont homologués selon la norme WLTP (Worldwide Harmonized Light Vehicles Test Procedure). Dans la mesure où les valeurs WLTP sont données sous forme de plages de valeurs, elles ne se rapportent pas à un seul véhicule et ne font pas partie intégrante de l’offre : elles ont pour seul objectif de permettre des comparaisons entre les différents types de véhicule. Certaines options et équipements peuvent faire varier certains paramètres du véhicule tel que le poids, la résistance au roulement ou la résistance à l’air et, en plus des conditions météorologiques, des conditions de circulation ou du style de conduite, peuvent faire varier la consommation de carburant, d’électricité, les émissions de CO2 et les performances du véhicule.</p>
                        </div>

                        <div id="Mentionslegales-bas">
                            <p> <a>@Classy Company en France.</a> <a href="MentionsLegales.php">Mentions légales.</a> <a href="PolitiqueDeConfidentialite.php">Politique de confidentialité.</a> <a href="PolitiqueCookies.php">Politique en matière de cookies de Classy Company.</a></p>
                        </div>
                
                    </div>
                </div>   
            </div>
    </body>
</html>