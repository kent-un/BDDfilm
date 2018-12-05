
function affEnr(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("formModif").innerHTML = xhttp.responseText;
    }
    };
  xhttp.open('GET', 'app.php?table=' + str +'', true);
  xhttp.send();
};
