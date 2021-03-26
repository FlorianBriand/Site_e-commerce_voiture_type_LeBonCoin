<!DOCTYPE html>
<html>
    <head> 
        <meta charset="UTF-8" />
        <title>Accueil</title>
        <link rel="stylesheet" href="PolitiqueCookies.css" />
        <link rel="stylesheet" href="commun.css" />
    </head>

    <body>
        <div>
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

            <div id="principal">
                <div class="nom"> Politique en matière de cookies de Classy Company (C&C.com/france)</p> </div>
                    <div id="principal_gauche">                      
                        <p class="ChampApplication"> Champ d’application </p>
                        <p>La présente politique en matière de cookies complète la déclaration générale de protection des données applicable à notre site Internet et décrit la nature, l’étendue, les finalités, les bases légales et les possibilités d’opposition au traitement de données par le biais de cookies. Pour le reste, la déclaration générale de protection des données applicable à notre site Internet s’applique à toutes les autres informations. État du 14/09/2018.</p>
                       
                        <p class="ChampApplication"> Qu’entend-on par « cookies »? </p>
                        <p> Afin de vous offrir plus de fonctions, rendre la navigation plus confortable et optimiser nos offres, nous utilisons des « cookies ». Les cookies sont de petits fichiers qui sont enregistrés sur votre appareil à l’aide de votre navigateur Internet. Ils sont utilisés par un site internet pour envoyer des informations sur votre navigateur et permettre à ce navigateur de renvoyer des informations au site d’origine (par exemple un identifiant de session ou le choix d’une langue).</p>
                       
                        <p class="ChampApplication"> Catégories de cookies </p> 
                        <p> Nous utilisons des cookies à différentes fins et avec différentes fonctions. Nous déterminons à cet égard si le cookie est indispensable sur le plan technique (nécessité technique), combien de temps il doit être conservé et utilisé (durée de conservation), s’il a été déposé par notre site Internet lui-même ou par des tiers, et dans ce dernier cas, par quel fournisseur il a été déposé (fournisseur de cookie). </p>                       
                        <p> Vous êtes informé que, lors de vos visites sur notre service en ligne, des cookies peuvent être installés sur votre équipement terminal. </p><br>
                       
                        <p class="SousPartie"> Nécessité technique </p>
                        <p> Cookies indispensables sur le plan technique : nous utilisons certains cookies, car ils sont indispensables au bon fonctionnement de notre site Internet et de ses fonctionnalités. Ces cookies sont automatiquement déposés sur votre appareil lorsque vous accédez à notre site Internet ou à une fonction déterminée, à moins que vous n’ayez configuré votre navigateur pour qu’il refuse l’utilisation de cookies. </p>
                        <p> Cookies non indispensables sur le plan technique : en revanche, certains cookies non indispensables sont déposés sur votre appareil en vue d’améliorer, par exemple, le confort de navigation et les performances de notre site Internet ou d’enregistrer certains paramètres que vous avez sélectionnés. Nous utilisons également des cookies non indispensables sur le plan technique pour déterminer la fréquence de consultation de certaines rubriques de notre site Internet afin de pouvoir adapter notre site de manière plus ciblée à vos besoins. Nous n’enregistrons pas les cookies non indispensables sur le plan technique, à moins que vous n’ayez confirmé, en cliquant sur la case correspondante, que vous avez pris connaissance de notre notification relative aux cookies et que vous poursuiviez votre navigation sur notre site Internet.  </p> <br>
                        
                        <p class="SousPartie"> Durée de conservation </p>
                        <p> Cookies de session : la plupart des cookies ne sont nécessaires que pendant la durée de votre visite sur notre site Internet ou de la session en cours et ils sont effacés ou deviennent invalides dès que vous quittez notre site Internet ou que la session en cours expire. Ces cookies, appelés « cookies de session », sont utilisés, par exemple, pour conserver certaines informations, comme vos identifiants de connexion à notre site pendant votre session. </p>
                        <p>Cookies permanents : les cookies ne sont conservés sur une période plus longue que dans des cas isolés, par exemple, pour permettre de vous reconnaître en cas de visite ultérieure à notre site Internet et de rétablir les paramétrages précédemment sélectionnés. Ces cookies vous permettent d’accéder plus rapidement et plus facilement à notre site Internet ou vous évitent d’avoir à sélectionner à nouveau certaines options, comme la langue. Les cookies permanents sont automatiquement effacés après un délai prédéfini lorsque vous visitez la page ou le domaine à partir duquel le cookie a été déposé sur votre appareil ou jusqu’à ce que vous les supprimiez à l’aide des fonctionnalités de votre navigateur.</p>
                        <p>Cookies de communication : ces cookies sont utilisés pour la communication interne entre différents serveurs Porsche. Ils sont déposés sur votre appareil au début d’une interaction utilisateur et effacés à la fin. Les cookies de communication reçoivent un numéro d’identification unique au cours de l’interaction, qui ne permet toutefois de tirer aucune conclusion sur le client ou l’utilisateur concerné. </p><br>
                        
                        <p class="SousPartie"> Fournisseur de cookies </p>
                        <p>Cookies de tiers : les « cookies de tiers » sont déposés et utilisés par d’autres organismes ou sites Internet, par exemple par des fournisseurs d’outils d’analyse Internet. Pour plus d’informations sur les outils d’analyse Internet et de mesure d’audience, veuillez consulter la suite de la présente information sur notre politique en matière de cookies. Les fournisseurs tiers peuvent également utiliser des cookies pour afficher de la publicité ou intégrer des contenus issus de réseaux sociaux, comme des plugins sociaux.  </p>
                    </div> 
            </div>
    
        </div>
    </body>
</html>