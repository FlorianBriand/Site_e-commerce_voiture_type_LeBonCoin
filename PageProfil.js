//PageProfil.js
function historique() {
  var vide = document.getElementById("vide");
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      var reponse = xhr.responseText;
      vide.innerHTML = reponse;
    }
  };
  xhr.open("POST", "Historique.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send();
}

function supprutilisateur(idutilisateur) {
  var vide = document.getElementById(idutilisateur);
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      var reponse = xhr.responseText;
      vide.innerHTML = reponse;
    }
  };
  xhr.open("POST", "SupprUtilisateur.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send("&idutilisateur=" + idutilisateur);
}

function admin() {
  var vide = document.getElementById("vide");
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      var reponse = xhr.responseText;
      vide.innerHTML = reponse;
    }
  };
  xhr.open("POST", "ProfilAdmin.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send();
}

//Affichage des articles AJAX
function profil() {
  var vide = document.getElementById("vide");
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      var reponse = xhr.responseText;
      vide.innerHTML = reponse;
    }
  };
  xhr.open("POST", "ProfilAjax.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send();
}

function modif(nom) {
  if (nom == "1") {
    div = "nom";
  }
  if (nom == "2") {
    div = "prenom";
  }
  if (nom == "3") {
    div = "mail";
  }
  if (nom == "4") {
    div = "mdp";
  }
  var type = div + "1";
  document.getElementById(div).innerHTML =
    "<input type='text' id=" +
    type +
    " ><br><input type='button' onclick='envoi_newmdp(" +
    nom +
    ")' value='Valider'>";
}

function envoi_newmdp(nom) {
  if (nom == "1") {
    div = "nom";
  }
  if (nom == "2") {
    div = "prenom";
  }
  if (nom == "3") {
    div = "mail";
  }
  if (nom == "4") {
    div = "mdp";
  }
  var type = div + "1";
  var modif = document.getElementById(type).value;
  var vide = document.getElementById(div);
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      var reponse = xhr.responseText;
      vide.innerHTML = reponse;
    }
  };
  xhr.open("POST", "Modifmdp.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send("&modif=" + modif + "&nom=" + div);
}

function voitures() {
  var vide = document.getElementById("vide");
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      var reponse = xhr.responseText;
      vide.innerHTML = reponse;
    }
  };
  xhr.open("POST", "ProfilVoitures.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send();
}

function messages() {
  var vide = document.getElementById("vide");
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      var reponse = xhr.responseText;
      vide.innerHTML = reponse;
    }
  };
  xhr.open("POST", "ProfilMessagerie.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send();
}

function consultermessage(idmess) {
  var vide = document.getElementById("vide");
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      var reponse = xhr.responseText;
      vide.innerHTML = reponse;
    }
  };
  xhr.open("POST", "ProfilMessagerie.php?action=consulter", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send("&idmess=" + idmess);
}

function supprimermessage(idmess, sur) {
  var vide = document.getElementById("vide");
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      var reponse = xhr.responseText;
      vide.innerHTML = reponse;
    }
  };
  xhr.open("POST", "ProfilMessagerie.php?action=supprimer", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send("&idmess=" + idmess + "&sur=" + sur);
}

function nouveaumessage() {
  var vide = document.getElementById("vide");
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      var reponse = xhr.responseText;
      vide.innerHTML = reponse;
    }
  };
  xhr.open("POST", "ProfilMessagerie.php?action=nouveau", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send();
}

function SAVp() {
  var vide = document.getElementById("vide");
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      var reponse = xhr.responseText;
      vide.innerHTML = reponse;
    }
  };
  xhr.open("POST", "ProfilMessagerie.php?action=SAVp", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send();
}

function SAVr() {
  var vide = document.getElementById("vide");
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      var reponse = xhr.responseText;
      vide.innerHTML = reponse;
    }
  };
  xhr.open("POST", "ProfilMessagerie.php?action=SAVr", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send();
}

function SAVv() {
  var vide = document.getElementById("vide");
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      var reponse = xhr.responseText;
      vide.innerHTML = reponse;
    }
  };
  xhr.open("POST", "ProfilMessagerie.php?action=SAVv", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send();
}

function SAVa() {
  var vide = document.getElementById("vide");
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      var reponse = xhr.responseText;
      vide.innerHTML = reponse;
    }
  };
  xhr.open("POST", "ProfilMessagerie.php?action=SAVa", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send();
}

function envoiemessage() {
  var to = document.getElementById("to").value;
  var titre = document.getElementById("titre").value;
  var message = document.getElementById("message").value;
  var vide = document.getElementById("vide");
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      var reponse = xhr.responseText;
      vide.innerHTML = reponse;
    }
  };
  xhr.open("POST", "envoi_message.php?action=nouveaump", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send("&to=" + to + "&titre=" + titre + "&message=" + message);
}

function repondremessage(idex) {
  var vide = document.getElementById("vide");
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      var reponse = xhr.responseText;
      vide.innerHTML = reponse;
    }
  };
  xhr.open("POST", "ProfilMessagerie.php?action=repondre", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send("&idex=" + idex);
}

function repondmessage(dest) {
  var titre = document.getElementById("titre").value;
  var message = document.getElementById("message").value;
  var vide = document.getElementById("vide");
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      var reponse = xhr.responseText;
      vide.innerHTML = reponse;
    }
  };
  xhr.open("POST", "envoi_message.php?action=repondremp", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send("&titre=" + titre + "&message=" + message + "&dest=" + dest);
}

function SAVmessage(dest) {
  for (let i = 1; i < 5; i++) {
    var titre = document.getElementById("problème").value;
    var message = document.getElementById("message").value;
    var vide = document.getElementById("vide");
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
      if (xhr.readyState == 4 && xhr.status == 200) {
        var reponse = xhr.responseText;
        vide.innerHTML = reponse;
      }
    };
    dest = i;
    xhr.open("POST", "envoi_message.php?action=repondremp", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("&titre=" + titre + "&message=" + message + "&dest=" + dest);
  }
}

function supprVoiture(idvoiture) {
  var vide = document.getElementById(idvoiture);
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      var reponse = xhr.responseText;
      vide.innerHTML = reponse;
    }
  };
  xhr.open("POST", "SupprimerVoiture.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send("&idvoiture=" + idvoiture);
}
