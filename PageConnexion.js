function transfert() {
  var vide = document.getElementById("vide");
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      var reponse = xhr.responseText;
      vide.innerHTML = reponse;
    }
  };
  xhr.open("POST", "PageAjax2.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send(remplissage());
}

function remplissage() {
  var retour = "";
  retour = retour + "&mail=" + document.getElementById("Email").value;
  retour = retour + "&mdp=" + document.getElementById("Password").value;
  return retour;
}
