
function affEnr(x){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      //indique l'emplacement pour recuperer la requete AJAX
      document.getElementById("formLoaded").innerHTML = xhttp.responseText;
    }
    };
  xhttp.open('GET', "updateFilm.php?idFilm="+x, true);
  xhttp.send();
};
