<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Accueil</title>
        <link rel="stylesheet" href="PageSAV.css" />
        <link rel="stylesheet" href="commun.css" />
        <script type="text/javascript" src="PageProfil.js"></script>
    </head>

    <body>

        <?php
            session_start();
            $db = new PDO('mysql:host=localhost;dbname=projetdb', 'root', '');
            $id=(isset($_SESSION['idutilisateur']))?(int) $_SESSION['idutilisateur']:0;
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

                <?php echo'    <div id="principal">
                        <div class="nom"> Assistance & services Classy Company </p> </div>
                            <p class="Distributeur"> Distributeur Classy Company </p>
                            <p>Vous recherchez un distributeur à proximité de chez vous ?</p>
                                <div id="carte">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.489152573938!2d2.3130767156298875!3d48.867950979288395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66fce39c7f273%3A0xa52a9450f0b5eaab!2s10%20Av.%20des%20Champs-%C3%89lys%C3%A9es%2C%2075008%20Paris!5e0!3m2!1sfr!2sfr!4v1591174839954!5m2!1sfr!2sfr" width=40% height="450" frameborder="0" style="border:1px solid;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                </div>
                                <p>Vous avez besoin d\'aide pour utiliser votre voiture? Vous souhaitez déposer votre voiture en réparation?</p>
                                <p>500 professionnels du SAV sont à votre service pour vous conseiller et vous apporter une solution adaptée.</p>
                            
                                <p class="Distributeur"> Cliquez sur votre requète: </p>
                        
                            <div id="partie-logo" class="zoom">
                                <div>
                                    <a onclick="SAVp()"><img src="img/LogoSAV1.jpg"/></a>
                                </div>
                                <div>
                                    <a onclick="SAVr()"><img src="img/LogoSAV2.jpg"/></a> 
                                </div>
                                <div>
                                    <a onclick="SAVv()"><img src="img/LogoSAV3.jpg"/></a> 
                                </div>
                                <div>
                                    <a onclick="SAVa()"><img src="img/LogoSAV4.jpg"/></a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
        ?>
    <div id="vide"></div>
    </body>
</html>