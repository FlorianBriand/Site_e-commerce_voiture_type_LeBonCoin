//deconnexion
function deconnexion() {
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "Deco_ajax.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send();
}

function achat() {
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "Paiement.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send();
}

function envoi_message(utilisateur) {
  var objet = document.getElementById("objet").value;
  var text = document.getElementById("corp").value;
  var vide = document.getElementById("partie_message");
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      var reponse = xhr.responseText;
      vide.innerHTML = reponse;
    }
  };
  xhr.open("POST", "envoi_message.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send("&text=" + text + "&objet=" + objet + "&utilisateur=" + utilisateur);
}

function contacter(idutilisateur, idvoiture) {
  var vide = document.getElementById("partie_message");
  vide.setAttribute("class", "div_message");
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      var reponse = xhr.responseText;
      vide.innerHTML = reponse;
    }
  };
  xhr.open("POST", "message_ajax.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send("&utilisateur=" + idutilisateur + "&idvoiture=" + idvoiture);
  console.log(idvoiture);
}

//Affichage des articles AJAX
function mareponse() {
  var vide = document.getElementById("article");
  /* 
	XMLHttpRequest : objet qui permet à JavaScript de communiquer avec le serveur, au moyen de fonctions d'ouverture de page ("open"), d'envoi de données ("send") et de récupération de la réponse ("responseText" ou "responseXML")
	*/
  var xhr = new XMLHttpRequest();
  /*
		onreadystatechange : stocke une fonction anonyme qui va s'appeler automatiquement en cas de réponse du serveur
	*/
  xhr.onreadystatechange = function () {
    /*
			- readyState : où en est la requête (0 : non initialisé, jusqu'à 4 : envoyé, terminé)
			- status : statut de la réponse (404 : le fameux code d'erreur, 200 : OK, réponse prête)
		*/
    if (xhr.readyState == 4 && xhr.status == 200) {
      /*
				Quand la requête s'est bien exécutée et que la réponse a fini d'être générée, on peut la récupérer pour l'envoyer sur la page d'origine
				- responseText : réponse au format texte ou HTML
				- responseXML : réponse au format XML 
				
			*/
      var reponse = xhr.responseText;
      vide.innerHTML = reponse;
    }
  };
  /*
		open : envoie une requête au serveur en ouvrant une page PHP "en invisible" et en exécutant son script (en général, une génération de code HTML)
		- Premier paramètre : la méthode d'envoi (GET ou POST) qui crée et alimente le tableau associatif correspondant ($_GET ou $_POST)
		- Deuxième paramètre : la page PHP à ouvrir
		- Troisième paramètre : mode asynchrone (true) ou pas (false). Asynchrone : on n'attend pas que le serveur ait fini de répondre pour afficher quelque chose
	*/
  xhr.open("POST", "PageAjax.php", true);
  /*
	setRequestHeader : on change l'entête de la page pour spécifier le type de données qu'on envoie
	*/
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  /*
	send : permet d'envoyer des données au serveur, et ici, d'alimenter le tableau $_POST avec un ou plusieurs couples "clé" => valeur
    */

  xhr.send(test());
}

function modifdata(type) {
  var checkboxes = document.getElementsByName(type);
  console.log(checkboxes);
  var selected = [];
  var data = "";
  var j = 0;
  for (var i = 0; i < checkboxes.length; i++) {
    if (checkboxes[i].checked) {
      selected.push(checkboxes[i].value);
      data = data + "&" + type + j + "=" + checkboxes[i].value;
      j = j + 1;
    }
  }

  data = data + "&taille_tab_" + type + "=" + selected.length;
  return data;
}

function test() {
  var data = "";
  data = data + modifdata("marque");
  data = data + modifdata("couleur");
  data = data + modifdata("energie");
  data = data + "&prixmin=" + document.getElementById("prixmin").value;
  data = data + "&prixmax=" + document.getElementById("prixmax").value;

  data = data + "&anneemin=" + document.getElementById("anneemin").value;
  data = data + "&anneemax=" + document.getElementById("anneemax").value;
  data = data + "&kmmin=" + document.getElementById("kmmin").value;
  data = data + "&kmmax=" + document.getElementById("kmmax").value;
  data = data + "&ordre=" + document.getElementById("ordre").value;
  return data;
}

//Variable pour stocker les noms des filtres

var $marque = "";
var $couleur = "";
var $energie = "";

function enregistrement_filtres() {
  $marque = document.getElementById("partie_marque").innerHTML;
  document.getElementById("partie_marque").innerHTML = "";
  $couleur = document.getElementById("partie_couleur").innerHTML;
  document.getElementById("partie_couleur").innerHTML = "";
  $energie = document.getElementById("partie_energie").innerHTML;
  document.getElementById("partie_energie").innerHTML = "";
}
function part_marque() {
  if (document.getElementById("partie_marque").innerHTML == "") {
    document.getElementById("partie_marque").innerHTML = $marque;
  } else {
    document.getElementById("partie_marque").innerHTML = "";
  }
}
function part_couleur() {
  if (document.getElementById("partie_couleur").innerHTML == "") {
    document.getElementById("partie_couleur").innerHTML = $couleur;
  } else {
    document.getElementById("partie_couleur").innerHTML = "";
  }
}
function part_enegie() {
  if (document.getElementById("partie_energie").innerHTML == "") {
    document.getElementById("partie_energie").innerHTML = $energie;
  } else {
    document.getElementById("partie_energie").innerHTML = "";
  }
}
