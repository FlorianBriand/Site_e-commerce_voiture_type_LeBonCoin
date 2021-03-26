<!DOCTYPE html>
<html> 
    <head>
        <meta charset="UTF-8" />
        <script type="text/javascript" src="PageArticle.js"> </script>
        <link rel="stylesheet" type="text/css" href="AjoutAchat.css">
        <link rel="stylesheet" href="commun.css">
       
    </head>

    <body>
    <?php
    //connection
    session_start();
    include "fonctionsBDD.php";
    $connexion = connect();
    $requete="SELECT prix FROM voiture";
    $resultat = mysqli_query($connexion,$requete);
    $prix = mysqli_fetch_array($resultat);
    ?>

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
    <form>
        <div id= "Texte">Paiement par carte banquaire</div>
        <div id='Principal'>
            <?php echo "<div id='Montant'>Le montant à payer est de : ".$prix["prix"]."€</p><br>"; ?></div>
            <div id="CB"><img id="logo" src="img/cb_visa_mastercard_logo.png" /></a></div>
            <div id='Numero'><input placeholder="Numero carte de la carte" require type="number" minlength="16"/> </div><br/>

            <div id ='DateE'>Date d'expiration : <br><input placeholder="mm" require type="number" maxlength="2"/>/<input placeholder="aa" require type="number" maxlength="2"/><div><br/>
            <input placeholder="CVC" require type="number" length="3"/> <br/>
            <div id='Titulaire'><input placeholder="Titulaire de la carte" require type="text"/></div><br/>
            <div id='Achat'>
                <a href="Paiement.php">Achat</a>
            </div>
        </div>
    </form>
    </body>

