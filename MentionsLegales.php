<!DOCTYPE html> 
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Accueil</title>
        <link rel="stylesheet" href="MentionsLegales.css" />
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
                <div class="nom"> Mentions légales</p> </div>
                    <div id="principal_gauche">
                        <p class="Fournisseur"> Fournisseur</p>
                        <p> Dr. Ing. h.c. F. C&C AG </p>
                        <p> Au capital social de 10.500.000 Euros, </p>
                        <p> Classy Company </p>
                        <p> 75000 Paris </p>
                        <p> France </p>
                        <p> Tél. : (+33) 1 22 33 44 55 </p>
                        <p> Email : info@ClassyCompany.fr </p> <br>

                        <p></p>Societé représentée par le Comité directeur :
                        <p> Erwan BOUVART, Président </p>
                        <p> Florian BRIANT, Président </p>
                        <p> Raphael COUTINHO, Président </p>
                        <p> Julien MARCILLAUD, Président </p>
                        <p>n° RCS 75789 </p>
                        <p>n° TVA intracom. DE 147 799 625  </p>
                        <p>Classy Company France SAS </p>
                        <p>au capital de 3 048 980 Euros, </p>
                        <p>immatriculée au RCS de Nanterre sous le numéro B 345 </p>
                        <p>567 504, </p>
                        <p>siège au 25/29, quai Aulagnier </p>
                        <p>CS 30038 – 95000 Cergy-Pontoise cedex </p>
                        <p>Tél. : (+33) 1 99 88 77 </p>
                        <p>Email : crm@ClassyCompany.fr </p>
                        <p>N° de TVA intracom : FR 38 423 598 504 </p>
                        <p>Vous pouvez nous contacter par e-mail pour toutes demandes ou remarques d'ordre général. </p>





                    </div>

                
            </div>

















               
        </div>
    </body>
</html>