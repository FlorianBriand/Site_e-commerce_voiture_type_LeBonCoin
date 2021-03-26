<?php 
	 
	function connect() {
		$serveur = "localhost";
		$login = "root";
		$mdp = "";
		$bdd = "projetdb";
		return mysqli_connect($serveur, $login, $mdp, $bdd);
	}
	
	function executer($conn, $requete) {
		return mysqli_query($conn, $requete);
	}
	
	function nbLignes($res) {
		return mysqli_num_rows($res);
	}
	
	function assoc($res) {
		return mysqli_fetch_assoc($res);
	}
	
	function deconnect($conn) {
		mysqli_close($conn);
	}

	function affiche_tableau_filtres($nom_tableau,$connexion){
		$affmarque="SELECT nom FROM ".$nom_tableau;
        $resultat1 = mysqli_query($connexion,$affmarque);
        while($marque = mysqli_fetch_array($resultat1)){
			echo"<div class='check'>";
			echo "<input onclick='mareponse()' id=".$marque["nom"]."  name=".$nom_tableau."  type='checkbox' value=".$marque["nom"]." /> ".$marque["nom"];
			echo"</div>";
			}
		}

	function affiche_tableau_voiture($connexion){
		$affmarque="SELECT picture FROM voiture";
		$resultat1 = mysqli_query($connexion,$affmarque);
        while($marque = mysqli_fetch_array($resultat1)){
			echo "<img src=".$marque['picture'].">.<br>";
        }
	}
	


?>