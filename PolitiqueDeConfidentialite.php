<!DOCTYPE html>
<html>
    <head> 
        <meta charset="UTF-8" />
        <title>Accueil</title>
        <link rel="stylesheet" href="PolitiqueDeConfidentialite.css" />
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
                <div class="nom"> Politique de Confidentialité Site Internet Classy Company (C&C.com/france)</p> </div>
                    <div id="principal_gauche">
                        <p >Nous, la société Classy Company France SAS (ci-après « nous » ou « C&C France »), nous réjouissons de votre visite sur notre site Internet ainsi que de l’intérêt que vous portez à nos produits et services. Le respect de votre vie privée est pour nous une préoccupation majeure. Nous prenons très au sérieux la protection de vos données à caractère personnel et leur traitement confidentiel. Nous traitons vos données à caractère personnel exclusivement dans le cadre des dispositions légales applicable en matière de protection des données à caractère personnel de l’Union européenne, notamment le règlement général sur la protection des données (ci-après dénommé « RGPD »). </p><br>
                        <p> La présente déclaration de protection des données vise à vous informer des traitements réalisés quant à vos données à caractère personnel et de vos droits en tant que personne concernée. Pour plus d’informations sur d’autres services et les offres d’autres sociétés du groupe C&C, veuillez-vous référer aux déclarations de protection des données de ces services ou de ces sociétés. </p><br>
                        <p>Si nous menons des actions dans les médias sociaux externes en lien avec cette politique de confidentialité, les conditions suivantes s'appliquent uniquement dans la mesure où les processus de traitement des données dans le cadre de ces sites de médias sociaux relèvent effectivement de notre domaine de responsabilité et où aucune référence plus spécifique et donc principalement applicable à la protection des données n'est mise à disposition dans le cadre de ces sites de médias sociaux.</p><br>
                        
                        <p class="ResponsableTraitement"> 1. Responsable du traitement des données et délégué à la protection des données; coordonnées </p>
                        
                        <p>Le responsable du traitement des données au sens du droit applicable à la protection des données à caractère personnel est la société :</p>
                        <p> Classy Company France SAS </p>
                        <p> 25-29 quai Aulagnier </p>
                        <p> 95000 Cergy-Pontoise </p>
                        <p> France </p> <br>
                        <p> Pour toute question ou suggestion concernant la protection des données, n’hésitez pas à nous contacter ou à contacter notre délégué à la protection des données aux adresses suivantes : </p>
                        <p> France SAS </p>
                        <p>Responsable de la protection des données </p>
                        <p>25-29 quai Aulagnier </p>
                        <p>92600 Asnières-sur-Seine </p>
                        <p> Contact : rgpd@ClassyCompany.fr </p><br>

                        <p class="ResponsableTraitement"> 2. Objet de la protection des données </p>
                        <p> L’objet de la protection des données est de protéger les données à caractère personnel, c’est-à-dire toutes les informations concernant une personne physique identifiée ou identifiable. Il s’agit, par exemple, d’informations telles que le nom, l’adresse postale, l’adresse électronique ou le numéro de téléphone de la personne, mais aussi d’informations qui sont nécessairement enregistrées lors de l’utilisation de notre site Internet, comme l’heure de début et de fin de l’accès, l’étendue de l’utilisation ou encore l’adresse IP. </p> <br>
                        
                        <p class="ResponsableTraitement"> 3. Nature, étendue, finalités et base juridique du traitement automatisé des données </p>
                        <p> L’utilisation de notre site Internet est généralement possible sans inscription. Même si vous utilisez notre site Internet sans vous inscrire, des données à caractère personnel peuvent être traitées. </p>
                        <p> Nous ne mettons en œuvre des traitements de données que si au moins l’une des conditions suivantes est remplie :</p>
                        <p> - votre consentement aux opérations de traitement a été recueilli ;</p>
                        <p> - l’existence de notre intérêt légitime, ou de celui d’un tiers, qui justifie que nous mettions en œuvre le traitement de données à caractère personnel concerné ;</p>
                        <p> - l’exécution d’un contrat qui nous lie à vous nécessite que nous mettions en œuvre le traitement de données à caractère personnel concerné </p>
                        <p> - nous sommes tenus par des obligations légales et réglementaires qui nécessitent la mise en œuvre du traitement de données à caractère personnel concerné.</p>
                        <p> Vous trouverez ci-dessous la précision de la nature, de l’étendue, des finalités et de la base juridique du traitement de données effectué par notre site Internet.</p>
                       
                        <p class="SousPartie"> 3.1 Mise à disposition de notre site Internet </p>
                        <p> Lorsque votre appareil accède à notre site Internet, nous collectons automatiquement les données suivantes :</p>
                        <p>- Date et heure de l’accès,</p>
                        <p>- Durée de la visite,</p>
                        <p>- Nature de l’appareil,</p>
                        <p>- Système d’exploitation utilisé,</p>
                        <p>- Fonctions utilisées,</p>
                        <p>- Volume des données transmises,</p>
                        <p>- Nature de l’événement,</p>
                        <p>- Adresse IP,</p>
                        <p>- URL référente,</p>
                        <p>- Nom de domaine.</p> <br>
                        <p>Nous traitons ces données sur la base de l’article 6, paragraphe 1, point f) du RGPD afin de vous mettre à disposition notre site internet, assurer le fonctionnement technique de notre site, mais aussi détecter et éliminer les dysfonctionnements, effectuer des mesures d’audience et faciliter l’utilisation du site. L’intérêt légitime poursuivi est de garantir durablement la possibilité d’utilisation de notre site Internet et son bon fonctionnement technique. Lors de l’accès à notre site Internet, ces données sont collectées automatiquement. Sans cette collecte, vous ne pourriez pas utiliser nos services. Nous n’utilisons pas ces données dans le but de tirer des conclusions sur votre personne ou votre identité. </p>
                       
                        <p class="SousPartie"> 3.2 Cookies </p>
                        <p> Lorsque vous visitez notre site Internet, des petits fichiers, appelés « cookies », peuvent être enregistrés sur votre appareil afin de vous offrir plus de fonctions, rendre la navigation plus confortable et optimiser nos offres. Si vous ne souhaitez pas que des cookies soient utilisés, vous pouvez empêcher leur enregistrement sur votre appareil en configurant les paramètres de votre navigateur Internet en conséquence ou en utilisant des options de refus spéciales. Veuillez noter qu’un tel choix pourrait limiter la fonctionnalité du site et l’étendue des fonctions proposées. Pour plus d’informations sur la nature, l’étendue, les finalités, les bases légales et les possibilités d’opposition au traitement de données par le biais de cookies, veuillez-vous référer à notre Politique en matière de cookies. </p>
                        
                        <p class="SousPartie"> 3.3 Analyse des e-mails envoyés pour optimiser la qualité de service délivrée à nos clients et prospects </p>
                        <p> Lorsque nous envoyons des e-mails à nos clients et prospects, nous pouvons être amenés à y intégrer des technologies standards telles que le pixel (ou balise web) ou le lien hypertexte. Ces technologies nous permettent d’identifier et de quantifier les e-mails qui ont été envoyés et/ou rejetés et/ou ouverts. L’analyse des e-mails ouverts est ainsi notamment réalisée par des pixels (ou balises web). Si vous préférez ne pas être suivi(e) par des pixels (ou balises web), vous pouvez désactiver l’affichage des images dans votre logiciel de messagerie. Cependant, dans ce cas, l’e-mail ne s’affichera pas de manière complète.</p>
                        <p> En utilisant les liens hypertextes, nous pouvons analyser et identifier les liens insérés dans nos e-mails ayant fait l’objet de clics. Nous traçons les données résultant de ces clics pour nous aider à déterminer les centres d’intérêts de nos clients et prospects et mesurer la performance de nos campagnes de communication. Si vous cliquez sur l’un de ces liens, vous serez redirigé(e) vers un autre de nos serveurs avant d’arriver sur la page de destination de notre site internet. Nous utilisons ces informations pour personnaliser nos e-mails afin de vous proposer du contenu pertinent et adapté et ainsi éviter l’envoi d’e-mails inutiles. Si vous préférez ne pas être suivi(e) par des liens hypertextes, vous ne devez pas cliquer sur les liens textes et images cliquables insérés dans nos e-mails.</p>
                        <p> Le traitement de ces données est fondé sur notre intérêt légitime, conformément à l’article 6 (1) (f) du Règlement Général sur la Protection des Données (RGPD) et vise à optimiser la qualité de service délivrée à nos clients et prospects.</p>
                    </div> 
            </div>
    
        </div>
    </body>
</html>